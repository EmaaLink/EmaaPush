<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Sections_label;
use App\Models\Categs_label;
use App\Models\Links_label;
use App\Models\Sections_labels_user;
use App\Models\Admin;
use App\Models\User;


class DashboardController extends Controller
{

    
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

        $user_type = Auth::user()->user_type;

        if($user_type==1){

            return view('dashboard')->with('menu',$this->getMenu());


        }elseif($user_type==2){

            /*return view('student_dashboard')->with('menu',$this->getMenu());*/

            return view('dashboard')->with('menu',$this->getMenu());
        }else{

            dd('Access forbidden');
        }
    
            

        
        
        
        
    }

    public function addSection(){

        $post = new Sections_label();
        $post->labelFr = "Scolarité";
        $post->labelEn = "Education";
        $post->icon = "mdi mdi-chair-school";
        $post->order = "2";
        $post->save();

        return 'Post has been created successfully';


    }


    public function addCateg($id){

        $section = Sections_label::find($id);

        $post = new Categs_label();
        $post->labelFr = "Assiduité";
        $post->labelEn = "Attendance";
        $post->icon = "mdi mdi-calendar-clock";
        $post->order = "2";
        $section->CategsLabels()->save($post);
        $post->save();

        return 'Post has been created successfully';


    }

    private function getMenu(){

        $user_id = Auth::user()->id;
        $menu = array();
        $sections_array = array();
        $categs_array = array();
        $links_array = array();
        $section_user_label=Sections_labels_user::all();

   

        if(count($section_user_label)){

            $sections = Sections_labels_user::orderBy('order')->get();

        }else{

            $sections = Sections_label::orderBy('order')->get();
        }

    
        $i = Sections_label::first()->id;
        $l = DB::table('sections_labels')->max('id');
        $w = $i;
        foreach ($sections as $s) {

            $sections_array[$w]['id_s'] =$s->id;           
            $sections_array[$w]['label'] =$s->labelFr;
            $sections_array[$w]['icon'] =$s->icon;
        
            $categs = Sections_label::find($s->id)->CategsLabels;

            $allCategs = Categs_label::all();

            foreach($categs as $c){
                for($x=1 ; $x<=count($allCategs )+1;$x++){
                    if($c->order==$x){
                        $categs_array[$x]['id_s'] =$s->id;
                        $categs_array[$x]['id_c'] =$c->id;
                        $categs_array[$x]['label'] =$c->labelFr;
                        $categs_array[$x]['icon'] =$c->icon;
                    }
                }
                
                

                $links = Categs_label::find($c->id)->LinksLabels;

                $allLinks = Links_label::all();

                foreach($links as $l){

                    for($x=1 ; $x<=count($allLinks)+1;$x++){
                        if($l->order==$x){
                            $links_array[$x]['id_s'] =$s->id;
                            $links_array[$x]['id_c'] =$c->id;
                            $links_array[$x]['label'] =$l->labelFr;
                            $links_array[$x]['url'] =$l->url;
                        }
                }

                }
            }
        $w++;
        }

        return $menu = array('sections_array' => $sections_array,
               'categs_array' => $categs_array ,'links_array' => $links_array);

    }
}
