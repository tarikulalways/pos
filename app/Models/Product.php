<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Supplier;
use App\Models\InvoiceProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category(){
        return $this->belongsTo(Category::class, 'categoryId');
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplierId');
    }
    public function invoiceProduct(){
        return $this->hasMany(InvoiceProduct::class, 'productId');
    }
}