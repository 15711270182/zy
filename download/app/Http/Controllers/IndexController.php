<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Base;
/**
*@Controller 网站首页
*/
class IndexController extends BaseController
{
    function index()
	{
		return view('index/index');
	}
	function about()
	{
		echo $this->test();
	}
}
