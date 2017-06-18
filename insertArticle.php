<?php 

	// Connect til databasen
require "connect.php";

	// Variabel til PDO handling
	// Vælger alt fra database tabellen ved navn "articles"
$statement = $dbh->prepare("SELECT * FROM articles ORDER BY id DESC");

	// Kør handling
$statement->execute();

	// Så længe der er poster/rækker i $statements, så kører nedenstående loop
while ($row = $statement->fetch()) { ?>
<article class="col-md-4 col-lg-6 mt-5">
	<img class="img-fluid" src="img/<?php echo $row['imgSrc'];?>" alt="<?php echo $row['imgAlt']?>">
	<h3><?php echo $row['heading'] ?></h3>
	<p><?php echo $row['articleText'] ?></p>
	<p class="text-center mt-2"><?php echo $row['postDate'] ?></p>
</article>
<?php 
}

// Lukker forbindelsen til databasen. (For sikkerhedsmessige grunde)
$dbh = null;
?>