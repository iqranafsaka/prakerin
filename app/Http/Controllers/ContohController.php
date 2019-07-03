<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = ['nama', 'nis', 'kelas', 'jurusan', 'hobby', 
                 'ekskul', 'umur', 'tgl_lahir', 'alamat', 'asal_sekolah'];
        $mahasiswa = ['perguruan_tinggi', 'tanggal_berdiri', 'nomor_skpt', 'tanggal_skpt', 'alamat',
                  'kota', 'kode_pos', 'telefon', 'email', 'website'];
        $programstudy = ['kode', 'nama_program_study', 'status', 'jenjang', 'jmlh_dosen_ttp',
                  'jmlh_mhs', 'rasio_dosen_ttp', 'umur', 'alamat', 'tujuan'];
        $transaksi = ['harga', 'nama_barang', 'kode_barang', 'supplier', 'tag',
                      'kategori', 'waktu_pemesanan', 'waktu_pembelian', 'alamat', 'total_harga'];
        $guru = ['nama', 'status', 'umur', 'alamat', 'kode_guru',
                 'mata_pelajaran', 'keahlian', 'tgl_lahir', 'no_tlp', 'jam_pelajaran'];
        return [$siswa, $mahasiswa, $programstudy, $transaksi, $guru];
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
