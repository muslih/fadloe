<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login view data</title>
</head>
<body>
	<form id="form1" name="form1" action="aksilogin.php">
		
		<table border="1" align="center">
			<tr>
				<td colspan="2">
					<h2>FORM LOGIN</h2>
					<?php if($_GET['pesan']!=""){ ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo $_GET['pesan']; ?>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td>username</td>
				<td>
					<input type="text" name="username" id="username">
				</td>
			</tr>
			<tr>
				<td>password</td>
				<td>
					<input type="password" name="password" id="password">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="login" id="login" value="login">
				</td>
				
			</tr>
		</table>
	</form>
</body>
</html>