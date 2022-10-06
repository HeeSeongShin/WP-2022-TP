<?php
  session_start();
  $name = isset($_SESSION["name"]) ? $_SESSION["name"] : null;
?>

<?php $root="./"; ?>
<?php include("./template/header.php"); ?>
<?php if(!isset($name)):?>
<?php header("Location: ./logout/logout_form.php");?>
<?php else:?>
<div>
  <?php echo "hello{$name}";?>
  <a href="./login/login_form.php">
    <button>로그아웃</button>
  </a>
</div>
<?php endif;?>
<?php include("./template/footer.php"); ?>