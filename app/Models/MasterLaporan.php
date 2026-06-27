<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterLaporan extends Model
{
    protected $table = 'tbl_master_laporan';
    protected $primaryKey = 'master_laporan_id';

    protected $fillable = [
        'nama_master_laporan',
    ];

    public function refLaporans()
    {
        return $this->hasMany(RefLaporan::class, 'master_laporan_id', 'master_laporan_id');
    }
}