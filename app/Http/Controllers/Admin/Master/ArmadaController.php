<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Armada\StoreArmadaRequest;
use App\Http\Requests\Admin\Master\Armada\UpdateArmadaRequest;
use App\Models\Armada;
use Illuminate\Support\Facades\Session;


class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $armadas = Armada::all();
        return view('admin.master.armada.index',compact('armadas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.armada.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArmadaRequest $request)
    {
        //
        $armada = $request->validated();
        Armada::insert($armada);
        Session::flash('success', 'Data Armada Telah Ditambah.');
        return redirect()->route('admin.master.armada.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $armada = Armada::findOrFail($id);
        return view('admin.master.armada.show',compact('armada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $armada = Armada::findOrFail($id);
        return view('admin.master.armada.edit',compact('armada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArmadaRequest $request, string $id)
    {
        //
        $armada = $request->validated();
        Armada::findOrFail($id)->update($armada);
        Session::flash('success', 'Data Armada Telah Diupdate.');
        return redirect()->route('admin.master.armada.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Armada::findOrFail($id)->delete();
        Session::flash('success', 'Data Armada Telah Dihapus.');
        return redirect()->route('admin.master.armada.index');
    }
}
