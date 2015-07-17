<?php
namespace Spice\Modules\Frontend\Controllers;

use \Spice\Models\Services\Services as Services;
use \Spice\Models\Repositories\Repository\CursoRepository;
//use \Spice\Models\Entities\Curso;

class IndexController extends ControllerBase
{
	public function indexAction()
    {
        /*try {
        	$this->view->users = Services::getService('User')->getLast();
            
        } catch (\Exception $e) {
        	$this->flash->error($e->getMessage());
        }*/

        try {
        	$this->entity = "\Spice\Models\Entities\Curso";	
        	$cursoRepository = new CursoRepository(new $this->entity());
        	$cursos = $cursoRepository->findOneBy(array(
                    //"nome" => "Pedagogia",
                    "modalidade" => "Distância"
                ), array('nome', 'modalidade'));
                
                //está funcionando
//                $cursos = $cursoRepository->findBy(array(
//                    "nome = 'Pedagogia' and modalidade = 'Distância'"
//                ), array('nome', 'modalidade'), 5, 50);
                $curso = $cursoRepository->findByNome('Nome', 'Pedagogia');
                var_dump($curso);
        	//var_dump($cursos);
                die();
        	$this->view->cursos = $cursos;
        	
        } catch (Exception $e) {
        	$this->flash->error($e->getMessage());
        }

    }	
}

