@extends('admin.layouts.templatePages')
@section('title', 'Novo Usuário')
@section('content')
    <h1>Novo Usuário</h1>

    <x-alert/>

    <form action="{{ route('users.store') }}" method="post">
        @include('admin.users.components.inputs')
        <button type="submit">Criar</button>
    </form>
@endsection