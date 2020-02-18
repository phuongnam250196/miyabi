<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Gallery;

class GalleriesController extends Controller
{
    public function getIndex() {
        $data = Gallery::where('type', 'gallery')->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.gallery.index', compact('data'));
    }

    public function getAdd() {
        return view('backend.gallery.add');
    }

    public function postAdd(Request $request) {
        $messages = [];
        $rules = [
            'link' => 'required | image | max:2000',
        ];
        // $messages = [
        //     'link.required' => 'không được để trống',
        // ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = new Gallery;
            $data->title = $request->title;
            if(!empty($request->link) && $request->link != "undefined"){
                $file =  $request->link;
                $path = 'uploads/gallery/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->link = $path.$modifiedFileName;
                }
            }
            $data->type = 'gallery';
            try{
                // return 1;
                $data->save();
            }catch (\Exception $exception){
                return back()->with('messages', 'Đã có lỗi xảy ra, vui lòng thử lại')->with('status','fail');
            }
            $status = 1;
            return redirect()->intended('admin/gallery')->with('messages', 'Thêm mới thành công!');
        }
    }

    public function getUpdate($id) {
        $data = Gallery::find($id);
        return view('backend.gallery.update', compact('data'));
    }
    public function postUpdate(Request $request, $id) {
        $messages = [];
        $rules = [
            'link' => 'image | max:2000',
        ];
        // $messages = [
        //     'link.required' => 'không được để trống',
        // ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $data = Gallery::find($id);
            $data->title = $request->title;
            $file = $data->link;
            if(file_exists($file)){
                unlink($file);
            }
            if(!empty($request->link) && $request->link != "undefined"){
                $file =  $request->link;
                $path = 'uploads/gallery/';
                $modifiedFileName = time().'-'.$file->getClientOriginalName();
                if($file->move($path,$modifiedFileName)){
                    $data->link = $path.$modifiedFileName;
                }
            }
            try{
                $data->save();
            }catch (\Exception $exception){
                return back()->with('messages', 'Đã có lỗi xảy ra, vui lòng thử lại')->with('status','fail');
            }
            $status = 1;
            return redirect()->intended('admin/gallery')->with('messages', 'Cập nhật thành công!');
        }
    }

    public function upload(Request $request) {
        // return $request->link;
        $status = 0;
        $messages = [];
        if($request->type == 'add') {
            $rules = [
                'link' => 'required',
            ];
        } 
        $rules = [];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $messages = ['code'=>'205', 'errors'=>$validator->errors()];
            return response()->json($validator->errors());
        } else {
            if($request->type == 'add') {
                $data = new Gallery;
                $data->title = $request->title;
                if(!empty($request->link) && $request->link != "undefined"){
                    $file =  $request->link;
                    $path = 'uploads/gallery/';
                    $modifiedFileName = $file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->link = $path.$modifiedFileName;
                    }
                }
                $data->type = 'gallery';
                try{
                    $data->save();
                }catch (\Exception $exception){
                    $messages = ['code'=>'204', 'message'=>'Đã có lỗi gì đó xảy ra.'];
                    return response()->json(compact('status', 'messages'));
                }
                $status = 1;
                $messages = ['code'=>'200', 'message'=>'Thêm mới thành công.'];
                return response()->json(compact('status', 'data', 'messages'));
                
            } 
            if($request->type == 'update') {
                $data = Gallery::where('id', $request->id)->first();
                if(!empty($data)){
                    $file = $data->link;
                    if(file_exists($file)){
                        unlink($file);
                    }
                }
                $data->title = $request->title;
                if(!empty($request->link) && $request->link != "undefined"){
                    $file =  $request->link;
                    $path = 'uploads/gallery/';
                    $modifiedFileName = $file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->link = $path.$modifiedFileName;
                    }
                }
                try{
                    $data->save();
                }catch (\Exception $exception){
                    $messages = ['code'=>'204', 'message'=>'Đã có lỗi gì đó xảy ra.'];
                    return response()->json(compact('status', 'messages'));
                }
                $status = 2;
                $messages = ['code'=>'200', 'message'=>'Cập nhật thành công.'];
                return response()->json(compact('status', 'data', 'messages'));
            }
            
        }
    }

    public function delGallery(request $request){
        $data = Gallery::find($request->id);
        if(!empty($data)){
            $file = $data->link;
            if(file_exists($file)){
                unlink($file);
            }
            $data = $data->delete();
        }
        return response()->json($data);
    }
}
