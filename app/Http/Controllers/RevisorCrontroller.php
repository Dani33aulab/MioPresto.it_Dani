<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisorCrontroller extends Controller
{
    public function index(){

        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){

        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement){

        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio');
    }
}
