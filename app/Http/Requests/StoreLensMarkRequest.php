<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLensMarkRequest extends FormRequest
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
            'classification' => [
                'required', 
                'max:255'
            ],
            'manufacturer' => [
                'required', 
                'max:255'
            ],
            'product_name' => [
                'required', 
                'max:255'
            ],
            'refractive_index' => [
                'required', 
                'max:255'
            ],
            'link' => [
                'required', 
                'max:255'
            ],
            'keyword' => [
                'required', 
                'max:255'
            ]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'classification.required' => '분류를 입력해주세요.',        // 분류
            'classification.max' => '255자까지 가능합니다.',        
            'manufacturer.required' => '제조사를 입력해주세요.',        // 제조사
            'manufacturer.max' => '255자까지 가능합니다.',          
            'product_name.required' => '제품명을 입력해주세요.',        // 제품명
            'product_name.max' => '255자까지 가능합니다.',          
            'refractive_index.required' => '굴절률을 입력해주세요.',    // 굴절률
            'refractive_index.max' => '255자까지 가능합니다.',      
            'link.required' => '링크를 입력해주세요.',                  // 링크
            'link.max' => '255자까지 가능합니다.',          
            'keyword.required' => '검색어를 입력해주세요.',               // 링크
            'keyword.max' => '255자까지 가능합니다.'                 
        ];
    }

}
