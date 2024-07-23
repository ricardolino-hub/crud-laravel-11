@extends('admin.layouts.templatePages')
@section('title', 'Ediatr Usuário')
@section('content')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detalhes do Usuário {{ $user->name }}
        </h2>
    </div>

    <ul class="max-w-md space-y-1 text-gray-500 list-disc dark:text-gray-400">
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>

    <x-alert/>

    @can('admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900s">
                Deletar
            </button>
        </form>
    @endcan
@endsection