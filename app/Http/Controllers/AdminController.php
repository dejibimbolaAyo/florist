<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //
    public function index()
    {
        # code...
        $users = User::all()->count();
        $products = Product::all();
        $orders = Order::all();
        return view('dashboard.admin.dashboard')->with(['users' => $users, 'products' => $products, 'orders' => $orders]);
    }

    public function getRegistration()
    {
        # code...
        return view('dashboard.admin_register');

    }

    public function orders()
    {
        # code...
        $orders = Order::all();
        return view('dashboard.admin.orders')->with('orders', $orders);
    }

    public function rejectOrder(Request $request, $order_id = null)
    {
        # code...
        if($order_id == null) return false;

        $order = Order::find($order_id)->delete();
        $orders = Order::all();

        $request->session()->flash('alert-success', "Order with OrderID ".$order_id. " rejected.");
        return redirect('admin/orders')->with('orders', $orders);

    }

    public function products()
    {
        # code...
        $products = Product::all();
        return view('dashboard.admin.products')->with('products', $products);
    }

    public function getCreateProduct()
    {
        # code...
        return view('dashboard.admin.create_product');
    }

    public function createProduct(Request $request)
    {
        # code...
        $data = $request->all();
        $data['picture_url'] = '';

        $this->validate($request, [
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($data['name']);
    
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $image_name = $slug."_".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/products/');
            $image->move($destinationPath, $image_name);
            $data['picture_url'] = "assets/products/".$image_name;
        }

        $data['slug'] = $slug;

        $product = Product::create($data);
        $products = Product::all();

        $request->session()->flash('alert-success', "Product ".$product->name. " created.");
        return redirect('admin/products')->with('products', $products);
    }

    public function getUpdateProduct($product_id = null)
    {
        # code...
        if($product_id == null) return false;

        $product = Product::find($product_id);

        return view('dashboard.admin.edit_product')->with('product', $product);
    }

    public function updateProduct(Request $request, $product_id)
    {
        # code...
        # code...
        $data = $request->all();
        $data['picture_url'] = '';

        $this->validate($request, [
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($data['name']);
    
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $image_name = $slug."_".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/products/');
            $image->move($destinationPath, $image_name);
            $data['picture_url'] = "assets/products/".$image_name;
        }

        $data['slug'] = $slug;

        $products = Product::all();
        $product = Product::find($product_id);

        $product->update($data);
        $product->save();

        $request->session()->flash('alert-success', "Product " .$product->name. " updated");
        return redirect('admin/products')->with('products', $products);
    }

    public function deleteProduct(Request $request, $product_id = null)
    {
        # code...
        if ($product_id == null) {
            return false;
        }

        $products = Product::all();
        try {
            $product = Product::find($product_id)->delete();
            $request->session()->flash('alert-success', "Product " . $product->name . " deleted successfully.");
            return redirect('admin/products')->with('products', $products);
        } catch (\PDOException $e) {
            $request->session()->flash('alert-warning', "Product cannot be deleted, ".$e->getMessage());
            return redirect('admin/products')->with('products', $products);
        } finally {
            $request->session()->flash('alert-success', "Product deleted successfully.");
            return redirect('admin/products')->with('products', $products);
        }


    }
}
