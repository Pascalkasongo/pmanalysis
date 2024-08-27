<?php

namespace App\Security;

use App\Entity\Employe;
use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface, PasswordUpgraderInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        // Try to load the user from the Employe entity
        $user = $this->entityManager->getRepository(Employe::class)->findOneBy(['email' => $identifier]);

        // If not found, try to load the user from the Client entity
        if (!$user) {
            $user = $this->entityManager->getRepository(Client::class)->findOneBy(['email' => $identifier]);
        }

        if (!$user) {
            throw new UserNotFoundException(sprintf('User with email "%s" not found.', $identifier));
        }

        return $user;
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        
        if (!$user instanceof Employe && !$user instanceof Client) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }

        return $this->loadUserByIdentifier($user->getUserIdentifier());
    }

    public function supportsClass(string $class): bool
    {
        return $class === Employe::class || $class === Client::class;
    }

    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if ($user instanceof Employe || $user instanceof Client) {
            $user->setPassword($newHashedPassword);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        } else {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }
    }
}
