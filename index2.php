<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>Login siswa</h2>

          <div class="box-login">
          <form action="proses-login-siswa.php"method="post">
            <i class="fas fa-lock"></i>
            <input name="nisn" type="text" class="form-control" placeholder="Nisn">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input name="nis" type="text" class="form-control" placeholder="Nis">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
         <a href="index.php" class="a">Login Sebagai Siswa</a>
         </form>
          </div>
      </div>
  </head>
  </html>