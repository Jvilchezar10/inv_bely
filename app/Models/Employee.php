<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillatable = [
        'cod_emp',
        'name',
        'last_name',
        'phone',
        'email',
        'created_at',
        'updated_at'
    ];

    public static function getTableColumns()
    {
        return Schema::getColumnListing((new self())->getTable());
    }
}
