<?php require_once view('includes/header'); ?>
   <body>

   <!-- Navigation bar -->
       <nav class=" fixed top-0 left-0 h-full px-8 py-6 
       border-r b-solid b-color-3-100">

            <div class="color-pri fx fx-i-c ml-3">
                <i class="fas fa-motorcycle fa-2x"></i>
                <h1 class="fw-bold pl-3 " style="font-size:24px;"> 
                    <span class="linkName"><?= app_name(); ?> </span>
                </h1>
            </div>

            <menu class="mt-6 fx fx-c fx-j-btw" style="width:200px; height:calc(100% - 90px)">
                <ul id="nav-list" class="list-none">
                    <li onclick="(new Ajax).route('analytics').container('content').
                    loader('content', 'shine').send()" class="nav-item active">
                    <div class="pointer pointer fx h-16 fx-i-c fw-400 fs-lg 
                     hover:color-pri">
                        <span class="w-16 h-full fx fx-j-c fx-i-c"
                        style="font-size:20px;">
                            <i class="fas fa-home"></i>
                        </span> <span class="linkName"> Dashboard </span> 
                    </div></li>
                    
                    <li onclick="(new Ajax).route('motorcycles').container('content').
                    loader('content', 'shine').send()" class="nav-item">
                    <div class="pointer fx h-16 fx-i-c fw-400 fs-lg 
                         hover:color-pri">
                         <span class="w-16 h-full fx fx-j-c fx-i-c"
                        style="font-size:20px;">
                        <i class="fas fa-motorcycle"></i>
                        </span> <span class="linkName">Motorcycles </span> 
                    </div></li>

                    <li onclick="(new Ajax).route('customers').container('content').
                    loader('content', 'shine').send()" class="nav-item">
                    <div class="pointer fx h-16 fx-i-c fw-400 fs-lg 
                         hover:color-pri">
                         <span class="w-16 h-full fx fx-j-c fx-i-c"
                        style="font-size:20px;"> 
                        <i class="fas fa-users"></i>
                        </span> <span class="linkName">Customers </span>
                    </div></li>

                    <li onclick="(new Ajax).route('bookings').container('content').
                    loader('content', 'shine').send()" class="nav-item">
                    <div class="pointer fx h-16 fx-i-c fw-400 fs-lg 
                         hover:color-pri">
                         <span class="w-16 h-full fx fx-j-c fx-i-c"
                        style="font-size:20px;"> 
                        <i class="fas fa-ticket"></i>
                        </span> <span class="linkName">Bookings </span>
                    </div></li>

                    <li onclick="(new Ajax).route('transactions').container('content').
                    loader('content', 'shine').send()" class="nav-item">
                    <div class="pointer fx h-16 fx-i-c fw-400 fs-lg 
                         hover:color-pri">
                         <span class="w-16 h-full fx fx-j-c fx-i-c"
                        style="font-size:20px;"> 
                        <i class="fas fa-exchange"></i>
                        </span> <span class="linkName">Transactions </span>
                    </div></li>
                </ul>

                <ul>
                      <li onclick="(new Ajax).route('account').container('content').
                    loader('content', 'shine').send()" class="nav-item"><div class="pointer fx h-16 fx-i-c fw-400 fs-lg 
                         hover:color-pri">
                         <span class="w-16 h-full fx fx-j-c fx-i-c"
                        style="font-size:20px;"> 
                        <!-- <i class="fas fa-user"></i> -->
                        <div class="fx fx-i-c fx-j-c w-8 h-8 p-1 bgColor-pri rounded-full">
                            <img src="<?= images_path('users/1.jpg') ?>" alt="admin pic"
                              class="w-full rounded-full cover">
                         </div>
                        </span> <span class="linkName"> Account </span>
                    </div></li>

                    <li onclick="" class="nav-item">
                    <div class="pointer fx h-16 fx-i-c fw-400 fs-lg 
                         hover:color-pri">
                         <span class="w-16 h-full fx fx-j-c fx-i-c"
                        style="font-size:20px;"> 
                        <i class="fas fa-sign-out"></i>
                        </span> <span class="linkName"> Logout </span>
                    </div></li>
                </ul>
            </menu>
       </nav>

    <!-- Nav bar toggle  -->
     
        <section class="dashboard relative">

            <div class="top fx fx-j-btw fx-i-c fixed px-8 py-5 
            border-b b-solid b-color-3-100">

                <i class="fal fa-bars fa-2x pointer sidebarToggle"></i>

                <div class="w-5/12 pl-3 fx fx-i-c border b-solid b-color-3-500 rounded hover:b-color-pri">
                    <input type="text" name="search" id="search" placeholder="Search here..."
                    class="w-full py-4 py-3 px-1 ">
                    <i class="fal fa-search fs-xl pr-4 pointer"></i>
                </div>

                 <div class="fx fx-i-c ">
                    <div class="fs-lg pr-3">
                        <span class=""> Jonathan Mwaniki </span>
                        <p class="fs-sm  pl-2"> 
                            <i class="fa fa-check-circle color-pri"></i> Adminstrator 
                        </p>
                    </div>

                    <div class="w-12 h-12 bgColor-pri rounded-full">
                        <img src="<?= images_path('users/1.jpg') ?>" alt="admin pic"
                        class="w-full rounded-full cover">
                    </div>
                 </div>

            </div>

            <main class="px-8 pt-24" style="min-width 100vh;">
                <div id="content">

                <?php require_once view('admin/includes/analytics'); ?>

                </div>
            </main>

            <?php require_once view('admin/includes/footer'); ?>

        </section>
   </body>
<?php require_once view('includes/footer'); ?>
