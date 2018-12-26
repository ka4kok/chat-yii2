<?php

namespace app\controllers;

use yii\web\Controller;

class RoomController extends Controller {

    public $layout = 'basic';

    public function actionIndex()
    {
        return $this->render('index');
    }
}