<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
/**
*@Controller 网站公共控制器
*/
class BaseController extends Controller
{
    function test()
	{
		return "这个是base";
	}
}
