<?php


namespace App\DataTable;


use App\Controller\BaseController;
use App\Entity\Students;
use App\Entity\User;
use Doctrine\ORM\QueryBuilder;
use Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\DataTable;
use Omines\DataTablesBundle\DataTableTypeInterface;

class StudentsDataTableType extends BaseController implements  DataTableTypeInterface
{

    public function configure(DataTable $dataTable, array $options)
    {
        // TODO: Implement configure() method.

        $dataTable
            ->add('id', TextColumn::class,[
                'label'=> '#',
                'className'=>'id'
            ])
            ->add('name', TextColumn::class,[
                'label'=> 'Nom',

            ])
            ->add('username', TextColumn::class,[
                'label'=> 'Prénom',

            ])
         ->createAdapter(ORMAdapter::class,[
             'entity' => Students::class,
             'query'  => function(QueryBuilder $builder) {
             $builder
                 ->from(Students::class,'s')
                 ->select('s');
             }
        ]);
    }
}