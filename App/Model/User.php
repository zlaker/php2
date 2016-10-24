<?php

namespace App\Model;

use App\Model;

/**
 * Class User
 * @package App\Model
 */
class User

    extends Model
{
    /**
     * @var string
     */
    public static $table = 'users';

    public $id;
    public $email;
    public $login;
    public $name;
    public $age;

}