@if (session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
                {{ session('success') }}
        </div>
@endif

@if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800">
                {{ session('message') }}
        </div>
@endif

@if (session()->has('error'))
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
                {{ session('error') }}
        </div>
@endif

@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800">
                        {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif