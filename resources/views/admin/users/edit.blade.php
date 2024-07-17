@extends('admin.layouts.templatePages')
@section('title', 'Ediatr Usuário')
@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

    <x-alert/>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('put')
        @include('admin.users.components.inputs')
        <button type="submit">Editar</button>
    </form>
@endsection