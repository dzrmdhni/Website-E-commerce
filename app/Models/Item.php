<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $fillable = ['item_name', 'kategori', 'harga' , 'status', 'vendor_id'];

    public function isActive()
    {
        return $this->status == 'aktif';
    }
}
