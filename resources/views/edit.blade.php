<!DOCTYPE html>
<html>
<body>

<h2>Edit Record</h2>

<form action="/student/{{$data->id}}" method="post">
	@csrf
	@method('patch')
  Name:<br>
  <input type="text" name="name" value="{{$data->name}}">
  <br>
  City:<br>
  <input type="text" name="city" value="{{$data->city}}">
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
