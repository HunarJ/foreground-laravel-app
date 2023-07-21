@extends('layouts.admin')
@section('title', 'Kontaktování')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Seznam kontaktních formulářů</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jméno a příjmení</th>
                                    <th>Zpráva</th>
                                    <th>Akce</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->name}} {{$contact->surname}}</td>
                                    <td>{{$contact->contact_message}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('admin.deleteContact', $contact->id)}}" method="post" class="mx-2">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Smazat</button>
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
