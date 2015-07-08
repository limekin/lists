@extends('layouts/master')

@section('content')
  <h2>Listings</h2>
  @if ( count($listings) == 0 )
    <p>There are not any listings in the database.</p>
  @endif

  <a href='<?php echo route('listing.create') ?>'>New</a>
@endsection
