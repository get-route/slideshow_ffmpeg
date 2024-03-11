<?php

namespace App\Http\Requests\Admin\Metric;

use Illuminate\Foundation\Http\FormRequest;

class ImgMetricRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=3500,min_height=4900,max_width=3550,max_height=4965'
        ];
    }
}
