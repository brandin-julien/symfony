<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{

    public function crimzon_cloverAction($type)
    {

        $videoTab = [
            'typeZ' => "dFgb1vrF-F8",
            'type1' => "bmTHw9vL3Vs",
            'type3' => "foDTJceKio8",
        ];

        return $this->render(
            'LeaderboardBundle:Crimzon_clover:index.html.twig',
            array('type'  => $videoTab[$type])
        );
    }


    public function ikarugaAction($color)
    {
        if($color == "black"){
            $text = "white";
            $background = "black";
        }else{
            $text = "black";
            $background = "white";
        }

        return $this->render('LeaderboardBundle:Ikaruga:index.html.twig',
        array('color'  => $text,
            'background'=> $background
        )
        );
    }


}
