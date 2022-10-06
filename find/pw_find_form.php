<?php $root = ("../");
include("{$root}template/header.php");?>

<div class="wrap">
  <div class="find__id__container">
    <div class="find__id__box">
      <h1 class="logo">FIND PW</h1>
      <form action="./pw_find_submit.php" method="POST">
        <p>이름</p>
        <input type="text" name="name"/>
        <p>이메일</p>
        <input type="email" name="email"/>
        <p>아이디</p>
        <input type="id" name="id"/>
        <button class="find__id__btn">확인</button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php include("{$root}template/footer.php");?>