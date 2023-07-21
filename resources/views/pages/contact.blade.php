@extends('layouts.master')
@section('title', 'Kontakt')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Kontaktní formulář</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('saveContact')}}" method="post">
                            @csrf
                        <div class="form-group mb-3">
                            <label for="name">Jméno:</label>
                            <input type="text" name="name" id="name" class="form-control @error('name')
                                is-invalid
                            @enderror" value="{{old('name')}}">
                            @error('name')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="surname">Příjmení:</label>
                            <input type="text" name="surname" id="surname" class="form-control @error('surname')
                                is-invalid
                            @enderror" value="{{old('surname')}}">
                            @error('surname')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact_message">Zpráva:</label>
                            <input type="text" name="contact_message" id="contact_message" class="form-control @error('contact_message')
                                is-invalid
                            @enderror" value="{{old('contact_message')}}">
                            @error('contact_message')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Odeslat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
