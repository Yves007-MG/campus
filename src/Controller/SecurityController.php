<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\User;
use App\Services\TraitementData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    /**
     * @var TraitementData
     */
    private TraitementData $traitementData;
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;
    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;
    /**
     * @var UserPasswordHasherInterface
     */
    private UserPasswordHasherInterface $userPasswordHasher;

    public function __construct(TraitementData $traitementData,EntityManagerInterface $entityManager,UserRepository $userRepository,UserPasswordHasherInterface $userPasswordHasher)
    {

        $this->traitementData = $traitementData;
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->userPasswordHasher = $userPasswordHasher;
    }

    /**
     * @Route("/admin/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
//        $this->traitementData->add();
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }
        $admin = $this->userRepository->findByroleadmin();
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        if (count($admin) == 0) {
            $Utilisateur = new User();
            $Utilisateur->setRoles(array('ROLE_ADMIN'));
            $Utilisateur->setEmail('campus@admin.com');
            $Utilisateur->setUsername('Campus');
            $passwordcyrpter = $this->userPasswordHasher->hashPassword($Utilisateur, 'admin');
            $Utilisateur->setPassword($passwordcyrpter);
            $this->entityManager->persist($Utilisateur);
            $this->entityManager->flush();
        }


        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
