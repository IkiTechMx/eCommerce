<?php

if(!empty($_POST)){

	if(isset($_POST["username"]) &&isset($_POST["password"])){

		if($_POST["username"]!=""&&$_POST["password"]!=""){

			include "conexion.php";
			
			$bool = null;

			$sql1= "SELECT * FROM user WHERE username=\"$_POST[username]\" and password=\"$_POST[password]\" ";
			$sql2= "SELECT * FROM admi WHERE  admini=\"$_POST[username]\" and password=\"$_POST[password]\" ";

			$query = $con->query($sql1);
			$query2 = $con->query($sql2);

			if ($query->num_rows > 0) {

				$bool = TRUE;
				
			} else if ( $query2->num_rows > 0) {

				$bool2 = TRUE;

			} else {

				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";

			}


			if( $bool == TRUE) {

				while ($r=$query->fetch_array()) {

					$user_id=$r["id"];
					break;
				}

				if ( $user_id != NULL ) {
	
					session_start();
					$_SESSION["user_id"]=$user_id;
					print "<script>window.location='../home.php?id_s=$user_id';</script>";	
	
				}

			}

			if( $bool2 == TRUE) {

				while ($r=$query2->fetch_array()) {

					$user_id=$r["id"];
					break;
				}

				if ( $user_id != NULL ) {
	
					session_start();
					$_SESSION["user_id"]=$user_id;
					print "<script>window.location='../admi.php';</script>";	
	
				} 

			}

			
		}
	}
}

?>