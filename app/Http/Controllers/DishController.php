<?php

namespace App\Http\Controllers;
use App\Dish;
use App\Main;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('dishes.alldishes', compact('dishes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create', Product::class);
        $mains = Main::all();

        return view('dishes.create',compact('mains'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request){
        //validacija reikia perkelti. Actions:1. terminal: php artisan make:request StoreProductRequest
        //2. padaryti authorise true
        //3. i return perduoti masyva.
        // $request->validate([
        // // ]);
        // $this->authorize('create', Dish::class);
        Dish::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image_url'=>$request->input('image_url'),
            'price'=>$request->input('price'),
            'main_id'=>$request->input('main_id'),
        ]);
            return redirect()->route('admin.dishes')->with('message', 'Dish created successfully !!!');
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('dishes.singledish', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */

        public function edit(Dish $dish) {
            // $this->authorize('update', Product::class);
            $mains = Main::all();
            return view('dishes.edit', compact('dish', 'mains'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request,Dish $dish){
             $dish->update([
                 'title'=>$request->input('title'),
                 'description'=>$request->input('description'),
                 'image_url'=>$request->input('image_url'),
                 'price'=>$request->input('price'),
             ]);
                 return redirect()->route('admin.dishes')->with('message', 'Product updated successfully !!!');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
     public function delete(Dish $dish) {
             // $this->authorize('delete', Product::class);

             $dish->delete();
             return redirect()->route('admin.dishes')->with('message', 'Product deleted successfully !!!');

         }

    public function admin(){
        $dishes = Dish::all();
        return view('admin.alldishes', compact('dishes'));

    }
}
