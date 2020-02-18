<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Gallery;

class MenusController extends Controller
{
    public function getIndex() {
        $data = Gallery::where('type', 'menu')->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.menu.index', compact('data'));
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
                    $path = 'uploads/menu/';
                    $modifiedFileName = $file->getClientOriginalName();
                    if($file->move($path,$modifiedFileName)){
                        $data->link = $path.$modifiedFileName;
                    }
                }
                $data->type = 'menu';
                try{
                    $data->save();
                }catch (\Exception $exception){
                    return $exception;
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
                    $path = 'uploads/menu/';
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

    public function delMenu(request $request){
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
