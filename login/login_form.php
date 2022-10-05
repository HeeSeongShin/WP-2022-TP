<?php $root="../";?>

<?php include("../template/header.php"); ?>
<?php
  session_start();
  if(isset($_SESSION["error"])){
    $error = $_SESSION["error"];
    if($error){
      echo"<script>alert('잘못된 아이디 입니다');</script>";
    }
    session_destroy();
  }
?>

<div class="wrap">
  <div class="login__container">
    <div class="login__box">
      <h1 class="logo">TO-DO-LIST</h1>
      <form action="./login_submit.php" method="POST">
        <input type="text" name="id"/>
        <input type="password" name="pw"/>
        <button class="login__btn">로그인</button>
      </form>
        <div class="find__box">
          <a href="../find/id_find_submit.php">
             아이디 찾기
           </a>
           <a href="../find/pw_find_submit.php">
             비밀번호 찾기
           </a>
           <a href="../register/register_form.php">
             회원가입
           </a>
        </div>
    </div>
  </div>
</div>

<?php include("../template/footer.php"); ?>