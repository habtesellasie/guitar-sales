@extends('layout')

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 w-[400px]">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">Create a
                Guitar</h2>
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-lg">
            <form class="space-y-6" method="POST" action="{{ route('guitars.store') }}">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Guitar
                        Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" autocomplete="name" required
                            value="{{ old('name') }}"
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
                            value="{{ old('brand') }}"
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
                            value="{{ old('year_made') }}"
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
