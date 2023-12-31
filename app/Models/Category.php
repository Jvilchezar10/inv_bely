<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = [
        'name',
        'state',
        'created_at',
        'updated_at'
    ];

    public static function getTableColumns() {
        return Schema::getTableColumns((new self())-> getTable());
    }
}
