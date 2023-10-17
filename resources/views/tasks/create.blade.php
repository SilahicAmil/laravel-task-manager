<x-layout>
    <div>
        <h1>Create Tasks</h1>
    </div>

    <div>
        <form action="/tasks" method="POST">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title">
            </div>

            <button>Submit</button>
        </form>
    </div>
</x-layout>