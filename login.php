<?php

include './layout/header.php';
include './layout/navbar.php';

?>
<!-- <div class="container py-5">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
        </div>
    </div>



>





</div> -->

<?php
if (isset($_POST["login"])) {

  try {
      

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // header('Location: index.php');
  } catch (PDOException $err) {
    //throw $th;
  }
};
?>



<div class="container py-5">

  <div class="form-signin text-center shadow-lg p-3 mb-5">

    <form id="formLogin" action="#" method="POST">
      <img class="mb-4" src="img/nube.svg" alt="" width="72" height="57">
      <div class="form-floating">
        <input type="text" class="form-control" id="user" name="email" placeholder="User">
        <label for="user">Email</label>
      </div>
      <div class="form-floating mt-4">
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
        <label for="pass">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-dark mt-4 " name="login" type="submit">Login</button>
    </form>

    <br>
  </div>


</div>