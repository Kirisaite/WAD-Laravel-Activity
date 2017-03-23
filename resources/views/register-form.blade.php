<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		body{
		background-color: black;
		font-family: cursive;
	}
		#holder{
			border:1px solid white;
			float:center;
			margin-top: 3em;
			margin-right: auto;
			margin-left: auto;
			width: 20em;
			height: 22em;
			border-top-left-radius: 2em; 
			border-bottom-right-radius: 2em; 
		}
		table{
			float: center;
			margin-right: auto;
			margin-left: auto;
			margin-top:2em;
		}
		td{
			border:solid black 1px;
			margin: 7em;
		}
		p{
			color: white;
			text-align: center;
			font-size: 60px;
		}
		button{
			font-family: cursive;
			margin-left: 8.7em;
			margin-top: 2em;
			width: 7em;
			height: 3em;
			border-radius: 1.5em;
			color: white;
			background-color: black;
		}
		button:hover{
			opacity: .5;
			color: white;
			background-color: black;
		}
		input{
			border-radius: 2em;
			font-family: cursive;
		}
	</style>
</head>
<body>
<p>Register</p>
<div id="holder">
	<form method="POST" action="/submit">
		{{csrf_field()}}
		<table>
			<tr>
				<td>
					<input type="text" name="idnum" placeholder="ID Number">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="fname" placeholder="First Name">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="mname" placeholder="Middle Name"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="lname" placeholder="Last Name"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="course" placeholder="Course"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="contactnum" placeholder="Contact Number"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="guardian" placeholder="Guardian"><br>
				</td>
			</tr>
		</table>
		<button type="submit">Submit</button>
	</form>
</div>
</body>
</html>