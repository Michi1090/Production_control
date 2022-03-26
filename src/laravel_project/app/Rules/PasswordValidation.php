<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // 半角英字（小文字）、半角英字（大文字）、半角数字を１文字以上含む8文字以上をバリデーションに設定
        $validation = '/\A(?=.*?\d)(?=.*?[A-Z])(?=.*?[a-z])[a-zA-z\d]{8,}+\z/';
        return preg_match($validation, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'パスワードは、半角英字（小文字）、半角英字（大文字）、半角数字を1文字以上含む8文字以上で入力してください。';
    }
}
