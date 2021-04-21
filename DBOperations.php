<?php
// Developer: Ronen Amon At Apache/2.4.6 (CentOS) 2017-07-22
// This File Have: The functions such as connecting with MySQL database and execution of queries are defined in this file.
class DBOperations{

    private $host = 'localhost';
    private $user = 'root';
    private $db = 'newmovies';
    private $pass = '';
    private $conn;

public function __construct() {

    //PDO Connections
   $this -> conn = new PDO("mysql:host=".$this -> host.";dbname=".$this -> db, $this -> user, $this -> pass);

}
// New User for registration which accepts name, email and password
 public function insertData($name,$email,$password){

     $unique_id = uniqid('', true);

     $sql = 'INSERT INTO users SET unique_id =:unique_id,name =:name,
     email =:email,pass =:password,created_at = NOW(),admin = 1';

     $query = $this ->conn ->prepare($sql);
     $query->execute(array('unique_id' => $unique_id, ':name' => $name, ':email' => $email,
       ':password' => $password));

      if ($query) {

          return true;

      } else {

          return false;

      }
 }

 public function checkLogin($email, $password) {

    $sql = 'SELECT * FROM users WHERE email = :email';
    $query = $this -> conn -> prepare($sql);
    $query -> execute(array(':email' => $email));
    $data = $query -> fetchObject();


        $user["name"] = $data -> name;
        $user["email"] = $data -> email;
        $user["unique_id"] = $data -> unique_id;
        return $user;

//    } else {
//
//        return false;
//    }
 }

 public function changePassword($email, $password){

    $hash = $this ->getHash($password);//need to fix
    $encrypted_password = $hash["encrypted"];
    $salt = $hash["salt"];

    $sql = 'UPDATE users SET encrypted_password = :encrypted_password, salt = :salt WHERE email = :email';
    $query = $this -> conn -> prepare($sql);
    $query -> execute(array(':email' => $email, ':encrypted_password' => $encrypted_password, ':salt' => $salt));

    if ($query) {

        return true;

    } else {

        return false;

    }
 }

 public function checkUserExist($email){

    $sql = 'SELECT COUNT(*) from users WHERE email =:email';
    $query = $this -> conn -> prepare($sql);
    $query -> execute(array('email' => $email));
    echo $query;
    if($query){

        $row_count = $query -> fetchColumn();

        if ($row_count == 0){

            return false;

        } else {

            return true;

        }
    } else {

        return false;
    }
 }

//  public function getHash($password) {
//
//      $salt = sha1(rand());
//      $salt = substr($salt, 0, 10);
//      $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
//      $hash = array("salt" => $salt, "encrypted" => $encrypted);
//
//      return $hash;
//
// }

// public function verifyHash($password, $hash) {
//
//     return password_verify ($password, $hash);
// }
}


?>
