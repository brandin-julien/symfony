<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BonusController extends Controller
{
    public function TsunderesAction()
    {
        return $this->render('LeaderboardBundle:Bonus:tsunderes.html.twig');
    }

    public function YaoiAction()
    {
        return $this->render('LeaderboardBundle:Bonus:yaoi.html.twig');
    }
}
