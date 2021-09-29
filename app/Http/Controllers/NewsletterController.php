<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    function newEmail(Request $req)
    {
        $new_email = new Newsletter;
        $new_email->email = $req->email;
        $new_email->save();
        return redirect('/');
    }
}
