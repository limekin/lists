@extends('layouts/master')

@section('content')
  <h2>Listings</h2>
  @if ( count($listings) == 0 )
    <p>There are not any listings in the database.</p>
  @else

    <div class='listings'>
      @foreach($listings as $listing) 
	<div class='listing'>
	  <p>{{ $listing->name }}</p>
	  <ul>
	    @foreach($listing->listing_items as $listing_item)
	      <li>{{ $listing_item->name }}</li>
	    @endforeach
	  </ul>
	</div>
      @endforeach
    </div>

  @endif

  <a href='<?php echo route('listing.create') ?>'>New</a>
  @endsection

