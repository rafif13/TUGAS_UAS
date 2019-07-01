<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice_detail extends Model
{
    
protected $guarded = [];

public function getSubtotalAttribute()

{

return number_format ($this->qty * $this->price);


}


public function product()
{

    return $this ->belongsTo(Product::Class);

}


public function invoice()
{


    return $this->belongsTo(Invoice::class);
}

}
