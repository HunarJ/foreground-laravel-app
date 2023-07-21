@extends('layouts.master')
@section('title', 'Služby')
@section('content')
<main class="homepage">
    @include('pages.components.header')
    
    
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-3 my-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{$service->title}}</h5>
                        </div>
                        <div class="card-body">
                            {{$service->short_description}}
                        </div>
                        <div class="card-footer">
                            <a href="{{route('detail', $service->url)}}">
                                <button type="submit" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
