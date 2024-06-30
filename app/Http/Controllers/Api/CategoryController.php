<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
        $cateogries = (Category::all());
        if ($cateogries) {
            return $this->apiResponse(CategoryResource::collection($cateogries), 200, 'OK');
        }
        return $this->apiResponse(null, 404, 'Empty Categories');
    }
}
