// This function acts as a callback. It is called after the AJAX class request is complete.
function AfterAjax(action)
{

  if (action === 'edit_profile')
  {

      fileInput = document.getElementById('fileInput');
   
      fileInput.addEventListener('change', function ()
      {
         var file = this.files[0];
         var reader = new FileReader();
   
        reader.addEventListener('load', function ()
        {
           var img = document.getElementById('previewImg');
           img.src = this.result;
        });
   
        reader.readAsDataURL(file);
    });
  }
}
 

// OTHER JS CODE

// Nav bar toggle
const body = document.querySelector("body");
sidebarToggle = body.querySelector(".sidebarToggle");
sidebar = body.querySelector("nav");

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('close');
});

// .................nav items active class.....................
var btnContainer = document.getElementById("nav-list");
var btns = btnContainer.getElementsByClassName("nav-item");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

// -----use the FileReader object to preview an image:----
// Get a reference to the file input element on the page
var fileInput = document.getElementById('fileInput');

// Make sure the element exists before trying to use it
