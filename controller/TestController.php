<?php

class TestController
{
public function actionindex(){

    include "./view/Test.html";
}
    public function actionview(){

        echo 'Its, View';
    }
}