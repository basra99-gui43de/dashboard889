<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use App\Company;
class guide extends Controller
{
  public function index(){
    $category = Category::all();
    $arr=Array('category' => $category);

      return view('categories.guide.index' , $arr);
  
}
public function addcompany($id , Request $request){
    if($request->isMethod('post')){
        $newCompany=new Company();
        $newCompany->company_name=$request->input('company_name');
        $newCompany->email=$request->input('email');
        $newCompany->tele=$request->input('tele');
        $newCompany->location=$request->input('location');
        $newCompany->location_map=$request->input('location_map');
        $newCompany->company_derails=$request->input('company_details');
        $newCompany->category_id=$id;
    //  if(Input::hasFile('file')){
        //  $img = Input::file('file');
        //  $newServ->img =  $img->move('uploads', $img->getClientOriginalName());
         
    //  }
    $newCompany->save();


    }
        $company = Company::where('category_id', $id)->get();
        $arr=Array('company' => $company , 'id'=>$id );
    
          return view('categories.guide.addcompany' , $arr );
}
public function delete_company($id ,$cat_id){
    $comp = Company::find($id);
    $comp->delete();
    $company = Company::where('category_id', $cat_id)->get();
        $arr=Array('company' => $company , 'id'=>$id );
    
          return view('categories.guide.addcompany' , $arr );
    // return redirect('addcompany');
}

public function edit_company($id ,$cat_id , Request $request){
    if($request->isMethod('post')){
        $editCompany=Company::find($id);
        $editCompany->company_name=$request->input('company_name');
        $editCompany->email=$request->input('email');
        $editCompany->tele=$request->input('tele');
        $editCompany->location=$request->input('location');
        $editCompany->location_map=$request->input('location_map');
        $editCompany->company_derails=$request->input('company_details');
        $editCompany->category_id=$id;
    //  if(Input::hasFile('file')){
        //  $img = Input::file('file');
        //  $newServ->img =  $img->move('uploads', $img->getClientOriginalName());
         
    //  }
    $newCompany->save();
    return redirect('addcompany');
    }
    // }else{
        $company = Company::find($id);
        $arr=Array('company' => $company , 'id'=>$id );
    
          return view('categories.guide.edit' , $arr );
    
    }
   
}
