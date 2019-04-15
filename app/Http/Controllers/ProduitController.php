<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = Produit::all();

        return view('produit.index', compact('produit'));
    }


    public function create()
{
   return view('produit.create');
}

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'designation'=>'required',
          'categorie'=> 'required',
          'quantite_alerte'=> 'required',
          'quantite_stock'=> 'required',
          'prix_unitaire'=> 'required|integer'
      ]);
      $produit = new Produit([
        'designation' => $request->get('designation'),
          'categorie' => $request->get('categorie'),
          'quantite_stock' => $request->get('quantite_stock'),
          'quantite_alerte' => $request->get('quantite_alerte'),
          'prix_unitaire'=> $request->get('prix_unitaire')
      ]);
      $produit->save();
      return redirect('/produit')->with('success', 'Le Produit a été ajouté avec succes !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);

        return view('produit.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'designation'=>'required',
            'categorie'=> 'required',
            'quantite_stock'=> 'required|integer',
            'quantite_alerte'=> 'required|integer',
            'prix_unitaire'=> 'required|integer'
        ]);

        $produit = Produit::find($id);
        $produit->designation = $request->get('designation');
        $produit->categorie = $request->get('categorie');
        $produit->quantite_stock = $request->get('quantite_stock');
        $produit->quantite_alerte = $request->get('quantite_alerte');
        $produit->prix_unitaire = $request->get('prix_unitaire');
        $produit->save();

        return redirect('/produit')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();

        return redirect('/produit')->with('success', 'Stock has been deleted Successfully');
    }

}
