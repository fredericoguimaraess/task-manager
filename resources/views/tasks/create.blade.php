@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-white">Create Task</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST" class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-300 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline bg-gray-900 border-gray-700">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-300 text-sm font-bold mb-2">Description</label>
            <textarea name="description" placeholder="Description" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline bg-gray-900 border-gray-700">{{ old('description') }}</textarea>
        </div>
        <div class="mb-4">
            <label for="due_date" class="block text-gray-300 text-sm font-bold mb-2">Due Date</label>
            <input type="date" name="due_date" value="{{ old('due_date') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline bg-gray-900 border-gray-700">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-300 text-sm font-bold mb-2">Status</label>
            <select name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline bg-gray-900 border-gray-700">
                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create Task
            </button>
        </div>
    </form>
@endsection
