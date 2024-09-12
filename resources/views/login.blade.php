@extends('layouts.home')

@section('title', 'Login')
<div class="form-login flex items-center justify-center h-screen w-2/4 m-auto">
    <div class="box w-1/2">
        <h1 class='text-2xl mb-5'>Login</h1>
        <form action='/login-user' method='post''>
            @csrf
            <input class='block bg-white py-3 px-2 rounded-md w-full mb-4 ' type='text' name='nim' placeholder='nim' />
            <input class='block bg-white py-3 px-2 rounded-md w-full mb-4' type='password' name='password' placeholder='password' />
            <button class='submit block py-3 px-2 rounded-md w-full bg-black text-white'>login</button>
        </form>
    </div>
</div>
