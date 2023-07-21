@extends('layouts.admin')
@section('title', 'Služby')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Vytvoření služby</h5>
                        <a href="{{route('admin.create')}}">
                            <button type="submit" class="btn btn-primary">Vytvořit službu</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Název</th>
                                    <th>Url</th>
                                    <th>Krátký popis</th>
                                    <th>Akce</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                <tr>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->url}}</td>
                                    <td>{{$service->short_description}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('admin.deleteService', $service->id)}}" method="post" class="mx-2">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Smazat</button>
                                        </form>
                                        <form action="{{route('admin.editService', $service->id)}}" method="get">
                                            @csrf
                                            <button class="btn btn-primary" type="submit">Upravit</button>
                                        </form>
                                        
                                    </td>
                                </tr> 
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  
