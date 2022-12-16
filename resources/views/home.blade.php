@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <span class="float-right"><a href='/listings/create' class="btn btn-secondary pull-right">Create Listings </a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if(count($listings))
                        <table class="table table-striped">
                        <tr>
                           <th>Company</th> 
                        </tr>
                        @foreach($listings as $listing)
                        <tr>
                                <td>{{ $listing->name }}</td>
                                <td>
                                    <form class="float-right ml-2" action="/listings/{{ $listing->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" name="button" class="btn btn-danger"> Delete </button>
                                    </form>
                                <a href="/listings/{{ $listing->id }}/edit" class="btn btn-info float-right">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                        @endif
                    {{-- {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
