<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PurchasedLinksTableModel extends Model
{
    use Notifiable;
    protected $table = "purchased_links";
    protected $primaryKey = "id";
    protected $guarded = [];
}
