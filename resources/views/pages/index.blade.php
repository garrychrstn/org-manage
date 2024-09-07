@extends('layouts.layout')

@section('title', 'welcome')

@section('content')
    <div class="navtop flex justify-between px-10 mt-5 w-4/5 m-auto">
        <img src="{{ asset('images/logo.png') }}" style="height: 80px;"  />
        <ul class='flex justify-between items-center'>
            <li>about</li>
            <li class='ml-10'>activity</li>
        </ul>
    </div>
@endsection