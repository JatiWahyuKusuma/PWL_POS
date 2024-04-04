<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StokModel extends Model
{
    use HasFactory;

    protected $table = 't_stok'; //mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'stok_id'; //mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = [
        'stok_id',
        'barang_id',
        'user_id',
        'stok_tanggal',
        'stok_jumlah'
    ];
    // @var array

 
}
