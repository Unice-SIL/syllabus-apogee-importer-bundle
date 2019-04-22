<?php

namespace UniceSIL\SyllabusApogeeImporterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package UniceSIL\SyllabusApogeeImporterBundle\Controller
 */
class TestController extends Controller
{
    /**
     * @Route("/test", name="test")
     */
    public function testAction(){
        $courses = $this->get('unicesil.syllabus_apogee_importer.course')->execute();
        dump($courses);
        return new Response("");
    }
}