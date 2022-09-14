@extends('index')

@section('title', 'Страница регистрации')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{route('register')}}" method="POST">
                    @if(session()->has('success'))
                        <div class="alert alert-success">Операция успешно выполнена</div
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
                            <label for="inputName" class="form-label">Ваше имя:</label>
                            <input type="text"
                                   name="name"
                                   class="form-control" @error('name') is-invalid @enderror
                                   id="inputName"
                                   aria-describedby="invalidName">
                            @error('name')
                            <div id="invalidName" class="invalid-feedback">

                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputAge" class="form-label">Ваш возраст:</label>
                            <input
                                type="text"
                                name="age"
                                class="form-control" @error('age') is-invalid @enderror
                                id="inputAge"
                                aria-describedby="invalidAge">
                            @error('age')
                            <div id="invalidAge" class="invalid-feedback">

                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Ваш адрес:</label>
                            <input
                                type="text"
                                name="address"
                                class="form-control" @error('address') is-invalid @enderror
                                id="inputAddress"
                                aria-describedby="invalidAddress">
                            @error('address')
                            <div id="invalidAddress" class="invalid-feedback">

                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Ваша почта:</label>
                            <input
                                type="text"
                                name="email"
                                class="form-control" @error('email') is-invalid @enderror
                                id="inputEmail"
                                aria-describedby="invalidEmail" >
                            @error('email')
                            <div id="invalidEmail" class="invalid-feedback">

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
                        <div class="mb-3">
                            <label for="inputPassword_confirmation" class="form-label">Ваша пароль повторно:</label>
                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control" @error('password_confirmation') is-invalid @enderror
                                   id="inputPassword_confirmation"
                                   aria-describedby="invalidPasswordConfirmation">
                            @error('password_confirmation')
                            <div id="invalidPasswordConfirmation" class="invalid-feedback">

                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit"  class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
