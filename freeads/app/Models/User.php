<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs pouvant être remplis en masse (mass assignable).
     *
     * @var list<string>
     */
    protected $fillable = [
        'login',
        'email',
        'phone_number',
        'password',
    ];

    /**
     * Les attributs à masquer lors de la sérialisation (JSON, etc.).
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les attributs à caster automatiquement.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Laravel hache automatiquement à la sauvegarde
        ];
    }

    /**
     * Relation : un utilisateur peut avoir plusieurs annonces.
     */
  /*  public function ads()
    {
        return $this->hasMany(Ad::class);
    } */
}
