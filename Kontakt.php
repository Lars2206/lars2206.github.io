<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css" >
<style>



/* Style inputs */
input[type=text], input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  padding: 10px;
}

/* Create two columns that float next to eachother */



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1000px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<?php $page="Kontakt.php"; ?>
<?php include 'Navbar.php';?>

<div class="container" >
  <div style="text-align:center; background-color:lightgreen;">
   
  </div>
  <div class="row">
    <div class="column" style="float: left;
    width: 40%;">
      <p><b>Anschrift:</b></p>      
      <p>Günther-Scharofsky-Straße 2A <br>
      91058 Erlangen <br>
      Tel: 0151xxxxxxx <br>
      Fax: 6549867654asd654as6d84
      </p>
      <p></p>
      
<iframe style='height:400px;width:100%;' src=https://maps.google.de/maps?hl=de&q=%20Günther-Scharowsky-Straße+2A%20Erlangen&t=&z=15&ie=utf8&iwloc=b&output=embed 
    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <p style="text-align:right; margin:0px; padding-top:-10px; line-height:10px;font-size:10px;margin-top: -25px;">
      <a  style="font-size:10px;" target="_blank"></a></p></div>
  
    
    <div class="column" style="float: right;
    width: 50%;
    margin-top: 6px;
    padding: 20px;">
      <form action="/action_page.php">
        <label for="fname">E-Mail Adresse</label>
        <input type="email" id="email" name="E-Mail" placeholder="test@server.com">
        <label for="fname">Vorname</label>
        <input type="text" id="fname" name="firstname" placeholder="Max">
        <label for="lname">Nachname</label>
        <input type="text" id="lname" name="lastname" placeholder="Mustermann">
        <label for="subject">Nachricht</label>
        <textarea id="subject" name="subject" placeholder="Worum geht es?" style="height:170px"></textarea>
        <input type="submit" value="Senden">
      </form>
    </div>
  </div>
</div>

</body>
</html>
