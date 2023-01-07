<?php
require "./components/header.php";


echo '
<html>
    ' . getHeader("Giriş") . '
<body>
 <div class="login-form">
       <div class="container">
    <form action="auth.php" method="post">
    <div class="mt-3 mb-3 p-5">
    
    <div class="row">
    <div class="col align-self-center align-items-center mb-3">
        <h1 class="text-center">Üye Girişi</h1>
    </div>
    </div>
    
    <div class="row ">
      <div class="col form-group  align-self-center align-items-center">
        <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="username" required="required">
      </div>
     </div>
     
     <div class="row">
      <div class="col form-group  align-self-center align-items-center">
        <input type="password" class="form-control" placeholder="Şifre" name="passwd" required="required">
      </div>
      </div>
      
     <div class="row">
      <div class="col form-group  align-self-center align-items-center">
        <button type="submit" class="btn btn-primary btn-block">Giriş</button>
      </div>
      </div>
         
     <div class="row">
      <div class="col form-group  align-items-center align-items-center" style="margin-top: -15px">
        <button onclick="window.open(\'register.php\');" class="btn btn-primary btn-block">Kayıt Ol</button>
      </div>
      </div>
      <div class="row">
      <div class="col align-self-center align-items-center" style="text-align: center">
        <a  href="#">Şifremi Unuttum</a>
      </div>
      </div>
    <input type="hidden" name="requestType" value="login" />
    </form>
  </div>
      
    </div>
  </div>
  </div>
</body>


</html>
';