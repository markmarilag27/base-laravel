<?php

namespace App\Models;

use Laravel\Sanctum\PersonalAccessToken;

class UserPersonalAccessToken extends PersonalAccessToken
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_personal_access_tokens';
}
