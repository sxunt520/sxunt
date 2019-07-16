<?php

namespace frontend\controllers;

use Yii;
use common\models\Skill;
use yii\data\Pagination;

class SkillController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if(!empty(Yii::$app->request->get('subNav'))){
            $subNav=Yii::$app->request->get('subNav');
        }else{
            $subNav=1;
        }
        
        return $this->render('index', [
            'models' => '',
            'subNav'=>$subNav,
        ]);
    }
    
    public function actionView($id)
    {
        $model=$this->findModel($id);
        
        return $this->render('view', [
            'model' => $model,
        ]);
    }
    
    protected function findModel($id)
    {
        if (($model = Skill::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
