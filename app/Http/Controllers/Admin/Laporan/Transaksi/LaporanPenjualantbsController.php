<?php

namespace App\Http\Controllers\Admin\Laporan\Transaksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Laporan\Transaksi\Penjualantbs\StoreLaporanPenjualantbsRequest;
use App\Models\Armada;
use App\Models\PenjualanTbs;
use App\Models\Pks;
use App\Models\Supplier;
use Illuminate\Http\Request;

class LaporanPenjualantbsController extends Controller
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
        return view('admin.laporan.transaksi.penjualantbs.create',compact('armadas','pkss','suppliers'));
    }

    public function generate(StoreLaporanPenjualantbsRequest $request){

        $laporanpenjualantbs = $request->validated();

        $laporan = PenjualanTbs::query();

        if ($laporanpenjualantbs['periodebulan']) {
            $laporan->where('periodebulan', $laporanpenjualantbs['periodebulan']);
        }

        if ($laporanpenjualantbs['periodetahun']) {
            $laporan->where('periodetahun', $laporanpenjualantbs['periodetahun']);
        }

        if ($laporanpenjualantbs['rotasi']) {
            $laporan->where('rotasi', $laporanpenjualantbs['rotasi']);
        }

        if ($laporanpenjualantbs['tanggal']) {
            $laporan->whereDate('tanggal', $laporanpenjualantbs['tanggal']);
        }

        if ($laporanpenjualantbs['id_armada']) {
            $laporan->where('id_armada', $laporanpenjualantbs['id_armada']);
        }

        if ($laporanpenjualantbs['id_pks']) {
            $laporan->where('id_pks', $laporanpenjualantbs['id_pks']);
        }

        if ($laporanpenjualantbs['id_supplier']) {
            $laporan->where('id_supplier', $laporanpenjualantbs['id_supplier']);
        }

        if ($laporanpenjualantbs['ketlunas']) {
            $laporan->where('ketlunas', $laporanpenjualantbs['ketlunas']);
        }

        if ($laporanpenjualantbs['status']) {
            $laporan->where('status', $laporanpenjualantbs['status']);
        }

        $results = $laporan->get();
        return view('admin.laporan.transaksi.penjualantbs.report',compact('results','laporanpenjualantbs'));
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
