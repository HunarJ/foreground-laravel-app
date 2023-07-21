@extends('layouts.master')
@section('title', 'Detail')
@section('content')
<main class="homepage">
    @include('pages.components.header')
    
    
    <div class="container">
        <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{$service->title}}</h4>
                        </div>
                        <div class="card-body">
                            <h5>{{$service->short_description}}</h5>
                            <p>
                                {{$service->description}}
                            </p>
                            
                        </div>
                        <div class="card-footer">
                            <a href="{{route('home')}}">
                                <button type="submit" class="btn btn-primary">Zpět</button>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</main>

@endsection
