<?php

namespace App\Http\Validators\Admin\Users;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
                'username'     => ['required', 'max:60', Rule::unique('users')->ignore($request->user->id)],
                'email'        => ['required', 'max:60', Rule::unique('users')->ignore($request->user->id)],
                'password'     => 'nullable|max:60',
                'account_type' => 'required|in:seller,buyer',
                'level'        => 'required|exists:levels,id',
                'country'      => 'nullable|exists:countries,id',
                'fullname'     => 'nullable|max:60|regex:/^[a-zA-Z\s]+$/',
                'headline'     => 'nullable|max:100',
                'description'  => 'nullable|max:750',
                'avatar'       => 'nullable|image|mimes:jpg,jpeg,png',
                'status'       => 'required|in:active,verified,banned'
            ];

            // Set errors messages
            $messages = [
                'username.required'     => __('messages.t_validator_required'),
                'username.max'          => __('messages.t_validator_max', ['max' => 60]),
                'username.unique'       => __('messages.t_validator_unique'),
                'email.required'        => __('messages.t_validator_required'),
                'email.max'             => __('messages.t_validator_max', ['max' => 60]),
                'email.unique'          => __('messages.t_validator_unique'),
                'password.max'          => __('messages.t_validator_max', ['max' => 60]),
                'account_type.required' => __('messages.t_validator_required'),
                'account_type.in'       => __('messages.t_validator_in'),
                'level.required'        => __('messages.t_validator_required'),
                'level.exists'          => __('messages.t_validator_exists'),
                'country.exists'        => __('messages.t_validator_exists'),
                'fullname.max'          => __('messages.t_validator_max', ['max' => 60]),
				'fullname.regex'    	=> 'The full name can only contain letters and spaces.',
                'headline.max'          => __('messages.t_validator_max', ['max' => 100]),
                'description.max'       => __('messages.t_validator_max', ['max' => 750]),
                'avatar.image'          => __('messages.t_validator_image'),
                'avatar.mimes'          => __('messages.t_validator_mimes'),
                'status.required'       => __('messages.t_validator_required'),
                'status.in'             => __('messages.t_validator_in'),
            ];

            // Set data to validate
            $data     = [
                'username'     => $request->username,
                'email'        => $request->email,
                'password'     => $request->password,
                'account_type' => $request->account_type,
                'level'        => $request->level,
                'country'      => $request->country,
                'fullname'     => $request->fullname,
                'headline'     => $request->headline,
                'description'  => $request->description,
                'avatar'       => $request->avatar,
                'status'       => $request->status
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
