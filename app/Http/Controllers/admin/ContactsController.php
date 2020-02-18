<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Validator;

class ContactsController extends Controller
{
    public function getContact() {
    	$data = Profile::first();
    	return view('backend.contact.index', compact('data'));
    }

    public function postContact(Request $request) {
    	$messages = [];
    	$rules = [
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ];
        // $messages = [
        //     'phone.required' => 'Số điện thoại không được để trống',
        //     'email.required' => 'Email không được để trống',
        //     'address.required' => 'Địa chỉ không được để trống',
        // ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
        	$data = Profile::first();
        	if(empty($data)) {
        		$data = new Profile;
        	}
    		$data->phone = $request->phone;
            $data->email = $request->email;
        	$data->address = $request->address;
        	try{
                $data->save();
            }catch (\Exception $exception){
                return back()->with('messages', 'Đã có lỗi xảy ra, vui lòng thử lại')->with('status','fail');
            }
  	 		return back()->with('messages','Cập nhật thành công')->with('status', 'success');
        }
    }
}
