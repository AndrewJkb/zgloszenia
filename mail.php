<html>

<form action="mail.php" method="post">
Aderes e-mail: <input type="text" name="email" /><br />
<input type="submit" value="Wy�lij" />
</form>

<?php
$naglowki = "Reply-to: serwis@umcs.pl <serwis@umcs.pl>".PHP_EOL;
$naglowki .= "From: serwis@umcs.pl <serwis@umcs.pl>".PHP_EOL;
$naglowki .= "MIME-Version: 1.0".PHP_EOL;
$naglowki .= "Content-type: text/html; charset=UTF-8".PHP_EOL; 

$adres = "serwis@umcs.pl";
if (isSet($_POST['email'])) {
$temat = 'Zdalna pomoc - LubMAN UMCS';
$email = $_POST['email'];
$tresc = 'Prosz� pobra� i uruchomi�
		https://get.teamviewer.com/wb65qde

--
Pozdrawiamy

Sekcja Obs�ugi Informatycznej - LubMAN UMCS

------------------------------------------
LubMAN UMCS
Uniwersytet Marii Curie-Sk�odowskiej w Lublinie tel. 81 537 26 03

Niniejsza wiadomo�� elektroniczna lub jej za��czniki mog� zawiera� poufne lub chronione prawem informacje, kt�re s� przeznaczone wy��cznie dla wskazanego w nich adresata. Je�eli nie jeste� adresatem wiadomo�ci, prosimy o jej nieujawnianie, zawiadomienie nadawcy o jej otrzymaniu oraz usuni�cie wraz z wszystkimi za��cznikami. Dzi�kujemy.
';
if ($temat != "" || $email != "" || $tresc != "") {

if (mail($email, $temat, $tresc)) {
echo "Mail zosta� wys�any.";
}
else {
echo "Wyst�pi� b��d. Mail nie zosta� wys�any.";
} }
else {
echo "Niekompletne dane.";
} }

echo '-'.$tresc.'-';
?>

</html>