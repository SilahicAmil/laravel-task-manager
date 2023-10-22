<x-layout>
<div>
    <h1 class="text-xl">
        {{$task->title}}
    </h1>
    <span>{{$task->due_date}}</span>
    <p>{{$task->description}}</p>
</div>
</x-layout>