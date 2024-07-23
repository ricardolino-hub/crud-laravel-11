@extends('admin.layouts.templatePages')
@section('title', 'Ediatr Usuário')
@section('content')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Usuário {{ $user->name }}
        </h2>
    </div>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('put')
        @include('admin.users.components.inputs')
    </form>
@endsection