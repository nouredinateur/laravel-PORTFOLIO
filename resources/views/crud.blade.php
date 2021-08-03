@extends('layouts.app')


@section('content')

<div class="w-full p-16 h-full	bg-orange">

    <form class="w-6/12	mx-auto p-8 bg-black max-h-full	 rounded-lg" action="{{ route('crud') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mx-auto w-11/12 flex flex-col h-full">
            <input class="h-12 rounded my-4" type="text" name="title" id="" placeholder="Tile">
            <input class="h-12 rounded my-4 text-white" accept="image/*" onchange="loadFile(event)" type="file" name="image" id="image" placeholder="Image">
            <div>
                <img class="h-60" id="output"/>
            </div>
            <input class="h-12 rounded my-4" type="text" name="link" placeholder="Link">
            <select class="h-12 rounded my-4 " name="type" id="">
                <option value="1">School Project</option>
                <option value="2">Freelance</option>
                <option value="3">Side Project</option>
            </select>
            <input class="h-14 rounded my-4 mx-auto w-2/5  bg-darkblue text-white" type="submit" placeholder="Submit">
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