$(function() {
  var label = document.getElementById('rng');
  
  $(document).on('input', 'input[type="range"]', function(e) {
        label.innerHTML ="$"+ e.currentTarget.value;
  });
  
  $('input[type=range]').rangeslider({
    polyfill: false
  });
});


var $picker = $( '.datepicker' ).pickadate({
  format: 'yy-mm-dd',
  formatSubmit: 'yy-mm-dd',
  onSelect: function() {
    
    // Remove the delimiters
    var reformattedDate = this.getDate().replace( /-/g, '' )
        
    // Set the input value
    this.$node.val( reformattedDate )
      
    // Set the hidden input value
    this.$node.siblings( 'input[type=hidden]' ).val( reformattedDate )
  }
})




function phone_num() {

    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("pnum").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x)) {
        text = "Please enter valid number";
    } else {
        text = "";
    }
    document.getElementById("demo").innerHTML = text;
}