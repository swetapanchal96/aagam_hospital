<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $table = 'faq';
    protected $primaryKey = 'faq_id';
    protected $fillable = [
        'service_id',
        'question',
        'answer',
        'iStatus',
        'isDelete'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'serviceId');
    }
}
