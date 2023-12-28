<!DOCTYPE html>
<html>
<head><h1>REGISTRATION</h1></head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<style>
			div.inset{ border-style : inset;}
			p{ text-align-last: center; }
			h1{ text-align:center; }
			h1{background-color: sienna;}
			body{background-color: powderblue;}
		</style>
<body>
	<p>
	<div class="inset">
	<form action="reg.php" method="post">
	<p>
	<label for ="user"> USERNAME : </label>
	<input type="text" name="uname" ><br>
<p>	<label for ="">  EMAIL : </label>
	<input type="email" name="email" >
	<br>
<p>	<label for ="email"> PASSWORD : </label>
	<input type="password" name="password" ><br>
	<br>
<p>	<lablr for="country"> COUNTRY : </lable>
	<select name="country" >
	<option value=""> SELECT COUNTRY</option>
	<option value="india">INDIA</option>
	<option value="china">CHINA</option>
	<option value="japan">JAPAN</option>
	<option value="usa">USA</option>
    </select>
    <br>
   <p> <lable for="gender" >GENDER : </lable>
    <input type="radio" name="gender" value="female">FEMALE<br>
    <input type="radio" name="gender" value="male">MALE<br>
    <input type="radio" name="gender" value="prefer not to say">PREFER NOT TO SAY
	<br>
	<p><input type="submit" name="register" value =" REGISTER">
    </div>
</body>
</html>