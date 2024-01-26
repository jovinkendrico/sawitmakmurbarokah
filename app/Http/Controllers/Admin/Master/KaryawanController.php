<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Master\Karyawan\StoreKaryawanRequest;
use App\Http\Requests\Admin\Master\Karyawan\UpdatePostRequest;
use App\Models\Karyawan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KaryawanController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $karyawans = Karyawan::all();
        return view('admin.master.karyawan.index',compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.master.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKaryawanRequest $request): RedirectResponse
    {
        //
        $karyawan = $request->validated();

        Karyawan::insert($karyawan);
        Session::flash('success', 'Data Karyawan Telah Ditambah.');
        return redirect()->route('admin.master.karyawan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $karyawan = Karyawan::findOrFail($id);

        return view('admin.master.karyawan.show',compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $karyawan = Karyawan::findOrFail($id);
        return view('admin.master.karyawan.edit',compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        //
        $karyawan = $request->validated();

        Karyawan::findOrFail($id)->update($karyawan);

        Session::flash('success', 'Data Karyawan Telah Diubah.');
        return redirect()->route('admin.master.karyawan.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Karyawan::findOrFail($id)->delete();
        Session::flash('success', 'Data Karyawan Telah Dihapus.');
        return redirect()->route('admin.master.karyawan.index');

    }
}
