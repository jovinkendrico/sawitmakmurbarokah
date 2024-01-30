<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Transaksi\Penjualantbs\StorePenjualantbsRequest;
use App\Http\Requests\Admin\Transaksi\Penjualantbs\UpdatePenjualantbsRequest;
use App\Models\Armada;
use App\Models\PenjualanTbs;
use App\Models\Pks;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenjualantbsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penjualantbss = PenjualanTbs::all();
        return view('admin.transaksi.penjualantbs.index',compact('penjualantbss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $armadas = Armada::all();
        $pkss = Pks::all();
        $suppliers = Supplier::all();
        return view('admin.transaksi.penjualantbs.create',compact('armadas','pkss','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjualantbsRequest $request)
    {
        //
        $penjualantbs = $request->validated();
        PenjualanTbs::insert($penjualantbs);
        Session::flash('success', 'Data Penjualan TBS Telah Ditambah.');
        return redirect()->route('admin.transaksi.penjualantbs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $penjualantbs = PenjualanTbs::findOrFail($id);
        return view('admin.transaksi.penjualantbs.show',compact('penjualantbs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $armadas = Armada::all();
        $pkss = Pks::all();
        $suppliers = Supplier::all();
        $penjualantbs = PenjualanTbs::findOrFail($id);
        return view('admin.transaksi.penjualantbs.edit',compact('armadas','pkss','suppliers','penjualantbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjualantbsRequest $request, string $id)
    {
        //
        $penjualantbs = $request->validated();
        PenjualanTbs::findOrFail($id)->update($penjualantbs);
        Session::flash('success', 'Data Penjualan TBS Telah Diubah.');
        return redirect()->route('admin.transaksi.penjualantbs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        PenjualanTbs::findOrFail($id)->delete();
        Session::flash('success', 'Data Penjualan TBS Telah Dihapus.');
        return redirect()->route('admin.transaksi.penjualantbs.index');
    }
}
