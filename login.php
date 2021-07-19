<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!--<link rel="stylesheet" type="text/css"href="file1.css">-->
	<style type="text/css">
		body{
		background-image: url("login.jpg");
		background-size: cover;
		background-repeat: no-repeat;

	}
	fieldset{
		margin: auto;
		width: 380px;
		height: 450px;
		margin-top: 100px;
		background-color:  grey;
		opacity: 0.8;
		border-radius: 10%;
	}
	table{
		margin: auto;
		width: 300px;
		margin-top: 15%;
	}
	table td{
		padding: 5px;
	}
	img{
		border-radius:50%;
		margin:auto;
		}
		button{
			background-color: green;
			border: none;
			padding 15px 32px;
			size: 30px;
		}
	</style>
</head>
<body>
	<!--<img src="login.jpg">-->
	<center>
		<fieldset >
		
		<form action="registration.html">
			<table>
				<thead>
					<center><h1>LOGIN FORM</h1></center>
				</thead>
				<tr>
					<td>
						<label>Enter UserName</label>
					</td>
					<td>
						<input type="text" name="username" size="15" placeholder="enter username" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Enter Password</label>
					</td>
					<td>
						<input type="password" name="pass" size="15" placeholder="enter password" required>
					</td>
				</tr>
				<tr>

					<td colspan="2">
						<center><a href="registration.html"><button type="submit" > Login </button></a></center>
					</td>
				</tr>
			</table>
			</br>
			</br>
			</br>
			<center><a href="Signup.html">Don't Have Account</a></center></br>
			<center><a href="reset.html">Forgot Password</a></center>
		</form>
	</fieldset>
	</center>
</body>
</html>