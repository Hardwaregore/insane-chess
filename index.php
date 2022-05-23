<?php
require_once "Backend/connect.php";
include_once "Backend/account.php";

// detects if the user is banned by checking the sql database



?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Insane Chess</title>
    <style>
        body {
  margin: 0;
  font-family: 'Lato', sans-serif;
}

* {
  box-sizing: border-box;
}

nav {
  position: sticky;
  top: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 1.5rem 2rem;
  background-color: #eaeaea;
  transition: top 500ms ease-in-out;
}

nav.scroll-up,
nav:focus-within {
  top: 0;
}

nav.scroll-down {
  top: -100%;
}

.links {
  display: flex;
  margin: 0 -1em;
}

.links a {
  display: inline-block;
  margin: 0 1em;
}

.logo {
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 0.2em;
}

nav a {
  color: #0f0f0f;
  text-decoration: none;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.2em;
}

section {
  width: 65%;
  margin: 0 auto;
}

section h1 {
  font-size: 2rem;
}

section p {
  font-size: 1.25rem;
  line-height: 140%;
}

footer {
  padding: 1em;
  text-align: center;
  background-color: #FFDFB9;
}

footer a {
  color: inherit;
  text-decoration: none;
}

footer .heart {
  color: #DC143C;
}

/* highlights links on hover */
a:hover {
    color: #c1c7c3;
}


    </style>
    <script src="nav.js"></script>
</head>
<body>
    <nav>
        <div class="logo">
            Insane Chess
        </div>
        <div class="links">
            <a href="">Home</a>
            <a href="Backend/login.php">Play</a>
            <a href="Backend/account.php">My Account</a>
            <!-- <a href="play.php">Play</a> -->
        </div>


    </nav>

    <p>Backend Branch</p>
</body>
</html>