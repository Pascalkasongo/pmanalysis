<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatRepository::class)]
class Etat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_etat = null;

    #[ORM\Column(length: 255)]
    private ?string $type_etat = null;

    #[ORM\OneToMany(mappedBy: 'etat', targetEntity: Tache::class)]
    private Collection $taches;

    public function __construct()
    {
        $this->taches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtat(): ?string
    {
        return $this->nom_etat;
    }

    public function setNomEtat(string $nom_etat): static
    {
        $this->nom_etat = $nom_etat;

        return $this;
    }

    public function getTypeEtat(): ?string
    {
        return $this->type_etat;
    }

    public function setTypeEtat(string $type_etat): static
    {
        $this->type_etat = $type_etat;

        return $this;
    }

    /**
     * @return Collection<int, Tache>
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTach(Tache $tach): static
    {
        if (!$this->taches->contains($tach)) {
            $this->taches->add($tach);
            $tach->setEtat($this);
        }

        return $this;
    }

    public function removeTach(Tache $tach): static
    {
        if ($this->taches->removeElement($tach)) {
            // set the owning side to null (unless already changed)
            if ($tach->getEtat() === $this) {
                $tach->setEtat(null);
            }
        }

        return $this;
    }
}
