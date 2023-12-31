<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';
    protected $fillabel = [
        'name',
        'state',
        'created_at',
        'updated_at'
    ];

    public static function getTableColumns()
    {
        return Schema::getColumnListing((new self())->getTable());
    }
}
