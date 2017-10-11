<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Isapre;
use App\Http\Requests\IsapreRequest;


class IsapreController extends Controller
{
    public function index(){

    	$isapres=Isapre::paginate(5);
    	$count=Isapre::all()->count();
    	return view('backend.isapre.isapre')->with('isapres',$isapres)->with('count',$count);

    }//END INDEX

    Public function IsapreCreateGet(){

    	return view('backend.isapre.create');
    }//END ISAPRECREATE

    public function IsapreAddPost(IsapreRequest $request){
    	$isapre=new Isapre;
    	$isapre->name_isapre=$request->name;
    	$isapre->save();
    	return redirect()->route('isapres.index'); 

    }

    public function IsapreEditGet($id){

    	if(is_null($id)){return redirect()->route('isapres.index');}
    	$isapres=Isapre::find($id);
    	return view('backend.isapre.create')->with('isapres',$isapres);
    }

    public function IsapreUpdatePost(IsapreRequest $request, $id){

    	$isapre=Isapre::find($id);
    	
    	$isapre->name_isapre=$request->name;
    	$isapre->save();
    	return redirect()->route('isapres.index');
    }

    public function IsapreDestroyPost($id){

    	if(is_null($id)){return redirect()->route('isapres.index');}
    	$isapre=Isapre::find($id);
    	$isapre->delete();
    	return redirect()->route('isapres.index'); 


    }

}
