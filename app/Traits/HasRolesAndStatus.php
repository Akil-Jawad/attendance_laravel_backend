<?php
namespace App\Traits;
use App\Models\Role;
use App\Models\Status;

trait HasRolesAndStatus{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
}
