<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\UserPostRequest;
use App\Models\UserPost;
use DataTables;

class MangoController extends Controller
{
    public function PostUser (UserPostRequest $request){
        $request->validated();
        $data = $request->all();
        UserPost::insert([
            'user_name' => $data['name'],
            'user_email' => $data['email'],
            'user_subject' => $data['subject'],
            'user_message' => $data['message'],
        ]);
        return back()->with('success', 'Your Data Submitted Successfully.');
    }

    // Fetch Data from table with Yajra DataTable
    public function FetchTeamData(Request $request){
        if ($request->ajax()) {
            $data = Blog::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            // ->addColumn('action', function($row){
            //     return "<button type='button' data-id='".$row->id."' class='btn btn-info btn-sm details'>Details</button>";
            // })
            // ->rawColumns(['action'])
            ->make(true);
        }   
    }

    // Fetch data from table with Model
    public function TeamDetails($id){
        if (request()->ajax()) {
            $data = Blog::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }
}
