<?php

$conn = new DB_Connection();
if(isset($_SESSION['vs_user_id'])) {    
    $_SESSION['usr'] = '';
    $_SESSION['pwd'] = '';

    @$_SESSION['notificacion']='Usuario Valido';
    header('location:index.php?function=home&act=home');
} else {
    if(isset($_POST['txt_username']) && isset($_POST['txt_password'])) {
        $login = mysqli_fetch_array($conn->Authenticate(@$_POST['txt_username'],md5(@$_POST['txt_password'])));
        @$_SESSION['vs_user_id']=$login['id_usuario'];
        @$_SESSION['vs_user_type']=$login['id_tipo_usuario'];
        @$_SESSION['vs_user_username']=$login['usuario'];
        @$_SESSION['vs_user_status']=$login['estado_usuario'];
        @$_SESSION['vs_user_userType']=$login['tipo_usuario'];
        @$_SESSION['vs_user_name']=$login['nombre'];
        @$_SESSION['vs_user_lastName']=$login['apellido'];
        @$_SESSION['vs_user_idSuc']=$login['id_sucursal'];
        @$_SESSION['vs_user_suc']=$login['sucursal'];
        @$_SESSION['vs_user_idMun']=$login['id_municipio'];
        @$_SESSION['vs_user_mun']=$login['municipio'];
        @$_SESSION['vs_user_idCountry']=$login['id_pais'];
        @$_SESSION['vs_user_country']=$login['pais'];
        if(!$login){
            $_SESSION['usr'] = $_POST['txt_username'];
            $_SESSION['pwd'] = $_POST['txt_password'];
            
            @$_SESSION['notification']='Usuario o Contraseña incorrecta.|error|ERROR DE AUTENTICACION';
            header('location:index.php?function=login');
        } else{ 
            $_SESSION['usr'] = '';
            $_SESSION['pwd'] = '';

            @$_SESSION['notification']="DSG te da la bienvenida.|success|Bienvenido";
            header('location:index.php?function=home&act=home');
            /* echo '<script>window.location="index.php?function=home&act=home"</script>'; */
        }
    } else {         
        $_SESSION['usr'] = '';
        $_SESSION['pwd'] = '';

        @$_SESSION['notification']='Acceso denegado.|error|ERROR DE AUTENTICACION';
        header('location:index.php?function=login');
    }
}
?>