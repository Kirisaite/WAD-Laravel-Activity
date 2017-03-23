<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<style type="text/css">
		body{
			font-family: cursive;
		}
		#edit{
			font-family: cursive;
			border-radius: 11px;
			color: green;
			background-color: black;
			width: 7em;
		}
		#delete{
			font-family: cursive;
			border-radius: 11px;
			color: red;
			background-color: black;
			width: 7em;
		}
		#edit:hover{
			opacity: .5;
			background-color: yellow;
		}
		#delete:hover{
			opacity: .5;
			color: blue;
			background-color: red;
		}
		#holder{
			float: center;
			margin-right: auto;
			margin-left: auto;
			width: auto;
			height: auto;
		}
		table{
			color: white;
			text-align: center;
			float: center;
			margin-right: auto;
			margin-left: auto;
			width: 60em;
		}
		#register{
			font-family: cursive;
			float: center;
			margin-right: auto;
			margin-left: auto;
			color: white;
			background-color: black;
			height: 4em;
			width: 9em;
			border-radius: 2em;
		}
		#holderReg{
			float: center;
			margin-right: auto;
			margin-left: auto;
			width: 7em;
			height: 4em;
		}
		#register:hover{
			opacity: .5;
			color: white;
			background-color: black;
		}
	</style>
</head>
<body style="background-color: black">
<div id="holderReg">
<a href="/register"><button id="register">Register</button></a>
</div>
<div id="holder">
<table>
	<tr>
		<th>ID</th>
		<th>ID Number</th>
		<th>Full Name</th>
		<th>Course</th>
		<th>Contact No.</th>
		<th>Guardian</th>
		<th>Manage</th>
	</tr>
	@foreach($students as $student)
	<tr>
		<td>{{$student->id}}</td>
		<td>{{$student->idnum}}</td>
		<td>{{$student->fname}} {{$student->mname}} {{$student->lname}}</td>
		<td>{{$student->course}}</td>
		<td>{{$student->contactnum}}</td>
		<td>{{$student->guardian}}</td>
		<td>
			<a href="/edit/{{$student->id}}"><button id="edit">Edit</button></a>
			<a href="/delete/{{$student->id}}"><button id="delete">Delete</button></a>
		</td>
	</tr>
	@endforeach
</table>
</div>
</body>
</html>