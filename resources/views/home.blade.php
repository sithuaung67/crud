@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('home')}}" class="btn btn-sm btn-primary">add inforamtion</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Name</td>
                                <td>Age</td>
                                <td>NRC</td>
                                <td>Description</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($information as $shows)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$shows->name}}</td>
                                <td>{{$shows->age}}</td>
                                <td>{{$shows->nrc}}</td>
                                <td>{{$shows->description}}</td>
                                <td>
                                    <a href="{{ route('home.edit',$shows->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('home.delete',$shows->id) }}" class="btn btn-danger btn-sm" style="margin-right: -5px !important;">Delete</a>
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