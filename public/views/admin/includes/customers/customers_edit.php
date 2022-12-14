<div>
    <div class="w-full fx">
        
        <div class="w-1/2 border-r b-solid b-color-3-100">

           <h2 class="mt-4"> 
                <i class="fas fa-user-edit color-pri"></i> Personal Information  
           </h2>

           <form class="w-11/12 pt-8" action="">
                <div class="auto mb-2">
                    <div class="w-32 h-32 m-0-auto rounded-full bgColor-pri fx fx-i-c fx-j-c relative">
                        <img id="previewImg" src="<?= images_path('users/1.jpg') ?> " alt="user pic"
                         class="rounded-full " style="width:90%; height:90%;">
                         <div class="absolute w-12 h-8 bgColor-pri rounded-full 
                         fx fx-j-c fx-i-c pt-1 pointer" style="bottom: -9px;">
                            <label for="fileInput" class="pointer">
                                <i class="fa fa-camera fs-xl color-1"></i> 
                            </label>
                         </div>
                    </div>
                    <input id="fileInput" class="hide" type="file"  />
                </div>

                <div class="mb-4">
                  <label class="block pb-2" for="fullname"> Full Name</label>
                  <div class="pl-3 fx fx-i-c border b-solid b-color-3-500 
                  rounded hover:b-color-pri">
                        <i class="fal fa-user fs-xl pr-4 pointer"></i>
                        <input type="text" name="fullname" value="Jonathan Mwaniki"
                        class="w-full py-4 py-3 px-1 ">
                    </div>
                </div>

                <div class="mb-4">
                  <label class="block pb-2" for="email"> Email </label>
                  <div class="pl-3 fx fx-i-c border b-solid b-color-3-500 
                  rounded hover:b-color-pri">
                        <i class="fal fa-envelope fs-xl pr-4 pointer"></i>
                        <input type="text" name="email" value="jonathanmwaniki@gmail.com"
                        class="w-full py-4 py-3 px-1 ">
                    </div>
                </div>

                <div class="mb-4">
                  <label class="block pb-2" for="phone"> Phone </label>
                  <div class="pl-3 fx fx-i-c border b-solid b-color-3-500 
                  rounded hover:b-color-pri">
                        <i class="fal fa-phone fs-xl pr-4 pointer"></i>
                        <input type="text" name="phone" value="0795513550"
                        class="w-full py-4 py-3 px-1 ">
                    </div>
                </div>

                <div class="w-full fx fx-j-e mt-6">
                    <input type="button" class="w-full py-4 py-3 px-1 pointer 
                    bgColor-pri-800 rounded shadow-1 bold fs-md hover:bgColor-pri color-1" 
                    value="Save Changes">    
                </div>
           </form>

        </div>

        <div class="w-1/2 pl-8">
            <h2 class="mt-4"> 
                <i class="fas fa-user-lock color-pri"></i> Change Password  
            </h2>
            <form class="w-11/12 pt-8" action="">
                <div class="mb-4">
                      <label class="block pb-2" for="phone"> Current Password </label>
                      <div class="pl-3 fx fx-i-c border b-solid b-color-3-500 
                      rounded hover:b-color-pri">
                            <i class="fal fa-lock fs-xl pr-4 pointer"></i>
                            <input type="password" name="current_password" 
                            class="w-full py-4 py-3 px-1 ">
                        </div>
                    </div>

                    <div class="mb-4">
                      <label class="block pb-2" for="phone"> New Password </label>
                      <div class="pl-3 fx fx-i-c border b-solid b-color-3-500 
                      rounded hover:b-color-pri">
                            <i class="fal fa-lock fs-xl pr-4 pointer"></i>
                            <input type="password" name="new_password" 
                            class="w-full py-4 py-3 px-1 ">
                        </div>
                    </div>

                    <div class="mb-4">
                      <label class="block pb-2" for="phone"> Confirm New Password </label>
                      <div class="pl-3 fx fx-i-c border b-solid b-color-3-500 
                      rounded hover:b-color-pri">
                            <i class="fal fa-lock fs-xl pr-4 pointer"></i>
                            <input type="password" name="confirm_password" 
                            class="w-full py-4 py-3 px-1 ">
                        </div>
                    </div>

                    <div class="w-full fx fx-j-e mt-6">
                        <input type="button" class="w-5/12 py-4 py-3 px-1 pointer 
                        bgColor-pri-800 rounded shadow-1 bold fs-md hover:bgColor-pri color-1" 
                        value="Save Changes">    
                    </div>
            </form>
        </div>
    </div>
</div>