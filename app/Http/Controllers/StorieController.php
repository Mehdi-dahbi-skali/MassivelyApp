<?php

namespace App\Http\Controllers;

use App\Models\MASSIVELYAPP;
use Illuminate\Http\Request;

class StorieController extends Controller
{
    function elements(){
        return view('elements');
    }
    function generic(){
        return view('generic');
    }
    
    function admin(){
        return view('admin');
    } 
    function cree_poste(){

        return view('admin.cree_poste');
    }
    function modifier_poste(){
        return view('admin.modifier_poste');
    }
    function store(Request $request){

        $file= time().'.'. $request->image;

        MASSIVELYAPP::create([
            'date' => $request->date,
            'Titre' => $request->title,
            'resume' => $request->resume,
            'path' => $file,
        ]);

        
        
        
    }

    function index(){
        $stories=MASSIVELYAPP::all();
        $st=$stories;
        
        return view('index',[
            'sts' => $stories,
             $st,
            
        ]);
        

        
    }

    function like(){
        
    }
    
}
