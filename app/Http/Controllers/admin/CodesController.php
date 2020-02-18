<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Profile;

class CodesController extends Controller
{
    public function getCode() {
    	$data = Profile::first();
    	return view('backend.code.index', compact('data'));
    }

    public function postCode(Request $request) {
    	$messages = [];
    	$rules = [
            
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
        	$data = Profile::first();
        	if(empty($data)) {
        		$data = new Profile;
        	}
    		$data->fb_id = $request->fb_id;
            $data->gg_id = $request->gg_id;
        	$data->add_code = json_encode($request->add_code);
            try{
                $data->save();
            }catch (\Exception $exception){
                return back()->with('messages', 'Đã có lỗi xảy ra, vui lòng thử lại')->with('status','fail');
            }
  	 		return back()->with('messages','Cập nhật thành công')->with('status', 'success');
        }
    }
}
