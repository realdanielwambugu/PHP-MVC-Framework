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

// Theme switch js

const checkbox = document.getElementById('checkbox');
let theme = localStorage.getItem('theme');


var dark = config().host + '/public/assets/css/themes/dark_theme.css';
var light = config().host + '/public/assets/css/themes/light_theme.css';

if (theme)
{
  document.getElementById("theme").href = theme;
  
  if (theme === dark)
  { 
    sun = document.querySelector('#sun');
    sun.classList.replace('fa-sun', 'fa-moon');
    sun.classList.replace('color-1', 'color-dark');
      
    moon = document.querySelector('#moon');
    moon.classList.replace('fa-moon', 'fa-sun');
    moon.classList.replace( 'color-dark','color-1');
  
  }

}

checkbox.addEventListener('change', () => {

  var dark = config().host + '/public/assets/css/themes/dark_theme.css';
  var light = config().host + '/public/assets/css/themes/light_theme.css';
   
  var theme = document.getElementById("theme");

  if (theme.href === light)
  {
    theme.href = dark;
    localStorage.setItem('theme', dark);
  }
  else
  {
    theme.href = light;
    localStorage.setItem('theme', light);
  }

});
