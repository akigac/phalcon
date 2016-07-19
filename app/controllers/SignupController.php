<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function registerAction()
    {

        // パラメータセット
        $user = new User();

        $post = $this->request->getPost();

        // db値に適合するカラムにセット
        foreach( $user->columnMap() as  $value ) {
            if (isset($post[$value])) {
                $param[$value] = $post[$value];
            }
        }

        // 既にnameがあるかをチェック
        $check_user = User::findFirst(
            array (
                "name = :name:",
                'bind' => array (
                    'name' => $param['name'],
                )
            )

        );

        if ($check_user != false) {
            echo $name . ' exists user. Please other input.';
            $this->view->disable();
            exit;
        }

        // base64暗号化
        $param['password'] = $this->crypt->encryptBase64($param['password'], 'password');


        // データを保存する　（model定義した、バリデーションで自動チェック
        $success = $user->save($param, array('name', 'password', 'email'));

        if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();

    }


}

