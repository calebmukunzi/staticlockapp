<!DOCTYPE html>
<html>
<head>
	<title>RESET Page</title>
	<link rel="stylesheet" type="text/css" href="file.css">
	<style type="text/css">
		legend{
			color: white;
		}
	</style>
</head>
<body>
	<label color="gray"><h1><center>RESET PASSWORD</center></h1></label>
	<fieldset>
		<legend>Reset Password</legend>
		<form action="login.html">
		<table>
			<tr>
				<td>Enter the password</td>
				<td>
					<input type="password" name="password" required>
				</td>
			</tr>
			<tr>
				<td>Re-enter Your Password</td>
				<td>
					<input type="password" name="repass" required>
				</td>
			</tr>
			<tr>
				<td>Enter Your Email</td>
				<td>
					<input type="email" name="email" required>
				</td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>
					<input type="text" name="code" value="+250" disabled size="2" required>
					<input type="text" name="phone" maxlength="8" size="12" required>
				</td>

			</tr>
			<tr>

					<td colspan="2">
						<center><a href="login.html"><button type="submit"> RESET</button></a></center>
					</td>
			</tr>
		</table>
	</form>
		
	</fieldset>
	
</body>
</html>