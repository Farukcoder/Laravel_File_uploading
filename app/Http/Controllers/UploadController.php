<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    function OnFileUp(Request $request){

        $result = $request->FileKey->store('images');
            $data = DB::table('file_uploading')->insert(['file'=>$result]);
        if ($data == true){
            return 1;
        }else{
            return 0;
        }
    }
}
