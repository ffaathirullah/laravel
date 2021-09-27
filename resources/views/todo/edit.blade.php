<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <form action="{{route("todo.update", $todo->id)}}" method="POST">
                    @csrf
                    @method("put")
                    <div class="w-full">
                        <label for="exampleInputEmail1">Update</label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="" name="todo" value="{{$todo->todo}}">
                        <button class="" type="submit">
                            Save
                          </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
