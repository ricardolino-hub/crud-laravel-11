@extends('admin.layouts.templatePages')
@section('title', 'Novo Usuário')
@section('content')
    <h1>Novo Usuário</h1>

    <x-alert/>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Criar</button>
    </form>
@endsection