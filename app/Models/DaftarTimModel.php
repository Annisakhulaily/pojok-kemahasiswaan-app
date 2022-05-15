<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DaftarTimModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_daftartim')->get();
    }
}

        // return [
        //     [
        //         'nim' => '1903062',
        //         'nama' => 'Annisa Khusnul Laily',
        //         'jurusan' => 'Teknik Informatika',
        //         'kelas' => 'D3TI3C'
        //     ]
        // ];
