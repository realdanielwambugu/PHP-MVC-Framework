<div class="mt-4">

    <h2> <i class="fa fa-users color-pri"></i> Customers </h2>

    <div class="w-full py-8">
          <div class="sec-theme-color">
               <ul class="fx w-full shadow-2 color-pri">
                    <li  class="w-1/12 txt-h-c py-4"> Photo </li>
                    <li  class="w-2/12 txt-h-c py-4"> Name </li>
                    <li  class="w-3/12 txt-h-c py-4"> Email </li>
                    <li  class="w-2/12 txt-h-c py-4"> Phone </li>
                    <li  class="w-2/12 txt-h-c py-4"> Joined </li>
                    <li  class="w-2/12 txt-h-c py-4"> Action </li>
                </ul>
    
                <ul class="fx w-full shadow-2 p-1 hoverColor-sec">
                    <li class="w-1/12"> 
                        <div class="w-12 h-12 rounded-full m-0-auto">
                            <img src="<?= images_path('users/1.jpg') ?> " alt="user pic"
                            class="w-full h-h-full rounded-full">
                        </div>
                    </li>                    
                    <li class="w-2/12 fx fx-j-c fx-i-c"> Jonathan Mwaniki</li>
                    <li class="w-3/12 fx fx-j-c fx-i-c"> danielwambugu@gmail.com </li>
                    <li class="w-2/12 fx fx-j-c fx-i-c"> 0795513550 </li>
                    <li class="w-2/12 fx fx-j-c fx-i-c"> 20th May 2022 </li>
                    <li class="w-2/12 fx fx-i-c fx-j-c">
                        <div class="color-1 bgColor-pri py-2 px-4 
                        rounded mr-2 pointer hover:bgColor-pri-700"
                        onclick="(new Ajax).route('edit_profile').container('content').
                        loader('content').send()""> 
                            <i class="fal fa-edit fs-md"> </i>
                        </div>
                        <div class="color-1 b bgColor-danger py-2 
                        px-4 rounded pointer hover:color-danger"> 
                            <i class="fas fa-trash-alt fs-md"></i>  
                        </div>
                    </li>
                </ul>
               
           </div>
    </div>
</div>