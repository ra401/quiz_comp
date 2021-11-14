<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
<style>
	body{
		background: skyblue;
	}
	*{
		box-sizing: border-box;
	    -webkit-box-sizing:border-box;
		box-sizing: border-box;
	}
	.wrap{
		width: 400px;
		margin: auto;
		height: auto;
		background: black;
		padding: 15px;
	}
	input[type=text]{
		width: 100%;
		padding: 10%;
		font-size: 22px;
		font-weight: bold;
		margin-top: 20px;
		border-radius: 5px;
	}
	input[type=button]{
		width: 89px;
		padding: 10px;
		font-size: 22px;
		font-weight: bold;
		border-radius: 5px;
	}
	#del{
	     width:100%;
	}
	
	
	
	</style>
</head>

<body>
Developed by Rashmi Ranjan Acharya<br>
Thats calculator price is 150/-

<div class="wrap">
<form name="cal">
<input type="text" name="display">
<br><br>

<input type="button" value ="9" onClick="cal.display.value+='9'">
<input type="button" value ="8" onClick="cal.display.value+='8'">
<input type="button" value ="7" onClick="cal.display.value+='7'">
<input type="button" value ="+" onClick="cal.display.value+='+'">
<br><br>
<input type="button" value ="6" onClick="cal.display.value+='6'">
<input type="button" value ="5" onClick="cal.display.value+='5'">
<input type="button" value ="4" onClick="cal.display.value+='4'">
<input type="button" value ="-" onClick="cal.display.value+='-'">
<br><br>
<input type="button" value ="3" onClick="cal.display.value+='3'">
<input type="button" value ="2" onClick="cal.display.value+='2'">
<input type="button" value ="1" onClick="cal.display.value+='1'">
<input type="button" value ="*" onClick="cal.display.value+='*'">
<br><br>
<input type="button" value ="0" onClick="cal.display.value+='0'">
<input type="button" value ="/" onClick="cal.display.value+='/'">
<input type="button" value ="%" onClick="cal.display.value+='%'">
<input type="button" value ="." onClick="cal.display.value+='.'">
<br><br>
<input type="button" value ="(" onClick="cal.display.value+='('">
<input type="button" value =")" onClick="cal.display.value+=')'">
<input type="button" value ="^" onClick="cal.display.value+='^'">
<input type="button" value ="#" onClick="cal.display.value+='#'">
<input type="button" value ="CE" onClick="cal.display.value+='0'">



<input type="button" value ="=" onClick="cal.display.value=eval(cal.display.value)">
<br><br>
<input type="button" value ="DELETE" onClick="cal.display.value= ''" id ="del">

	</form>
	
</body>

</html>