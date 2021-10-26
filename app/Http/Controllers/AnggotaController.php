<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //deklasi variable title yang akan tampil pada view
        $title="Daftar Angggota";
        $anggota=[(object)[
            'id_agt' =>1,
            'nama_agt'=> 'Anggota1',
            'nim'=>'1231',
            'alamat_agt'=>'Negara',
            'id_peminjaman'=>'1',
            'foto_agt'=>'uploads/anggotas/anggota1.png'
    ], (object)[
        'id_agt' =>2,
            'nama_agt'=> 'Anggota2',
            'nim'=>'12312',
            'alamat_agt'=>'Negara',
            'id_peminjaman'=>'3',
            'foto_agt'=>'uploads/anggotas/anggota2.png'
        
    ]];
        $anggota=collect($anggota);
        return view('admin.daftaranggota', compact('title','anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
