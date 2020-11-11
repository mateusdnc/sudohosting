<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
  
  if($_SESSION['UsuarioNivel']==1){
    header("location: /auth/user/profile.php"); exit;
  } elseif ($_SESSION['UsuarioNivel']==2){
    header("location: /auth/adm/adm_page.php"); exit;
  } else{ 
    require_once($_SERVER['DOCUMENT_ROOT'].'/controller/logout.php'); 
  }

  ?>