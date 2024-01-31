<?php

namespace App\Http\Controllers\Admin\Laporan\Transaksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Laporan\Transaksi\PenjualanBrondolan\StoreLaporanPenjualanBrondolanRequest;
use App\Models\Armada;
use App\Models\PenjualanBrondolan;
use App\Models\Pks;
use App\Models\Supplier;
use Illuminate\Http\Request;

class LaporanPenjualanBrondolanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return view('admin.laporan.transaksi.penjualanbrondolan.create',compact('armadas','pkss','suppliers'));
    }

    public function generate(StoreLaporanPenjualanBrondolanRequest $request){
        $laporanpenjualanbrondolan = $request->validated();

        $laporan = PenjualanBrondolan::query();

        if ($laporanpenjualanbrondolan['periodebulan']) {
            $laporan->where('periodebulan', $laporanpenjualanbrondolan['periodebulan']);
        }

        if ($laporanpenjualanbrondolan['periodetahun']) {
            $laporan->where('periodetahun', $laporanpenjualanbrondolan['periodetahun']);
        }

        if ($laporanpenjualanbrondolan['rotasi']) {
            $laporan->where('rotasi', $laporanpenjualanbrondolan['rotasi']);
        }

        if ($laporanpenjualanbrondolan['tanggal']) {
            $laporan->whereDate('tanggal', $laporanpenjualanbrondolan['tanggal']);
        }

        if ($laporanpenjualanbrondolan['id_armada']) {
            $laporan->where('id_armada', $laporanpenjualanbrondolan['id_armada']);
        }

        if ($laporanpenjualanbrondolan['id_pks']) {
            $laporan->where('id_pks', $laporanpenjualanbrondolan['id_pks']);
        }

        if ($laporanpenjualanbrondolan['id_supplier']) {
            $laporan->where('id_supplier', $laporanpenjualanbrondolan['id_supplier']);
        }

        if ($laporanpenjualanbrondolan['ketlunas']) {
            $laporan->where('ketlunas', $laporanpenjualanbrondolan['ketlunas']);
        }

        if ($laporanpenjualanbrondolan['status']) {
            $laporan->where('status', $laporanpenjualanbrondolan['status']);
        }

        $results = $laporan->get();
        return view('admin.laporan.transaksi.penjualanbrondolan.report',compact('results','laporanpenjualanbrondolan'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
