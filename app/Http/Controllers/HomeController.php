<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video;



class HomeController extends Controller
{
    //
    public function index(){
        // $data['sub_title'] = "Site de reference des medicaments traductionnels";
        // $data['produits'] = Produit::where('status',true)->inRandomOrder()->get();
        // $data['articles'] = Article::paginate(6);
        // $data['promotions'] = Promotion::where('statut',true)->whereDate('fin','>=',Carbon::today())->get();
        return view('projet.home');
    }

    public function save_video_form(){
        
        return view('projet.polymorphisme.formsave');
    }

    public function create_posts(Request $request ){
        $tag = new Post;
        $tag->name = $request->post;
        $save = $tag->save();
        if( $save ){
            return redirect()->back()->with('success','Post enregistrer');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    public function create_video(Request $request ){
        $tag = new Video;
        $tag->name = $request->video;
        $save = $tag->save();
        if( $save ){
            return redirect()->back()->with('success','Video enregistrer');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    

    
}
