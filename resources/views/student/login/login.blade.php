<form method="get" action="{{ action('studentcontroller@log_in') }}">
	@csrf
Username:<input type="text" name="name">
Password:<input type="password" name="password">
<input type="submit" name="Login">
</form>