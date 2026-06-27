<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    protected $table = 'tbl_anggaran';
    protected $primaryKey = 'anggaran_id';

    protected $fillable = [
        'rkat_kegiatan_id',
        'prioritas',
        'tahun_anggaran',
        'kode_organisasi',
        'nama_organisasi',
        'kelompok_indikator',
        'kode_tujuan',
        'nama_tujuan',
        'kode_indikator_tujuan',
        'nama_indikator_tujuan',
        'kode_sasaran',
        'nama_sasaran',
        'kode_indikator_sasaran',
        'nama_indikator_sasaran',
        'kode_program',
        'nama_program',
        'kode_indikator_program',
        'nama_indikator_program',
        'kode_kegiatan',
        'nama_kegiatan',
        'deskripsi_kegiatan',
        'is_approved',
        'sumberdana_nama',
        'rkat_belanja_id',
        'rkat_akun_belanja',
        'nama_akun_belanja',
        'uraian',
        'volume',
        'satuan',
        'harga_satuan',
        'jumlah',
        'jumlah_asli',
        'jumlah_realisasi',
        'is_approved_belanja',
        'is_lock',
        'id_penerimaan',
        'akun',
        'nama_akun_penerimaan',
        'rncnpengeluaran_tgl',
    ];

    protected $casts = [
        'tahun_anggaran' => 'integer',
        'volume' => 'decimal:2',
        'harga_satuan' => 'decimal:2',
        'jumlah' => 'decimal:2',
        'jumlah_asli' => 'decimal:2',
        'jumlah_realisasi' => 'decimal:2',
        'is_approved' => 'boolean',
        'is_approved_belanja' => 'boolean',
        'is_lock' => 'boolean',
        'rncnpengeluaran_tgl' => 'date',
    ];
}