<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'serviceId';
    protected $fillable = [
        'serviceName',
        'category_id',
        'serviceImage',
        'serviceDescription',
        'metaTitle',
        'metaKeyword',
        'metaDescription',
        'iStatus',
        'isDelete'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'service_id', 'serviceId');
    }
}
