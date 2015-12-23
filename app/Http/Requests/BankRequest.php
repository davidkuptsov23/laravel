<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Redirect;

class BankRequest extends Request
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
        $houses = $this->request->get('house_list');

        $rule =  [
            'bank_name' => 'required|min:3',
            'bank_address' => 'required|min:3',
            'account_number' => 'required|min:3',
            'account_types_id' => 'required|integer',
            'selenium' => 'required|boolean'
        ];
        if ($houses) {
            foreach ($houses as $kay => $val) {
                $rule['house_list.' . $kay] = 'required|integer';
            }
        } else {
            $rule['house_list'] = 'required|integer';
        }
        return $rule;
    }
}
