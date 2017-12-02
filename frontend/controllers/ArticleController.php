<?php
/**
 * author: yidashi
 * Date: 2015/11/27
 * Time: 11:54.
 */
namespace frontend\controllers;

use Yii;
use common\models\Comment;
use frontend\models\Tag;
use frontend\models\Article;
use common\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\Edify;

class ArticleController extends Controller
{
    /**
     * 分类文章列表
     */
    public function actionIndex()
    {
        $cate=Yii::$app->request->get('cate');
        if ($cate>0) {//获取所有
            $query = Article::find()->published()->andFilterWhere(['category_id' => $cate]);
        }else{
            $query = Article::find()->published();
        }
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8,
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
        
        $rightnews=$this->__get_rightnews();
        
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
            'cate' => $cate,
            'rightnews' => $rightnews,
        ]);
    }

    /**
     * 标签文章列表
     */
    public function actionTag($name)
    {
        
        $tag = Tag::find()->where(['name' => $name])->one();
        if (empty($tag)) {
            throw new NotFoundHttpException('标签不存在');
        }
        $query = $tag->getArticles();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);
        $pages = $dataProvider->getPagination();
        $models = $dataProvider->getModels();
        
        $rightnews=$this->__get_rightnews();
        
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
            'tagname' => $name,
            'cate' => '',
            'rightnews' => $rightnews,
        ]);
    }
    
    //获取推荐资讯\热门资讯\灵感渲染\热门标签
    private function __get_rightnews(){
        $data=array();
        //推荐资讯
        $data['top_news'] = Article::find()
        ->active()
        ->andWhere(['<>', 'cover', ''])
        //->andWhere(['=', 'is_top', 1])
        ->orderBy(['is_top' => SORT_DESC,'id' => SORT_DESC])
        ->limit(10)
        ->all();
        
        //热门资讯
        $data['hot_news'] = Article::find()
        ->active()
        ->andWhere(['<>', 'cover', ''])
        ->orderBy(['view' => SORT_DESC])
        ->limit(10)
        ->all();
        
        //灵感渲染
        $data['top_edify'] = Edify::find()
        ->andWhere(['<>', 'picurl', ''])
        ->andWhere(['=', 'checkinfo', true])
        ->orderBy(['id' => SORT_DESC])
        ->limit(10)
        ->all();
        
        // 热门标签
        //$data['hotTags'] = Tag::find()->orderBy('article desc')->all();
        $data['hotTags'] = Tag::hot();
        
        return $data;
    }
    
    /**
     * 文章详情
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $model = Article::find()->where(['id' => $id])->published()->one();
        if ($model === null) {
            throw new NotFoundHttpException('not found');
        }
        // 浏览量变化
        $model->addView();
        // sidebar
        $hots = Article::hots($model->category_id);
        // 评论列表
        $commentDataProvider = new ActiveDataProvider([
            'query' => Comment::find()->andWhere(['article_id' => $id, 'parent_id' => 0]),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);
        $commentModels = $commentDataProvider->getModels();
        $pages = $commentDataProvider->getPagination();
        // 评论框
        $commentModel = new Comment();
        
        $rightnews=$this->__get_rightnews();

        return $this->render('view', [
            'model' => $model,
            'commentModel' => $commentModel,
            'commentModels' => $commentModels,
            'pages' => $pages,
            'hots' => $hots,
            'commentDataProvider' => $commentDataProvider,
            'rightnews'=>$rightnews,
        ]);
    }
}
