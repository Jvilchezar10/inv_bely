<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voucher;
use App\Models\Employee;
use App\Models\Client;

class SaleDetail extends Model
{
    use HasFactory;

    protected $table = 'sale_details';
    protected $fillable = [
        'voucher_id',
        'voucher_name',
        'employee_id',
        'sales_code',
        'sales_date',
        'client_id',
        'origin',
        'total',
        'creatd_at',
        'updated_at'
    ];

    public function voucher(): BelongsTo
    {
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function Sales()
    {
        return $this->hasMany(Sale::class, 'sale_id');
    }
}
