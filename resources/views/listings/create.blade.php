@extends('layouts.master')

@section('content')
  <h2>New Listing</h2>

  @if( count($errors) > 0)
    <div class='alert alert-danger'>
      <ul>
      @foreach($errors->all() as $error) 
	<li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif
  <form role='form' action='/listing' method='POST'>
    <div id='listing-form'>
      <label>Listing Name : </label>
      <br>
      <input type='text' name='listing[name]'/>
      <br>

      <h3>Listing Items :</h3>
      <div class='list-item-field'>
	<label>1. </label>
	<input type='text' name='listing[listing_items][]'/>
      </div>

      <?php echo csrf_field() ?>
    </div>

    <br>
    <button type='submit'>Create</button>
    <button id='add-list-item' type='button'>Add Item</button>
    <button id='remove-list-item' type='button'>Remove</button>
  </form>
@endsection


