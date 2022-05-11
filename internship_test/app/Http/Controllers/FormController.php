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
            'phone' => 'required|numeric|digits:10',
            'content'=>'required|max:255',
        ], [
            'name.required' => 'Họ và Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'phone.required' => 'Số điện không được để trống',
            'phone.numeric'=>'Số điện thoại phải là số',
            'phone.digits' => 'Số điện thoại không hợp lệ',
            'content.required' => 'Số điện không được để trống',
            'content.max' => 'Nội dung chỉ có 255 kí tự',

            
        ]);
        if ($validator->fails()) {
            return redirect()->route('form')->with(['status' => 400, 'errors' => $validator->errors()->all()]);
        }
       $info=new Info();
       $info->name=$request->name;
       $info->email=$request->email;
       $info->phone=$request->phone;
       $info->content=$request->content;
       $info->save();
       return redirect()->route('form')->with(['status' => 200, 'success' => 'Thành công!!!']);
    }
}
