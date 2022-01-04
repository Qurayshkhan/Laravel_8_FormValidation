<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form validation</title>
</head>
<body>
  
    <form action="" method="POST">
        @if ($errors->any())
        {{$errors}}
    @endif 
@csrf
Name: <input type="text" name="name" value="{{old('name')}}"><br><br> 
email: <input type="email" name="email"  value="{{old('email')}}"><br><br> 
password: <input type="password" name="password"  value="{{old('password')}}"><br><br>
<button type="submit" name="submit">submit</button>
    </form>
                @if (isset($data))
                    @foreach($data as $item)
            {{$item}}
                    @endforeach
                @endif
</body>
</html>