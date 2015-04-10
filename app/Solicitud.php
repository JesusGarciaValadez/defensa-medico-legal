<?php namespace DefensaMedicoLegal;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Solicitud extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'applications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_doctor',
        'email',
        'cedula_1',
        'cedula_2',
        'cedula_3',
        'especialidad',
        'telefono_contacto',
        'telefono_celular',
        'parte_republica',
        'direccion_calle_1',
        'direccion_calle_2',
        'direccion_ciudad',
        'direccion_estado',
        'direccion_pais',
        'direccion_postal',
        'confirmed_contract',
        'confirmed_policy'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

}
