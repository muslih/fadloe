<!DOCTYPE html>
<html>
<head><title>Login Siswa</title></head>

<body>
<form id="form1" name="form1" method="post" action="include/aksilogin.php">
  <table border="1" align="center" width="350">
    <tr><td colspan="2" align="center"><strong>FORM LOGIN</strong></td></tr>
     <?php if($_GET['pesan']!=""){ ?>
    <tr>
      <td colspan="2"><?php echo $_GET['pesan']; ?></td>
    </tr>
    <?php }	?>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="login" id="login" value="Login" /></td>
    </tr>   
  </table>
</form>
</body>
</html>