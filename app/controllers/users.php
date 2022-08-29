<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$username = '';
$email = '';
$password = '';
$passwordConf = '';


if (isset($_POST['register-btn'])){
    $errors = validateUser($_POST);
    
    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['admin'] = 0;
        
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user_id = create('users', $_POST);
        $users = selectOne('users', ['id' =>$users_id]);
        
        dd($users);
    } else {
        $username = $_POST['username'];

        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}
?>