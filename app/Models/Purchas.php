<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchasesDetail;
use App\Models\Product;

class Purchas extends Model
{
    use HasFactory;

    protected $table = 'purchas';
    protected $fillable = [
        'purchase_id',
        'product_id',
        'quantity',
        'price',
        'subtotal',
        'created_at',
        'updated_at'
    ];

    public static function getTableColumns()
    {
        return Schema::getColumnListing((new self())->getTable());
    }

    public function purchasesDetails()
    {
        return $this->belongsTo(PurchasesDetail::class, 'purchase_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
