<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBuilding extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
        // ( function () {
        //     if( Auth::user() ) 
        //         if( Auth::user()->rol =='admin' )
        //             return redirect('/admin');
        //         else
        //             return redirect('/inmuebles');
        //         else
        //             return redirect('/login');
        // });
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:155',
            'description' => 'required|min:3|max:1000',
            'price' => 'required|numeric|min:0.01',
            'address' => 'required|min:3|max:200',
            'zip' => 'required|max:5',
            'city' => 'required|max:100',
            'state' => 'required|max:2',
            'country' => 'required|max:2',
            'photo' => 'image'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'El campo Nombre es requerido',
            'description.required' => 'El campo Descripción es requerido',
            'price.required' => 'El campo Precio es requerido',
            'address.required' => 'El campo Dirección es requerido',
            'zip.required' => 'El campo Codigo postal es requerido',
            'city.required' => 'El campo Ciudad es requerido',
            'state.required' => 'El campo Estado es requerido',
            'country.required' => 'El campo País es requerido',
        ];
    }
}
