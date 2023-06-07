function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}

function dots() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}


function upload() {
  var popup = document.getElementById("upload_Popup");
  popup.classList.toggle("show");
}

function profile() {
  var popup = document.getElementById("pro_Popup");
  popup.classList.toggle("show");
}