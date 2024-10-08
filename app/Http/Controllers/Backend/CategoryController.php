<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function allCategory(){
        
        $categories=Category::latest()->get();

       // dd($categories);
        return view('backend.category.all_category',compact('categories'));
    }//end method


    function addCategory(){
        
        return view('backend.category.add_category');
    }//end method  category_image


    function storeCategory(Request $request){


        if ($request->file('category_image')) {
            $image = $request->file('category_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300,300)->save(public_path('upload/category/'.$name_gen));
            $save_url = 'upload/category/'.$name_gen;

            Category::create([
                'category_name' => $request->category_name,
                'category_image' => $save_url, 
            ]); 
        } 

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
  
    }//end method




    // start city part


    function allCity(){

         $cities=City::latest()->get();
         return view('backend.city.all_city',compact('cities'));
    }//end method


    function storeCity(Request $request){
        City::create([
            'city_name' => $request->city_name,
            'city_slug' =>  strtolower(str_replace(' ','-',$request->city_name)),
           
        ]); 
    

    $notification = array(
        'message' => 'City Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.city')->with($notification);
    }
        
}
