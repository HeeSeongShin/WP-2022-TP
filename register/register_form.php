<?php $root = "../"?>
<?php include("../template/header.php")?>
<div class="wrap">
  <div class="register__container">
    <div class="register__box">
      <h1 class="logo">Register</h1>
      <form method="POST" action="./register_submit.php">
        <p>이름</p>
        <input type="text" name="registerName"/>
        <p>아이디</p>
        <input type="text" name="registerId"/>
        <p>비밀번호</p>
        <input type="password" name="registerPw"/>
        <button>회원가입</button>
      </form>
    </div>
  </div>
</div>


<?php include("../template/footer.php")?>