<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Sections_label;
use App\Models\Categs_label;
use App\Models\Links_label;
use App\Models\links_labels_user;
use App\Models\Sections_labels_user;
use App\Models\User;
use App\Models\Admin;

class LinkController extends Controller
{
    public function create(){

    	return view('add_shortcut')->with('menu',$this->getMenu());
    }

    public function store(Request $request){

    	$validated = $request->validate([              
          'label' => 'required|unique:Links_labels_users', ]);
        
       
        $user_id = Auth::user()->id;
    	$add_link = $request->add_link;
    	$icon = $request->icon;
    	$label  = $request->label;
    	$get_icon = array();
    	$get_label = array();
    	

    	for($i=0; $i <count($add_link) ; $i++) {

    		$sections_labels_user = new Links_labels_user();

    		

    			for ($w=0; $w <count($icon)  ; $w++) {

    					$id_link = explode("/",$icon[$w]);

    							if(isset($id_link[1])){

    								if($add_link[$i] == $id_link[1]){

    									$get_icon[$i] = $id_link[0];
  
    									if(!$label[$w] !=''){

                                             $get_label[$i]=$label[$w];
    							
    									}

    									
    										
    								}
    							}

    	 		} 

    	 		
                $sections_labels_user->links_label_id = $add_link[$i];
                $sections_labels_user->user_id = $user_id;
                $sections_labels_user->order = $i;

                if(isset($get_icon[$i])){
                    $sections_labels_user->icon  = $get_icon[$i];

                }else{

                    $sections_labels_user->icon  = "fa fa-external-link";

                }

                if(isset($get_label[$i])){

                     $sections_labels_user->label = $get_label[$i];

                }else{

                    $get_link_id = Links_label::find($add_link[$i]);

                }
    	 		$sections_labels_user->save();


    	}

        $links = Links_labels_user::all();
        
        dd($links);

    	 return view('dashboard')->with('menu',$this->getMenu())->with('links',$links);

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
                            $links_array[$x]['id'] =$l->id;
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
