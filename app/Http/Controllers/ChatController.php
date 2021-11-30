<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Messages;

class ChatController extends BaseController
{
    public function index()
    {
        if(Auth::check())
        {
            $messages = DB::select("SELECT * FROM messages ORDER BY id DESC");

            return view('chat', [
                'messages' => $messages
            ]);
        }
        else
            return redirect('/login');
    }

    public function add()
    {

    }
}
