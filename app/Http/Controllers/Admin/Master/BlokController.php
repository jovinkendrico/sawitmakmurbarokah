<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Blok\StoreBlokRequest;
use App\Http\Requests\Admin\Master\Blok\UpdateBlokRequest;
use App\Models\Blok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bloks = Blok::all();
        return view('admin.master.blok.index',compact('bloks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.blok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlokRequest $request)
    {
        //
        $blok = $request->validated();
        Blok::insert($blok);
        Session::flash('success', 'Data Blok Telah Ditambah.');
        return redirect()->route('admin.master.blok.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $blok = Blok::findOrFail($id);
        return view('admin.master.blok.show',compact('blok'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $blok = Blok::findOrFail($id);
        return view('admin.master.blok.edit',compact('blok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlokRequest $request, string $id)
    {
        //
        $blok = $request->validated();
        Blok::findOrFail($id)->update($blok);
        Session::flash('success', 'Data Blok Telah Diupdate.');
        return redirect()->route('admin.master.blok.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Blok::findOrFail($id)->delete();
        Session::flash('success', 'Data Blok Telah Dihapus.');
        return redirect()->route('admin.master.blok.index');

    }
}
