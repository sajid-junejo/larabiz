@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ $listings->name }}</h1><span class="float-end"><a class="btn btn-secondary" href="/">Go Back</a></span></div>

                <div class="card-body">
                        <div class="list-group">                                                                
                                <div class="list-group-item bg-dark text-warning m-2">
                                   <h4>Address : {{ $listings->address}}</h4>
                                </div>

                                <div class="list-group-item bg-dark text-warning m-2">
                                    <h4>Website : {{ $listings->website}}</h4>
                                 </div>

                                <div class="list-group-item bg-dark text-warning m-2">
                                    <h4>Email : <a href="mailto:{{ $listings->email }}?Subject=Hello%20again" target="_top">Send Mail</a></h4>
                                 </div>

                                 <div class="list-group-item bg-dark text-warning m-2">
                                    <h4>Phone : {{ $listings->phone }}</h4>
                                 </div>

                                 <div class="list-group-item bg-dark text-warning m-2">
                                    <h4>Bio :  {{ $listings->bio }}</h4>
                                 </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection