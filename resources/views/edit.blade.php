<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
{{-- <form method="POST" action="{{ action('ApiController@edit/{id}')}}"> --}}
<form method="POST" action="/modifier/{{$students->id}}">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    
    <input type="hidden" id="id" value="{{ $students->id}}">

    <div class="form-group">
        <label for="">Entrer Student Name</label>
        <input type="text" class="form-control" name="fname" id="fname" value="{{ $students->fname}}" placeholder="Enter your fname" />
    </div>

    <div class="form-group">
        <label for="">Entrer Student Name</label>
        <input type="text" class="form-control" name="lname" id="lname" value="{{ $students->lname}}" placeholder="Enter your lname" />
    </div>
    <div class="form-group">
        <label for="">Entrer Student Name</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ $students->email}}" placeholder="Enter your email">
    </div>
    <div class="form-group">
        <label for="">Entrer Student Name</label>
        <input type="text" class="form-control" name="password" id="password" value="{{ $students->password}}" placeholder="Enter your password">
    </div>
    <div class="form-group">
    <a href="" type="button" class="btn btn-secondary"> Close </a>
    <button type="submit" name="submit" class="btn btn-primary" > Update</button>
    </div>

   
</body>
</html>