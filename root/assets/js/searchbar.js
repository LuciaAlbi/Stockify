// JavaScript code
function searchObject() {
    var input = document.getElementById('searchbar').value.toLowerCase();
    var rows = document.querySelectorAll('#list tr');
  
    for (var i = 0; i < rows.length; i++) {
      var row = rows[i];
      var cells = row.getElementsByTagName('td');
      var match = false;
  
      for (var j = 0; j < cells.length; j++) {
        var cell = cells[j];
  
        if (cell.innerText.toLowerCase().includes(input)) {
          match = true;
          break;
        }
      }
  
      if (match) {
        row.style.display = 'table-row';
      } else {
        row.style.display = 'none';
      }
    }
  }
  