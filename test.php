<?php
echo '
<!DOCTYPE html>
<html>
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
