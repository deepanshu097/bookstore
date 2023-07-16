<?php
 session_start();
 if(isset($_SESSION['user_id'])&& isset($_SESSION['email'])){
  echo $_SESSION['user_id'];
  echo $_SESSION["email"];
}
  ?>