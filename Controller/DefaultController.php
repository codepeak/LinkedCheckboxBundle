<?php

namespace Codepeak\LinkedCheckboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CodepeakLinkedCheckboxBundle:Default:index.html.twig', array('name' => $name));
    }
}
