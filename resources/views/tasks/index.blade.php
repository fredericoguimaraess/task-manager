@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-white">Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Create Task</a>
    </div>

    <form method="GET" action="{{ route('tasks.index') }}" class="mb-4">
        <select name="status" onchange="this.form.submit()" class="bg-gray-800 text-gray-300 border-gray-700 rounded px-2 py-1">
            <option value="">All</option>
            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
    </form>
    
    <ul class="bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        @foreach ($tasks as $task)
            <li class="border-t border-gray-700 px-4 py-4 sm:px-6 flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-semibold text-white">{{ $task->title }}</h3>
                    <p class="text-sm text-gray-400">{{ $task->description }}</p>
                    <p class="text-sm text-gray-500">{{ $task->due_date }} - {{ $task->status }}</p>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
