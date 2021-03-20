<?php

namespace console\controllers;

use Yii;
use shmilyzxt\queue\Worker;

class WorkerController extends \yii\console\Controller
{
	public $work;

	public function options($actionID)
    {
        return ['work'];
    }

    public function optionAliases()
    {
        return ['m' => 'work'];
    }

    public function actionListen($queueName='default',$attempt=10,$memeory=128,$sleep=3 ,$delay=0){
        Worker::listen(\Yii::$app->queue,$queueName,$attempt,$memeory,$sleep,$delay);
    }
}