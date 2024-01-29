<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Pks\StorePksRequest;
use App\Http\Requests\Admin\Master\Pks\UpdatePksRequest;
use App\Models\Pks;
use Illuminate\Support\Facades\Session;


class PksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pkss = Pks::all();
        return view('admin.master.pks.index',compact('pkss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.pks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePksRequest $request)
    {
        //
        $pks = $request->validated();
        Pks::insert($pks);
        Session::flash('success', 'Data PKS Telah Ditambah.');
        return redirect()->route('admin.master.pks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pks = Pks::findOrFail($id);
        return view('admin.master.pks.show',compact('pks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pks = Pks::findOrFail($id);
        return view('admin.master.pks.edit',compact('pks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePksRequest $request, string $id)
    {
        //
        $pks = $request->validated();
        Pks::findOrFail($id)->update($pks);
        Session::flash('success', 'Data PKS Telah Diubah.');
        return redirect()->route('admin.master.pks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Pks::findOrFail($id)->delete();
        Session::flash('success', 'Data PKS Telah Dihapus.');
        return redirect()->route('admin.master.pks.index');
    }
}
