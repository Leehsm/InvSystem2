<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\Models\Stock;
use App\Models\Stockin;
use App\Models\Stockout;
use App\Models\Record;

use Carbon\Carbon;
use Image;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function stocklistView(){
        $stocklist = Stock::get();
        return view('frontend.menu.stock.view', compact('stocklist'));
    }

    public function stocklistAdd(){
        return view('frontend.menu.stock.add');
    }

    public function stocklistStore(Request $req){

        $stock_id = Stock::insertGetId([
            // 'image' => $save_url,
            'name' => $req->name,
            'date' => $req->date,
            'quantity' => $req->quantity,
            'price' => $req->price,
            'color' => $req->color,
            'size' => $req->size,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Stock Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('stocklist.view')->with($notification);

    }

    public function stocklistEdit($id){
        $stocklist = Stock::findOrFail($id);
        return view('frontend.menu.stock.edit', compact('stocklist'));
    }

    public function stocklistUpdate(Request $req){
        Stock::findOrFail($req->id)->update([
            'name' => $req->name,
            'date' => $req->date,
            'quantity' => $req->quantity,
            'price' => $req->price,
            'color' => $req->color,
            'size' => $req->size,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Stock Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('stocklist.view')->with($notification);
    }

    public function stocklistDelete($id){
        Stock::findOrFail($id)->delete();

        $notification = array(
			'message' => 'Stock Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('stocklist.view')->with($notification);
    }


    // STOCK IN
    public function stockinView(){
        
        $stockin = Record::where('inout', 'In')->get();
        return view('frontend.menu.stockin.view',compact('stockin'));
    }

    public function stockinAdd($id){
        $stocklist = Stock::findOrFail($id);
        return view('frontend.menu.stockin.add', compact('stocklist'));
    }

    public function stockinStore(Request $req){

        $stockin = Stockin::insertGetId([
            'stock_id' => $req->stock_id,
            'name' => $req->stock_name,
            'quantity' => $req->quantity,
            'note' => $req->note,
            'created_at' => Carbon::now(),
        ]);

        $stock = Stock::where('id', $req->stock_id)->sum('quantity');
        // dd($stock - $req->quantity);

        //update total value of stock quantity for Stock DB
        $stockupdate = $stock + $req->quantity;
        Stock::findOrFail($req->stock_id)->update([
            'quantity' => $stockupdate,
        ]);

        $notification = array(
			'message' => 'Stock Inserted Successfully',
			'alert-type' => 'success'
		);

        Record::insertGetId([
            'stock_id' => $req->stock_id,
            'name' => $req->stock_name,
            'inout' => 'In',
            'quantity' => $req->quantity,
            'note' => $req->note,
            'created_at' => Carbon::now(),
        ]);

		return redirect()->route('stocklist.view')->with($notification);
    }



    //StockOut
    public function stockoutView(){
        $stockout = Record::where('inout', 'Out')->get();
        return view('frontend.menu.stockout.view',compact('stockout'));
    }

    public function stockoutAdd($id){
        $stocklist = Stock::findOrFail($id);
        return view('frontend.menu.stockout.add', compact('stocklist'));
    }

    public function stockoutStore(Request $req){

        $stockout = Stockout::insertGetId([
            'stock_id' => $req->stock_id,
            'name' => $req->stock_name,
            'quantity' => $req->quantity,
            'note' => $req->note,
            'created_at' => Carbon::now(),
        ]);

        $stock = Stock::where('id', $req->stock_id)->sum('quantity');
        // dd($stock - $req->quantity);

        //update total value of stock quantity for Stock DB
        $stockupdate = $stock - $req->quantity;
        Stock::findOrFail($req->stock_id)->update([
            'quantity' => $stockupdate,
        ]);

        $notification = array(
			'message' => 'Stock inserted Successfully',
			'alert-type' => 'success'
		);

        Record::insertGetId([
            'stock_id' => $req->stock_id,
            'name' => $req->stock_name,
            'inout' => 'Out',
            'quantity' => $req->quantity,
            'note' => $req->note,
            'created_at' => Carbon::now(),
        ]);

		return redirect()->route('stocklist.view')->with($notification);
    }

    public function stockrecordView($id){
        $record = Record::get();
        return view('frontend.menu.stock.record', compact('record'));
    }
    
}
