@extends('layouts.home')

@section('title', 'Manage BEM')

@section('content')
    <div class="hero text-3xl text-center mt-16">
        <h1>Welcome to {{ $handle->division->periodes->year }}</h1>
    </div>
    <div class="setup-form w-1/2 m-auto mt-16">
        <h1 class='text-2xl mb-8'>First, Create Division</h1>
        <form action="/mass-division" method="post" class="division">
            @csrf
            <input type='hidden' value='default' name='divs'>
            <button class="default-divisis block bg-slate-700 w-2/3 m-auto px-10 py-4 rounded-md text-white text-center"
                type='submit'>
                <h1 class='text-xl'>Uses last periode's divisions</h1>
                <small>Ketua, Wakil Ketua, Sekretaris, Humin, Humas, etc...</small>
            </button>
        </form>
        <form action='/mass-division' method='post' class='division'>
            @csrf
            <h1 class='text-center block m-auto text-2xl'>or</h1>
            <textarea id="divisis" rows="4" name='divs'
                class="block p-2.5 w-2/3 m-auto text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="separate divisioni by comma"></textarea>
            <button
                class='block bg-slate-700 w-1/3 m-auto px-10 py-4 rounded-md text-white text-center mt-2'>submit</button>
        </form>
    </div>
@endsection
