<html>  
<head>   
<title>  
Registration Page  
</title>  
<style>
     body{
	      margin-left: 10%;
        }
		body{
		background-image:url('back3.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		font-family: cursive;

		}
		
		fieldset{
			width: 60%;
			margin-left:15%;
			margin-top: 12px;
			background-color: grey ;
			opacity: 0.9;
			
			
		}
		h1{
			color: black;
		}
		table td{
			font-variant: inherit;
		}
		
		legend{
		background-color:white;
		border:1;
		}
		h1{
		background-color:gray;
		width:70%;
		margin:auto;
}
		ul{
		list-style-type:none;
		}
		#link1:hover{
			background: yellow;
			font-size: 30px;
		}
</style>
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
</head>  
<body bgcolor="Lightskyblue"> 
<label color="gray"><h1><center>STUDENT REGISTRATION FORM</center></h1></label> 
<fieldset>
<legend>Pesonnel Information</legend>
<form action="display.html">
  <table>
	<tr>
	<td>
		<label> Firstname </label> 
	</td>
	<td>
        <input type="text" name="firstname" size="15" required/> 
	</td>
	</tr>
	<tr>
	<td>
		<label> Middlename </label> 
	</td>
	<td>
        <input type="text" name="Middlename" size="15" required/> 
	</td>
	</tr>
	<tr>
		<td>
		<label> Lastname </label> 	
		</td>
		<td>
		<input type="text" name="lastname" size="15" required/> 
		</td>
	</tr>	
<tr>
<td>
<label>   
Gender : 
</label>
</td>
<td>
Male<input type="radio" name="Gender" value="Male"/> 
Female<input type="radio" name="Gender" value="Female"/> 
</td>
</tr>
<tr>
	<td>
 <label>
 	age
 </label>
</td>
<td>
	<ul>
	 <li><label>Between 15 and 20 Age</label>&nbsp;&nbsp;<input type="checkbox" name="a1"></li>
	 <li><label>Between 20 and 25 Age</label>&nbsp;<input type="checkbox" name="a2"></li>
	 <li><label>Between 25 and 30 Age</label>&nbsp;<input type="checkbox" name="a3"></li>
	 <li><label>Between 30 and 35 Age</label>&nbsp;<input type="checkbox" name="a4"></li>
    </ul>
</td>
</tr>
<tr>
<td>
<label>   
Course   
</label>
</td>
<td>
<select name="courses" >  
<option value="Course" disabled>Courses</option>  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
</select> 
</td>
</tr>
<tr>
<td>
<label>  Phone :  </label> 
</td> 
<td>  
<input type="text" name="phone" size="15" maxlength="10"/>  
</td>
<tr><td colspan="2">
<a href="display.html"><button type="submit">register</button></a>  
</td>
</tr>
</table>
</form>
 <a id="link1" href="display2.html">View</a>
 <button onclick=""></button>
</fieldset>

</body>
</html>    