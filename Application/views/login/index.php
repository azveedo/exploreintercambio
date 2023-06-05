<?php if(!empty($_SESSION["loginError"])): ?>
<div style="color: red"><?php echo $_SESSION["loginError"]; ?></div>
<?php endif; ?>
<?php require './Application/views/template/login.php';?>