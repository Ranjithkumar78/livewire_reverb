<div class="flex">
    <div class="w-full ">

        <!-- Add Todo Form -->
        <form class="flex" method="POST" wire:submit.prevent='addTodo'>
        <div>@error('todo') {{ $message }} @enderror</div>

            <input type="text" wire:model='todo' placeholder="New Todo ..." class="w-full mr-2"/>
            <input type="submit" value="add" />
            
            
        </form>
        <ul>
        @foreach($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
        </ul>




    </div>
</div>
