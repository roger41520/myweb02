<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;
class Article extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'articles';
    protected $fillable = [
        '產品名稱','產品資訊','產品售價','目前庫存'
    ];
}
