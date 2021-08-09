<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Sections_label;
use App\Models\Categs_label;
use App\Models\Links_label;
use App\Models\Sections_labels_user;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class StudentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index(){

    	return view('student.list')->with('menu',$this->getMenu());
    }

    public function create(){

    	return view('student.create')->with('menu',$this->getMenu());
    }

    public function store(Request $request){

        $user_type = $request->user_type;

            $validated = $request->validate([
                'nom' => 'required|max:255',
                'prenom' => 'required|max:255',
                'email' => 'required|unique:users',
                'password' => ['required', 'confirmed'],
            ]);

            $name = $request->nom.' '.$request->prenom;
            $email = $request->email;
            $password = $request->password;
            $user_type = $request->user_type;

            $user = new User();

            $user->name = $name;
            $user->email = $email;
            $user->user_type = $user_type;
            $user->password = Hash::make($password);
            $user->save();

            $usertId= User::latest('id')->first();
            $userId = $usertId->id;

            $student = new Student();

            $student->fist_name = $request->prenom;
            $student->last_name = $request->nom;
            $student->img = 'NULL';
            $student->user_id = $userId;
            $student->save();
            return view('student.list')->with('menu',$this->getMenu());


        

        




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
