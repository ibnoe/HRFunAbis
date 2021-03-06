<?php
Yii::import( 'modhumanresources.models.*');

class DisposisiTreeController extends RController
{
	public function init()
	{
		//$this->_authorizer = $this->module->getAuthorizer();
		$this->layout = $this->module->layout;
		$this->defaultAction = 'admin';

		// Register the scripts
		$this->module->registerScripts();
	}
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights',	
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
		$model=new DisposisiTree;
		$model->parent_id = 0;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DisposisiTree']))
		{
			$model->attributes=$_POST['DisposisiTree'];
			$model->name = Employee::model()->getName($model->employee_id);
			$model->email = Employee::model()->getEmail($model->employee_id);
			if($model->save())
				$this->redirect(array('admin'));
				//$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['DisposisiTree']))
		{
			$model->attributes=$_POST['DisposisiTree'];
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
		$dataProvider=new CActiveDataProvider('DisposisiTree');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DisposisiTree('search');
        $dataProvider=new CActiveDataProvider('DisposisiTree');
 
        $criteria = new CDbCriteria();
 
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['DisposisiTree']))
        {
 
               foreach($_GET['DisposisiTree'] as $key=>$value) {
                    $criteria -> compare($key, $value, true, 'AND');
               }
               $dataProvider = new CActiveDataProvider('DisposisiTree', array('criteria' => $criteria));
        }
 
        $this->render('admin',array(
            'model'=>$model,'dataProvider'=>$dataProvider
        ));
		
		// $model=new DisposisiTree('search');
		// $model->unsetAttributes();  // clear any default values
		// if(isset($_GET['DisposisiTree']))
			// $model->attributes=$_GET['DisposisiTree'];

		// $this->render('admin',array(
			// 'model'=>$model,
		// ));
	}
	
	public function actionAdminTree()
	{
		$model=new DisposisiTree('search');
         $dataProvider=new CActiveDataProvider('DisposisiTree');
 
         $criteria = new CDbCriteria();
 
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['DisposisiTree']))
        {
 
               foreach($_GET['DisposisiTree'] as $key=>$value) {
                    $criteria -> compare($key, $value, true, 'AND');
               }
               $dataProvider = new CActiveDataProvider('DisposisiTree', array('criteria' => $criteria));
        }
 
        $this->render('admin',array(
            'model'=>$model,'dataProvider'=>$dataProvider
        ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=DisposisiTree::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='disposisi-tree-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
