@extends('layouts.app')

@section('content')

<div class="w-full p-16 h-full">
    <form class="w-6/12	mx-auto p-8 bg-orange max-h-full rounded-lg" action="/update/{{  $project->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mx-auto w-11/12 flex flex-col h-full">
            <input class="h-12 rounded my-4" type="text" value="{{ $project->title }}" name="title" id="" placeholder="Title">
            <input class="h-12 rounded my-4 text-white" accept="image/*" onchange="loadFile(event)" type="file" name="image" id="image" placeholder="Image">
            <div>
                <img class="h-60" src="/{{ $project->image }}" id="output"/>
            </div>
            <input class="h-12 rounded my-4" value="{{ $project->link }}" type="text" name="link" placeholder="Link">
            <input class="h-12 rounded my-4" value="{{ $project->type }}" type="text" name="type" placeholder="Type">
            <input class="h-14 rounded my-4 mx-auto w-2/5  bg-darkblue text-white" type="submit">
        </div>
    </form>
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