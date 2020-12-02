<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ckeditor extends Controller
{
    public function  index(){
        return view('test');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            if(Auth::check()) {
                $user = Auth::user()->id;
            }else $user="unknow";
            //Upload File ['disk' => 'public_uploads']
            $filenametostore = $request->file('upload')->store('/ckuploads/'.$user.'/', ['disk' => 'public']);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/storage/' . $filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    function fetch(Request $request)
    {
        $value = $request->value;
        $data = DB::table('category')
            ->where('category','=', $value)
            ->get();
        $a = json_decode($data[0]->subcategory,true);
        $output ='';
        foreach($a as $row)
        {
            $output .= '<option value="'.$row["name"].'">'. $row["name"] .'</option>';
        }
        echo $output;
    }
}
