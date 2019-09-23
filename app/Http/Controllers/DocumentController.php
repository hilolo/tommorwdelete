<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Document;
use App\Locataire;

class DocumentController extends Controller
{


      public function index()
    {

        return view('document.index');
      
    }


   public function storeaf()
    {
       
        $loc2 = Locataire::all()->where('archive', '0');	
        return view('document.add',compact('loc2'));
      
    }


   public function storeaf2($id)
    {
            
        return view('document.add',compact('id'));
      
    }


    public function insert(Request $request)

    {

   
            foreach($request->file('file') as $file)
            {

                $ar= new Document();

                $ar->Groupname=$request->input('Groupname');
                $ar->path_doc=$file->storeAs('public/Documents/'.$request->input('prop'),$file->getClientOriginalName()) ;
                $ar->locataires_id=$request->input('prop');
                $ar->save();    

            } 



            return redirect('/Documents');
        
    }


       public function insert2(Request $request,$id)

    {



    if($request->hasfile('file'))

         {

            foreach($request->file('file') as $file)

            {

                $ar= new Document();

                $ar->Groupname=$request->input('Groupname');
                $ar->path_doc=$file->storeAs('public/Documents/'.$id,$file->getClientOriginalName()) ;
                $ar->locataires_id=$id;
                $ar->save();    

            }

         }

   



            return redirect('/Documents');
        
    }



      public function data(){

       $articles =Document::all();
       

         return datatables()->of($articles)

          ->addColumn('action', function ($user) {
         
            
                return '
                  <a style="font-size: 20px" href="'. Storage::url($user->path_doc) .'"><i class="fa fa-eye bg-success  " aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('documedelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })

              ->addColumn('Nom', function( $user) { 

         if($user->locataire->mode =='2') {
        return '<a   href="/Locataire/'.   $user->locataire->id.'/View"    >' .   $user->locataire->prenom . ' ' . $user->locataire->nom .   '</a>'  ; 
        
             }else {
                 return '<a   href="/Proprietaire/'.   $user->locataire->id.'/View"    >' .   $user->locataire->prenom . ' ' . $user->locataire->nom .   '</a>'  ; 


             }

         })
         ->rawColumns(['Nom' => 'Nom','action' => 'action'])

    ->toJson();


    }


          public function destroy($id)
    {
      $share = Document::find($id);
      Storage::delete($share->path_doc);
        $share->delete();
      return redirect('/Documents');
     
    }






      







}
