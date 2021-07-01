<div class="h-auto bg-purple-500">
    <div class="max-w-2xl px-3 py-3 mx-auto md:px-0 md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="font-black text-center text-white">Todo App</a>
            </div>
            <div class="items-center md:block md:mt-0">
                <div class="flex flex-row md:flex-row md:ml-6">
                    <a href="{{ route('todo.create') }}" class="text-white text-md md:text-md">create todo</a>
                    <a href="{{ route('completed-todo') }}" class="ml-4 text-white text-md md:text-md">completed todo</a>
                </div>
            </div>
        </div>
    </div>
</div>
