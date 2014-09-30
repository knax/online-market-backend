<?php

class AccessList extends \Eloquent {
    protected $guarded = ['id'];
    public $timestamps = false;

    public function userTypes()
    {
        return $this->belongsToMany('UserType', 'user_type_access_list', 'access_list_id', 'user_type_id');
    }

}
