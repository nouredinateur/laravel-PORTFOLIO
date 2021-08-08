
<div>
    <h3 class="font-mermelad font-bold text-3xl ml-14 mt-14">Featured Work</h3>
    <div class="grid grid-cols-3 gap-x-0 w-full px-16">
        
        @if ($projects->count())
        @foreach ($projects as $project)
        <div class=" mx-14 my-14 shadow-lg box-border	w-4/5	rounded-b-lg">
            <img class="h-64	" src="{{ $project->image }}" alt="">
            <div class="h-max p-4	">
                <p class="font-semibold	">{{ $project->title}}</p>
                <div class="w-max p-2 my-2 text-white rounded-2xl bg-darkblue shadow">
                    <p>{{ $project->type }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
</div>   
<div class="p-24 mx-auto my-36 shadow-lg box-border	w-8/12	rounded-b-lg">
    <p>There is no projects listed yet</p>
</div> 
@endif
<div class="h-40"></div>
