<?php

namespace App\Http\Controllers;

use App\HomeElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class HomeElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeElement = HomeElement::first();
        return view('homeElement.viewHomeElement',compact('homeElement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeElement  $homeElement
     * @return \Illuminate\Http\Response
     */
    public function show(HomeElement $homeElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeElement  $homeElement
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeElement $homeElement)
    {
        return view('homeElement.editHomeElement',compact('homeElement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeElement  $homeElement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeElement $homeElement)
    {
        $request->validate([
            
            
            'titreHeader'=>'required',
            'titreAbout'=>'required',
            'titreService'=>'required',
            'titreTeam'=>'required',
            'promotionTitre'=>'required',
            'promotionDescription'=>'required',
    
        ]);
        
        if($request->hasFile('bigLogo')) {

            if(Storage::disk('public')->exists($homeElement->bigLogo)){
                Storage::disk('public')->delete($homeElement->bigLogo);
            }
      
            $imageNew=Storage::disk('public')->put('', $request->bigLogo);
            $homeElement->bigLogo=$imageNew;

            Image::configure(array('driver' => 'gd'));

            $logo='petit'.$imageNew;

            Image::make(storage_path('app/public/' . $homeElement->bigLogo))
            ->resize(100, 40)
            ->save(storage_path('app/public/' . $logo));

            $homeElement->logo=$logo;

        }

        $homeElement->titreHeader = $request->input('titreHeader');
        $homeElement->titreAbout = $request->input('titreAbout');
        $homeElement->titreService = $request->input('titreService');
        $homeElement->titreTeam = $request->input('titreTeam');
        $homeElement->promotionTitre = $request->input('promotionTitre');
        $homeElement->promotionDescription = $request->input('promotionDescription');
        $homeElement->save();


        return redirect()->route('homeElement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeElement  $homeElement
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeElement $homeElement)
    {
        //
    }
}
