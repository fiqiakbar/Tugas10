<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Sederhana</title>
  </head>
  <body>
    <center>
      <h1>Form Login</h1>
    </center>
<center><table>
      <form action="proses_login.php" method="post">
      <tr>
      <td><input type="username" name="username" placeholder="Username"></td>
      </tr>
      <tr>
      <td><input type="password" name="password" placeholder="password"></td>
      </tr>
      <tr>
        <td><input type="submit" name="login" value="Login">
        <input type="reset" name="batal" value="Batal"></td>
      </tr>
      <tr>
      <td><hr/>Anda belum mempunyai akun ? daftar <a href="register.php">Disini..!</a></td>
      </tr>
      </form>
      </center>
  </table>
  </body>
</html>