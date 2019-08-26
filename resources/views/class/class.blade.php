<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/class" method="post">
	{{csrf_field()}}
	<input type="text" name="c_name" placeholder="classname">
	<input type="submit" name="submit">


</form>
</body>
</html>