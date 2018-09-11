<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Data;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function data()
    {
        return view('insertdata');

    }

    public function insertdata(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'address' => 'required',
            'phone' => 'required|digits:5',
            'company_name' => 'required|max:10',
        ],
        [
            'address.required' => 'Address is required',
            'phone.required' => 'Phone is required',
            'phone.digits' => 'Phone must be only digits required',
        ]);

        if ($validator->fails()) {
            return redirect('/data')->withErrors($validator)->withInput();
        }

        $dataObj = Data::create([
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'company_name' => $request->input('company_name'),

        ]);


        return redirect()->back()->with([
            'message' => 'success'
        ]);
    }
}
