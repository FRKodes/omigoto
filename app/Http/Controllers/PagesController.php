<?php

namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$instagram = new Instagram('27157690.1677ed0.b85457663f9b44d7a1000c5f6fb7a8be');
    	$posts = array_slice($instagram->get(), 0, 3);
    	return View('pages.index', compact('posts'));
    }

    public function php()
    {
    	return View('pages.php');
    }
}
