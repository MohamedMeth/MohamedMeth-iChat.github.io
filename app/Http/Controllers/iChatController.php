<?php

namespace App\Http\Controllers;

use App\Models\iChat;
use Illuminate\Http\Request;

class iChatController extends Controller
{
    public function store()
    {
        request()->validate([
            'context' => 'required|min:5|max:240', //minimum of 5 characters and maximum of 240 and it is required to type a message (not empty!) https://laravel.com/docs/10.x/validation#available-validation-rules
        ]);

        // dump(request()->get('context','failed_to_get_context')); for testing!

        $ichat = iChat::create([
            'content' => request()->get('context', 'failed_to_get_context'),
        ]);

        return redirect()->route('dashboard')->with('success', 'iChat message shared successfully.'); // Self explanatory.
    }
}
