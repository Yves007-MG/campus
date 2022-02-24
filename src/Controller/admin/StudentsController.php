<?php


namespace App\Controller\admin;


use App\Controller\BaseController;
use App\DataTable\StudentsDataTableType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @Route("/students", name="students")
 */
class StudentsController extends BaseController
{
    /**
     * @Route("/list", name="_list")
     */
    public function list(Request $request)
    {

        $table = $this->createDataTable(StudentsDataTableType::class);
        dd($table);
        $table->handleRequest($request);

        if ($table->isCallBack()){

            return $table->getResponse();
        }
        return $this->render('backOffice/students/list.twig',[
            'datatable' =>$table,
        ]);
    }
}