<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::get();
        return view('crud' ,[
            'projects' => $projects,
        ]);
    }
    public function home(){
        $projects = Project::latest()->paginate(6);
        return view('home', [
            'projects' => $projects,
        ]);
    }
    public function crud(Request $request){

        $this->validate($request, [
            "title" => "required",
            "image" => "required",
            "link"=> "required",
            "type" => "required"
        ]);

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore =  time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        }


        Project::create([
            "user_id" => auth()->user()->id,
            "title" => $request->title,
            "image" => 'storage/image/' . $fileNameToStore,
            "link"=> $request->link,
            "type"=> $request->type,
            
        ]);


        return redirect('/crud');

    }
    public function destroy($id) {
       $project = Project::find($id);
       $project->delete();
        return redirect('/crud');
    }

    public function edit($id)
    {
    $project = Project::find($id);

    return view('projects.update',compact('project'));
    }


    public function update(Request $request,Project $project ,$id) {

        $project = Project::find($id);
        
        $this->validate($request, [
            "title" => "required",
            "image" => "required",
            "link"=> "required",
            "type" => "required"
        ]);
        $project->title = $request->title;
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore =  time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        }
        
        $project->image = 'storage/image/' . $fileNameToStore;
        $project->link = $request->link;
        $project->type = $request->type;
        $project->save(); 
        // $project->update($request->all());
        return redirect('/crud');
    }
}
