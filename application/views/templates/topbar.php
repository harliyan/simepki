 <!-- BEGIN: Content -->
 <div class="content">
     <!-- BEGIN: Top Bar -->
     <div class="top-bar">
         <!-- BEGIN: Breadcrumb -->
         <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
             <ol class="breadcrumb">
                 <!-- <h2 class="text-lg font-medium truncate mr-5" style="color: black;">
                     TUTUT PUJI LESTARI, A.Md [ KELURAHAN BANDENGAN ]
                 </h2>
                 <br>
                 <p>KELURAHAN BANDENGAN</p> -->
                 <div class="ml-4 mr-auto">
                     <div class="font-medium">
                         <?php $role = $this->session->userdata('role');
                            echo $role; ?>
                     </div>
                     <!-- <div class="text-slate-500 text-xs mt-0.5"> <?php echo $getKdlokasi[0]["singkatan_lokasi"]; ?></div> -->
                 </div>
             </ol>
         </nav>
         <!-- END: Breadcrumb -->
         <!-- BEGIN: Account Menu -->
         <div class="intro-x dropdown w-8 h-8">
             <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                 <img alt="Midone - HTML Admin Template" src="<?= base_url('assets/img/profile/') ?>logors.png">
             </div>

             <div class="dropdown-menu w-56">
                 <ul class="dropdown-content bg-primary text-white">
                     <li class="p-2">
                         <div class="font-medium">
                             <?php $role = $this->session->userdata('role');
                                echo $role; ?>
                         </div>
                         <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">
                             <!-- <?php
                                    echo $getKdlokasi[0]["singkatan_lokasi"];
                                    ?> -->
                         </div>
                     </li>
                     <li>
                         <hr class="dropdown-divider border-white/[0.08]">
                     </li>
                     <li>
                         <a href="<?= base_url('profil') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                     </li>
                     <li>
                         <hr class="dropdown-divider border-white/[0.08]">
                     </li>
                     <li>
                         <a href="<?= base_url('auth/logout') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                     </li>
                 </ul>
             </div>
         </div>
         <!-- END: Account Menu -->
     </div>
     <!-- END: Top Bar -->