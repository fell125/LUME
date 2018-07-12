<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CampeonatoStoreRequest;
use App\Http\Requests\CampeonatoUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use App\Campeonato;

class CampeonatoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campeonatos = Campeonato::orderBy('id', 'DESC')->paginate();

        return view('admin.campeonatos.index', compact('campeonatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.campeonatos.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampeonatoStoreRequest $request)
    {
        $campeonato = Campeonato::create($request->all());

        //IMAGE
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $campeonato-> fill(['file' => asset($path)])->save();
        }

        return redirect()-> route('campeonatosAdmin.index', $campeonato->id)
             ->with('info', 'Campeonato criado com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campeonato = Campeonato::find($id);

        return view('admin.campeonatos.show', compact('campeonato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campeonato = Campeonato::find($id);

        return view('admin.campeonatos.edit', compact('campeonato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampeonatoUpdateRequest $request, $id)
    {
        $campeonato = Campeonato::find($id);
        $campeonato->fill($request->all())->save();

        //IMAGE
        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $campeonato-> fill(['file' => asset($path)])->save();
        }

        return redirect()-> route('campeonatosAdmin.index', $campeonato->id)
             ->with('info', 'Campeonato atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campeonato = Campeonato::find($id)->delete();

        return back()->with('info', 'Campeonato excluído com sucesso');
    }
}
