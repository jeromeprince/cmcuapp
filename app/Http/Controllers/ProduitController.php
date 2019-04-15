<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::orderBy('id', 'asc')->paginate(8);

        return view('admin.produit.index', compact('produits'));
    }


    public function create()
{
   return view('admin.produit.create');
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
      return redirect()->route('produit.index')->with('success', 'Le produit a été ajouté avec succès !');
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

        return view('admin.produit.edit', compact('produit'));
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

        return redirect()->route('produit.index')->with('success', 'La mise à jour a bien été éffectuer');
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

        return redirect()->route('produit.index')->with('success', 'Le produit a bien été supprimé');
    }

    public function stock_pharmaceutique()
    {
        $produi = Produit::orderBy('id', 'asc')->paginate(8);
        $produits = DB::table('produits')->where('categorie', 'pharmaceutique')->get();

        return view('admin.produit.pharmaceutique', compact('produits', 'produi'));
    }


    public function stock_materiel()
    {
        $produi = Produit::orderBy('id', 'asc')->paginate(8);
        $produits = DB::table('produits')->where('categorie', 'materiel')->get();

        return view('admin.produit.materiel', compact('produits', 'produi'));
    }
}
