<?php
namespace App\Http\Controllers;

use App\Listing;
use App\ListingItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
      $listings = Listing::all(); 
      return view('listings/index', [
	'listings' => $listings,
	'info' => $request->session()->pull('info') 
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
      return view('listings/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

      $input = $request->all();
      
      // Validates with validation rules from 
      // $this->rules_for_listingitems() and
      // rules for listing attrs.
      $this->validate( $request, array_merge(
	$this->rules_for_listingitems($input), 
	[
	  'listing.name' => 'required',
	  'listing.listing_items' => 'required'
	]
      ));

      // Validation ran fine. Save the data !
      $listing = Listing::create([ 
	'name' => $input['listing']['name']
      ]);
      foreach($input['listing']['listing_items'] as $item) {
	$listing_item = ListingItem::create([
	  'name' => $item
	]);
	$listing->listing_items()->save($listing_item);
      }

      $request->session()->flash('info', 'Listing created !');
      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    private function rules_for_listingitems($input) 
    {
      $rules = [];
      $length = count($input['listing']['listing_items']); 
      for($i=0; $i < $length; $i++) 
	$rules["listing.listing_items." . $i] = 'required';
      return $rules;
    }
}
