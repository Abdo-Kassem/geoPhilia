<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\orderRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function create()
    {

        return view('dashboard.orders.create');
    }

    public function store(Request $request)
    {

        try {
            $request_data = $request->all();
            Order::create($request_data);

            return redirect()->route('dashboard.orders.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return ($ex);
            return redirect()->route('dashboard.orders.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function edit($id)
    {


        $order = Order::select()->find($id);
        if (!$order) {
            return redirect()->route('dashboard.orders.index')->with(['error' => 'Undefined']);
        }

        return view('dashboard.orders.edit', compact('order'));
    }

    public function update($id, Request $request)
    {

        try {
            $order = Order::find($id);
            if (!$order) {
                return redirect()->route('dashboard.orders.edit', $id)->with(['error' => 'Undefined']);
            }
            $order->update($request->except('_token'));
            return redirect()->route('dashboard.orders.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.orders.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function delete($id)
    {

        try {
            $order = order::find($id);
            if (!$order) {
                return redirect()->route('dashboard.orders.index', $id)->with(['error' => 'Undefined']);
            }
            $order->delete();

            return redirect()->route('dashboard.orders.index')->with(['success' => 'deleted']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.orders.index')->with(['error' => 'Erorr Try Again']);
        }
    }
}
