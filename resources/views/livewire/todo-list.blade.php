<div class="flex flex-col w-[350px] mx-auto py-16">

    <div class="flex gap-4 justify-between">

        <input type="text"
               wire:model="todoText"
               wire:keydown.enter="addTodo"
               placeholder="Type and hit enter"
               class="flex-1"
        >

        <button wire:click="addTodo"
                class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">
            Add
        </button>

    </div>


    <div class="py-6">
        @if(count($todos) == 0)
            <p class="text-gray-500 text-center">There are no todos</p>

        @else

            @foreach($todos as $index=>$todo)

                <div class="flex gap-4 justify-between items-center py-1">
                    <label class="flex-1">{{$todo->todo}}</label>
                    <button wire:click="deleteTodo({{$todo->id}})">
                        Delete
                    </button>
                </div>

            @endforeach


        @endif




    </div>

</div>
