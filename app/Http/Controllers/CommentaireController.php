<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    //
    public function store(Request $request){
        
        $comment = Commentaire::create([
            'name' => $request->name,
            'fname' => $request->fname,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);
        return redirect()->route('home');
    }
}
