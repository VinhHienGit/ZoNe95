<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
  <link rel="stylesheet"href="public/css/style_index.css">
</head>
<style>
  @media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:20px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body style="font-family:Verdana;">

<div style="background-color:#900;padding:15px;">
  <h1>Cinque Terre</h1>
  <h3>Resize the browser window</h3>
</div>

<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem">The Walk</div>
    <div class="menuitem">Transport</div>
    <div class="menuitem">History</div>
    <div class="menuitem">Gallery</div>
  </div>

  <div class="main">
    <h2>The Walk</h2>
    <p>The walk from Monterosso to Riomaggiore will take you approximately two hours, give or take an hour depending on the weather conditions and your physical shape.</p>
    <img src="public/img/Ninja.jpg" alt="Ninja">
  </div>

  <div class="right">
    <h2>What?</h2>
    <p>Cinque Terre comprises five villages: Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore.</p>
    <h2>Where?</h2>
    <p>On the northwest cost of the Italian Riviera, north of the city La Spezia.</p>
    <h2>Price?</h2>
    <p>The Walk is free!</p>
  </div>
</div>


<div style="background-color:#f1f1f1;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> This web page is a part of a demonstration of fluid web design made by w3schools.com. Resize the browser window to see the content respond to the resizing.</div>
>>>>>>> feature/Update_index

</body>
</html>