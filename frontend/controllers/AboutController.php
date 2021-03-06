<?php

namespace frontend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

use yii\data\Pagination;

use common\models\Gallery;
use common\models\Diary;
use common\models\Massage;

class AboutController extends Controller
{
    public function actionIndex()
    {
        //惊异之墙
        $wonderwall_row1 = Gallery::findBySql('SELECT * FROM `sxunt_gallery` where `show`=1 and (`cid`=10 or `cid`=11 or `cid`=12 or `cid`=20 or `cid`=21 or `cid`=23 ) ORDER BY id desc limit 0,15')->all();
        $wonderwall_row2 = Gallery::findBySql('SELECT * FROM `sxunt_gallery` where `show`=1 and (`cid`=6 or `cid`=7 or `cid`=8 or `cid`=9 or `cid`=22) ORDER BY id desc limit 0,15')->all();
        $wonderwall_row3 = Gallery::findBySql('SELECT * FROM `sxunt_gallery` where `show`=1 and (`cid`=14 or `cid`=15 or `cid`=16 or `cid`=17 or `cid`=18 or `cid`=19) ORDER BY id desc limit 0,15')->all();
        
        return $this->render('index',[
            'wonderwall_row1'=>$wonderwall_row1,
            'wonderwall_row2'=>$wonderwall_row2,
            'wonderwall_row3'=>$wonderwall_row3
        ]);
    }
    
    public function actionGallery()
    {
        //return $this->render('gallery');
        
        $whereArr['show']=1;
        $query = Gallery::find()->where($whereArr);
        $countQuery = clone $query;
        $pages = new Pagination(
            [
                'totalCount' => $countQuery->count(),
                'pageSize' => 15,//显示条数
                'validatePage' => false,//起过总页数返回空
            ]
            );
        $models = $query->offset($pages->offset)
        //->select("id,px260Pic,title,digest")
        ->orderBy('id DESC')
        ->limit($pages->limit)
        ->asArray()
        ->all();
        
        return $this->render('gallery', [
            'models' => $models,
            'pages' => $pages,
        ]);
        
    }
    
    public function actionDiary()
    {
        //return $this->render('diary');
        
        $query = Diary::find();
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
                'validatePage' => false,//起过总页数返回空
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);
        $pages = $dataProvider->getPagination();
        $models = $dataProvider->getModels();
        
        return $this->render('diary', [
            'models' => $models,
            'pages' => $pages,
        ]);
        
    }
    
    public function actionDiaryPage($id)
    {
        $model=Diary::findOne($id);
        
        return $this->render('diary-page', [
            'model' => $model,
        ]);
        
    }
    
    public function actionMessage()
    {
        //$Message_rows=Massage::find()->orderBy('id DESC')->all();
        
        $query = Massage::find();
        $countQuery = clone $query;
        $pages = new Pagination(
            [
                'totalCount' => $countQuery->count(),
                'pageSize' => 50,//显示条数
                'validatePage' => false,//起过总页数返回空
            ]
        );
        $Message_rows = $query->offset($pages->offset)
        ->orderBy('id DESC')
        ->limit($pages->limit)
        ->all();
        
        if (Yii::$app->request->post()) {
            //$dataArr=Yii::$app->request->post();
        
            $model=new Massage();
            $model->name=Yii::$app->request->post('name');
            $model->email=Yii::$app->request->post('email');
            $model->tel=Yii::$app->request->post('tel');
            $model->content=Yii::$app->request->post('content');
            $model->lastdate=date("Y-m-d H:i:s");
            
            
            if($model->validate()) {
                $r=$model->save();
                if($r){
                    header("Content-type: text/html; charset=utf-8");
                    echo "<script type='text/javascript'>alert('留言成功!');location.href='/about/message';</script>";exit;
                }
            }
            
        }else {
            return $this->render('message', [
                'Message_rows' => $Message_rows,
            ]);
        }
        
    }

    public function actionAboutme()
    {
        return $this->render('aboutme');
    }

}
