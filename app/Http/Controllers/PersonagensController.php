<?php

namespace App\Http\Controllers;

use App\Models\personagens;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PersonagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = personagens::all(); //pego da model tudo de lá

        return view('persons.index', compact('persons')); // vou para a página index com os itens da model
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        personagens::create(
            [
                'name' => $request->name,
                'anime' => $request->anime,
                'description' => $request->description,
                'raca' => $request->raca,
                'Heroi_ou_vilao' => $request->Heroi_ou_vilao,
                'Fraqueza' => $request->Fraqueza,
                'nota_particular' => $request->nota_particular
            ]
        );

        return redirect('/personagens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personagens  $personagens
     * @return \Illuminate\Http\Response
     */
    

    public function show($id)
    {
        $persons = personagens::find($id);

        return view(
            'persons.show',
            compact('persons')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personagens  $personagens
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persons = personagens::find($id);
        return view('persons.edit', compact('persons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personagens  $personagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->only(
            'name',
            'anime',
            'description',
            'raca',
            'Heroi_ou_vilao',
            'Fraqueza',
            'nota_particular'
        );
        $persons = personagens::find($id);
        $persons->update($input);
        return redirect('/personagens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personagens  $personagens
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persons = personagens::find($id);
        $persons->delete();
        return redirect('/personagens');
    }

    public function ola()
    {
        $name = 'Fernando';
        return view('hello', compact('name'));
    }
}
