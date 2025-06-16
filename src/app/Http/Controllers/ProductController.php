<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/products",
     *     operationId="getProducts",
     *     tags={"Products"},
     *     summary="Get all products",
     *     description="Returns a list of all products.",
     *    @OA\Response(
     *        response=200,
     *       description="Successful operation",
     * )
     */
       public function index()
    {
        $data = Product::all();
        return response()->json([
            'message' => 'List of products',
            'data' => $data
        ], 200);
    }
}
