<x-layout>
    <h1>Hello World</h1>
    <ul>
        @foreach($tasks as $task)
            <x-task-card :tasks='$task'/>
        @endforeach
    </ul>
</x-layout>