<?php


namespace app\controllers\admin;


use app\models\User;
use ishop\libs\Pagination;

class UserController extends AppController{

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 3;
        $count = \R::count('user');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $users = \R::findAll('user', "LIMIT $start, $perpage");
        $this->setMeta('Списак пользователей');
        $this->set(compact('users', 'pagination','count'));
    }

    public function addAction(){
        $this->setMeta('Новый пользователь');
    }

    public function signupAction(){
        if(!empty($_POST)){
            $user = new User();
            $data = $_POST;
            $user->load($data);
            //debug($user);
            if(!$user->validate($data) || !$user->checkUnique()){
                $user->getErrors();
                $_SESSION['form-data'] = $data;
            }else{
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if($user->save('user')){
                    $_SESSION['success'] = 'Пользователь зарегистрирован';
                }else{
                    $_SESSION['error'] = 'Ошибка!';
                }
                redirect();
            }
        }
        $this->setMeta('Регистрация');

    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $user = new \app\models\admin\User();
            $data = $_POST;
            $user->load($data);
            if(!$user->attributes['password']){
                unset($user->attributes['password']);
            }else{
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            }
            if(!$user->validate($data) || !$user->checkUnique()){
                $user->getErrors();
                redirect();
            }
            if($user->update('user', $id)){
                $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();

        }

        $user_id = $this->getRequestID();
        $user = \R::load('user', $user_id);
        $orders = \R::getAll("SELECT `order`.`id`, `order`.`user_id`, `order`.`status`,
       `order`.`date`, `order`.`update_at`, `order`.`currency`,
       ROUND(SUM(`order_product`.`price`),2) AS `sum` FROM `order`
           JOIN `order_product` ON `order`.`id` = `order_product`.`order_id`
WHERE user_id = {$user_id}
GROUP BY `order`.`id` ORDER BY `order`.`status`, `order`.`id`   ");
        //debug($orders);
        $this->setMeta('Редактирование профиля пользователя');
        $this->set(compact('user','orders'));

    }



    public function loginAdminAction(){
        if(!empty($_POST)){
            $user = new User();
            if($user->login(true)){
                $_SESSION['success'] = 'ВЫ успешно авторизованы';
            }else{
                $_SESSION['error'] = 'Логин и пароль введены неверно';
            }
            if(User::isAdmin()){
                redirect(ADMIN);
            }else{
                redirect();
            }
        }
        $this->layout = 'login';
    }


}