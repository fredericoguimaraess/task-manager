@extends('layouts.app')

@section('content')
    <div class="w-full max-w-md mx-auto bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-white">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-300">Email:</label>
                <input type="email" name="email" class="w-full px-4 py-2 bg-gray-900 text-gray-300 border border-gray-700 rounded-lg @error('email') border-red-500 @enderror" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-300">Password:</label>
                <input type="password" name="password" class="w-full px-4 py-2 bg-gray-900 text-gray-300 border border-gray-700 rounded-lg @error('password') border-red-500 @enderror" required>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">Login</button>
        </form>
    </div>
@endsection
