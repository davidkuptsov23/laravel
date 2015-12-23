<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HouseRequest extends Request
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $banks = $this->request->get('bank_list');

        $rule =   [
            'house_code' => 'required|min:3',
            'lot_number' => 'required|min:3',
            'zip' => 'required|min:2',
            'city' => 'required|min:3',
            'street' => 'required|min:3',
            'number' => 'required|min:3',
            'built' => 'required|date',
            'tax_number' => 'required|min:3',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
        ];
//        dd($banks);
        if ($banks) {
            foreach ($banks as $kay => $val) {
                $rule['bank_list.' . $kay] = 'required|integer';
            }
        } else {
            $rule['bank_list'] = 'required|integer';
        }
        return $rule;
    }
}
