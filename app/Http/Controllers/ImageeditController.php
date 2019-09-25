<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;

class ImageeditController extends Controller
{
    
   public function index()
    {
     
        return view('imageedit.index');
      
    }


     public function Imagetraitment(Request $request)
    {
     

     
    		

     	    foreach($request->file('file') as $file)

            {
        


$path=public_path('/uplouad/'. $request->input('name'));
            	if (!file_exists($path)) {


            	File::makeDirectory($path);}


            $img = Image::make($file->getRealPath());
            $imagick = $img->getCore();

		        $img->resize(800, 500);
			     // $img->insert(public_path('images/logo.png'), 'bottom-right', 20, 20);

        /*    //$img->text('wwww.accesimmotanger.com ', 400, 250, function($font) {  
          $font->file(public_path('/fonts/Calibri.ttf'));  
          $font->size(40);  
          $font->color('#706a6a');  

                $font->align('center');
          
         });  */
			   $img->save(public_path('/uplouad/'. $request->input('name'). '/' .$file->getClientOriginalName()),100);



            }

               return redirect('/Imagetraitment');  
    }


      
}
