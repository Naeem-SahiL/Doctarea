@extends('layouts.auth-master')

@section('content')
    <form method="post" style="width: 200px" class="d-flex w-20 flex-column" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        {{-- @include('layouts.partials.messages') --}}

        @if (session('failed'))
            <p>{{ session('failed') }}</p>
        @endif

        <label for="floatingName">Email or Username</label>
        <input type="text"  name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
        
        @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
    
    
        <input type="text"  name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        <label for="floatingPassword">Password</label>
        @if ($errors->has('password'))
            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
  
        <button  type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form>
@endsection
