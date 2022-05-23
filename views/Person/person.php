<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"type ="text/css" href="movie.css">
    <title>Actor Table</title>
</head>
    <main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
<div class="container">
			<form form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="login">
                    <input type="number_format" name="id" class ="login__input" required="required" placeholder="ActorId" />
                    <input type="text" name="name" class ="login__input" required="required" placeholder="ActorName" />
                    <input type="date" name="dob" class ="login__input" required="required" placeholder="ActorDOB" />
                    
                    <div class="btn">
                    <button class="button login__submit">INSERT</button>				
       <button onClick="document.location.href='http://localhost/route/views/'"> Home</button>
                    </div>
			</form>
			
</div>
        <?php else : ?>

<?php
$link = mysqli_connect("127.0.0.1", "root", "", "cinema");
if (!$link) 
{ printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

$id = htmlspecialchars($_POST['id']);
$name = htmlspecialchars($_POST['name']);
$dob = htmlspecialchars($_POST['dob']);
echo "Actor Info<br>";
echo "actor's id $id.<br>";
echo "actor's name $name.<br>";
echo "Actor's date of birth $dob.<br>";
           
$sql = "INSERT INTO actor(actorid,actorname,actordob)
VALUES ($id, '$name', '$dob')";

if (mysqli_query($link, $sql)){
  echo "New record created successfully";
} else
 {
  echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>

        <?php endif ?>
    </main>

</html>
