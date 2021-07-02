@extends('app.layouts')
@section('content')
    <div class="max-w-2xl px-3 py-3 mx-auto md:px-0 md:justify-between md:items-center">    
        <div class="flex flex-col items-center justify-center mt-12 mb-7">
            @forelse ($todos as $todo )
                 <div class="flex justify-between w-full p-6 mx-auto mt-5 bg-white rounded-lg shadow-md ">
                    <div class="items-center md:mr-3">
                        <p class="text-sm">{{ $todo->title }}</p>
                        <p class="text-xs">{{ Illuminate\Support\Str::limit($todo->content, 25) }}</p>
                    </div>
                    <div class="items-center mt-3 ml-3">
                        <a href="{{ route('todo.show',$todo->id) }}" class="inline-block px-2 font-bold text-center text-white bg-blue-500 rounded-md sm:px-1 sm:py-1 md:px-1 hover:bg-blue-400"><i class='bx bx-subdirectory-right bx-xs'></i></a>
                        <a href="javascript:;" role="button" data-toggle="modal" data-target="#exampleModalTwo-" class="inline-block px-2 font-bold text-white bg-red-500 rounded-md hover:bg-red-400 text-cente"><i class='bx bx-trash bx-xs'></i></a>
                    </div>
                </div>
            @empty
            <p class="text-lg font-semibold text-purple-900">No Completed Todo Yet <box-icon name='sad' color='red' size='xs'></box-icon></p>
            @endforelse
        </div>
        {{ $todos->links() }}
    </div>
@endsection
