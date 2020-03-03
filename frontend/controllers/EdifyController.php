<?php

namespace frontend\controllers;

use Yii;
use common\models\Edify;
use common\models\EdifyImg;
use yii\data\Pagination;

class EdifyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $source=Yii::$app->request->get('source');
        $whereArr=array();
        $whereArr['checkinfo']=true;
        if($source>0){
            $whereArr['source']=$source;
        }
        
        $query = Edify::find()->where($whereArr);
        $countQuery = clone $query;
        $pages = new Pagination(
            [
                'totalCount' => $countQuery->count(),
                'pageSize' => 15,//显示条数
                'validatePage' => false,//起过总页数返回空
            ]
            );
        $models = $query->offset($pages->offset)
        ->select("id,px260Pic,title,digest")
        ->orderBy('id DESC')
        ->limit($pages->limit)
        ->asArray()
        ->all();
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
            'source'=>$source,
        ]);
    }
    
    public function actionAjaxgetedify()
    {
        $source=Yii::$app->request->get('source');
        $whereArr=array();
        $whereArr['checkinfo']=true;
        if($source>0){
            $whereArr['source']=$source;
        }
        
        $query = Edify::find()->where($whereArr);
        $countQuery = clone $query;
        $pages = new Pagination(
            [
                'totalCount' => $countQuery->count(),
                'pageSize' => 5,//显示条数
                'validatePage' => false,//起过总页数返回空
            ]
        );
        $models = $query->offset($pages->offset)
        ->select("id,px260Pic,title,digest")
        ->orderBy('id DESC')
        ->limit($pages->limit)
        ->asArray()
        ->all();
        if(!$models){return false;}
        
        $json_Arr='';
        foreach($models as $k=>$v){
            $json_Arr[$k]['src']=$v['px260Pic'];
            $json_Arr[$k]['title']=$v['title'];
            $json_Arr[$k]['href']='/edify/view?id='.$v['id'];
            $json_Arr[$k]['content']=$v['digest'];
        }
        
        return json_encode($json_Arr);
    }
    
    public function actionView($id)
    {
        $model=$this->findModel($id);
        $EdifyImg_Arr=EdifyImg::find()->asArray()->where(['edify_id' => $id])->all();
        
        // 浏览量变化
        $model->addView();
        
        return $this->render('view', [
            'model' => $model,
            'EdifyImg_Arr' => $EdifyImg_Arr,
        ]);
    }
    
    protected function findModel($id)
    {
        if (($model = Edify::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
