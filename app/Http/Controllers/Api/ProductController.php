<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
        $products = (Product::all());
        if ($products) {
            return $this->apiResponse(ProductResource::collection($products), 200, 'OK');
        }
        return $this->apiResponse(null, 404, 'Empty Products');
    }

    public function getProductsByCategory($categoryId)
    {
        $products = Product::where('category_uuid', $categoryId)->get();
        if ($products->isNotEmpty()) {
            return $this->apiResponse(ProductResource::collection($products), 200, 'OK');
        }
        return $this->apiResponse(null, 404, 'Empty Products');
    }
}
