<?php

function check_already_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('iduser');
    if($user_session)
    {
        redirect('home');
    }
}