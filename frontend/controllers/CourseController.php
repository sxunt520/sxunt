<?php

namespace frontend\controllers;

use Yii;

class CourseController extends \yii\web\Controller
{
    //首页
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    //画廊
    public function actionGallery()
    {
        return $this->render('gallery');
    }
    
    //入门篇
    public function actionApproach()
    {
        return $this->render('approach');
    }
    //数码单反相机的魅力
    public function actionApproach01()
    {
        return $this->render('approach01');
    }
    //了解相机各部分
    public function actionApproach02()
    {
        return $this->render('approach02');
    }
    //拍摄之前的准备工作
    public function actionApproach03()
    {
        return $this->render('approach03');
    }
    //首先来尝试进行拍摄
    public function actionApproach04()
    {
        return $this->render('approach04');
    }
    //拍摄图像的回放和删除
    public function actionApproach05()
    {
        return $this->render('approach05');
    }
    //相机的持机方法
    public function actionApproach06()
    {
        return $this->render('approach06');
    }
    //EOS相机统一的用户界面
    public function actionApproach07()
    {
        return $this->render('approach07');
    }
    
    public function actionBeginner(){return $this->render('beginner');}
    public function actionBeginner01(){return $this->render('beginner01');}
    public function actionBeginner02(){return $this->render('beginner02');}
    public function actionBeginner03(){return $this->render('beginner03');}
    public function actionBeginner04(){return $this->render('beginner04');}
    public function actionBeginner05(){return $this->render('beginner05');}
    public function actionBeginner06(){return $this->render('beginner06');}
    public function actionBeginner07(){return $this->render('beginner07');}
    public function actionBeginner08(){return $this->render('beginner08');}
    public function actionBeginner09(){return $this->render('beginner09');}
    public function actionBeginner10(){return $this->render('beginner10');}
    public function actionBeginner11(){return $this->render('beginner11');}
    public function actionBeginner12(){return $this->render('beginner12');}
    public function actionBeginner13(){return $this->render('beginner13');}
    public function actionBeginner14(){return $this->render('beginner14');}
    public function actionBeginner15(){return $this->render('beginner15');}
    
    //中级篇
    public function actionIntermediate(){return $this->render('intermediate');}
    public function actionIntermediate01(){return $this->render('intermediate01');}
    public function actionIntermediate02(){return $this->render('intermediate02');}
    public function actionIntermediate03(){return $this->render('intermediate03');}
    public function actionIntermediate04(){return $this->render('intermediate04');}
    public function actionIntermediate05(){return $this->render('intermediate05');}
    public function actionIntermediate06(){return $this->render('intermediate06');}
    public function actionIntermediate07(){return $this->render('intermediate07');}
    public function actionIntermediate08(){return $this->render('intermediate08');}
    public function actionIntermediate09(){return $this->render('intermediate09');}
    public function actionIntermediate10(){return $this->render('intermediate10');}
    public function actionIntermediate11(){return $this->render('intermediate11');}
    public function actionIntermediate12(){return $this->render('intermediate12');}
    public function actionIntermediate13(){return $this->render('intermediate13');}
    public function actionIntermediate14(){return $this->render('intermediate14');}
    public function actionIntermediate15(){return $this->render('intermediate15');}
    public function actionIntermediate16(){return $this->render('intermediate16');}
    public function actionIntermediate17(){return $this->render('intermediate17');}
    public function actionIntermediate18(){return $this->render('intermediate18');}
    
    //镜头运用谝
    public function actionLens(){return $this->render('lens');}
    public function actionLens01(){return $this->render('lens01');}
    public function actionLens02(){return $this->render('lens02');}
    public function actionLens03(){return $this->render('lens03');}
    public function actionLens04(){return $this->render('lens04');}
    public function actionLens05(){return $this->render('lens05');}
    public function actionLens06(){return $this->render('lens06');}
    public function actionLens07(){return $this->render('lens07');}
    public function actionLens08(){return $this->render('lens08');}
    public function actionLens09(){return $this->render('lens09');}
    
    //拍摄技巧篇
    public function actionTips(){return $this->render('tips');}
    public function actionTips01(){return $this->render('tips01');}
    public function actionTips02(){return $this->render('tips02');}
    public function actionTips03(){return $this->render('tips03');}
    public function actionTips04(){return $this->render('tips04');}
    public function actionTips05(){return $this->render('tips05');}
    public function actionTips06(){return $this->render('tips06');}
    
    //短片拍摄篇
    public function actionMovie(){return $this->render('movie');}
    public function actionMovie01(){return $this->render('movie01');}
    public function actionMovie02(){return $this->render('movie02');}
    public function actionMovie03(){return $this->render('movie03');}
    public function actionMovie04(){return $this->render('movie04');}
    
    //电脑运用篇
    public function actionApplication(){return $this->render('application');}
    public function actionApplication01(){return $this->render('application01');}
    public function actionApplication02(){return $this->render('application02');}
    public function actionApplication03(){return $this->render('application03');}
    public function actionApplication04(){return $this->render('application04');}
    public function actionApplication05(){return $this->render('application05');}
    
}
