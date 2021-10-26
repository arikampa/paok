κκκ
<html>
<head>
<meta http-equiv="content-type" 
content="text/html; charset=iso-8859-1" />
<title>XSS Attacks</title>
</head>
<body>
<?php 
# Script - xss.php
# Author: Kampatzis Aristotelis
# Subject:
# Εφαρμογή των συναρτήσεων htmlentities() 
# και strip_tags() στο κείμενο της φόρμας 
# εμποδίζει τις επιθέσεις XSS
if (isset($_POST['submitted'])) {
    echo "<center>";
	// Εφαρμογή των συναρτήσεων και εκτύπωση αποτελεσμάτων
	echo "<h2>Πρωτότυπο</h2><p>{$_POST['data']}</p>";
	echo '<h2>Μετά από htmlentities()</h2><p>' . htmlentities($_POST['data']). '</p>';
	echo '<h2>Μετά από strip_tags()</h2><p>' . strip_tags($_POST['data']). '</p>';
    echo "</center>";
}
// Εμφάνιση φόρμας
?>
<form action="xss.php" method="post">
    <div align="center">
	<p><h3 style="color:red">Μην γράψεις εδώ κακόβουλο κώδικα! </h3> 
	<textarea name="data" rows="10" cols="40"></textarea><br><br>
	<input type="submit" name="submit" value="Submit" />
	<input type="hidden" name="submitted" value="TRUE" />
	</p>
	</div>
</form>
</body>
</html>
