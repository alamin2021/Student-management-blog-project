<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class FeeCategoryAmounts extends Model
{
    protected $fillable = ['feecategories_id','departments_id','amount'];
}