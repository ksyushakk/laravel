<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Страница регистрации</title>
</head>
<body>
<form action="{{route ('register')}}" method="POST">
    <div class="mx-auto row g-3 align-items-center">
        @if(session()->has('success'))
            <h3>Операция успешно выполнена</h3
        @endif
            <div class="col-auto">
        @csrf
        <input type="text" class="form-control" aria-describedby="passwordHelpInline" name="login" placeholder="Логин:"> <br>
        @error('login') <p>{{$message}}}</p> @enderror
        <input type="text" name="name" class="form-control" aria-describedby="passwordHelpInline" placeholder="ФИО:"> <br>
        @error('name') <p>{{$message}}}</p> @enderror
        <input type="text" name="age" class="form-control" aria-describedby="passwordHelpInline" placeholder="Возраст:"> <br>
        @error('login') <p>{{$message}}}</p> @enderror
        <input type="text" name="address" class="form-control" aria-describedby="passwordHelpInline" placeholder="Адрес:"> <br>
        @error('login') <p>{{$message}}}</p> @enderror
        <input type="email" name="email" class="form-control" aria-describedby="passwordHelpInline" placeholder="Ваша почта:"> <br>
        @error('email') <p>{{$message}}}</p> @enderror
        <input type="password" name="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="Ваша пароль:"> <br>
        @error('password') <p>{{$message}}}</p> @enderror
        <input type="password" name="password_confirmation" class="form-control" aria-describedby="passwordHelpInline" placeholder="Ваша пароль повторно:"> <br>
        <input type="submit"  class="btn btn-primary" value="Регистрация">
            </div>
    </div>
</form>
</body>
</html>
