<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); // Lấy giá trị từ ô input
    
        // Thực hiện tìm kiếm sản phẩm dựa trên $query và lấy kết quả từ CSDL
        $products = Product::where('productName', 'like', '%' . $query . '%')->get();
    
        return view('page.search', ['products' => $products, 'query' => $query]);
    }
    

}
