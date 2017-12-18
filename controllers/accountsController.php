<?php
class accountsController extends http\controller
{
    public static function show()
    {
        $id = \utility\controllerHelper::getSessionID();
        $record = accounts::findOne($id);
        self::getTemplate('show_account', $record);
    }

    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }

    public static function register()
    {
        self::getTemplate('register');
    }

    public static function store()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);

        if($_REQUEST['action']=='register'){
            if ($user == FALSE) {
                $user = new account();
                $user = \utility\controllerHelper::save($user);
                if(isset($user)){
                    \utility\controllerHelper::setSessionVariables($user);
                    \utility\controllerHelper::getHeader("Location: index.php?page=tasks&action=all");
                }else {
                    accountsController::getErrorTemplate('Error in creating new account');
                }
            }else{
                accountsController::getErrorTemplate('User account already exists');
            }
        }

        if($_REQUEST['action']=='edit'){
            $user = \utility\controllerHelper::save($user);
            \utility\controllerHelper::getHeader("Location: index.php?page=accounts&action=show");
        }
    }

    public static function edit()
    {
        $id = \utility\controllerHelper::getSessionID();
        $record = accounts::findOne($id);
        self::getTemplate('edit_account', $record);
    }

    public static function delete() {

        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        \utility\controllerHelper::getHeader("Location: index.php?page=accounts&action=all");
    }

    public static function login()
    {
       $user = accounts::findUserbyEmail($_REQUEST['email']);

        if ($user == FALSE) {
            accountsController::getErrorTemplate('User account not found.');
        } else {

            if($user->checkPassword($_POST['password']) == TRUE)
            {
                \utility\controllerHelper::setSessionVariables($user);
                \utility\controllerHelper::getHeader("Location: index.php?page=tasks&action=all");
            } else {
                accountsController::getErrorTemplate('Password does not match');
            }

        }
    }

    public static function showLogin() {
        self::getTemplate('login');
    }

    public static function logout(){
        if (!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        \utility\controllerHelper::getHeader("Location: index.php?page=homepage");
    }

    public static function getErrorTemplate($error){
        self::getTemplate('error', $error);
    }
}