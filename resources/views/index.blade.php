@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Business Listings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (count($listings))
                        <div class="list-group">                                                                    
                            @foreach ($listings as $list)
                                <div class="list-group-item bg-dark text-warning m-2">
                                   <h4><a href="/listings/{{ $list->id }}">{{ $list->name }}</a></h4>
                                </div>
                            @endforeach
                        </div>
                    @else

                    <p>No Listings Found</p>

                    @endif
                    

                </div>
            </div>
        </div>
    </div>

@endsection