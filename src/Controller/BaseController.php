<?php


namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Omines\DataTablesBundle\DataTableFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class BaseController extends AbstractController
{

    /**
     * @var SessionInterface
     */
    private SessionInterface $session;
    /**
     * @var UserPasswordHasherInterface
     */
    private UserPasswordHasherInterface $hasher;
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $manager;
    /**
     * @var DataTableFactory
     */
    private DataTableFactory $dataTableFactory;


    public function __construct(
        EntityManagerInterface      $manager,
        UserPasswordHasherInterface $hasher,
        SessionInterface            $session
//        DataTableFactory $dataTableFactory
    )
    {
        $this->session          = $session;
        $this->hasher           = $hasher;
        $this->manager          = $manager;

//        $this->dataTableFactory = $dataTableFactory;
    }


    public function getRepository($entity): EntityRepository
    {
        return $this->getRepository($entity);
    }

    /**
     * @param $dataTableType
     * @param $options
     * @return DataTable
     */
    protected function createDataTable($dataTableType, array $options = []): DataTable
    {
        return $this->dataTableFactory->createFromType($dataTableType, $options);
    }

}