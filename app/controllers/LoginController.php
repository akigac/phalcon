<?php

use Phalcon\Crypt;

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function loginAction()
    {

        if ($this->request->isPost()) {
            // Access POST data
            $name = $this->request->getPost("name");
            $input_password = $this->request->getPost("password");
            
            $user =
                User::findFirst(
                    array (
//                        "name = :name: AND password = :password:",
                        "name = :name:",
                        'bind' => array (
                            'name' => $name,
//                            'password' => $password
                        )
                    )

                );

            // 認証情報があればセッション情報を保存してトップページへ
            if ($user != false) {

                $db_password = $user->getPassword();
                // base64でエンコードした値に\0が付くことがあるためtrimする
                $db_password = rtrim($this->crypt->decryptBase64($db_password, 'password'), "\0");

                // パスワードチェック
                if ($input_password == $db_password) {

                    // ログイン時セッションにユーザー情報を設定
                    $this->session->set('user', $user);

                    return $this->dispatcher->forward(
                        array(
                            'controller' => 'index',
                            'action' => 'index'
                        )
                    );
                }
            }

        }

        // ユーザーが無効なら、'login'トップへ
        return $this->dispatcher->forward(
            array(
                'controller' => 'login',
                'action'     => 'index'
            )
        );

        
    }

    public function registerAction() {

/*        $user = new User();
        $user->setName('test');

        $user->save();

        echo "User/index";
*/

        $user = new User();

        // データを保存し、エラーをチェックする
//        $success = $user->save($this->request->getPost(), array('name', 'email'));

        $user->findFirst($this->request->getPost());

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

    public function logoutAction() {

        $this->session->destroy();
        $this->view->render('login', 'index');

    }


}

