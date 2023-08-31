<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Events\SendMail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'adresse'=>['required'],
            'telephone'=>['required'],
            'fullname'=>['required'],
            'name' => ['required', 'string', 'max:255'],
            'telephone' => ['required'],
            'adresse' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        //
        $rand= rand(0,1000);
        $code=$rand;

        $user = User::create([
            'adresse' => $input['adresse'],
            'telephone' => $input['telephone'],
            'fullname' => $input['fullname'],
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id'=> 1,
            'code'=>$code
        ]);

        event(new SendMail($user));
        return $user;


    }
}
