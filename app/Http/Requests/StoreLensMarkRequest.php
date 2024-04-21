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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'classification.required' => '분류를 입력해주세요.',        // 분류
            'classification.max:255' => '255자까지 가능합니다.',        
            'manufacturer.required' => '제조사를 입력해주세요.',        // 제조사
            'manufacturer.max:255' => '255자까지 가능합니다.',          
            'product_name.required' => '제품명을 입력해주세요.',        // 제품명
            'product_name.max:255' => '255자까지 가능합니다.',          
            'refractive_index.required' => '굴절률을 입력해주세요.',    // 굴절률
            'refractive_index.max:255' => '255자까지 가능합니다.',      
            'link.required' => '링크를 입력해주세요.',                  // 링크
            'link.max:255' => '255자까지 가능합니다.'                   
        ];
    }
}
