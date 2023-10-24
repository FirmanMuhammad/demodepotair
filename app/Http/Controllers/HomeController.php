<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbacknRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('home', compact('widget'));
    }

    public function feedback(FeedbacknRequest $request)
    {
        return redirect()->back()->with([
            'pesan' => '<div class="alert alert-success">Feedback berhasil diinput</div>'
        ]);
    }
}
