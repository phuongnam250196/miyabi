<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;
use App\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        $sliders = Gallery::where('type', 'slider')->get();
        $galleries = Gallery::where('type', 'gallery')->limit(9)->get();
        return view('frontend.index', compact('sliders', 'galleries'));
    }

    public function postBooking(Request $request)
    {
        $messages = [];
        $rules = [
            'name' => 'required',
            'number' => 'required | numeric',
            'phone' => 'required | numeric | min:3',
            'time' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('/#reservation')->withInput()->withErrors($validator->errors());
        } else {
            // dd($request->all());
            $input = $request->all();
            try{
                Mail::send('emails.booking', ['data' => $input], function ($message) use ($input) {
                    $message->from('miyabi.contact2019@gmail.com', 'Miyabi');
                    $message->to('miyabi.81linhlang@gmail.com', 'Visitor')->subject($input["name"] . ' đã đặt phòng!');
                });
            }catch (\Exception $exception){
                return back()->with('messages', 'Đã có lỗi xảy ra, vui lòng thử lại')->with('status','fail');
            }
            return redirect('/#reservation')->with('status', 'success');
        }
    }
}
