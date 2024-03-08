@extends('layout')

@section('title', 'Show All Guitarl Lists')

@section('content')
    <div class="w-[400px] mx-auto sm:px-6 lg:px-8 max-h-[500px] overflow-scroll border-b border-blue-50">

        @if (count($guitars) > 0)
            <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                @foreach ($guitars as $guitar)
                    <div class="mt-4">
                        <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white hover:underline">
                            <a href="{{ route('guitars.show', ['guitar' => $guitar['id']]) }}">{{ $guitar['name'] }}</a>
                        </h3>

                        <li>
                            Made by: {{ $guitar['brand'] }}
                        </li>
                        <li>
                            Year made: {{ $guitar['year_made'] }}
                        </li>
                    </div>

                    <div class="flex gap-2">
                        <a href="{{ route('guitars.edit', ['guitar' => $guitar->id]) }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline my-1 inline-block">Edit</a>

                        <form action="{{ route('guitars.destroy', ['guitar' => $guitar->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="font-medium text-red-600 dark:text-red-500 hover:underline my-1 inline-block">
                                Delete
                            </button>

                        </form>


                    </div>

                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                @endforeach
            </ul>
        @else
            <h2 class="dark:text-white">There are no guitars to display</h2>
        @endif


    </div>

    <a href="{{ route('guitars.create') }}"
        class="font-medium text-blue-600 dark:text-blue-500 hover:underline my-4 inline-block">Create
        a
        guitar</a>
@endsection
