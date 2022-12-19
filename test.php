<?php
echo '
<!DOCTYPE html>
<html>
<style>
.login-container {
  width: 500px;
  margin: 0 auto;
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

label, input[type="submit"] {
  width: 100%;
  max-width: 250px;
  margin-bottom: 10px;
  padding: 12px;
  box-sizing: border-box;
}

input[type="text"], input[type="password"] {
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}
</style>
<head>
  <meta charset="utf-8">
  <title>Kullanıcı Girişi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lütfen Giriş Yapın</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="form-group">
                <label for="password">Parola:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
';
