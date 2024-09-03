<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
    '產品名稱',
	'產品資訊',
	'產品售價',
    '目前庫存',
	'image',
	'image2',
    ];
}
