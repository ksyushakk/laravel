@extends('index')

@yield('title', 'Страница авторизации')

@section('content')
    <div class="container">
        <div class="roq">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{route ('login')}}" method="POST">
                    @if(session()->has('errorSuccess'))
                        <div class="alert alert-danger">{{session()->get('errorSuccess')}}</div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="inputLogin" class="form-label">Ваш логин:</label>
                        <input type="text"
                               class="form-control" @error('login') is-invalid @enderror
                               name="login"
                               id="inputLogin"
                               aria-describedby="invalidLogin">
                        @error('login')
                        <div id="invalidLogin" class="invalid-feedback">

                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваш пароль:</label>
                        <input
                            type="password"
                            name="password"
                            class="form-control" @error('password') is-invalid @enderror
                            id="inputPassword"
                            aria-describedby="invalidPassword">
                        @error('password')
                        <div id="invalidPassword" class="invalid-feedback">

                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit"  class="btn btn-primary">Авторизоваться</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
