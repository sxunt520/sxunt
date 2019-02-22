<?php

namespace frontend\controllers;

class AboutController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionGallery()
    {
        return $this->render('gallery');
    }
    
    public function actionDiary()
    {
        return $this->render('diary');
    }
    
    public function actionDiaryPage()
    {
        return $this->render('diary-page');
    }
    
    public function actionMessage()
    {
        return $this->render('message');
    }

    public function actionAboutme()
    {
        return $this->render('aboutme');
    }

}
