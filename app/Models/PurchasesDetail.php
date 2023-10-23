<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voucher;
use App\Models\Employee;
use App\Models\Provider;

class PurchasesDetail extends Model
{
    use HasFactory;

    protected $table = 'purchases_details';
    protected $fillable = [
        'voucher_id',
        'voucher_name',
        'employee_id',
        'purchase_code',
        'purchase_date',
        'provider_id',
        'origin',
        'total',
        'creatd_at',
        'updated_at'
    ];

    public function voucher():BelongsTo
    {
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(Provider::class);
    }

    public function Purchas()
    {
        return $this->hasMany(Purchas::class, 'purchase_id');
    }
}
