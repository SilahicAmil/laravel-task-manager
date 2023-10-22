<x-layout>
    <div>
        <h1>Create Tasks</h1>
    </div>

    <div>
        <form action="/tasks" method="POST">
            @csrf
            <div>
                <label for="title">Title</label>
                <label>
                    <input type="text" name="title">
                </label>
            </div>

            <div>
                <label for="Description">Description</label>
                <label>
                    <input type="text" name="description">
                </label>
            </div>

            <div>
                <label for="priority">Priority</label>
                <label>
                    <select name="priority">
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="due_date">Due Date</label>
                <label>
                    <input type="date" name="due_date">
                </label>
            </div>
            <button>Submit</button>
        </form>
    </div>
</x-layout>