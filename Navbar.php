<!DOCTYPE html>
<html>
<head>
<style>


ul[id=Navbar] {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}


.column {
  float: left;
  padding: 2px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

li[id=Startseite],li[id=Leistungen],li[id=Kontakt] {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<div class="header">
  
<div class="row" style="background-color:lightgreen">
  <div class="column" style="height:226px">
    <img src="img/PsychoTheRapist.jpg" alt="Snow">
  </div>
  <div class="column">
    <img src="img/WineTherapy.png" alt="WineTherapy">
  </div>
  <div class="column">
    <img src="img/Mountain.jpg" alt="Snow">
  </div>
</div>
</div>

<ul id=Navbar>
  <li id=Startseite><a class="<?php echo ($page == "index.php" ? "active" : "")?>" href="index.php" >Startseite</a></li>
  <li id=Leistungen><a class="<?php echo ($page == "Leistungen.php" ? "active" : "")?>" href="Leistungen.php">Leistungen</a></li>
  <li id=Kontakt><a class="<?php echo ($page == "Kontakt.php" ? "active" : "")?>" href="Kontakt.php">Kontakt</a></li>
</ul>


</body>
</html>