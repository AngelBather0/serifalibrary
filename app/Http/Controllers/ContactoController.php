<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\contactos;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = contactos::orderBy('id', 'desc')->paginate(6);
        return view('contactos.index', [
            'contactos' => $contactos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contacto = new contactos;
        $contacto->fecha = Carbon::now()->format('Y-m-d H:i:s');
        $contacto->correo = $request->email;
        $contacto->nombre = $request->name;
        $contacto->asunto = $request->asunto;
        $contacto->comentario = $request->comment;
        $contacto->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
