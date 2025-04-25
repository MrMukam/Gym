<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function subscription_plan()
    {
        return $this->belongsTo(SubscriptionPlans::class);
    }
}
