<?php

namespace App\Entity;

use App\Repository\TacheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TacheRepository::class)]
class Tache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_tache = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_from = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_up = null;

    #[ORM\Column]
    private ?int $nombre_heure = null;

    #[ORM\Column]
    private ?int $cout_horaire = null;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    private ?Projet $projet = null;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    private ?Priorite $priorite = null;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    private ?Etat $etat = null;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    private ?Equipe $equipe = null;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    private ?Ressource $ressource = null;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    private ?Sprint $sprint = null;

    #[ORM\Column(nullable: true)]
    private ?bool $is_notified = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTache(): ?string
    {
        return $this->nom_tache;
    }

    public function setNomTache(string $nom_tache): static
    {
        $this->nom_tache = $nom_tache;

        return $this;
    }

    public function getDateFrom(): ?\DateTimeInterface
    {
        return $this->date_from;
    }

    public function setDateFrom(\DateTimeInterface $date_from): static
    {
        $this->date_from = $date_from;

        return $this;
    }

    public function getDateUp(): ?\DateTimeInterface
    {
        return $this->date_up;
    }

    public function setDateUp(\DateTimeInterface $date_up): static
    {
        $this->date_up = $date_up;

        return $this;
    }

    public function getNombreHeure(): ?int
    {
        return $this->nombre_heure;
    }

    public function setNombreHeure(int $nombre_heure): static
    {
        $this->nombre_heure = $nombre_heure;

        return $this;
    }

    public function getCoutHoraire(): ?int
    {
        return $this->cout_horaire;
    }

    public function setCoutHoraire(int $cout_horaire): static
    {
        $this->cout_horaire = $cout_horaire;

        return $this;
    }

    public function getProjet(): ?Projet
    {
        return $this->projet;
    }

    public function setProjet(?Projet $projet): static
    {
        $this->projet = $projet;

        return $this;
    }

    public function getPriorite(): ?Priorite
    {
        return $this->priorite;
    }

    public function setPriorite(?Priorite $priorite): static
    {
        $this->priorite = $priorite;

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->etat;
    }

    public function setEtat(?Etat $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): static
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getRessource(): ?Ressource
    {
        return $this->ressource;
    }

    public function setRessource(?Ressource $ressource): static
    {
        $this->ressource = $ressource;

        return $this;
    }

    public function getSprint(): ?Sprint
    {
        return $this->sprint;
    }

    public function setSprint(?Sprint $sprint): static
    {
        $this->sprint = $sprint;

        return $this;
    }

    public function isIsNotified(): ?bool
    {
        return $this->is_notified;
    }

    public function setIsNotified(?bool $is_notified): static
    {
        $this->is_notified = $is_notified;

        return $this;
    }
}
