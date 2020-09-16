<?php
require_once 'config.php';
class Auth extends Database{
  //register new User
  public function register($name, $email, $password){
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :pass)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['name'=>$name, 'email'=>$email, 'pass'=>$password]);
    return true;
  }

  public function user_exist($email){
    $sql = "SELECT email FROM users WHERE email = :email";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
  }

  //User login Existing

  public function login($email){
    $sql = "SELECT email, password FROM users Where email = :email AND deleted != 0 ";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
  }

  //Current user in session

  public function currentUser($email){
    $sql = "SELECT * FROM users WHERE email = :email AND deleted != 0 ";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
  }

  //Forgot Password

  // public function forgot_password($token,$email){
  //   $sql = "UPDATE users SET token = :token, token_expire = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE email = :email";

  //   $stmt = $this->conn->prepare($sql);
  //   $stmt->execute(['token'=>$token,'email'=>$email]);

  //   return true;
  // }

  // //Reset password user auth
  // public function reset_pass_auth($email, $token){
  //   $sql = "SELECT id FROM users WHERE email = :email AND token = :token AND token != '' AND token_expire > NOW() AND deleted != 0";
  //   $stmt = $this->conn->prepare($sql);
  //   $stmt->execute(['email'=>$email, 'token'=>$token]);

  //   $row = $stmt->fetch(PDO::FETCH_ASSOC);

  //   return $row;
  // }

  // //update new PASSWORD

  // public function update_new_pass($pass, $email){
  //   $sql = "UPDATE users SET token = '', password = :pass WHERE email = :email AND deleted !=0";


  //   $stmt = $this->conn->prepare($sql);
  //   $stmt->execute(['pass'=>$pass, 'email'=>$email]);

  //   return true;
  // }


  //Add new review

  public function add_new_note($uid, $title, $note){
    $sql = "INSERT INTO notes (uid, title, note) VALUES (:uid, :title, :note)";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['uid'=>$uid, 'title'=>$title, 'note'=>$note]);

    return true;
  }

//Fetch all review of an user

  public function get_notes($uid){
    $sql = "SELECT * FROM notes WHERE uid = :uid";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['uid'=>$uid]);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

}

 ?>
