function ubahData() {
  // Lakukan permintaan HTTP ke PHP dengan bantuan XMLHttpRequest atau menggunakan Fetch API.
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "asset/php/updateDataClick.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var response = xhr.responseText;
      document.getElementById('dukungan').innerHTML = response;
    }
  };
  
  xhr.send();
}

function ubahDukungan(){
    // Lakukan permintaan HTTP ke PHP dengan bantuan XMLHttpRequest atau menggunakan Fetch API.
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "asset/php/updateDataClick.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    var data = "relawan";

    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var response = xhr.responseText;
        document.getElementById('relawan').innerHTML = response;
      }
    };
    
    xhr.send(data);
}