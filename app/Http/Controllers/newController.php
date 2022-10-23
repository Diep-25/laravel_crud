<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Newaddrequest;

class newController extends Controller
{
   public function create()
   {
    return view('news.index');
   }
   public function store(Newaddrequest $request)
   {


    if($request->has('img')){
        $file = $request->img;
        $ext = $request->img->extension();
        $file_name = time(). '_' . 'news.'. $ext;
        $file->move(public_path('uploads'),$file_name);
    }

    news::create([
        'title' => $request->title,
        'content' => $request->content,
        'img' => '/uploads/'. $file_name
    ]);
    return redirect()->back()->with('success','Thêm mới thành công .');
   }


   public function list()
   {
    $new = news::all();
    return view('news.list',compact('new'));
   }

   public function edit($id)
   {
    $dataEdit = news::find($id);
    return view('news.edit', compact('dataEdit'));
   }
   public function update(Newaddrequest $request , $id)
   {

    if($request->has('img')){
        $file = $request->img;
        $ext = $request->img->extension();
        $file_name = time(). '_' . 'news.'. $ext;
        $file->move(public_path('uploads'),$file_name);
    }

    $arrayNew = [
        'title' => $request->title,
        'content' => $request->content,
        'img' => '/uploads/'. $file_name
    ];
    news::find($id)->update($arrayNew);
    return redirect()->route('news.list')->with('success','Cập nhật thành công .');
   }

   public function delete($id)
   {
    news::find($id)->delete();
    return redirect()->back()->with('success',' Xóa thành công .');
   }

}
