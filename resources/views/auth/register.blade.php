@extends('layouts.app')

@section('content')
    <div class="bg-darkblue p-16 flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('save')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="p-4">
                <div class=" h-6/12">
                    <img class=" rounded-full w-3/5 h-2/5 mx-auto shadow-lg" id="output" src="{{ asset('img/avatar.svg') }}" alt=""/>
                </div>
                <label >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                        <polyline points="9 15 12 12 15 15" />
                        <line x1="12" y1="12" x2="12" y2="21" />
                      </svg>
                    <input name="image" onchange="loadFile(event)" type="file"  @error('image') border-red-500 @enderror" value="{{ old('image') }}" hidden >
                   
                    <p>Upload Avatar</p>
                </label>
                
            </div>
            <div class="mb-4">
                <label for="description">About me Description</label>
                {{-- <input type="text" name="description" placeholder="Your description" id="" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('description') border-red-500 @enderror" value="{{ old('description') }}" > --}}
                <textarea name="description" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"  @error('description') border-red-500 @enderror" value="{{ old('description') }}" rows="4"></textarea>

                @error('description')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Your name" id="" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}" >

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Your username" id="" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('username') border-red-500 @enderror" value="{{ old('username') }}" >
                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Your email" id="" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email') border-red-500 @enderror" value="{{ old('email') }}" >
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Your Password" id="" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password') border-red-500 @enderror">
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div>
                <button type="submit" class="bg-darkblue text-white px-4 py-3 rounded font-medium w-full" >Register </button>
            </div>
        </form>
        </div>
    </div>

    <script>
        var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output');
          output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
      };
    </script>
@endsection