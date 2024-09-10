@extends('layouts.home')

@section('title', 'Login')
<div class="form-login flex items-center justify-center h-screen w-2/4 m-auto">
    <form action='/login-user' method='post''>
        @csrf
        <input class='block py-3 px-2 rounded-md w-full mb-4' type='text' placeholder='username' />
        <input class='block py-3 px-2 rounded-md w-full mb-4' type='password' placeholder='password' />
        <button class='submit block py-3 px-2 rounded-md w-full bg-black text-white'>login</button>
    </form>
</div>
