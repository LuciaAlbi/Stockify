// JavaScript code
function searchObject() {
    var input = document.getElementById('searchbar').value.toLowerCase();
    var objects = document.getElementsByClassName('object');
  
    for (var i = 0; i < objects.length; i++) {
      var object = objects[i];
      var text = object.textContent.toLowerCase();
  
      if (text.includes(input)) {
        object.style.display = 'block';
      } else {
        object.style.display = 'none';
      }
    }
  }
  