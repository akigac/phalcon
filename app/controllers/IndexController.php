<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        // 変数の入れ方
        //$this->view->setVar('msg', '<h1>Hello!</h1>');
        $this->view->msg='<h1>Hello2!</h1>';
        $this->view->signup = $this->tag->linkTo("signup", "ユーザー作成はこちら");

        $this->view->login = $this->tag->linkTo("login", "ログインはこちら");

    }

    public function showAction() {

    }

}

