<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *join('nivels', 'nivels.id', '=', 'users.idnivel')->select('*')->
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminlte_image(){
        $idusuario = auth()->id();
        $usuariologin = User::where('id', '=', $idusuario)->first();
        $foto = $usuariologin->perfil;

        echo 'imgperfil/'.$foto;
    }

    public function adminlte_desc(){
        $idusuario = auth()->id();
        $usuariologin = User::where('id', '=', $idusuario)->first();
        $nivel = $usuariologin->idnivel;

        if($nivel=='1'){
            echo "Administrador";
        } elseif($nivel=='2'){
            echo "Cliente";
        } elseif($nivel=='3'){
            echo "Vendedor";
        } elseif($nivel=='4'){
            echo "Proovedor";
        } elseif($nivel=='5'){
            echo "Contador";
        } elseif($nivel=='6'){
            echo "Controlador";
        } elseif($nivel=='7'){
            echo "Supervisor";
        }
        
    }

    public function adminlte_profile_url(){
        return 'profile/username';
    }
}
