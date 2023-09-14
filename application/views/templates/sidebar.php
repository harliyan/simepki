   <!-- BEGIN: Mobile Menu -->
   <div class="mobile-menu md:hidden">
       <div class="mobile-menu-bar">
           <a href="" class="flex mr-auto">
               <img alt="Midone - HTML Admin Template" class="w-6" src="<?= base_url('assets/img/profile/') ?>logors.png">
           </a>
           <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
       </div>
       <div class="scrollable">
           <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
           <ul class="scrollable__content py-2">
               <li>
                   <a href="javascript:;.html" class="menu menu--active">
                       <div class="menu__icon"> <i data-lucide="home"></i> </div>
                       <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                   </a>
               </li>
               <li>
                   <a href="javascript:;" class="menu">
                       <div class="menu__icon"> <i data-lucide="box"></i> </div>
                       <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                   </a>
                   <ul class="">
                       <li>
                           <a href="index.html" class="menu menu--active">
                               <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                               <div class="menu__title"> Side Menu </div>
                           </a>
                       </li>
                       <li>
                           <a href="simple-menu-light-dashboard-overview-1.html" class="menu menu--active">
                               <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                               <div class="menu__title"> Simple Menu </div>
                           </a>
                       </li>
                       <li>
                           <a href="top-menu-light-dashboard-overview-1.html" class="menu menu--active">
                               <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                               <div class="menu__title"> Top Menu </div>
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
   </div>
   <!-- END: Mobile Menu -->
   <div class="flex mt-[4.7rem] md:mt-0">
       <!-- BEGIN: Side Menu -->
       <nav class="side-nav">
           <a href="" class="intro-x flex items-center pl-5 pt-4">
               <img alt="Midone - HTML Admin Template" class="w-6" src="<?= base_url('assets/img/profile/') ?>logors.png">
               <span class="hidden xl:block text-white text-lg ml-3"> SIMEPKI </span>
           </a>
           <div class="side-nav__devider my-6"></div>

           <?php
            $role = $this->session->userdata('role');
            $queryMenu = "SELECT `tuser_menu`.`id`, `menu`, `menu_icon`, `menu_url`, `menu_desc` 
            FROM `tuser_menu` 
            JOIN `tuser_access_menu` 
            ON `tuser_menu`.`id` = `menu_id` 
            WHERE `role` = '$role' 
            ORDER BY `tuser_access_menu`.`id` 
            ASC; ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>

           <ul>
               <?php foreach ($menu as $m) : ?>
                   <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT * 
                            FROM `tuser_sub_menu` JOIN `tuser_menu`
                            ON `tuser_sub_menu`.`menu_id` = `tuser_menu`.`id`
                            WHERE `tuser_sub_menu`.`menu_id` =  $menuId
                            AND `tuser_sub_menu`.`is_active` = 1;";
                    $subMenu = $this->db->query($querySubMenu)->result_array();


                    $hasil = $this->db->query("SELECT * 
                    FROM `tuser_sub_menu` JOIN `tuser_menu`
                    ON `tuser_sub_menu`.`menu_id` = `tuser_menu`.`id`
                    WHERE `tuser_sub_menu`.`menu_id` = $menuId
                    AND `tuser_sub_menu`.`is_active` = 1;");
                    $num = $hasil->num_rows();
                    ?>

                   <li>
                       <?php foreach ($subMenu as $sm) : ?>
                           <?php
                            $getMenuID = $sm['menu_id'];
                            $query = "SELECT `menu` FROM `tuser_menu` WHERE id=$getMenuID;";
                            $getMenu = $this->db->query($query)->result();
                            ?>
                       <?php endforeach; ?>

                       <?php
                        if ($num == 0) {
                            //nggak ada submenu
                            if ($m['menu'] == $page) {
                                echo "<a href='" . base_url() . $m['menu_url'] . "' class='side-menu side-menu--active'><div class='side-menu__icon'> <i data-lucide=" . $m['menu_icon'] . "></i> </div><div class='side-menu__title'> " . ucfirst($m['menu_desc']) . " </div></a>";
                            } else {
                                echo "<a href='" . base_url() . $m['menu_url'] . "' class='side-menu'><div class='side-menu__icon'> <i data-lucide=" . $m['menu_icon'] . "></i> </div><div class='side-menu__title'> " . ucfirst($m['menu_desc']) . " </div></a>";
                            };
                        } else {
                            //ada sub menu
                            //TODO :
                            if ($m['menu'] == $page) {
                                echo "<a href='javascript:;' class='side-menu side-menu--active'><div class='side-menu__icon'> <i data-lucide=" . $m['menu_icon'] . "></i> </div><div class='side-menu__title'> " . ucfirst($m['menu_desc']) . " <div class='side-menu__sub-icon'> <i data-lucide='chevron-down'></i> </div></div></a>";
                            } else {
                                echo "<a href='javascript:;' class='side-menu'><div class='side-menu__icon'> <i data-lucide=" . $m['menu_icon'] . "></i> </div><div class='side-menu__title'> " . ucfirst($m['menu_desc']) . " <div class='side-menu__sub-icon'> <i data-lucide='chevron-down'></i> </div></div></a>";
                            };
                        }
                        ?>
                       <ul class="">

                           <?php foreach ($subMenu as $sm) : ?>

                               <li>
                                   <a href="<?= base_url() ?><?= ($sm['url']); ?>" class="side-menu">
                                       <div class="side-menu__icon"> <i data-lucide="<?= ($sm['submenu_icon']); ?>"></i> </div>
                                       <div class="side-menu__title"> <?= ucfirst($sm['submenu']); ?> </div>
                                   </a>
                               </li>
                           <?php endforeach; ?>
                       </ul>
                   </li>
               <?php endforeach; ?>
               <div class="side-nav__devider my-6"></div>
               <li>
                   <!-- <a href="<?= base_url('') ?>/profil" class="side-menu">
                       <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                       <div class="side-menu__title"> Profil </div>
                   </a> -->
                   <?php
                    if ($page == 'profil') {
                        echo "<a href='" . base_url() . "profil' class='side-menu side-menu--active'><div class='side-menu__icon'> <i data-lucide='user'></i> </div><div class='side-menu__title'> " . ucfirst('profil') . "</div></a>";
                    } else {
                        echo "<a href='" . base_url() . "profil' class='side-menu'><div class='side-menu__icon'> <i data-lucide='user'></i> </div><div class='side-menu__title'> " . ucfirst('profil') . "</div></a>";
                    };
                    ?>
               </li>
           </ul>
       </nav>
       <!-- END: Side Menu -->