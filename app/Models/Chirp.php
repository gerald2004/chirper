<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
   protected $fillable = [
    'message',
   ];

   protected $dispatchesEvents = [
    'created' => ChirpCreated::class,
];
   //adding the belongs to relationship to the user chirps belong to  a certain user
   public function user(): BelongsTo 
   {
     return $this->belongsTo(User::class);
   }
}
