<div class=" w-8/12 border-2 rounded my-10">
    <span class="text-white text-2xl bg-gray-900 w-full flex justify-center my-4">
        Todo App
    </span>
    <input class="p-8 text-white text-2xl bg-gray-800 w-full focus:outline-none focus:border-0" />
    
    <div class="text-white text-1xl flex justify-between items-center mx-4">
        <label for="filter_all">
            <input type="radio" name="filter" id="filter_all" wire:model="filter" value="all">
            <span>All</span>
        </label>
        <label for="filter_pending">
            <input type="radio" name="filter" id="filter_pending" wire:model="filter" value="pending">
            <span>Pending</span>
        </label>
        <label for="filter_done">
            <input type="radio" name="filter" id="filter_done" wire:model="filter" value="done">
            <span>Done</span>
        </label>
    </div>
    <div class="p-5 space-y-5">
        @foreach ($todos as $todo)
            <livewire:todo.item :todo="$todo" :key="$todo->id" />                
        @endforeach
    </div>
</div>
