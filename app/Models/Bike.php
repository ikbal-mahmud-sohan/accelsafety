<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bike extends Model
{
    /** @use HasFactory<\Database\Factories\BikeFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'bike_des_1',
        'bike_des_2',
        'bike_des_3',
        'bike_des_4',
        'bike_des_5',
        'bike_des_6',
        'bike_des_7',
        'bike_des_8',
        'bike_des_9',
        'bike_des_10',
        'bike_des_11',
        'is_bike_1',
        'is_bike_2',
        'is_bike_3',
        'is_bike_4',
        'is_bike_5',
        'is_bike_6',
        'is_bike_7',
        'is_bike_8',
        'is_bike_9',
        'is_bike_10',
        'is_bike_11',
        'bike_remarks_1',
        'bike_remarks_2',
        'bike_remarks_3',
        'bike_remarks_4',
        'bike_remarks_5',
        'bike_remarks_6',
        'bike_remarks_7',
        'bike_remarks_8',
        'bike_remarks_9',
        'bike_remarks_10',
        'bike_remarks_11',
        'fit',
        'checked_by',
        'reviewed_by',
        'checked_by_date',
        'reviewed_by_date',
        'checked_by_signature',
        'reviewed_by_signature',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date',
    ];

    protected $casts = [
        'checked_by_signature' => 'array', 
        'reviewed_by_signature' => 'array',
    ];
    
    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
