<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class SaveController extends BaseController{
    public function store(Request $request)
    {
        $file = file_get_contents('C:\Users\Mw\Desktop\forRead.php', FILE_USE_INCLUDE_PATH);
        return response()->json(
            array(
                'content'=>$file,
            )
        );
    }
}
