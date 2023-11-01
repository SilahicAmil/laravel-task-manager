<x-layout>
<div>
    <h1 class="text-xl">
        {{$task->title}}
    </h1>
    <span>{{$task->due_date}}</span>
    <p>{{$task->description}}</p>

    @auth
    <form action="/task/{{$task->id}}/delete" method="POST">
        @csrf
    {{--Since Form only has POST OR GET use @method for what you need--}}
        @method('DELETE')
        <button>Delete</button>
    </form>
    @endauth
</div>
</x-layout>