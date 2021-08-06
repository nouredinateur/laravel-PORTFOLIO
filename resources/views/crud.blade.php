@extends('layouts.app')


@section('content')

<div class="w-full p-16 h-full">

    <form class="w-6/12	mx-auto p-8 bg-orange max-h-full	 rounded-lg" action="{{ route('crud') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mx-auto w-11/12 flex flex-col h-full">
            <input class="h-12 rounded my-4" type="text" name="title" id="" placeholder="Tile">
            <input class="h-12 rounded my-4 text-white" accept="image/*" onchange="loadFile(event)" type="file" name="image" id="image" placeholder="Image">
            <div>
                <img class="h-60" id="output"/>
            </div>
            <input class="h-12 rounded my-4" type="text" name="link" placeholder="Link">
            <select class="h-12 rounded my-4 " name="type" id="">
                <option value="School Project">School Project</option>
                <option value="Freelance">Freelance</option>
                <option value="Side Project">Side Project</option>
            </select>
            <input class="h-14 rounded my-4 mx-auto w-2/5  bg-darkblue text-white" type="submit" placeholder="Submit">
        </div>
    </form>
    <div class="w-full max-h-full	 mt-24">
        <table class="table-fixed mx-auto rounded-md text-white">
            <thead class="bg-orange text-grey h-14 rounded-lg">
              <tr>
                <th class="w-1/12">ID</th>
                <th class="w-2/12">Title</th>
                <th class="w-2/12">Image</th>
                <th class="w-2/12">Link</th>
                <th class="w-2/12">Type</th>
                <th class="w-2/12">Action</th>
              </tr>
            </thead>
            <tbody class="bg-black max-h-52	text-center	">
              @if ($projects->count())
              @foreach ($projects as $project)
              <tr class="h-24">
                <td>{{ $project->id }}</td>
                <td >{{ $project->title }}</td>
                <td><img class="w-5/12 mx-auto shadow-lg" src="{{ $project->image }}" alt=""></td>
                <td>{{ $project->link }}</td>
                <td>{{ $project->type }}</td>
                <td>
                  <a class="w-max p-4 bg-grey text-black rounded-md shadow-md" href="delete/{{ $project->id  }}">Delete</a>
                  <a class="w-max p-4 bg-orange text-white rounded-md shadow-md" href="edit/{{ $project->id  }}">Update</a>
                </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
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