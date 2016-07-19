<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected $auth_flag = true;

    public function beforeExecuteRoute() {

        // 認証チェック、ログインコントローラー、除外
        if ($this->auth_flag && !$this->session->get('user'))
        {
            $this->dispatcher->forward([
                'controller' => 'login',
                'action' => 'index',
            ]);
            return false;
        }
    }

}
