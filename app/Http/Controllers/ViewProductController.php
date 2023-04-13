<?php

namespace App\Http\Controllers;

use App\Models\testpruduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use \Yajra\Datatables\Datatables;

class ViewProductController extends Controller
{


    public function index()
    {

        $products = testpruduct::all();
        return datatables()->of($products)
                ->addIndexColumn()
                ->make(true);
        // ->addColumn('action', function ($row) {
        //     $html = '<a href="#" class="btn btn-xs btn-secondary btn-edit">Edit</a> ';
        //     $html .= '<button data-rowid="' . $row->id . '" class="btn btn-xs btn-danger btn-delete">Del</button>';
        //     return $html;
        // })->toJson();


    }

    // public function store(Request $request)
    // {
    //     // do validation
    //     Customer::create($request->all());
    //     return ['success' => true, 'message' => 'Inserted Successfully'];
    // }

    // public function show($id)
    // {
    //     return;
    // }

    // public function update($id)
    // {
    //     // do validation
    //     Customer::find($id)->update(request()->all());
    //     return ['success' => true, 'message' => 'Updated Successfully'];
    // }

    // public function destroy($id)
    // {
    //     Customer::find($id)->delete();
    //     return ['success' => true, 'message' => 'Deleted Successfully'];
    // }

}
