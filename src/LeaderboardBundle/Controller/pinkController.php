<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pinkController extends Controller
{
    public function DeathsmilesAction()
    {
        return $this->render('LeaderboardBundle:Deathsmiles:index.html.twig');
    }

    public function MushihimesamaAction()
    {
        return $this->render('LeaderboardBundle:Mushihimesama:index.html.twig');
    }
}
