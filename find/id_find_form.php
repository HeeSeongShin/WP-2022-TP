<?php $root = ("../");
include("{$root}template/header.php");?>

<div class="wrap">
  <div class="find__id__container">
    <div class="find__id__box">
      <h1 class="logo">FIND ID</h1>
      <form action="./id_find_submit.php" method="POST">
        <p>이름</p>
        <input type="text" name="name"/>
        <p>이메일</p>
        <input type="email" name="email"/>
        <button class="find__id__btn">확인</button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php include("{$root}template/footer.php");?>