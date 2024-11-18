<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Eloquent Standard Query
    public function index()
    {
//        $orders = Order::all(); // Eloquent
//        $orders = Order::where('status', 'completed')->get(); // Eloquent

//        $orders = order::select('customer_name','total')
//            ->where('status','completed')
//            ->toBase()
//            ->get();
//
//        return view('tobase.index', compact('orders'));

        $latestOrder = Order::select('customer_name', 'total')
            ->where('status', 'completed')
            ->orderBy('created_at', 'desc')
            ->toBase()
            ->first();

        return view('tobase.index', compact('latestOrder'));

//        Order::where('status', 'pending')
//            ->toBase()
//            ->update(['status' => 'processing']); // No events triggered
//
//        return response()->json(['message' => 'Bulk update completed']);
    }

    // Optimized Reporting with toBase()
    public function report()
    {
        $orders = Order::select('customer_name', 'total')
            ->where('status', 'completed')
            ->toBase()
            ->get();

        return view('orders.report', compact('orders'));
    }

    // Custom SQL with toBase()
    public function aggregate()
    {
        $totals = Order::toBase()
            ->selectRaw('status, COUNT(*) as order_count, SUM(total) as total_revenue')
            ->groupBy('status')
            ->get();

        return view('orders.aggregate', compact('totals'));
    }

    // Avoiding Eloquent Events
    public function bulkUpdate()
    {
        Order::where('status', 'pending')
            ->toBase()
            ->update(['status' => 'processing']); // No events triggered

        return response()->json(['message' => 'Bulk update completed']);
    }
}
