<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Transaksi\PenjualanBrondolan\StorePenjualanBrondolanRequest;
use App\Http\Requests\Admin\Transaksi\PenjualanBrondolan\UpdatePenjualanBrondolanRequest;
use App\Models\Armada;
use App\Models\PenjualanBrondolan;
use App\Models\Pks;
use App\Models\Supplier;
use Illuminate\Support\Facades\Session;
class PenjualanBrondolanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penjualanbrondolans = PenjualanBrondolan::all();
        return view('admin.transaksi.penjualanbrondolan.index',compact('penjualanbrondolans'));
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
        return view('admin.transaksi.penjualanbrondolan.create',compact('armadas','pkss','suppliers'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjualanBrondolanRequest $request)
    {
        //
        $penjualanbrondolan = $request->validated();
        PenjualanBrondolan::insert($penjualanbrondolan);
        Session::flash('success', 'Data Penjualan Brondolan Telah Ditambah.');
        return redirect()->route('admin.transaksi.penjualanbrondolan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $penjualanbrondolan = PenjualanBrondolan::findOrFail($id);
        return view('admin.transaksi.penjualanbrondolan.show',compact('penjualanbrondolan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $penjualanbrondolan = PenjualanBrondolan::findOrFail($id);
        $armadas = Armada::all();
        $pkss = Pks::all();
        $suppliers = Supplier::all();
        return view('admin.transaksi.penjualanbrondolan.edit',compact('penjualanbrondolan','armadas','suppliers','pkss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjualanBrondolanRequest $request, string $id)
    {
        //
        $penjualanbrondolan = $request->validated();
        PenjualanBrondolan::findOrFail($id)->update($penjualanbrondolan);
        Session::flash('success', 'Data Penjualan Brondolan Telah Diubah.');
        return redirect()->route('admin.transaksi.penjualanbrondolan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        PenjualanBrondolan::findOrFail($id)->delete();
        Session::flash('success', 'Data Penjualan Brondolan Telah Dihapus.');
        return redirect()->route('admin.transaksi.penjualanbrondolan.index');
    }
}
