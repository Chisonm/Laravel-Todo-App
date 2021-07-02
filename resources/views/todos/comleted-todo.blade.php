@extends('app.layouts')
@section('content')
    <div class="max-w-2xl px-3 py-3 mx-auto md:px-0 md:justify-between md:items-center">    
        <div class="flex flex-col items-center justify-center mt-12 mb-7">
            @forelse ($todos as $todo )
                 <div class="flex justify-between w-full p-6 mx-auto mt-5 bg-white rounded-lg shadow-md ">
                    <div class="items-center md:mr-3">
                        <p>{{ $todo->title }}</p>
                        <p>{{ Illuminate\Support\Str::limit($todo->content, 30) }}</p>
                    </div>
                    <div class="items-center mt-3 ml-3">
                        <a href="{{ route('todo.show',$todo->id) }}" class="px-2 py-1 font-bold text-center text-white bg-blue-500 rounded-md hover:bg-blue-400"><i class='bx bx-subdirectory-right'></i></a>
                        <a href="javascript:;" role="button" data-toggle="modal" data-target="#exampleModalTwo-" class="px-2 py-1 font-bold text-white bg-red-500 rounded-md hover:bg-red-400 text-cente lg:ml-2"><i class='bx bx-trash'></i></a>
                    </div>
                </div>
            @empty
            <p class="text-lg font-semibold text-purple-900">No Completed Todo Yet <box-icon name='sad' color='red' size='xs'></box-icon></p>
            @endforelse
        </div>
        {{ $todos->links() }}
    </div>
@endsection
