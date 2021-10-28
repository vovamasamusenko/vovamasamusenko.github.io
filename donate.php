<?php
include ('engine/api/api.class.php');
$login = $dle_api->db->safesql((string)$_GET['login']);
$password = (string)$_GET['password'];
$member_id = $dle_api->db->super_query( "SELECT * FROM dle_users WHERE name='{$login}'" );
if(password_verify($password, $member_id['password'] ) ) {
    $success = true;
}
echo($success ? 'OK:' . $login : 'Неверный логин или пароль!'); 

?>