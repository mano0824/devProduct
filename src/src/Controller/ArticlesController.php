<?php

namespace App\Controller;

use App\Controller\AppController;


class ArticlesController extends AppController 
{
    public $viewClass = 'Json';
    
    const ERROR = 0;
    const SUCCESS = 1;

    // abstract protected function admin(); //編集権限
    // abstract protected function auth(); //ログイン権限
    // abstract protected function Confirm(); //確定ルート
    // abstract protected function Register(); //精算
    // abstract protected function Exit(); //精算完了

    /* 
    共通の初期化処理
    */
    protected function initializeAction($type)
    {
        // 設定情報の取得
        if ($type == 'SanwaAPI' || $type == 'TestSanwaAPI'){
            $config = Configure::read("API_OPERATION");
        } else {
            $config = Configure::read("STGR.{$type}");

        }

        $logData = $this->request->data;
        if($config['DEBUG']) {
            $this->log($logData, "debug");
        }
    }
    
    
    public function index()
     {
        // Do some magic
        // 見出し機能と、取引一時情報を残すために使用する
        // $connect->
        // EventListner->$_COOKIE->connect();
        echo ("RECORD");

    }
    public function show() {
        // Dosome magic.
        echo ("Connneciton success");
    }
    
}

?>