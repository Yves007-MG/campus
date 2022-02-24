<?php


namespace App\EventListener;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;

class LoginListener
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    public function __construct(EntityManagerInterface $entityManager, UserRepository $userRepository)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }

    public function onSecurityAuthenticationSuccess(AuthenticationEvent $event){
        $user = $event->getAuthenticationToken()->getUser();
        $user->setLastLogin(new \DateTime());
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }


}