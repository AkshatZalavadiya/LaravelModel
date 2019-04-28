<!DOCTYPE html>
<html>
<body>

<h2>Add Record</h2>

<form action="/student" method="post">
	@csrf
  Name:<br>
  <input type="text" name="name" >
  <br>
  City:<br>
  <input type="text" name="city" >
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
