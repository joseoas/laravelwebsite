<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\Isapre;
use App\Http\Requests\SellerRequest;

class SellerController extends Controller
{
    public function SellerIndex(){
    	$sellers= Seller::join('isapres', 'sellers.id_isapre', '=', 'isapres.id')
        ->select('sellers.*','isapres.name_isapre','isapres.id as id_isapre')
        ->orderBy('sellers.name_seller','asc')
        ->paginate(5);

    	$count=Seller::all()->count();
    	return view('backend.seller.seller')->with('sellers',$sellers)->with('count',$count);
    }

    public function SellerAddGet(){
    	$isapres=Isapre::all();
    	return view('backend.seller.create')->with('isapres',$isapres);
    }

    public function SellerAddPost(SellerRequest $request){

    	$seller=new Seller;
    	$seller->rut_seller=$request->rut;
    	$seller->name_seller=$request->nombre;
    	$seller->lastname_seller=$request->apellido;
    	$seller->smartphone_seller=$request->movil;
    	$seller->phone_seller=$request->fijo;
    	$seller->email_seller=$request->email;
    	$seller->id_isapre=$request->isapre;
    	$seller->save();

    	return redirect()->route('sellers.index');
    }

    public function SellerEditGet($id){
        $isapres=Isapre::all();
        $seller=Seller::find($id);
        return view('backend.seller.create')->with('seller',$seller)->with('isapres',$isapres);
    }

    public function SellerUpdate(SellerRequest $request,$id){

        $seller=Seller::find($id);
        $seller->rut_seller=$request->rut;
        $seller->name_seller=$request->nombre;
        $seller->lastname_seller=$request->apellido;
        $seller->smartphone_seller=$request->movil;
        $seller->phone_seller=$request->fijo;
        $seller->email_seller=$request->email;
        $seller->id_isapre=$request->isapre;
        $seller->save();
        return redirect()->route('sellers.index');


    }

    public function SellerDestroy($id){

    	$sellers=Seller::find($id);
        if(is_null($sellers)){return redirect()->route('sellers.index');}

    	$sellers->delete();
    	return redirect()->route('sellers.index');
        

    }
}
