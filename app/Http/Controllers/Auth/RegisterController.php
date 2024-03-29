<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    // public function showRegistrationForm()
    // {
    //     $path = storage_path() . "/json/ProvinciasLocalidades.json";
    //     $ProvinciasLocalidadesJson = json_decode(file_get_contents($path),true);
        
    //     return view('auth.register' , ['ProvinciasLocalidadesJson'=>$ProvinciasLocalidadesJson]);
    // }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:60'],
            'lastname' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:60', 'unique:users'],
            'dni' => ['required','max:8'],
            'provincia_nombre' => ['required'],
            'localidad' => ['required'],
            'telefono' => ['required'],
            // 'rol' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        if (array_key_exists('rol', $data)) {
            if ($data['rol'] == '1') {
                $rol = 'Prestador';
            }
        }else{
            $rol = 'Cliente';
        }

        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'dni' => $data['dni'],
            'provincia' => $data['provincia_nombre'],
            'localidad' => $data['localidad'],
            'telefono' => $data['telefono'],
            'rol' => $rol,
            'password' => Hash::make($data['password']),
        ]);
    }
}
