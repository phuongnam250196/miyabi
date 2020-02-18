<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\Gallery;
use App\User;
use Hash;
use Cookie;
use App\Rules\GoogleRecaptcha;
class HomesController extends Controller
{
    public function getIndex() {
        $sliders = Gallery::where('type', 'slider')->get();
        $galleries = Gallery::where('type', 'gallery')->get();
        $menues = Gallery::where('type', 'menu')->get();
    	return view('backend.index', compact('sliders', 'galleries', 'menues'));
    }

    public function getProfile() {
        return view('backend.profile');
    }

    public function postProfile(Request $request) {
        $messages = [];
        $rules = [
            'email' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $user = Auth::user();
            // dd($user);
            if(!empty($user)) {
                $user->email = $request->email;
                try{
                    $user->save();
                }catch (\Exception $exception){
                    return back()->with('messages', 'Đã có lỗi xảy ra, vui lòng thử lại')->with('status','fail');
                }
            }
            return back()->with('messages','Cập nhật thành công')->with('status', 'success');
        }
    }

    public function getChangePassword() {
        return view('backend.change_password');
    }

    public function postChangePassword(Request $request) {
        $messages = [];
        $rules = [
            'password_old' => 'required',
            'password' => 'required',
            'password_reply' => 'required | same:password',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $user = Auth::user();
            if(Hash::check($request->password_old, Auth::user()->password)) {
                $user->password = bcrypt($request->password);
                try{
                    $user->save();
                }catch (\Exception $exception){
                    return back()->with('messages', 'Đã có lỗi xảy ra, vui lòng thử lại')->with('status','fail');
                }
                return back()->with('messages','Đổi mật khẩu thành công')->with('status', 'success');
            } else {
                return back()->with('messages','Mật khẩu hiện tại không đúng')->with('status', 'fails');
            }
        }
    }

    public function getLogin() {
    	return view('backend.login');
    }

    public function postLogin(Request $request) {
    	$rules = [
    		'username' => 'required | min:6 | max:255',
    		'password' => 'required | min:6 | max:255',
            'g-recaptcha-response' => ['required', new GoogleRecaptcha]
    	];
    	$validation = Validator::make($request->all(), $rules);
    	if ($validation->passes()) {
        // dd($request->all());
            $arr = [
                'name'=>$request->username, 
                'password'=>$request->password, 
                'role'=>1,
            ];
            if(Cookie::get('login_err') == 3) {
                return back()->withInput()->with('error', 'Bạn đăng nhập sau 3 phút!');
            } else {
                // return 1;
                if(Auth::attempt($arr)) {
                    return redirect()->intended('admin');
                } else {
                    if(Cookie::get('login_err') !== false) {
                        $val = Cookie::get('login_err');
                        Cookie::queue('login_err', $val+1, 3);
                        if($val == 3) {
                            Cookie::queue('login_err', 3, 3);
                            return back()->withInput()->with('error', 'Bạn đăng nhập sau 3 phút!');
                        }
                    } else {
                        Cookie::queue('login_err', 1, 1);                   
                    }
                    return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu không hợp lệ!!!!');
                }
            }
        } else {
            return back()->withInput()->withErrors($validation->errors());
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->intended('login');
    }
}
