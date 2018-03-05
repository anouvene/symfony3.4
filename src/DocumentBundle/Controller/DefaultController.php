<?php

namespace DocumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $age = $request->get('age');

        return $this->render(
            'DocumentBundle:Default:index.html.twig',
            ['nom'=>$nom, 'prenom'=>$prenom, 'age'=>$age]
        );
    }

}
