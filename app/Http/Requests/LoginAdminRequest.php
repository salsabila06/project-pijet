<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginAdminRequest extends FormRequest
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
            'username'=>['required','string'],
            'password'=>['required','string'],
        ];
    }

    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (!Auth::guard('admin')->attempt($this->only('username','password'),$this->boolean('remember'))){
            RateLimiter::hit($this->throttlekey());

            throw ValidationException::withMessages([
                'username'=>__('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttlekey());
    }

    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttlekey(),5)){
            return;
        }

        event(new Lockout($this));

        $seconds=RateLimiter::availableIn($this->throttlekey());

        throw ValidationException::withMessages([
            'username'=>trans('auth.throttle',[
                'seconds'=>$seconds,
                'minutes'=>ceil($seconds/60),
            ]),
        ]);
    }

    public function throttlekey()
    {
        return Str::lower($this->input('username')).'|'.$this->ip();
    }
}
