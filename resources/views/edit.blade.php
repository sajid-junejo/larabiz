@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing<span class="float-right"><a href='/home' class="btn btn-secondary ml-auto">Go Back </a></span></div>
                    <form method="POST" action="/listings/{{ $listing->id }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{ $listing->name }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Enter Your Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{ $listing->address}}">
                        </div>

                        <div class="form-group">
                            <label for="website">Enter your Website</label>
                            <input type="text" class="form-control" name="website" id="website" value="{{ $listing->website }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Enter your email</label>
                            <input type="email" class="form-control" name="email" id="email"  value="{{ $listing->email }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Enter your phone</label>
                            <input type="number" class="form-control" name="phone" id="phone" value="{{ $listing->phone}}">
                        </div>

                        <div class="form-group">
                            <label for="bio">Enter your bio</label>
                            <input type="text" class="form-control" name="bio" id="bio" value="{{ $listing->bio }}">
                            </div>
                        <button type="submit" class="btn btn-primary m-2">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection