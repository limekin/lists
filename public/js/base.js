function setFormHandlers() {
  // Adds an item field in listing form.
  $('#add-list-item').click( function() {
    var countt = $('.list-item-field').length;
    var htm = "<div class='list-item-field'>\n";
    htm +=    "  <label>" + (countt+1) + ". </label>\n";
    htm +=    "  <input type='text' name='listing[listing_items][]'/>";
    htm +=    "</div>";

    $("#listing-form").append(htm);

    if(countt == 0) 
      $('#remove-list-item').show();
  });

  // Removes a list item field in listing form.
  $('#remove-list-item').click( function() {
    var countt = $('.list-item-field').length;
    if(countt == 0) return; 
    var toRemove = $('.list-item-field').get(countt-1);
    toRemove.remove();
    if(countt == 1) $(this).hide();
  });

  return 0;
}

$(document).ready( function() {
 
  // Calls all the handlers.
  setFormHandlers();

});
    
