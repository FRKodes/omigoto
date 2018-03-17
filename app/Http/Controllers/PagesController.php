<?php

namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$instagram = new Instagram(env('IG-TOKEN'));
    	$posts = array_slice($instagram->get(), 0, 3);
    	return View('pages.index', compact('posts'));
    }

    public function php()
    {
    	return View('pages.php');
    }
}
