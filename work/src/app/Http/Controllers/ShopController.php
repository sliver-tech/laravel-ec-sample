<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Event;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function top()
    {
        return view('shop.top')->with([
            'menu' => 'top',
            'products' => Product::inRandomOrder()->take(3)->get(),
            'company' => Company::inRandomOrder()->first(),
            'event' => Event::where('date', '>=', Carbon::now())->orderBy('date', 'ASC')->first(),
        ]);
    }

    public function products()
    {
        $products = Product::where('sale_start_date', '<=', Carbon::now())
            ->where('sale_end_date', '>=', Carbon::now())
            ->orderBy('updated_at', 'DESC')
            ->paginate(15);

        return view('shop.products')->with(['menu' => 'products', 'products' => $products]);
    }

    public function companies()
    {
        return view('shop.companies')->with(['menu' => 'companies', 'companies' => Company::all()]);
    }

    public function events()
    {
        return view('shop.events')->with(['menu' => 'events', 'events' => Event::all()->sortByDesc('date')]);
    }

    public function purchase($product_id)
    {
        return view('shop.purchase')->with(['product' => Product::find($product_id)]);
    }
}
