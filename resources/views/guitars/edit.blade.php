@extends('layout')

@php
    $guitarTitle = 'Edit guitar: ' . $guitar->name;

@endphp
@section('title', $guitarTitle)

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 w-[400px]">
        <a href="{{ url()->previous() }}"
            class="font-medium text-blue-600 dark:text-blue-500 hover:underline mb-4 inline-flex items-center gap-2">
            <svg fill="white" width="15" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 400.004 400.004" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <path
                            d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                        </path>
                    </g>
                </g>
            </svg>
            Go back</a>
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">Edit a
                Guitar</h2>
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-lg">
            <form class="space-y-6" method="POST" action="{{ route('guitars.update', ['guitar' => $guitar->id]) }}">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Guitar
                        Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" autocomplete="name" required
                            value="{{ $guitar->name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 px-2">
                    </div>
                    @error('name')
                        <p class="text-red-400 mt-2 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="brand"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Brand</label>
                    </div>
                    <div class="mt-2">
                        <input id="brand" name="brand" type="text" autocomplete="brand" required
                            value="{{ $guitar->brand }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 px-2">
                    </div>
                    @error('brand')
                        <p class="text-red-400 mt-2 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="year_made"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Year
                            Made</label>
                    </div>
                    <div class="mt-2">
                        <input id="year_made" name="year_made" type="number" autocomplete="year_made" required
                            value="{{ $guitar->year_made }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 px-2">
                    </div>
                    @error('year_made')
                        <p class="text-red-400 mt-2 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
