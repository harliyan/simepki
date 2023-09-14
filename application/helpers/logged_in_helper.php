<?php

// function is_logged_in()
// {
// 	$ci = get_instance();
// 	if(!$ci->session->userdata('username')){
// 		redirect('auth');
// 	} else {
// 		$role_id = $ci->session->userdata('role_id');
// 		$menu = $ci->uri->segment(1); 

// 		// $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();

// 		$queryMenu = $ci->db->query("SELECT * FROM user_menu WHERE menu='$menu'")->row_array();
// 		$menu_id = $queryMenu['id'];

// 		// print_r($queryMenu);
// 		// die();

// 		// $userAccess = $ci->db->get_where('user_access_menu', [
// 		// 	'role_id' => $role_id,
// 		// 	'menu_id' => $menu_id
// 		// ]);

// 		$userAccess = $ci->db->query("SELECT * FROM `user_access_menu` WHERE `role_id` = '$role_id' AND `menu_id` = '$menu_id'");

// 		if ($userAccess->num_rows() < 1) {
// 			echo 'no';
//             // redirect('auth/blocked');
// 		}
// 	}
// }

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);



        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        //  print_r($menu_id);
        // die();

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
