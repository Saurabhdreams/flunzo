<?php

namespace App\Http\Validators\Main\Account\Settings;

use App\Rules\UsernameRule;
use Illuminate\Validation\Rule;
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
                'username' => ['required', 'max:60', 'min:3', Rule::unique('users')->ignore(auth()->id()), new UsernameRule()],
                'email'    => ['required', 'max:60', 'min:6','regex:/^[a-z0-9._%+-]{1,50}@[a-z0-9.-]{1,50}\.[a-z]{2,}$/i', Rule::unique('users')->ignore(auth()->id())],
                'fullname' => 'nullable|max:60|regex:/^[a-zA-Z\s]+$/',
                'country'  => 'nullable|exists:countries,id',
                'password' => 'nullable|max:60',
                'city'     => 'nullable|max:60|regex:/^[a-zA-Z\s]+$/',
                'timezone' => 'required|max:60'
            ];

            // Set errors messages
            $messages = [
                'username.required' => __('messages.t_validator_required'),
                'username.max'      => __('messages.t_validator_max', ['max' => 60]),
                'username.min'      => __('messages.t_validator_min', ['min' => 3]),
                'username.unique'   => __('messages.t_validator_unique'),
                'email.required'    => __('messages.t_validator_required'),
                'email.max'         => __('messages.t_validator_max', ['max' => 60]),
                'email.min'         => __('messages.t_validator_min', ['min' => 6]),
                'email.unique'      => __('messages.t_validator_unique'),
                'fullname.max'      => __('messages.t_validator_max', ['max' => 60]),
				'fullname.regex'    => 'The full name can only contain letters and spaces.',
                'country.exists'    => __('messages.t_validator_exists'),
                'password.max'      => __('messages.t_validator_max', ['max' => 60]),
                'city.max'          => __('messages.t_validator_max', ['max' => 60]),
				'city.regex'        => 'The city name can only contain letters and spaces.',
                'timezone.max'      => __('messages.t_validator_max', ['max' => 60]),
                'timezone.required' => __('messages.t_validator_required'),
                'email.regex'    => 'The email address must have a username and domain, each between 1 and 50 characters, separated by "@" and ending with a valid top-level domain.',

            ];

            // Set data to validate
            $data     = [
                'email'    => $request->email,
                'username' => $request->username,
                'fullname' => $request->fullname,
                'country'  => $request->country,
                'password' => $request->password,
                'city'     => $request->city,
                'timezone' => $request->timezone
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
