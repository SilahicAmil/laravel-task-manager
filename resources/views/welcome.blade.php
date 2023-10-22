<x-layout>
    <ul class="mt-10">
        @foreach($tasks as $task)
            <x-task-card :tasks='$task'/>
        @endforeach
    </ul>
    {{$tasks->links()}}
</x-layout>