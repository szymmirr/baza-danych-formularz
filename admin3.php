<p>UCZNIOWIE</p>
<?php
$mysqli=mysqli_connect('localhost', 'root', 'root', 'sprbaza');

if (mysqli_connect_errno()) {
 printf("Nie uda³o siê po³aczyæ: %s\n", mysqli_connect_error());
 exit();
} else {
 $sql = "SELECT * FROM dane where status like 'uczen'";
 $rez = mysqli_query($mysqli, $sql);
 if ($rez) {
 while ($nowaTablica = mysqli_fetch_array($rez, MYSQLI_ASSOC))
{
 $id = $nowaTablica['id'];
 $imie = $nowaTablica['imie'];
$nazwisko = $nowaTablica['nazwisko'];
$wiek = $nowaTablica['wiek'];
$pesel = $nowaTablica['pesel'];
$szkola = $nowaTablica['szkola'];
$status = $nowaTablica['status'];
echo "id: ";
 echo $id;
 echo " Imie: ";
 echo $imie;
 echo " Nazwisko: ";
 echo $nazwisko;
 echo " Wiek: ";
 echo $wiek;
 echo " PESEL: ";
 echo $pesel;
 echo " Szkola: ";
 echo $szkola;
 echo " Status : ";
 echo $status;

 echo "<br />";
 echo "<br />";
 }
 } else {
 printf("Nie mozna pobraæ rekordów %s\n",
mysqli_error($mysqli));
 }
 mysqli_free_result($rez);
 mysqli_close($mysqli);
}
?>

<p>PRACOWNICY</p>
<?php
$mysqli=mysqli_connect('localhost', 'root', 'root', 'sprbaza');

if (mysqli_connect_errno()) {
 printf("Nie uda³o siê po³aczyæ: %s\n", mysqli_connect_error());
 exit();
} else {
 $sql = "SELECT * FROM dane where status like 'pracownik'";
 $rez = mysqli_query($mysqli, $sql);
 if ($rez) {
 while ($nowaTablica = mysqli_fetch_array($rez, MYSQLI_ASSOC))
{
 $id = $nowaTablica['id'];
 $imie = $nowaTablica['imie'];
$nazwisko = $nowaTablica['nazwisko'];
$wiek = $nowaTablica['wiek'];
$pesel = $nowaTablica['pesel'];
$szkola = $nowaTablica['szkola'];
$status = $nowaTablica['status'];
echo "id: ";
 echo $id;
 echo " Imie: ";
 echo $imie;
 echo " Nazwisko: ";
 echo $nazwisko;
 echo " Wiek: ";
 echo $wiek;
 echo " PESEL: ";
 echo $pesel;
 echo " Szkola: ";
 echo $szkola;
 echo " Status : ";
 echo $status;

 echo "<br />";
 echo "<br />";
 }
 } else {
 printf("Nie mozna pobraæ rekordów %s\n",
mysqli_error($mysqli));
 }
 mysqli_free_result($rez);
 mysqli_close($mysqli);
}
?>