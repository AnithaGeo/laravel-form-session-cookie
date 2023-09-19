<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <h1>Form</h1>
    <form action="{{route('submit.form')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old("name")}}">
        @error('name')         
            <p>{{$message}}</p>            
        @enderror
        <input type="number" name="age" placeholder="Age" value="{{old("age")}}">
        @error('age')         
        <p>{{$message}}</p>            
        @enderror
        <input type="date" name="date" placeholder="Date" value="{{old("date")}}">
        @error('date')         
        <p>{{$message}}</p>            
        @enderror
        <input type="file" name="image[]" accept="image/" multiple>
        @error('image')         
        <p>{{$message}}</p>            
        @enderror
        <input type="submit">
    </form>
</body>
</html>