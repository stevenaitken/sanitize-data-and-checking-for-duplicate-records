<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Steven Aitken 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<header class="header"><h1>Organisation Name</h1></header>
<main class="main">
    <h2>Register user<h2>
<form action="user-process.php" method="POST"  id="login" name="login" class="login">

<p>
 
    <input type="text" id="username" name="username" class="username" required placeholder="Enter username">
</p>

<p>
   
    <input type="password" id="pwd" name="pwd" class="pwd" required placeholder="Enter password">
</p>

<input type="submit" value="Submit" class="inputElem">

</form>
</main>


</body>
</html>