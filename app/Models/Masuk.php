<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    use HasFactory;

    //  protected $fillable = ['lamp', 'alamat', 'tanggal', 'nomor', 'prihal', 'petunjuk'];

    protected $guarded = ['id'];

    
    public function masuk()
    {
        return $this->belongsTo(Masuk::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['searchmasuk'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%'.$search.'%')
            ->orWhere('nomor', 'like', '%'.$search.'%')
            ->orWhere('pengirim', 'like', '%'.$search.'%')
            ->orWhere('tanggal', 'like', '%'.$search.'%')
            ->orWhere('alamat', 'like', '%'.$search.'%')
            ->orWhere('keterangan', 'like', '%'.$search.'%');
        });
    }

}
