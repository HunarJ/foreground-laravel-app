@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <h2>Nástěnka</h2>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Počet služeb</h3>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="fs-1 fw-bold">
                            {{$services}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Počet přijatých kontaktů</h3>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="fs-1 fw-bold">
                            {{$contacts}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  
