<?php
 $imie = $_POST['imie'];
 $nazwisko = $_POST['nazwisko'];
 $wiek = $_POST['wiek'];
 $pesel = $_POST['pesel'];
 $szkola = $_POST['szkola'];
 $status = $_POST['status'];
 echo "Imie: ";
 echo $imie;
 echo "<br />";
 echo "Nazwisko: ";
 echo $nazwisko;
 echo "<br />";
 echo "Wiek: ";
 echo $wiek;
 echo "<br />";
 echo "PESEL: ";
 echo $pesel;
 echo "<br />";
 echo "Szkola: ";
 echo $szkola;
 echo "<br />";
 echo "Status : ";
 echo $status;

 echo "<br />";
 echo "<br />";

?>
<p><input type=submit name="submit" value="Zarejestruj"></p>

<?php
 $mysqli=mysqli_connect('localhost', 'root', 'root', 'sprbaza');

if (mysqli_connect_errno()) {
 printf("Nie uda³o siê po³¹czyæ: %s\n", mysqli_connect_error());
 exit();
} else {
 $sql = "INSERT INTO dane(imie,nazwisko,wiek,pesel,szkola,status) VALUES
 ('".$_POST["imie"]."','".$_POST["nazwisko"]."','".$_POST["wiek"]."','".$_POST["pesel"]."','".$_POST["szkola"]."','".$_POST["status"]."')";
 $rez = mysqli_query($mysqli, $sql);
 if ($rez === TRUE) {
 echo "Dodano rekord.";
 } else {
 printf("Nie uda³o siê wstawiæ rekordu: %s\n",
mysqli_error($mysqli));
 }
 mysqli_close($mysqli);
 }
?>