@extends('layout')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div>
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
            <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">
                Guitar name: {{ $guitar['name'] }}
            </h3>
            <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                <li>
                    Made by: {{ $guitar['brand'] }}
                </li>
                <li>
                    Year made: {{ $guitar['year_made'] }}
                </li>
            </ul>
        </div>

    </div>
@endsection
