<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subscription_plans()
    {
        return $this->hasMany(SubscriptionPlans::class);
    }
}
