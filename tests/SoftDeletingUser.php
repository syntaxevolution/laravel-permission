<?php

namespace SyntaxEvolution\Permission\Test;

use Illuminate\Database\Eloquent\SoftDeletes;

class SoftDeletingUser extends User
{
    use SoftDeletes;

    protected $guard_name = 'web';
}
