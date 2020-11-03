<?php 
    session_start();
    require('database/db_connections.php');

    if (!isset($_GET['function'])) {
        if (isset($_SESSION['vs_user_id'])) {
            @$function = 'home';
            @$action = 'home';
        } else {
            @$function = 'login';
        }
    } else {
        if (@$_GET['function'] == 'authenticate') {
            @$function = @$_GET['function'];
        } else {
            if (isset($_SESSION['vs_user_id'])) {
                @$function = @$_GET['function'];
            } else {
                @$function = 'login';
            }
        }
        if (isset($_GET['act'])) {
            @$action = @$_GET['act'];
        }
    }   



    switch ($function) {
        case 'login':
           require('app/views/login.php');
            break;

        case 'authenticate':
            require('app/controllers/login_controller.php');
            break;

        case 'home':
           require('app/views/home.php');
            break;
        
        default:
            # code...
            break;
    }

?>