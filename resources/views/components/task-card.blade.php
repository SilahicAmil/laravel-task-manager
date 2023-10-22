<div class="bg-red-500 p-4 mb-2">
    <h1 class="text-xl">
        <a href="/task/{{$tasks->id}}">{{$tasks->title}}</a>
    </h1>
    <span>{{$tasks->due_date}}</span>
    <p>{{$tasks->description}}</p>
</div>
