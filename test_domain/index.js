// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$(document).ready(function(){
  $('.little-box').click(function(){
    $('.box-2').addClass('active')
  })

  $('.bedroomBtn').click(function(){
    $('.box-2').load('bedroom.php')
  })

  $('.kitchenBtn').click(function(){
    $('.box-2').load('kitchen.php')
  })

  $('.livingRoomBtn').click(function(){
    $('.box-2').load('living.php')
  })

  $('.washRoomBtn').click(function(){
    $('.box-2').load('washing.php')
  })

  $('.FamRoomBtn').click(function(){
    $('.box-2').load('family.php')
  })

  $('.bathroomBtn').click(function(){
    $('.box-2').load('bathroom.php')
  })
})
