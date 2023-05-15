<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    <h1>Result save successfully </h1>
    <table border="1" class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_number</th>
      <th scope="col">People</th>
      <th scope="col">Time</th>
      <th scope="col">Info</th>
      <th scope="col">Info_2</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tour as $t)
    <tr>
      <th scope="row">{{$t->id}}</th>
      <td>{{$t->First_name}}</td>
      <td>{{$t->Last_name}}</td>
      <td>{{$t->Email}}</td>
      <td>{{$t->Phone_number}}</td>
      <td>{{$t->Date}}</td>
      <td>{{$t->People}}</td>
      <td>{{$t->Time}}</td>
      <td>{{$t->Info}}</td>
      <td>{{$t->Info_2}}</td>
      <td><a href='/edit/{{$t->id}}'>Edit</a></td>
      <td><a href="/delete/{{$t->id}}">Delete</a></td>
    </tr>
  
    @endforeach
  </tbody>
</table>
</body>
</html>