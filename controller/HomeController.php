<?php

class HomeController
{

    public $x = 'HomeController';

    public function actionindex(){
        include "./view/index.html";
    }
}