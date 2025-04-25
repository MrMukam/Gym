<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlans extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }
}
