<?php
  $name = $_POST["name"];
  $email = $_POST["email"];

  $userList = file_get_contents("../data/user.json");
  $userList = json_decode($userList);

  $check = false;
  $currentUser = null;

  for($i = 0 ; $i < sizeof($userList->user); $i++){
    $currentUser = $userList->user[$i];

    if($name == $currentUser->name && $email == $currentUser->email){
      $check = true;
      break;
    }
  }
?>
  <?php if($check):?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TO-DO-LIST</title>
    </head>
    <body>
      <form method="POST" action="../login/login_form.php">
        <p><?=$currentUser->id?></p>
        <button>확인</button>
    </body>
    </html>
    <?php else:?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TO-DO-LIST</title>
      </head>
      <body>
        <form action="../login/login_form.php">
          <p>등록된 아이디가 없습니다.</p>
          <button>확인</button>
        </form>
      </body>
      </html>
  <?php endif ?>
