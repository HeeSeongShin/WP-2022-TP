<?php
  $id = $_POST["registerId"];
  $pw = $_POST["registerPw"];
  $name = $_POST["registerName"];
  $email = $_POST["registerEmail"];

  $userList = file_get_contents("../data/user.json");
  $userList = json_decode($userList);

  $newUser = array(
    "id" => $id,
    "pw" => $pw,
    "name" => $name,
    "email" => $email
  ); 

  $check = true;
  
  if($id != "" && $pw != "" && $name != ""){
    for($i=0; $i<sizeof($userList->user); $i++){
      if($id == $userList->user[$i]->id || $email == $userList->user[$i]->email){
        $check = false;
        break;
      }
    }
  }else{
    $check = false;
  }

  if(!$check){
    header("Location: ./register_form.php");
  }else{
    array_push($userList->user, $newUser);
    $jsonUserList = json_encode($userList);
    file_put_contents("../data/user.json", $jsonUserList);
    header("Location: ../login/login_form.php");
  }
?>