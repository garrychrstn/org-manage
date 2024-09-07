@extends('layouts.home')

@section('title', 'Temporary CRUD')
@section('content')
<div class="form-periode">
    <form method='post' action='reg-periode'>
        @csrf
        <input class='input' type='number' name='year' placeholder="year">
        <input class='input' type='number' name='name' placeholder="name">
        <button class='button' >register periode</button>
    </form>
</div>
<div class="form-divisi">
    <form method='post' action='reg-divisi'>
        @csrf
        <input class='input' type='number' name='name' placeholder="name">
        <input class='input' type='number' name='year' placeholder="year">
        <button class='button' >register divisi</button>
    </form>
</div>
<div class="form-periode">
    <form method='post' action='reg-periode'>
        @csrf
        <input class='input' type='number' name='year' placeholder="year">
        <input class='input' type='number' name='name' placeholder="name">
        <button class='button' >register periode</button>
    </form>
</div>
<div class="form-periode">
    <form method='post' action='reg-periode'>
        @csrf
        <input class='input' type='number' name='year' placeholder="year">
        <input class='input' type='number' name='name' placeholder="name">
        <button class='button' >register periode</button>
    </form>
</div>
@endsection