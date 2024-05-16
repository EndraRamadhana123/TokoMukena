<?php

namespace App\Http\Controllers;

use App\Models\MitraKegiatan;
use App\Http\Requests\StoreMitraKegiatanRequest;
use App\Http\Requests\UpdateMitraKegiatanRequest;

class MitraKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // getViewBarang()
         $mitra_kegiatan = MitraKegiatan::getMitraKegiatan();
         $mitra = Mitra
         return view('mitra_kegiatan.view',
                 [
                     'mitra_kegiatan' => $mitra_kegiatan,
                 ]
         );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMitraKegiatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MitraKegiatan $mitraKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MitraKegiatan $mitraKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMitraKegiatanRequest $request, MitraKegiatan $mitraKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MitraKegiatan $mitraKegiatan)
    {
        //
    }

     // handle fetch all coas ajax request
	public function fetchAll() {
		// $coas = Coa::all();
        $cf = MitraKegiatan::getMitraKegiatan();
		$output = '';
		if (count($cf) > 0) {
			$output .= '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode Mitra</th>
                <th>Nama Mitra</th>
                <th>Jenis Mitra</th>
              </tr>
            </thead>
            <tfoot class="thead-dark">
                <tr>
                <th>Kode Mitra</th>
                <th>Nama Mitra</th>
                <th>Jenis Mitra</th>
                </tr>
            </tfoot>
            <tbody>';
			foreach ($cf as $c) {
				$output .= '<tr>
                <td>' . $c->kode_mitra . '</td>
                <td>' . $c->nama_mitra . '</td>
                <td>' . $c->jenis_mitra . '</td>
                <td style="text-align: center">
                    <a href="#" onclick="updateConfirm(this); return false;" class="btn btn-success btn-icon-split btn-sm editbtn" value="'.$c->id.'" data-id="'.$c->id.'" ><span class="icon text-white-50"><i class="ti ti-pencil"></i></span></a>
                    <a href="#" onclick="deleteConfirm(this); return false;" href="#" value="'.$c->id.'" data-id="'.$c->id.'" class="btn btn-danger btn-icon-split btn-sm deletebtn"><span class="icon text-white-50"><i class="ti ti-trash"></i></span>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}
}
