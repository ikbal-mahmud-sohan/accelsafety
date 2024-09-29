<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function approvedDocuments(): HasMany
    {
        return $this->hasMany(HseControlVisitorsDoc::class, 'approved_by');
    }

    /**
     * Get the documents created by the user.
     */
    public function createdDocuments(): HasMany
    {
        return $this->hasMany(HseControlVisitorsDoc::class, 'created_by');
    }

    /**
     * Get the documents last updated by the user.
     */
    public function updatedDocuments(): HasMany
    {
        return $this->hasMany(HseControlVisitorsDoc::class, 'updated_by');
    }

    public function approvedVehicleSafetDocuments(): HasMany
    {
        return $this->hasMany(HseVehicleSafetyDoc::class, 'approved_by');
    }

    
    public function createdVehicleSafetDocuments(): HasMany
    {
        return $this->hasMany(HseVehicleSafetyDoc::class, 'created_by');
    }

    public function updatedVehicleSafetDocuments(): HasMany
    {
        return $this->hasMany(HseVehicleSafetyDoc::class, 'updated_by');
    }
}
