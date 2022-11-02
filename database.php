<?php

include "connexion.php";
 $sq = "CREATE TABLE commentaire (
id_com INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
avis VARCHAR(200) NOT NULL,
idpub INT(11) UNSIGNED,

CONSTRAINT fk_nime FOREIGN KEY (idpub) REFERENCES nime(idpub)

  )";
if (mysqli_query($conn, $sq)) {
  echo "Table commentaire created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

  ?>
  

	
	

	
	
	
