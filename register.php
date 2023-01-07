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
        <h1 class="text-center">Üye Olun</h1>
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
        <input type="text" class="form-control" placeholder="Ad" name="name" required="required">
      </div>
      </div>
      <div class="row">
      <div class="col form-group  align-self-center align-items-center">
        <input type="text" class="form-control" placeholder="Soyad" name="lastname" required="required">
      </div>
      </div>
         
     <div class="row">
      <div class="col form-group  align-items-center align-items-center" >
        <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
      </div>
      </div>
      
     <div class="row">
      <div class="col form-group  align-self-center align-items-center" style="margin-top: -10px">
        <button onclick="window.open(\'login.php\');" class="btn btn-primary btn-block">Giriş</button>
      </div>
      </div>
    <input type="hidden" name="requestType" value="register" />
    </form>
  </div>
      
    </div>
  </div>
  </div>
</body>


</html>
';