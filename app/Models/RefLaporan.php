<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefLaporan extends Model
{
    protected $table = 'tbl_ref_laporan';
    protected $primaryKey = 'ref_laporan_id';

    protected $fillable = [
        'master_laporan_id',
        'nama_ref_laporan',
        'mapping',
        'keterangan1',
        'keterangan2',
    ];

    public function masterLaporan()
    {
        return $this->belongsTo(MasterLaporan::class, 'master_laporan_id', 'master_laporan_id');
    }
}