@extends('admin.layouts.templatePages')
@section('title', 'Ediatr Usuário')
@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

    <x-alert/>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Editar</button>
    </form>
@endsection