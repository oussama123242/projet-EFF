<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewSite extends Model
{
    use HasFactory;
    protected $table = 'review_site'; // تأكد من صحة اسم الجدول
    protected $fillable = ['client_id', 'description', 'etoile'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
