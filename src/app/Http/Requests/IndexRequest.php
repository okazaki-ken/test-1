<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'family_name' => ['required'],
            'first_name'=> ['required'],
            'sex' => ['required'],
            'email'=> ['required','email'],
            'tel-1'=>['required','numeric','digits_between:1,5'],
            'tel-2'=>['required','numeric','digits_between:1,5'],
            'tel-3'=>['required','numeric','digits_between:1,5'],
            'address'=> ['required'],
            'kinds'=> ['required'],
            'oder'=> ['required','max:120']
        ];
    }

    public function messages(){

        return [
            'family_name.required' => '姓を入力してください',
            'first_name.required'=> '名を入力してください',
            'sex.required' => '性別を選択してください',
            'email.required'=> 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel-1.required'=>'電話番号を入力してください',
            'tel-1.numeric'=> '電話番号は5桁までの数字で入力してください',
            'tel-1.digits_between'=>'電話番号は5桁までの数字で入力してください',
            'tel-2.required'=>'電話番号を入力してください',
            'tel-2.numeric'=> '電話番号は5桁までの数字で入力してください',
            'tel-2.digits_between'=>'電話番号は5桁までの数字で入力してください',
            'tel-3.required'=>'電話番号を入力してください',
            'tel-3.numeric'=> '電話番号は5桁までの数字で入力してください',
            'tel-3.digits_between'=>'電話番号は5桁までの数字で入力してください',
            'address.required'=> '住所を入力してください',
            'kinds.required'=> 'お問い合わせの種類を選択してください',
            'oder.required'=> 'お問い合わせの内容を入力してください',
            'oder.max'=>'お問合せの内容は120文字以内で入力してください'
        ];
        
    }
}
