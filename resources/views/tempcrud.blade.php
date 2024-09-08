@extends('layouts.home')

@section('title', 'Temporary CRUD')
@section('content')
<div class="temp-crud m-auto w-1/3 text-center bg-white rounded-md">
    <h1>TEMPORARY CRUD</h1>
    <div class="form-periode">
        <form method='post' action='reg-periode'>
            <p>periode form</p>
            @csrf
            <input class='input' type='number' name='year' placeholder="year">
            <input class='input' type='text' name='name' placeholder="name">
            <button class='button' >register periode</button>
        </form>
    </div>
    <div class="form-divisi">
        <form method='post' action='reg-divisi'>
            <p>divisi form</p>
            @csrf
            <input class='input' type='text' name='name' placeholder="name">
            <select name='periode' id="periode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 m-auto">
                <option selected>Pilih Kabinet</option>
                @foreach ($periodes as $periode)
                    <option value="{{ $periode->id }}">{{ $periode->name }}</option>
                @endforeach
            </select>
            <button class='button' >register divisi</button>
        </form>
    </div>
    <div class="form-proker">
        <form method='post' action='reg-proker'>
            <p>proker form</p>
            @csrf
            <input class='input' type='number' name='year' placeholder="year">
            <input class='input' type='number' name='name' placeholder="name">
            <button class='button' >register periode</button>
        </form>
    </div>
    <div class="form-member">
        <form method='post' action='reg-member'>
            <p>member form</p>
            @csrf
            <input class='input' type='number' name='year' placeholder="year">
            <input class='input' type='number' name='name' placeholder="name">
            <button class='button' >register periode</button>
        </form>
    </div>
</div>
@endsection