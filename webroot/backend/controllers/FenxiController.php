<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * KlineController implements the CRUD actions for Kline model.
 */
class FenxiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Kline models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'title'=>'股票分析'
        ]);
    }

    /**
     * @return string
     * 此方法是根据K线波峰分析股票的思路
     */
    public function actionKline(){
        return $this->render('kline', [
            'title'=>'K线波峰追涨分析'
        ]);
    }
}
