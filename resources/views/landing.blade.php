@extends('layouts.home')

@section('title', 'welcome')

@section('content')
    <div class="navtop flex justify-between px-10 mt-5 w-4/5 m-auto bg-white py-6 rounded-xl">
        <img src="{{ asset('images/logobem.png') }}" style="height: 60px;"  />
        <ul class='flex justify-between items-center'>
            <li>about</li>
            <li class='ml-10'>activity</li>
        </ul>
    </div>
    <div class="hero flex justify-around items-center m-auto w-4/5 px-10 py-6 mt-12">
        <img src="{{ asset('images/logo.png') }}" style="height: 350px;" />
        <div class="hero-text font-bold text-center">
            <h1>BADAN EKSEKUTIF MAHASISWA</h1>
            <p>FAKULTAS ILMU KOMPUTER</p>
            <p>UNIVERSITAS DUTA BANGSA SURAKARTA</p>
        </div>
    </div>
@endsection