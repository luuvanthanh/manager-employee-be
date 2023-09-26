<?php

namespace Hrm\User\Models;

use Manager\Core\Models\UuidModel;

class Employee extends UuidModel
{
    CONST CODE = 'NV';
    protected $table = 'employees';

    protected $fillable = [
        'name',
        'code',
        'address',
        'phone',
        'avatar',
        'fullname',
        'email',
        'department_id',
    ];
}
