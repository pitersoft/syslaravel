<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Permiso;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('tablas', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campou = $permiso->usuarios;
            $campops = $permiso->personas;
            $campopm = $permiso->permisos;
            $campod = $permiso->diligencias;
            if ($campou == '1' || $campops == '1' || $campopm == '1' || $campod == '1'){
               return true;
            }

           return false;

        });

        Gate::define('reportes', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $camporv = $permiso->visitas;
            $camporpm = $permiso->reporte_permisos;
            $campord = $permiso->reporte_diligencias;
            if ($camporv == '1' || $camporpm == '1' || $campord == '1'){
               return true;
            }

           return false;

        });

        Gate::define('usuarios', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campo = $permiso->usuarios;
            if ($campo == '1'){
               return true;
            }

           return false;

        });
        Gate::define('personas', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campo = $permiso->personas;
            if ($campo == '1'){
               return true;
            }

           return false;

        });
        Gate::define('visitas', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campo = $permiso->visitas;
            if ($campo == '1'){
               return true;
            }

           return false;

        });
        Gate::define('permisos', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campo = $permiso->permisos;
            if ($campo == '1'){
               return true;
            }

           return false;

        });
        Gate::define('reportepermisos', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campo = $permiso->reporte_permisos;
            if ($campo == '1'){
               return true;
            }

           return false;

        });
        Gate::define('diligencias', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campo = $permiso->diligencias;
            if ($campo == '1'){
               return true;
            }

           return false;

        });
        Gate::define('reportediligencias', function ($user) {
            $idusuario = auth()->id();
            $usuariologin = User::where('id', '=', $idusuario)->first();
            $nivel = $usuariologin->idnivel;
            $permiso = Permiso::where('idnivel', '=', $nivel)->first();
            $campo = $permiso->reporte_diligencias;
            if ($campo == '1'){
               return true;
            }

           return false;

        });

    }
}
