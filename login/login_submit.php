<?php
  session_start();
  
  $id = $_POST["id"];
  $pw = $_POST["pw"];

  $userList = file_get_contents("../data/user.json");
  $userList = json_decode($userList);
  
  $check = false;
  $user = null;
  for($i=0; $i<sizeof($userList->user); $i++){
    $user = $userList->user[$i];
    if($id === $user->id && $pw === $user->pw){
      $check = true;
      break;
    }
  }
  

  if($check){
    $_SESSION["error"] = false;
    $_SESSION["login"] = true;
    $_SESSION["name"] = $user->name;
    $_SESSION["id"] = $user->id;
    $_SESSION["pw"] = $user->pw;
    header("Location: ../index.php");
  }else{
    header("Location: ./login_form.php");
    
    $_SESSION["error"] = true;
  }
?>