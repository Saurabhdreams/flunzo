<?php

namespace App\Http\Validators\Main\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash; // Import Hash facade
use App\Models\User; // Import User model

class UpdatePasswordValidator
{
    /**
     * Validate form
     *
     * @param object $request
     * @return void
     */
    static function validate($request)
    {
        try {
            // Find user by email
            $user = User::where('email', $request->email)->first();

            // Ensure the user exists
            if (!$user) {
                throw new \Exception('User not found');
            }

            // Set rules
            $rules = [
                'password' => [
                    'required',
                    'min:8',
                    'max:60', 
                    'regex:/[A-Z]/', 
                    'regex:/[a-z]/',
                    'regex:/[0-9]/',
                    'regex:/[@$!%*#?&]/', 
                    function ($attribute, $value, $fail) use ($user) {
                 
                        if (Hash::check($value, $user->password)) {
                            $fail('The new password must be different from the old password.');
                        }
                    },
                ],
                'password_confirmation' => "required|same:password"
            ];

            $messages = [
                'password.required'              => __('messages.t_validator_required'),
                'password.max'                   => __('messages.t_validator_max', ['max' => 60]),
                'password.min'                   => __('messages.t_validator_min', ['min' => 6]),
                'password.regex' 				 => 'The password must be 8-16 characters long and include at least one uppercase letter, one lowercase letter, one digit and one special character.',
                'password_confirmation.required' => __('messages.t_validator_required'),
                'password_confirmation.same'     => __('messages.t_validator_same')
            ];

            // Set data to validate
            $data = [
                'password'              => $request->password,
                'password_confirmation' => $request->password_confirmation,
            ];

            // Validate data
            Validator::make($data, $rules, $messages)->validate();

            // Reset validation (optional, depending on your application's needs)
            $request->resetValidation();

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
