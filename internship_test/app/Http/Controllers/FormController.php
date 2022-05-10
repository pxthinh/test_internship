<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function showForm(){
        return view('form.form');
    }
    public function form(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'content'=>'required|max:255',
        ], [
            'name.required' => 'Họ và Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'phone.required' => 'Số điện không được để trống',
            'content.required' => 'Số điện không được để trống',
            
        ]);
        if ($validator->fails()) {
            return ['status' => 400, 'errors' => $validator->errors()->all()];
        }
       $info=new Info();
       $info->name=$request->name;
       $info->email=$request->email;
       $info->phone=$request->phone;
       $info->content=$request->content;
       $info->save();
       return ['status' => 200, 'error' => 'Upload thành công!!!'];
    }
}
