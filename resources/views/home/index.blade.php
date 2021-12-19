@extends('layouts.app-master')

@section('content')
    <div class="">
        @auth
        <h1>Dashboard</h1>
        <p >Only authenticated users can access this section.</p>
        @endauth

        @guest
        <h2>Homepage</h2>
        <p >Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection