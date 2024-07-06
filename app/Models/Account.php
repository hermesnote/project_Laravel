<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    // 使用 HasFactory 是為了啟用這些工廠功能，使得在開發和測試中可以更方便地生成假數據。
    // 一般在 database/factories 目錄下可以自行定義要測試的檔案
    protected $fillable = ['name', 'balance'];
    // 這行代碼確保在創建或更新 Account 模型時，name 和 balance 屬性可以被安全地批量賦值。
}
