<?php

namespace App\Http\Validators\Main\Account\Password;

use Illuminate\Support\Facades\Validator;

class EditValidator
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

            // Set rules
            $rules    = [
                'current_password'          => 'required|min:8|max:60',
                'new_password'              =>  [
                    'required',
                    'string',
                    'min:8',
                    'max:16', 
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/'
                ],
                'new_password_confirmation' => 'required|min:6|max:60|same:new_password',
            ];

            // Set errors messages
            $messages = [
                'current_password.required'          => __('messages.t_validator_required'),
                'current_password.min'               => __('messages.t_validator_min', ['min' => 8]),
                'current_password.max'               => __('messages.t_validator_max', ['max' => 60]),
                'new_password.required'              => __('messages.t_validator_required'),
                'new_password.min'                   => __('messages.t_validator_min', ['min' => 8]),
                'new_password.max'                   => __('messages.t_validator_max', ['max' => 16]),
                'new_password_confirmation.required' => __('messages.t_validator_required'),
                'new_password_confirmation.min'      => __('messages.t_validator_min', ['min' => 6]),
                'new_password_confirmation.max'      => __('messages.t_validator_max', ['max' => 60]),
                'new_password_confirmation.same'     => __('messages.t_validator_same'),
                'new_password.regex'    				 =>     'The password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
           
            ];

            // Set data to validate
            $data     = [
                'current_password'          => $request->current_password,
                'new_password'              => $request->new_password,
                'new_password_confirmation' => $request->new_password_confirmation
            ];

            // Validate data
            Validator::make($data, $rules, $messages)->validate();

            // Reset validation
            $request->resetValidation();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
