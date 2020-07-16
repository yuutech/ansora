<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        return $ci->session->userdata('level');
    }
}
function get_userdata()
{
    $ci = get_instance();
    $username = $ci->session->userdata()['username'];
    return $ci->db->get_where('users', ['username' => $username])->row_array();
}
