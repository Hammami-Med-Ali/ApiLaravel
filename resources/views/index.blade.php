
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="jumbotron">
        <div class="row">
        <a href="http://add-data">Add Data</a>
        <br>
        <a href="http://add-data">Update Data</a>
        </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">fname</th>
      <th scope="col">lname</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
    @foreach ($students as $student)
      <th scope="row">1</th>
      <td>{{$student->id}}</td>
      <td>{{$student->fname}}</td>
      <td>{{$student->lname}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->password}}</td>
      
    <td><a href="/editdata/{{$student->id}}" class="btn btn-success">Edit</a></td>
    <td><a href="/editdata/{{$student->id}}" class="btn btn-success">Delete</a></td>
      
    </tr>
    @endforeach
    </table>
        </div>
        </div>
</body>
</html>