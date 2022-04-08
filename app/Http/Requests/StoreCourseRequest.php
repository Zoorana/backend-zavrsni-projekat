<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
        return [
            "name" => ["required", "string"],
            "start_date" => ["required", "date"],
            "end_date" => ["required", "date"],
            "planning" => ["nullable"],
            "category_id" => ["required", "exists:categories,id"],
            "subcategory_id" => ["required", "exists:subcategories,id"],
            "user_id" => ["required", "exists:users,id"],
        ];
    }
}
