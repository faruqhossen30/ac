<?php

namespace App\Http\Controllers;

use App\Models\User\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        // $number = itemNumber();
        // return $number;

        // $date = new DateTime('2009-10-05 18:07:13');
        // $date2 = new DateTime('2009-10-05 18:11:08');

        // $diffInSeconds = $date2->getTimestamp() - $date->getTimestamp();

        // $product = Product::latest()->first();

        // $now = Carbon::now();
        // $end = $product->end_date;

        // $reusult = $end->diffInMinutes($now);

        return view('test');
    }

    public function postfunction(Request $request)
    {

        // $img = $request->image;
        // $folderPath = "uploads/";

        // $image_parts = explode(";base64,", $img);
        // $image_type_aux = explode("image/", $image_parts[0]);

        // $image_type = $image_type_aux[1];
        // $image_base64 = base64_decode($image_parts[1]);

        // $fileName = uniqid() . '.png';

        // return gettype($image_base64);
        // return $image_base64;

        // return $request->all();

        // return print_r($image_type_aux);




        // $data = Input::all();

        //get the base-64 from data
        // $base64_str = substr($data->base64_image, strpos($data->base64_image, ",")+1);

        // //decode base64 string
        // $image = base64_decode($base64_str);
        // Storage::disk('local')->put('imgage.png', $image);
        // $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        // echo $storagePath.'imgage.png';
        // $response = array(
        //     'status' => 'success',
        // );
        // return Response::json( $response  );





    }
}
