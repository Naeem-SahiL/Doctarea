@extends('layouts.auth-master')

@section('content')
    <h2>Registeration</h2>
    
        <form class="" action="{{ route('register.perform') }}" method="POST">
            @csrf

            @if (session('success'))
                <p>{{ session('success') }}</p>
                
            @endif
            <div class="d-flex flex-column position-absolute  end-50">

                <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
                @error('name')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <input type="text" name="username" placeholder="username" value="{{ old('username') }}">
                @error('username')
                    <p style="color: red">{{ $message }}</p>
                @enderror
        
                <label for="cars">user role:</label>
                <select name="userRole" id="roles" value="{{ old('userRole') }}">
                    <option value="patient" selected>Patient</option>
                    <option value="doctor">Doctor</option>
                    <option value="admin">Admin</option>
                </select>
                @error('userRole')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <input type="text" name="password" placeholder="password" value="{{ old('password') }}">
                @error('password')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <input type="text" name="password_confirmation" placeholder="re enter password">
                @error('password_confirmation')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <button type="submit"> Register</button>
            </div>
        </form>
      
    
    
@endsection