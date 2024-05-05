<?php
	class User{
		private $host="localhost";
		private $felhasznalonev="root";
		private $jelszo="";
		private $abNev="pizzahot";
		private $kapcsolat;
    
		//konstuktor
		public function __construct() {	
	
		//ékezetes betűk
		$this->kapcsolat->query("SET NAMES UTF8");
		$this->kapcsolat->query("set character set UTF8");
		}

		public function reg_felhasznalo($nev, $email, $jelszo){
			//jelszó titkosítása
			//lekérdezem a felhasznalo adatai alapján, létezik-e már?
			//ha nem, felveszem/beszúrom a táblába az adatait; szerkesztő lesz alapból, és a bejelentkezett mező 0
				//visszatérek a lekérdezés eredményével (sikerült-e beszúrni)
			//különben hamis
		}

		
		public function bejelentkezes($emailNev, $jelszo){
			//jelszó titkosítása
			//lekérdezés: email vagy nev a megadott érték
			//ha már létezik, 
				//állítsuk be a login kulcsot a sessionben igazra,
				//hozzuk létre a felhAzon kulcsú sessiont,
					//segítség:  $result->fetch_array(MYSQLI_ASSOC);
				//módosítsuk a bejelentkezést 1-re! térjünk vissza igazzal!
			//különben hamissal térjünk vissza!
    	}

    	
    	public function get_nev($felhAzon){
    		//felhAzon alapján név visszaadása
			//$result->fetch_array(MYSQLI_ASSOC);
			$select3="SELECT nev FROM felhasznalo WHERE felhAzon = $felhAzon";
			$result = $this->lekerdezes($select3);
			$user_data = mysqli_fetch_array($result);
			echo $user_data['nev'];
    	}
		
		public function adminE($felhAzon){
    		//lekérdezés
    	}

	    public function kijelentkezes() {
			$felhAzon = $_SESSION['felhAzon'];
			//módosítsd a bejelentkezett mezőt 0-ra!
	        //állítsd a session login kulcsát hamisra!
	        //állítsd le a sessiont!
			$update2="UPDATE felhasznalo SET bejelentkezett = 0 WHERE felhAzon = $felhAzon";
			$result = $this->lekerdezes($update2);
			$_SESSION['login'] = FALSE;
			session_destroy();
	    }
		
		public function aktivok(){
			//lekérdezés
		}
		
		public function megjelenit_aktivok($matrix){
			//listázza az eredményt
		}

	}
?>