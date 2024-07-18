@extends('admin.layouts.templatePages')
@section('title', 'Ediatr Usuário')
@section('content')
    <h1>Detalhes do Usuário</h1>

    <x-alert/>

    <ul>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
@endsection