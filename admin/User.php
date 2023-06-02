<?php 
class User{
    private $user_id;
    private $name;
    private $contact;
    private $email;
    private $password;

public function __construct($name,$contact,$email,$password){
  
    $this->name=$name;
    $this->contact=$contact;
    $this->email=$email;
    $this->password=$password;
}

public function setUser_id($user_id){
$this->user_id=$user_id;
}
public function getUser_id(){
    return $this->user_id;
}

public function setName($name ){
    $this->name=$name;
}
public function getName(){
    return $this->name;
}
public function setContact($contact ){
    $this->contact=$contact;
}
public function getContact(){
    return $this->contact;
}

public function setEmail($email ){
    $this->email=$email;
}
public function getEmail(){
    return $this->email;
}

public function setPassword($password ){
    $this->password=$password;
}
public function getPassword(){
    return $this->password;
}


}



?>