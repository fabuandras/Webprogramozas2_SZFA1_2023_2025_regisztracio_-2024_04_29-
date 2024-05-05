<?php
//session elindítása
//import



//új felhasználó
//megfelelő session leolvasása (felhAzon lekérdezése)
$felh = new User();
$felhAzon = $_SESSION['felhAzon'];



//ha nincs bejelentkezve a felhasználó, akkor a bejelentkezéshez ugorjon!
if (!$felh->get_session()) {
    header("location:login.php");
}



//url-ben állapottartás: ha rákattintott a kijelentkezésre, akkor
//kijelentkeztetés után ugorjon a bejelentkezés oldalra!
if (isset($_GET['q'])) {
    $felh->kijelentkezes();
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="hu-HU">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kezdőlap</title>
    </head>
    <body>
        <main>
            <div>
                <!--üdvözlés névvel-->
                <h1>Hello <?php $felh->get_nev($felhAzon); ?>!</h1>
            </div>
			<div>
				<!--url-ben állapottartás: link a kijelentkezésre-->
                <a href="home.php?q=logout">Kijelentkezés</a>
			</div>
			<?php
                //ha admin a felh-ó, akkor megjelenítjük a bej-tt felh-kat
                if ($felh->isAdmin($felhAzon))
                    {
                        echo "<h2>Bejelentkezett felhasználók:</h2>";
                        $matrix = $felh->aktivok();
                        $felh->megjelenit_aktivok($matrix);
                    }
			?>
        </main>
    </body>
</html>