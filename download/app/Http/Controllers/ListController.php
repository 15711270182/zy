<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Base;
/**
*@Controller 列表页
*/
class ListController extends BaseController
{
    function index()
	{
		return view('list/index');
	}
}
