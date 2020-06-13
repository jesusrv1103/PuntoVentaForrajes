<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected $fillable = ['nombre','codigo','stock','imagen','descripcion','marca'];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo' =>  'required|unique:articulos|max:20',
            'nombre' =>  'required|max:60',
            'stock' =>  'required|min:0|max:100000|numeric',
            'imagen' =>  'image|mimes:jpeg,png|max:3000',
            'descripcion' =>  'required',
            'marca' =>  'required',
            'u_medida_id' =>  'required',
            

        ];
    }


    
    public function attributes()
    {
        return [
            'codigo' => 'codigo del producto',
            'nombre' => 'nombre del producto',
            'stock' => 'cantidad del producto',
            'imagen' => 'imagen del producto',
            'descripcion' => 'descripcion del producto',
            'marca' => 'descripcion del producto',
            'u_medida_id' => 'descripcion del produc',
        ];
    }
}
