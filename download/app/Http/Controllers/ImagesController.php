<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Base;
/**
*@Controller 图片
*/
class ImagesController extends BaseController
{
    function index()
	{
		return view('images/img');
	}
}
