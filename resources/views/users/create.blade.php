@extends('layouts.app')
@section('content')
    <div class="container mx-auto ">
        {{-- // form data user --}}
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="card-title text-capitalize text-light">Form User</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        <div id="email" class="invalid-feedback">
                            Please enter your email.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_comfirmation" id="password_comfirmation" class="form-control"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
            </div>
            </form>
        </div>
    </div>
@endsection
