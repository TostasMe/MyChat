<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Messages;

class ChatController extends BaseController
{
    public function index()
    {
        if(Auth::check())
        {
            $messages = Messages::all();

            return view('chat', [
                'messages' => $messages
            ]);
        }
        else
            return redirect('/login');
    }

    public function sendMessage(Request $request)
    {
        DB::insert('INSERT INTO messages (email, message, date) VALUES (?, ?, CURRENT_TIMESTAMP())', 
        [Auth::user()->email, $request['mess']]);
    }
    public function showMessages()
    {
        $messages = DB::select('SELECT * FROM messages WHERE date >= DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL -3 HOUR)');
        return view('messages', [
            'messages' => $messages
        ]);
    }
}
