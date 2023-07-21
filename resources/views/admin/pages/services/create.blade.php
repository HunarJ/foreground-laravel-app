@extends('layouts.admin')
@section('title', 'Vytvoření služby')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Vytvoření služby</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.saveService')}}" method="post">
                            @csrf
                        <div class="form-group mb-3">
                            <label for="title">Název služby:</label>
                            <input type="text" name="title" id="title" class="form-control @error('title')
                                is-invalid
                            @enderror" value="{{old('title')}}">
                            @error('title')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="short_description">Krátký popis:</label>
                            <input type="text" name="short_description" id="short_description" class="form-control @error('short_description')
                                is-invalid
                            @enderror" value="{{old('short_description')}}">
                            @error('short_description')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Popis:</label>
                            <input type="text" name="description" id="description" class="form-control @error('description')
                                is-invalid
                            @enderror" value="{{old('description')}}">
                            @error('description')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Vytvořit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 