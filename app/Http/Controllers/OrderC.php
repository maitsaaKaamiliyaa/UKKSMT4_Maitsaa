<?php

namespace App\Http\Controllers;

use App\Repository\Product\ProductRepo;
use App\Repository\Transaction\TransactionRepo;
use Illuminate\Http\Request;

class OrderC extends Controller
{
    public function __construct(
        protected ProductRepo $__repo_product,
        protected TransactionRepo $__repo_transaction)
    {

    }

    public function index(Request $req){
        $products = $this->__repo_product->index(request()->all());
        return view('backend.pages.order.index', compact('products'));
    }

    public function order(Request $req){
        $order = $this->__repo_transaction->order(request()->all());
        return redirect()->back();
    }

    public function history(Request $req){
        $order = $this->__repo_transaction->index(request()->all());
        // swith(request()->type){
        //     case "pendding" : $order->where("student_id", auth()->user()->userReference->reference_id)->get();
        //     case "progress" : $order->where("student_id", auth()->user()->userReference->reference_id)->get();
        //     case "selesai" : $order->where("student_id", auth()->user()->userReference->reference_id)->get();

        // }
        $orders = $order->where("student_id", auth()->user()->userReference->reference_id)->get();
        return view("backend.pages.order.history", compact("orders"));
        $order->where("student_id", auth()->user()->userReference->reference_id)->selesai()->get();
        return view("backend.pages.order.history");
    }
}
