<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','api_posts_count','api_posts','add','search',"load"),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Post');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	public function actionLoad($id) {
	    $post = Post::model()->findByPk($id);
        $result = array("code"=>200,"post"=>$post);
        echo CJSON::encode($result);
    }
    public function actionSearch() {
	    $post_type = $_GET["type"];
        $name= $_GET["name"];
        $library= $_GET["library"];
        $zhi_number= $_GET["zhi_number"];
        $zhen_number= $_GET["zhen_number"];
        $ingredients = $_GET["ingredients"];
        $color = $_GET["color"];
        $color_number = $_GET["color_number"];
        $method = $_GET["method"];
        $weight = $_GET["weight"];
        $width= $_GET["width"];
        $notes= $_GET["notes"];

        $criteria = new CDbCriteria;
        $criteria->addCondition("post_type = $post_type");
        if(!empty($sname)) {
            $criteria->addSearchCondition("name", $name);
        }
        if(!empty($library)) {
            $criteria->addSearchCondition("library", $library);
        }
        if(!empty($zhi_number)) {
            $criteria->addSearchCondition("zhi_number", $zhi_number);
        }
        if(!empty($zhen_number)) {
            $criteria->addSearchCondition("zhen_number", $zhen_number);
        }
        if(!empty($ingredients)) {
            $criteria->addSearchCondition("ingredients", $ingredients);
        }
        if(!empty($color)) {
            $criteria->addSearchCondition("color", $color);
        }
        if(!empty($color_number)) {
            $criteria->addSearchCondition("color_number", $color_number);
        }
        if(!empty($method)) {
            $criteria->addSearchCondition("method", $method);
        }
        if(!empty($weight)) {
            $criteria->addSearchCondition("weight", $weight);
        }
        if(!empty($goods_weight)) {
            $criteria->addSearchCondition("goods_weight", $goods_weight);
        }
        if(!empty($width)) {
            $criteria->addSearchCondition("width", $width);
        }
        if(!empty($notes)) {
            $criteria->addSearchCondition("notes", $notes);
        }

        $start = intval(isset($_GET["start"]) ? $_GET["start"] : 0);
        $count = intval(isset($_GET["count"]) ? $_GET["count"] : 5);

        $criteria->limit = $count;    //取1条数据，如果小于0，则不作处理
        $criteria->offset = $start;


        $posts = Post::model()->findAll($criteria);

        $result = array("code"=>200,"posts"=>$posts);
        echo CJSON::encode($result);
    }
	public function actionAdd() {
		$HTTP_RAW_POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : "{}";
		$post_data = array_merge($_GET,json_decode($HTTP_RAW_POST_DATA, true));
		$user_openid = $post_data["openid"];

		$user = User::model()->findByAttributes(array("username"=>$user_openid));
		$companyInfo = json_decode($user->profile, true);


		$postArray = $post_data["post"];
		$posttype = $_GET["type"];

		$post = new Post();
        $post->post_type = $posttype;
		$post->setAttributes( $companyInfo);
		$post->openid = $user_openid;
		$post->setAttributes( $postArray);
		if (!$post->save()) {
			echo json_encode( array("code"=>500,"errors"=>$post->errors) );
			die();
		}

		echo json_encode( array("code"=>200) );
		die();
	}
    public function actionApi_posts_count() {
        echo json_encode( array("code"=>200,"count" => Post::model()->find()->count()));
    }
    public function actionApi_posts() {
        $criteria = new CDbCriteria;

        $start = intval($_GET["start"]);
        $count = intval($_GET["count"]);

        $criteria->limit = $count;    //取1条数据，如果小于0，则不作处理
        $criteria->offset = $start;


        $posts = Post::model()->findAll($criteria);

        $result = array("subjects"=>$posts);
        echo CJSON::encode($result);
    }
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Post the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Post $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
