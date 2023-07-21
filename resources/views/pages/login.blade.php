@extends('layouts.master')
@section('title', 'Login')    
@section('content')
    <section>
        <div class="container">
            <h3>Přihlášení</h3>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" placeholder="info@info.cz" class="form-control @error('email') has-error @enderror">
                            @error('email')
                                <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Heslo:</label>
                            <input type="password" id="password" name="password" placeholder="*******" class="form-control @error('password') has-error @enderror">
                            @error('password')
                                <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="field">
                            <button type="submit" class="btn btn-primary btn-block">Přihlásit</button>
                        </div> 
                        <div class="my-3">
                            <p>Nemáte účet? <a href="{{route('register')}}">Registrujte se</a></p>
                        </div> 
                    </form>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
