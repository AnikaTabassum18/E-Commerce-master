<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Table_product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index()
    {
    $data = Table_product::all();
    return view('product', ['products'=>$data]);
    }
    function details($id)
    {
        $data = Table_product::find($id);
        return view('detail', ['trending_products'=>$data]);
    }
    function search(Request $request)
    {
        $data = Table_product::
        where('name', 'like', '%'.$request->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }
    function cart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/products');

        }else{
            return redirect(('/login'));
        }

    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cartList()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
        ->join('table_products','cart.product_id','table_products.id')
        ->select('table_products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('cartList',['products'=>$data]);
    }
    function removeProductFromCart($id)
    {
       Cart::destroy($id);
        return redirect('/cartList');
    }
    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('table_products','cart.product_id','table_products.id')
        ->where('cart.user_id',$userId)
        ->sum('table_products.price');
        
        return view('orderNow',['total'=>$total]);
    }
}
