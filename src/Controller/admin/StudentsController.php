<?php


namespace App\Controller\admin;


use App\Controller\BaseController;
use App\DataTable\StudentsDataTableType;
use App\Entity\Students;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
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

        $table->handleRequest($request);

        if ($table->isCallBack()){

            return $table->getResponse();
        }
        return $this->render('backOffice/students/list.html.twig',[
            'datatable' =>$table,
        ]);
    }
}