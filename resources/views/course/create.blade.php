<x-layouts.app title="Create Course">
    <h1>Courses</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        @include('course._form')

        <button type="submit" class="btn">Create Course</button>
        <a href="{{ route('courses.index') }}">Cancel</a>
    </form>
</x-layouts.app>
