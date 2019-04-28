
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>
<hr>
<a href="/student/create">Insert</a>
<hr>
<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>City</th>
    <th>Action</th>
  </tr>
  @foreach($data as $d)
  <tr>
    <td>{{$d->id}}</td>
    <td>{{$d->name}}</td>
    <td>{{$d->city}}</td>
    <td>
      <a href="/student/{{$d->id}}"><button>View</button></a>
      <a href="/student/{{$d->id}}/edit"><button>Edit</button></a>
      <form action="/student/{{$d->id}}" method="post" >
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
