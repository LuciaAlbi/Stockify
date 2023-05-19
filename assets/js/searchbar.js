window.addEventListener('DOMContentLoaded', function () {
    // Obtener los parámetros de búsqueda de la URL
    var urlParams = new URLSearchParams(window.location.search);
    var searchValue = urlParams.get('search');
  
    // Establecer el valor de búsqueda en el campo de entrada
    document.getElementById('searchbar').value = searchValue;
  
    // Realizar la búsqueda inicial
    searchObject();
  });
  
  function searchObject() {
    var input = document.getElementById('searchbar').value.toLowerCase();
    var rows = document.querySelectorAll('#list tr');
  
    // Obtener los parámetros de búsqueda actuales de la URL
    var urlParams = new URLSearchParams(window.location.search);
  
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
  
    // Actualizar el parámetro de búsqueda en la URL
    url
  }