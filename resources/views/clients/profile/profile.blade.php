@extends('layouts.master')

@section('content')
    <div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('client.profile.update') }}" method="post">
                    <label for="name">Name:</label>
                    <input type="text" value="name" name="name">
                     <label for="email">Email:</label>
                    <input type="email" value="email" name="email">
                     <label for="phone_number">Phone:</label>
                    <input type="phone" value="phone_number" name="phone_number">
                     <label for="age">Age:</label>
                    <input type="number" value="age" name="age">
                     {{-- <label for="name">Name:</label>
                    <input type="text" value="name" name="name"> --}}
                    <button class="btn btn-primary">Update Profile</button>
                </form>
            </div>          
        </div>

          <div class="card-body">
                {{-- //sso google --}}
                {{-- sso facebook --}}
            </div>
    </div>
@endsection