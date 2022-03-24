<?php

use Illuminate\Http\Request;
use App\Models\Admin\Product\Category;
use App\Models\User\Product;

function itemNumber()
{

    if (Product::count() > 0) {
        $last = Product::latest('id')->first()->item_number;
        $data = explode('-', $last);
        $number =  intval($data[1]);

        $itemNumber =  sprintf('%04d', $number + 1);
        $today = date('y') . date('m');
        return $today . '-' . $itemNumber;
    } else {
        $itemNumber =  sprintf('%04d', 0000 + 1);
        $today = date('y') . date('m');
        return $today . '-' . $itemNumber;
    }
}
