<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //forma 1
        //$portafolio = Project::orderBy('created_at', 'DESC')->get();
        
        //Forma latest -- ocupar paginate -- defecto 15 listas de paginacion 
        /* $projects = Project::latest()->paginate();

        return view('portafolio' , compact('projects')); */

        //forma corta mismo resultado
        //latest : mas reciente  -- olest : mas antiguo  de los creado
        return view('projects.index' , [
            'projects' => Project::oldest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
            'project'=> new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request) -- con metodo
    //$request->get('title');
    public function store(SaveProjectRequest $request) // con funcion
    {
                //metodo de laravel
        // Project::create([
        //     //base de dato     dato del request
        //     'title'=> request('title'),
        //     'url'=> request('url'),
        //     'description'=> request('description'),
        // ]);

        // //Segunda manera de enviar datos con el all request
        // //ya que tienen los mismos datos y parametros de la Data Base
        // Project::create(request()->all());

        //--------------------------------------------
       // Project::create(request()->only('title','url')); --solo title y url

       //validacion de campos contra la asignacion masiva
    //    $fields = request()->validate([
    //             'title'=> 'required',
    //             'url'=> 'required',
    //             'description'=> 'required|min:10'
    //             ]);

    //    Project::create($fields); 

    //Project::create($request()->all());
    Project::create($request->validated());


        return redirect()->route('projects.index')->with('status','El proyecto fue creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //Laravel automaticamente lo transforma en formato jason

        //find - findOrFail
        // $project =  Project::findOrFail($id);

        // return view('projects.show', [
        //     'project' => $project
        //     ]);

        //ROUTE MODEL BINDING
        return view('projects.show',[
            'project' => $project
        ]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // return view('projects.edit',[
        //     'project' => $project
        // ]);

        return view('projects.edit', [
                'project'=> $project
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        // $project->update([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description'),
        // ]);

        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //Project::destroy($id);
        $project->delete();

        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con éxito');;
    }
}
