<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Menampbahkan middleware untuk authentication page
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Menampilkan data yang ada pada tabel companies
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('companies/companies');
    }

    /**
     * Menampilkan halaman penambahan data companies
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Menambahkan/menyimpan data baru pada tabel companies.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Menampilkan data companies berdasarkan ID companies
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Menampilkan data companies yang akan di edit sesuai ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update data companies sesuai ID.
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
     * Menghapus data companies berdasarkan ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
