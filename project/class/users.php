<?php
session_start();
class users{
    public $host="localhost";
    public $username="root";
    public $pass="";
    public $db_name="quiz";
    public $conn;
   public $data;
   public $cat;
   public $que;
    public function __construct(){
       $this->conn=new mysqli($this->host,$this->username,$this->pass ,$this->db_name);
       if($this->conn->connect_errno){
        die ("database connection failed".$this->conn->connect_errno);
       }
    }
   public function signup($data) {
    $this->conn->query($data);
    return true;
   }

   public function login($email,$password){
      $query=$this->conn->query("select email,password from user where email='$email' and password='$password'");
      $query->fetch_array(MYSQLI_ASSOC);
      if($query->num_rows>0){

         $_SESSION['email']=$email;
         return true;
      }
      else{
         return false;
      }
   }
public function user_profile($email){
   $query=$this->conn->query("select * from user where email='$email'");
  $row=$query->fetch_array(MYSQLI_ASSOC);
   if($query->num_rows>0){

      $this->data[]=$row;
   }
   return $this->data;
}

// public function cat_show(){
//    $query = $this->conn->query("select * from category");

//   while($row=$query->fetch_array(MYSQLI_ASSOC)){

//       $this->cat[]=$row;
//    }
//    return $this->cat;
// }


public function questions_show($que){
   $query=$this->conn->query("select * from questions where cat_id='$que'");
  while($row=$query->fetch_array(MYSQLI_ASSOC)){

      $this->que[]=$row;
   }
   return $this->que;
}
  
   public function url($url){
      header("location:".$url);
   }
}
new users();
?>