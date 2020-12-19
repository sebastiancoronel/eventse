<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Notificacion;
use App\Presupuesto;
use Carbon\Carbon;
use Session;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //AGREGUE ESTO POR EL ERROR DE TABLA Al HACER LA MIGRACION DE LA BASE DE DATOS
        
        view()->composer('*',function(View $view){

            $Paquete = Session::get('Servicio');
            //dd($Paquete);
            if ( $Paquete != null ) {
                $CantidadServicios = count($Paquete);
            }else{
                $CantidadServicios = 0;
            }

            $view->with('Paquete',$Paquete)->with('CantidadServicios',$CantidadServicios );
        });
        
        view()->composer('*',function(View $view){
            // Traer Notificaciones
            if ( Auth::user() ) {
                $Notificaciones = Notificacion::where( 'user_id_notificar' , Auth::user()->id )
                                            ->where('visto', 0)
                                            ->Join( 'eventos' , 'notificacions.id_evento' , '=' , 'eventos.id' )
                                            ->select('notificacions.*' , 'eventos.texto', 'eventos.url_redirect')
                                            ->orderBy('id', 'desc')
                                            ->get();

            }else{
                $Notificaciones = null;
            }

            if ( Auth::user()->rol != 'Administrador' ) {
                $PresupuestosEvaluarVencidos = Presupuesto::where( 'user_id', Auth::user()->id )
                                                    ->where('estado' , '=' , 'Aceptado')
                                                    // ->Join( 'servicios' , 'presupuestos.id_servicio' , '=' , 'servicios.id' )
                                                    // ->select( 'presupuestos.*' ,'servicios.nombre', 'servicios.id as id_servicio' )
                                                    // ->orderBy('updated_at', 'desc')
                                                    ->get();
                // dd($PresupuestosEvaluarVencidos);
                $Hoy = Carbon::now();

                foreach ($PresupuestosEvaluarVencidos as $presupuesto_evaluar_vencido) {

                    $fecha_creacion = Carbon::parse($presupuesto_evaluar_vencido->created_at);
                    $fecha_vencimiento = $fecha_creacion->addDays(3);
                    if ( $Hoy > $fecha_vencimiento ) {
                    $presupuesto_evaluar_vencido->estado = 'Sin Respuesta';
                    $presupuesto_evaluar_vencido->update();

                    Notificacion::create([
                        'user_id_notificar' => Auth::user()->id,
                        'user_id_trigger' => Auth::user()->id, //Se dispara solo pero no puede ser null este campo.
                        'id_evento' => 6, //Respuesta presupuesto
                        'visto' => 0,
                    ]);

                    // dd("Vencido" , $Hoy->format('d-m-Y') , "Vencio el: ",$fecha_vencimiento->format('d-m-Y') );
                    }
                }
            }
            
            $view->with( 'Notificaciones', $Notificaciones );
        });

    }
}
