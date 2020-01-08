@extends('admin.layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4 border-b">
            <h1 class="text-xl">Create Question</h1>
        </div>
        <div class="py-3 px-4">
            <form action="{{route('admin.question.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                          Level
                        </label>
                        <input class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700" type="number" min="1" name="level" value="{{old('level', $nextLevel)}}" required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                          Text
                        </label>
                        <textarea name="text" class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"></textarea>
                        {{-- <input class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700" type="number" min="1" name="text" value="{{old('text')}}" required> --}}
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                            file
                        </label>
                        <input class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700" type="file" name="file" value="{{old('file')}}" required>
                    </div>
                    <div class="w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                            file Type
                        </label>
                        <select name="type" class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700" required>
                            <option value="image">IMAGE</option>
                            <option value="audio">AUDIO</option>
                            <option value="video">VIDEO</option>
                        </select>
                    </div>
                </div>

                {{-- <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                            Score
                        </label>
                        <input class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700" type="number" min="0" name="score" required>
                    </div>
                </div> --}}


                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                            Answer
                        </label>
                        <input class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700" type="text" name="answer" value="{{old('answer')}}" required>
                    </div>
                </div>

                <div class="flex">
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 border border-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Create
                    </button>
    
                    <a href="{{route('admin.question.index')}}" class="bg-gray-500 hover:bg-gray-700 font-bold text-white py-2 px-4 rounded">
                        Cancel
                    </a>
                </div>

            </form>
        </div>
    </div>
@endsection
