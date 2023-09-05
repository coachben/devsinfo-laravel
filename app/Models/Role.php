<?php

namespace App\Models;

use Spatie\Permission\Models\Role as RoleModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//Note that this model extends the spatie Model Role
class Role extends RoleModel
{
    use HasFactory;

}
