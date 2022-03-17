@extends('Layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('authorization') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="ApiKey" class="sr-only">Api Key</label>
                    <input type="ApiKey" name="ApiKey" id="ApiKey" placeholder="Api Key"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('ApiKey')
                    border-red-500
                    @enderror" value="{{ old('ApiKey')}}">

                    @error('ApiKey')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="ApiSecret" class="sr-only">Api Secret</label>
                    <input type="ApiSecret" name="ApiSecret" id="ApiSecret" placeholder="Api Secret"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('ApiSecret')
                    border-red-500
                    @enderror" value="{{ old('ApiSecret')}}">

                    @error('ApiSecret')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="ApiToken" class="sr-only">Api Token</label>
                    <input type="ApiToken" name="ApiToken" id="ApiToken" placeholder="Api Token"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('ApiToken')
                    border-red-500
                    @enderror" value="{{ old('ApiToken')}}">

                    @error('ApiToken')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white py-3 rounded font-medium w-full">Authorize</button>
                </div>
            </form>
        </div>
    </div>
@endsection
