<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"type ="text/css" href="movie.css">
    <title>refersTo table</title>
</head>
<main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
<div class="container">
			<form form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="login">
                    <input type="number_format" name="mid" class ="login__input" required="required" placeholder="MovieID" />
                 <input type="number_format" name="pid" class ="login__input" required="required" placeholder="PersonID" />
                    <input type="text" name="part" class ="login__input" required="required" placeholder="Role" />
				<div class="btn"><button class="button login__submit">INSERT</button>		
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
$mid = htmlspecialchars($_POST['mid']);
 $pid = htmlspecialchars($_POST['pid']);
$part = htmlspecialchars($_POST['part']);
 echo "Thanks for subscription.<br>";
echo "movie id $mid.<br>";
echo "person id $pid.<br>";
echo "person role $part.<br>";
           
$sql = "INSERT INTO refersTo (mid, pid, part) VALUES ('$mid', '$pid', '$part')";
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