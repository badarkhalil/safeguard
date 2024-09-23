<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Throwable;

class ProductController extends Controller
{
    public function getProducts(Request $request){
        try{
            $product = Product::where('qr_number',$request->qr_code)->first();
            if($product){
                return response()->json([
                    "status" =>true,
                    "message" => "Product found successfully",
                    'product' =>$product
                ]);
            }else{
                return response()->json([
                    "status" =>false,
                    "message" => "Product not found",
                    'product' =>$product
                ]);
            }
        }catch(Throwable $th){
            return response()->json([
                'status' => false,
                'message' => 'An error occurred: ' . $th->getMessage(),
                'user' => null
            ], 500);
        }
    }
}
