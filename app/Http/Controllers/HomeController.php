<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::with('user')->latest('created_at')->get();
        return view('home', compact('comments'));
    }

    public function addComment(Request $request)
    {
        $comment = Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('home');
    }

}
