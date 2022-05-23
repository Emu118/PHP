<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"type ="text/css" href="movie.css">
    <title>movie table</title>
</head>
<main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
<div class="container">
	
			<form form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="login">
                    <input type="number_format" name="id" class ="login__input" required="required" placeholder="MovieID" />
                    <input type="text" name="title" class ="login__input" required="required" placeholder="Enter MovieTitle" />
                    <input type="number_fomat" name="year" class ="login__input" required="required" placeholder="MovieYear" />
				<div class="btn">
        <button class="button login__submit">INSERT</button>	
        <button onClick="document.location.href='http://localhost/route/views/'">Home</button>

      </div>	

			</form>
				
</div>
        <?php else : ?>

<?php


$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

                $id = htmlspecialchars($_POST['id']);
                $title = htmlspecialchars($_POST['title']);
                $year = htmlspecialchars($_POST['year']);

                echo "Thanks for subscription.<br>";
                echo "movie id $id.<br>";
                echo "movie name $title.<br>";
                echo "movie year $year.<br>";
           
$sql = "INSERT INTO movie (mid, mtitle, myear)
VALUES ($id, '$title', $year)";


if (mysqli_query($link, $sql)){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>



        <?php endif ?>
    </main>

</html>