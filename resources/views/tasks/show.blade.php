@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-white">{{ $task->title }}</h1>

    <div class="bg-gray-800 shadow overflow-hidden sm:rounded-lg p-4 mb-4">
        <p class="text-gray-300 mb-4">{{ $task->description }}</p>
        <p class="text-gray-500 mb-4">Due Date: {{ $task->due_date }}</p>
        <p class="text-gray-500 mb-4">Status: {{ $task->status }}</p>

        <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded">Edit</a>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
        </form>
        <a href="{{ route('tasks.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Back to Tasks</a>
    </div>
@endsection
