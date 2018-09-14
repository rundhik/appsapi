<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login_ketua extends Authenticatable
{
	protected $table='ketua';
}