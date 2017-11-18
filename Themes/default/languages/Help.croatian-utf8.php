<?php
// Version: 2.0; Help

global $helptxt;

$txt['close_window'] = 'Zatvori prozor';

$helptxt['manage_boards'] = '	<b>Upravljanje forumima</b><br />
	U ovom izborniku možete napraviti/promijeniti raspored/ukloniti forume te kategorije iznad njih.
	Na primjer, kad bi imali sveobuhvatnu stranicu koja nudi informacije iz &quot;Sporta&quot;, &quot;Automobila&quot; i &quot;Muzike&quot;,
	ovo bi bile kategorije koje biste napravili. Pod svakom od ovih kategorija vjerovatno bi htjeli napraviti &quot;podkategorije&quot; odnosno &quot;forume&quot; za svaku temu unutar njih. To je osnovna hijerarhija sa ovom strukturom: <br />
	<ul>
		<li>
			<b>Sportovi</b>
			&nbsp;- &quot;kategorija&quot;
		</li>
		<ul>
			<li>
				<b>Košarka</b>
				&nbsp;- forum kategorije &quot;Sportovi&quot;
			</li>
			<ul>
				<li>
					<b>Statistika</b>
					&nbsp;- podforum foruma &quot;Košarka&quot;
				</li>
			</ul>
			<li><b>Nogomet</b>
			&nbsp;- forum kategorije &quot;Sportovi&quot;</li>
		</ul>
	</ul>
	Kategorije vam omogućuju podjelu foruma na teme i postove (&quot;Automobili,
	Sportovi&quot;), i  &quot;Forume&quot; u kojima se nalaze teme i postovi. Korisnici koje zanima Punto
	bi pisali poruke u  &quot;Automobili->Punto&quot;. Kategorije omogućuju da korisnici lako pronađu ono 
        što ih najviše zanima: Umjesto &quot;Trgovina&quot; imate
	&quot;Hardver&quot; i &quot;Odjeća&quot; odjeljci koje vas zanimaju. Ovo pojednostavljuje
	pretragu za &quot;monitorima&quot; jer možete otići u Hardver
	Trgovinu &quot;kategoriju&quot; umjesto Trgovinu za odjeću (gde ćete teško naći nešto o monitorima).<br />
	Kao što je gore navedeno, Forum je ključna tema ispod koje je forumska kategorija.
	Ako želite razgovarati o &quot;Puntu&quot; ići ćete u &quot;Automobili&quot; kategoriju i
	i skok u &quot;Punto&quot; forum da napišete svoje mišljenje u tom forumu.<br />
	Administratorske funkcije za ovu stavku izbornika su da pravite nove forume u svakoj kategoriji , premještate ih (stavi  &quot;Punto&quot; iza &quot;Chevrolet&quot;),ili
	da obrišete forum u potpunosti.';

$helptxt['edit_news'] = '<ul class="normallist"> <li> <strong>Vijesti</strong><br /> Ovaj odjeljak vam omogućava podešavanje teksta za stavke vijesti prikazane na Početnoj stranici Foruma. Dodaj stavku koju želiš (n.p.r., &quot;Ne zaboravite sastanak ovog Utorka&quot;). Svaka stavka vijesti se prikazuje nasumično i mora biti smještena u odvojeni box. </li> <li> <strong>Infodopisi</strong><br /> Ovaj odjeljak vam omogućava slanje infodopisa članovima foruma putem privatnih poruka ili e-maila. Najpre izaberite grupe koje želite da prime infodopis, i one koje ne želite da prime infodopis. Ako želite, možete pridružiti dodatne članove i e-mail adrese koji će primiti infodopis. Na kraju, unesite poruku koju želite poslati i izaberite da li je želite poslati članovima kao privatnu poruku ili kao e-mail. </li> <li> <strong>Podešavanja</strong><br /> Ovaj odjeljak sadrži nekoliko podešavanja povezanih sa vijestima i infodopisima, uključujući izbor koje grupe mogu uređivati forumske vijesti ili slati infodopise. Tu je također podešavanje da oblikujete da li želite omogućiti feed sa vjestima na forumu, kao i podešavanje da oblikujete dužinu (koliko znakova će biti prikazano) za svaku poruku vjesti. </li> </ul> ';

$helptxt['view_members'] = '	<ul>
		<li>
			<b> Pregled svih Članova </b><br />
			Pregled svih članova na forumu. Prikazani su vam kao popis imena sa hipervezama (posrednim vezama). Možete kliknuti na imena da nađete dodatne informacije o članovimaa (naslovna, godine, itd.), i kao Administrator ste u mogućnosti da mjenjate te parametre. Imate potpunu kontrolu nad članovima, uključujući i mogućnost da ih izbrišete sa foruma.<br /><br />
		</li>
		<li>
			<b> Čeka Odobrenje </b><br />
			Ovaj odjeljak je prikazan samo ako ste omogućili odobrenje administratora za sve nove registracije. Svako tko se registrira da se pridruži vašem forumu će postati punopravni član samo kada je odobren od strane administratora. Odjeljak prikazuje sve one koji još uvijek čekaju odobrenje, zajedno sa njihovim e-mail i IP adresama. Možete odabrati da prihvatite ili odbacite (izbrišete) bilo kojeg člana na listi označavanjem kućice pored imena člana i izborom akcije iz padajućeg izbornika na dnu. Kada odbacujete člana možete izabrati da brišete člana sa ili bez prethodnog obavještavanja o vašoj odluci.<br /><br />
		</li>
		<li>
			<b> Čeka Aktiviranje </b><br />
			Ovaj odjeljak će biti vidljiv samo ako ste omogućili  aktiviranje naloga člana. Ovaj odjeljak prikazuje popis svih članova koji još uvijek nisu aktivirali svoje naloge. Iz ovog prikaza možete odabrati da prihvatite, odbacite ili podsjetite članove sa neriješenim registracijama. Kao što je gore navedeno možete također odabrati da ih obavijestite e-mailom o akciji koju ste poduzeli.<br /><br />
		</li>
	</ul>
';

$helptxt['ban_members'] = '<strong>Zabrana Članova</strong><br />
	SMF pruža mogućnost da &quot;zabranite&quot; korisnike, ljude koji su iznevjerili povjerenje foruma
	spamajući, varajući itd. Omogućava vam za korisnike koji su štetni za vaš forum. Kao administrator, kada pregledate poruke, možete da vidite svaku IP adresu korisnika korištenu u poruci u to vrijeme. U popisu zabrana,
	jednostavno unesite tu IP adresu, sačuvajte i ne mogu više pisati poruke sa te lokacije.<br />Možete također zabranjivati ljudi preko njihovih e-mail adresa.';

$helptxt['featuresettings'] = '<strong>Mogućnosti i opcije</strong><br />
Postoji više opcija u ovom odjeljku koje možete da promijenite prema vašem izboru.';

$helptxt['securitysettings'] = '<strong>Sigurnost i uređivanje</strong><br />
	Ovaj odjeljak sadrži podešavanja vezana za sigurnost i uređivanje vašeg foruma.';

$helptxt['modsettings'] = '<strong>Podešavanje modifikacija</strong><br /> Ovaj odjeljak traba sadržavati sva podešavanja vezana za modifikacije instalirane na vašem forumu. ';

$helptxt['number_format'] = '<strong>Brojčani Format</strong><br />
	Možete koristiti ove postavke formata za način na koji će broj na vašem forumu biti prikazani korisniku. Oblik ovog podešavanja je:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	Gdje \',\' je znak koji se koristi da razdvoji grupe tisuća, \'.\' je znak koji se koristi kao decimalna točka, a broj nula određuje točnost zaokruživanja.';

$helptxt['time_format'] = '<strong>Format vremena</strong><br />
	Imate potpunu slobodu da podesite način prikazivanja vremena. Iako ima dosta oznaka, krajnje je jednostavno.
	Pravila prate PHP-ovu funkciju strftimea, a njihove opise možete pronaći ispod (pogledajte više detalja na <a href="http://www.php.net/manual/function.strftime.php" target="_blank">php.net-u</a>).<br />
	<br />
	Sljedeće oznake se prepoznaju i formatiraju na određen način: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - skraćeno ime dana<br />
	&nbsp;&nbsp;%A - puno ime dana<br />
	&nbsp;&nbsp;%b - skraćeno ime mjeseca<br />
	&nbsp;&nbsp;%B - puno ime mjeseca<br />
	&nbsp;&nbsp;%d - dan mjeseca (01 do 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - isto kao %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dan mjeseca (1 do 31) <br />
	&nbsp;&nbsp;%H - broj sati koristeći 24-satni zapis (od 00 do 23) <br />
	&nbsp;&nbsp;%I - broj sati koristeći 12-satni zapis (od 01 do 12) <br />
	&nbsp;&nbsp;%m - redni broj mjeseca (01 do 12) <br />
	&nbsp;&nbsp;%M - broj minuta <br />
	&nbsp;&nbsp;%p - &quot;am&quot; ili &quot;pm&quot;, ovisno od zadanog vremena<br />
	&nbsp;&nbsp;%R<b>*</b> - vrijeme u 24-satnom zapisu <br />
	&nbsp;&nbsp;%S - broj sekundi kao decimalni broj <br />
	&nbsp;&nbsp;%T<b>*</b> - trenutno vrijeme, isto kao %H:%M:%S <br />
	&nbsp;&nbsp;%y - dvoznamenkasti zapis godine (00 do 99) <br />
	&nbsp;&nbsp;%Y - četvoroznamenkasti zapis godine<br />
	&nbsp;&nbsp;%Z - vremenska zona: ime ili skraćenica <br />
	&nbsp;&nbsp;%% - postotni znak \'%\' <br />
	<br />
	<i>* Ne radi na Windows serverima.</i></span>';

$helptxt['live_news'] = '<b>Obavijesti uživo</b><br />
	Ovaj odjeljak prikazuje trenutne obavijesti sa <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a> stranice.
	Bilo bi dobro da povremeno pogledate na ovaj odjeljak i informirate se o najnovijim ažuriranjima, novim verzijama kao i o važnim informacijama iz Simple Machines-a.';

$helptxt['registrations'] = '<strong>Upravljanje Registracijama</strong><br />
	Ovaj odjeljak sadrži sve funkcije koje vam mogu biti potrebne za upravljanje novim registracijama na forumu. Sadrži do četiri odjeljka koji su vidljivi u ovisnosti o vašim forumskim podešavanjima. To su:<br /><br />
	<ul>
		<li>
			<b>Registracija novog člana</b><br />
			Iz ovog prikaza možete odabrati registriranje računa za nove članove u njihovo ime. Ovo može biti korisno u forumima gdje je registracija zatvorena za nove članove, ili u slučajevima kada administrator želi da napravi testni račun. Ako je opcija da zahtijeva aktiviranje računa izabrana članu će biti upućen e-mail, a aktivacijski link mora kliknuti prije nego što može koristiti račun. Isto tako možete izabrati da korisniku e-mailom pošaljete novu lozinku<br /><br />
		</li>
		<li>
			<b>Uređivanje Registracijskog Ugovora</b><br />
			Ovo vam omogućava uređivanje teksta sporazuma o registraciji prikazanog kada se članovi registriraju na vaš forum.
			Možete dodati ili ukloniti bilo što u podrazumijevanom sporazumu o registraciji, koji je uvršten u SMF.<br /><br />
		</li>
		<li>
			<b>Podešavanje Rezerviranih Imena</b><br />
			Korištenjem ovog sučelja možete navesti riječi ili imena koja se ne mogu koristiti od strane vaših korisnika.<br /><br />
		</li>
		<li>
			<b>Podešavanja</b><br />
			Ova sekcija je vidljiva samo ako imate administratorske ovlasti na forumu. Ovdje možete podesiti vrstu registracije 
                        koja će biti korištena na forumu, kao i ostala podešavanja vezana za samu registraciju.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Moderatorski zapisi</strong><br /> Ova sekcija sadrži zapise o svim moderatorskim akcijama kako bi mogli pratiti akcije moderatora. Kako bi se osigurali da moderatori ne brišu poduzete akcije, zapisi se mogu izbrisati tek 24 sata nakon poduzete akcije.';
$helptxt['adminlog'] = '<strong>Administratorski zapisi</strong><br />
	Ova sekcija omogućava članovima administratorskog tima da prate neke administrativne akcije koje su se dogodile na forumu. Kako bi se osiguralo da administratori ne mogu ukloniti podatke za akcije koje su provedene, unosi ne mogu biti obrisani do isteka 24 sata nakon što je akcija provedena.';
$helptxt['warning_enable'] = '<b>Sistem upozoravanja korisnika</b><br />
	Ova funkcija omogućava članovima administratorskog i uredničkog tima izdavanje upozorenja korisnicima - i da koriste nivo upozorenja  korisnika da utvrde raspoložive radnje na forumu. Nakon omogućavanja ove funkcije dozvola će biti dostupna u okviru Dozvola koje definiraju koje grupe mogu izdavati upozorenja korisnicima. Nivoi upozorenja mogu da se podešavaju u profilu korisnika. Sljedeće dodatne opcije su:
	<ul>
		<li>
			<b>Nivo upozorenja za nadgledanje</b><br />
			Ova postavka određuje postotak nivoa upozorenja korisniku i automatski pridružuje &quot;nadgledaj&quot; korisniku.
			Svaki korisnik koji je &quot;nadgledan&quot; se prikazuje u određenom prostoru moderatorskog centra.
		</li>
		<li>
			<b>Nivo upozorenja za uređivanje komentara</b><br />
			Korisniku koji prekorači vrednost ovog podešavanja sve poruke moraju biti odobrene od moderatora prije nego što se pojave na forumu.
			Ovo će prepisati sve lokalne forumske dozvole koje postoje, a koje se odnose na uređivanje poruka.
		</li>
		<li>
			<b>Nivo upozorenja za ušutkivanje</b><br />
			Ako je ovaj nivo upozorenja prekoračen od korisnika naći će se pod zabranom poruka. Korisnik će izgubiti sva prava za poruke.
		</li>
		<li>
			<b>Najveći broj bodova za upozoravanje po danu</b><br />
			Ova postavka ograničava vrijednost bodova koje moderator može dodati/oduzeti određenom članu u periodu od 24 sata. Ovo može biti korišteno da ograniči što moderator može uraditi u kraćem vremenskom periodu. Ova postavka se može zabraniti podešavanjem vrijednosti na nulu. Znajte da nema utjecaja na članove sa administratorskim dozvolama.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Dnevnik grešaka</strong><br />
	Dnevnik grešaka prati i zapisuje sve ozbiljne greške na koje naiđe dok korisnici koriste vaš forum. Prikazuje sve ove greške po datumu koje mogu biti
	sortirane klikom na crnu strelicu pored svakog datuma. Dodatno možete odvojiti greške klikom na sličicu pored statističke greške. To vam omogućava da ih odvojite, na primjer, po članu. Kada je odvajanje aktivno bit će prikazani samo rezultati koji odgovaraju tom odvajanju.';
$helptxt['theme_settings'] = '<strong>Podešavanje Tema</strong><br />
	Prikaz podešavanja vam omogućava da mijenjanje podešavanja tema. Ova podešavanja uključuju opcije kao što su direktorij teme i URL informacije ali i opcije koje utječu na izgled teme na forumu. Većina tema ima različite opcije koje može podešavati sam korisnik, omogućava vam prilagodbu tema vašim individualnim potrebama foruma.';
$helptxt['smileys'] = '<strong>Smajli Centar</strong><br />
	Ovdje možete dodati i ukloniti smajlije, i skupove smajlija. Važno je zapamtiti da ako je jedan smajli u jednom skupu, onda je i u svim skupovima - u suprotnom, bi moglo biti zbunjujuće za vaše korisnike korištenje različitih skupova .<br /><br />

	U mogućnosti ste također da uređujete ikone poruka odavde, ako ste ih omogućili na stranici podešavanja.';
$helptxt['calendar'] = '<strong>Podešavanja Kalendara</strong><br /> Ovdje možete promijeniti trenutna podešavanja kalendara, kao i dodati ili promijeniti praznike koji se pojavljuju u kalendaru.';

$helptxt['serversettings'] = '<strong>Podešavanja servera</strong><br />
	Ovdje možete obaviti detaljnu konfiguraciju vašeg foruma. Ovaj odjeljak uključuje bazu podataka i podešavanja url-ova, kao i drugih
	važnih stavki konfiguracije kao što je e-mail podešavanja i keširanje. Razmislite pažljivo, pogrešno uređivanje ovih podešavanja može učinititi forum nedostupnim
';
$helptxt['manage_files'] = '	<ul>
		<li>
			<b>Pretraživanje Datoteka</b><br />
			Pretraživanje svih priloga, avatara i prikazanih sličica pohranjenih na SMF-u.<br /><br />
		</li><li>
			<b>Podešavanje Priloga</b><br />
			Konfigurirajte gdje se prilozi čuvaju i podesite ograničenja za vrste priloga.<br /><br />
		</li><li>
			<b>Podešavanje Avatara</b><br />
			Konfigurirajte gdje se avatari čuvaju i upravljajte uklapanjem avatara.<br /><br />
		</li><li>
			<b>Održavanje datoteka</b><br />
			Provjerite i popravite bilo koju grešku u direktoriju za priloge i brišite odabrane priloge.<br /><br />
		</li>
	</ul>
';

$helptxt['topicSummaryPosts'] = 'Ovo vam omogućava podešavanje broja prethodnih poruka prikazanih u temi na strani za odgovor.';
$helptxt['enableAllMessages'] = 'Podešavanje <em>maksimalnog</em> broja poruka teme koje se mogu prikazati povezane.  Podešavanje na niže od &quot;Maksimum poruka za prikazivanje na stranici teme&quot; jednostavno znači da se ne prikazuju, a podešavanje na previsoko može usporiti vaš forum.';
$helptxt['enableStickyTopics'] = 'Zalijepljene su teme koje ostaju na vrhu popisa tema. One se uglavnom koriste za važne poruke. Mada to možete promijeniti sa dozvolama, podrazumijevano samo moderatori i administratori mogu učiniti teme ljepljivim.';
$helptxt['allow_guestAccess'] = 'Uklanjanje potvrde će spriječiti goste da rade bilo što osim osnovnih akcija - prijavljivanje, registracija, podsjetnik lozinke. itd. - na vašem forumu. Nije isto što i zabrana gostima da pristupaju forumima.';
$helptxt['userLanguage'] = 'Uključivanje ove opcije će omogućiti korisnicima da odaberu jezik koji će koristiti na forumu. Ovo ne utječe na podrazumijevani odabir jezika.';
$helptxt['trackStats'] = 'Statistike:<br />To će omogućiti korisnicima da vide najnovije poruke i najpopularnije teme na forumu. To će također prikazati nešto statističkih podataka, kao što je najviše prisutnih članova, nove članove i nove teme.<hr />
		Pregledi stranica:<br />Dodaje još jedan stupac u statistiku stranice sa brojem pregleda stranica na vašem forumu.';
$helptxt['titlesEnable'] = 'Uključivanje Korisničkih Naslova će dozvoliti članovima sa odgovarajućim dozvolama da naprave poseban naziv za sebe. To će biti prikazano ispod imena.<br /><em>na primjer:</em><br />Pero<br />Dobrica';
$helptxt['topbottomEnable'] = 'To će dodati idi gore i idi dolje dugmiće, tako da član može otići na vrh i dno stranice bez pomicanja.';
$helptxt['onlineEnable'] = 'Ovo će prikazati sličicu koja označava da li je korisnik prijavljen ili odjavljen';
$helptxt['todayMod'] = 'Ovo prikazuje &quot;Danas&quot; ili &quot;Jučer&quot; umjesto datuma.<br /><br />
		<strong>Primjeri:</strong><br /><br />
		<dt>
			<dt>Zabranjeno</dt>
			<dd>Listopad 3, 2009 u 12:59:18 prije podne</dd>
			<dt>Samo Danas</dt>
			<dd>Danas u 12:59:18 prije podne</dd>
			<dt>Danas &amp; Jučer</dt>
			<dd>Jučer u 09:36:55 poslije podne</dd>
		</dt>';
$helptxt['disableCustomPerPage'] = 'Potvrdite ovu opciju da spriječite da korisnici prilagođavaju količinu poruka i tema za prikazivanje po stranici na Početnoj strani Poruka odnosno stranici Prikaza Tema.';
$helptxt['enablePreviousNext'] = 'Ovo će pokazati vezu do sljedeće i prethodne teme.';
$helptxt['pollMode'] = 'Ovo određuje da li su ankete omogućene ili ne. Ako su ankete zabranjene, bilo koja postojeća anketa će biti skrivena u popisu tema. Možete izabrati da se prikazuju redovne teme bez prikaza pripadajućih anketa izborom &quot;Prikaži Postojeće Ankete kao Teme &quot;.<br /><br />Za izbor tko može praviti ankete, gledati ankete, i slično, možete dozvoliti i zabraniti te dozvole. Sjetite se ovog ako ankete ne rade.';
$helptxt['enableVBStyleLogin'] = 'Ovo će pokazati kompaktnije polje za prijavu na svakoj stranici foruma za goste.';
$helptxt['enableCompressedOutput'] = 'Ova opcija će sažeti izlaz da bi se smanjila potrošnja propusnog opsega,ali zahtjeva da zlib bude instaliran.';
$helptxt['disableTemplateEval'] = 'Podrazumijevano, predlošci se procjenjuju uključivo. Ovo pomaže prikazom više korisnih informacija o nađenim greškama u slučaju da predložak sadrži grešku. <br / > <br / >Na većim forumima, prilagođeno uključivanje može značajno usporiti proces. Stoga, napredni korisnici bi htjeli to onemogućiti. ';
$helptxt['databaseSession_enable'] = 'Ova opcija koristi bazu podataka za skladištenje podataka sesija - bolje je za balansiranje opterećenja servera, pomaže oko svih pitanja isteka vremena i može učiniti forum bržim.';
$helptxt['databaseSession_loose'] = 'Uključivanjem ovog će se smanjiti propusni opseg koji vaš forum koristi, klikanjem neće ponovno učitati stranice - loša strana je da se (nove) ikone neće ažurirati, između ostalog. (Ukoliko ne možete kliknite na toj stranici vratite se nazad.)';
$helptxt['databaseSession_lifetime'] = 'Ovo je broj proteklih sekundi za sesije nakon čega će biti nedostupna.  Ako se sesiji ne pristupa dovoljno dugo, to znači da je &quot;istekla&quot;. Sve veće od 2400 je preporučljivo.';
$helptxt['enableErrorLogging'] = 'Ovo zapisuje sve greške, kao što je neuspješna prijava, tako možete vidjeti što je krenulo loše.';
$helptxt['enableErrorQueryLogging'] = 'Ovo će omogućiti slanje cijelog upita baze u evidenciju grešaka.  Potrebno je da evidencija grešaka bude uključena.<br /><br /><strong>Napomena: Ovo će utjecati na filter evidencije grešaka po grešci koja je nastala.</strong>';
$helptxt['allow_disableAnnounce'] = 'Ovo će omogućiti korisnicima da otkažu obavijesti o temama potvrđivanjem &quot;obavijesti o temi&quot; polja kod pisanja poruke.';
$helptxt['disallow_sendBody'] = 'Ova opcija uklanja opciju da dobijete tekst odgovora i poruka u e-mail obavijestima.<br /><br /> Često, članovi će odgovoriti na e-mail obavijesti, što u većini slučajeva znači da administrator stranice dobija odgovore.';
$helptxt['compactTopicPagesEnable'] = 'To će samo pokazati izbor broj strana.<br /><em>Primjer:</em>
		&quot;3&quot; za prikazivanje: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; za prikazivanje: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'Ovo prikazuje vrijeme u sekundama koje je trebalo SMF-u da napravi stranicu, na dnu foruma.';
$helptxt['removeNestedQuotes'] = 'Ovo će ukloniti ugniježđene citate iz posta kada se citira post pomoću citat linka.';
$helptxt['simpleSearch'] = 'Ovo prikazuje oblik jednostavne pretrage i vezu do naprednijeg oblika pretrage.';
$helptxt['max_image_width'] = 'Ovo vam omogućava podešavanje najveće veličine postavljenih slika. Nema utjecaja na slike koje imaju manju veličinu.';
$helptxt['mail_type'] = 'Ove postavke vam omogućavaju da izaberete ili PHP za default podešavanja, ili da preklopite podešavanja sa SMTP. PHP ne podržava korištenje autentifikacije sa SMTP (kojeg mnogi pružatelji hostinga zahtijevaju sada) tako da ako želite to trebate odabrati SMTP. Molimo vas da obratite pažnju na činjenicu da SMTP može biti sporiji, i neki serveri ne prihvaćaju korisnička imena i lozinke. <br / > <br / >Ne trebate popunjavati u SMTP postavkama ako je ovo podešeno podrazumijevano u PHP. ';
$helptxt['attachment_manager_settings'] = 'Attachments are files that members can upload, and attach to a post.<br /><br /> <strong>Check attachment extension</strong>:<br /> Do you want to check the extension of the files?<br /> <strong>Allowed attachment extensions</strong>:<br /> You can set the allowed extensions of attached files.<br /> <strong>Attachments directory</strong>:<br /> The path to your attachment folder<br />(example: /home/sites/yoursite/www/forum/attachments)<br /> <strong>Max attachment folder space</strong> (in KB):<br /> Select how large the attachment folder can be, including all files within it.<br /> <strong>Max attachment size per post</strong> (in KB):<br /> Select the maximum filesize of all attachments made per post. If this is lower than the per-attachment limit, this will be the limit.<br /> <strong>Max size per attachment</strong> (in KB):<br /> Select the maximum filesize of each separate attachment.<br /> <strong>Max number of attachments per post</strong>:<br /> Select the number of attachments a person can make, per post.<br /> <strong>Display attachment as picture in posts</strong>:<br /> If the uploaded file is a picture, this will show it underneath the post.<br /> <strong>Resize images when showing under posts</strong>:<br /> If the above option is selected, this will save a separate (smaller) attachment for the thumbnail to decrease bandwidth.<br /> <strong>Maximum width and height of thumbnails</strong>:<br /> Only used with the &quot;Resize images when showing under posts&quot; option, the maximum width and height to resize attachments down from. They will be resized proportionally.';
$helptxt['attachment_image_paranoid'] = 'Odabir ove opcije će omogućiti jaku sigurnosnu provjeru priloženih datoteka. Upozorenje! Ovako opsežne provjere mogu odbaciti i ispravne slike također. Vrlo je preporučljivo da koristite ovu opciju zajedno sa rekodiranjem, kako bi SMF pokušao vratiti slike koje ne prođu sigurnosni test: ako uspije slike će biti očišćene i prihvaćene. U suprotnom, ukoliko rekodiranje priloženih datoteka nije uključeno, sve priložene datoteke koje ne prođu test će biti odbačene.';
$helptxt['attachment_image_reencode'] = 'Obeležavanje ove opcije će omogućiti pokušaj rekodiranja priloženih slikovnih datoteka. Slike koje su redekodirane su sigurnije. Imajte u vidu da će rekodiranje animiranih slika rezultirati pretvaranjem tih slika u statične. <br /> Ova opcija je moguća jedino ako imate GD modul instaliran na vašem serveru.';
$helptxt['avatar_paranoid'] = 'Odabir ove opcije će omogućiti jaku sigurnosnu provjeru avatara. Upozorenje! Ovako opsežne provjere mogu odbaciti i ispravne slike također. Vrlo je preporučljivo da koristite ovu opciju zajedno sa rekodiranjem avatara, kako bi SMF pokušao vratiti slike koje ne prođu sigurnosni test: ako uspije slike će biti očišćene i prihvaćene. U suprotnom, ukoliko rekodiranje avatara nije uključeno, svi avatari koji ne prođu test će biti odbačeni.';
$helptxt['avatar_reencode'] = 'Izbor ove opcije će omogućiti izbor ponovnog kodiranja priloženih avatara. Slike koje su rekodirane pružaju veću sigurnost. Imajte na umu da rekodiranje također sa sobom povlači sve animirane slike čineći ih statičnim. <br /> Ova opcija je moguća samo ako imate GD modul instaliran na vašem serveru.';
$helptxt['karmaMode'] = 'Karma is a feature that shows the popularity of a member. Members, if allowed, can
		\'applaud\' or \'smite\' other members, which is how their popularity is calculated. You can change the
		number of posts needed to have a &quot;karma&quot;, the time between smites or applauds, and if administrators
		have to wait this time as well.<br /><br />Whether or not groups of members can smite others is controlled by
		a permission.  If you have trouble getting this feature to work for everyone, double check your permissions.';
$helptxt['cal_enabled'] = 'Kalendar možete koristiti za prikazivanje rođendana, ili sličnih bitnih datuma i događaja u zajednici.<br /><br /> <strong>Pokaži dane kao link do \'Dodaj događaj\'</strong>:<br />Ovo će omogućiti članovima da dodaju događaje za taj dan kada klliknu na taj datum<br /> <strong>Maksimalan broj dana na početnoj strani foruma</strong>:<br />Ako je upisano 7 bit će prikazani događaji iz sljedećeg tjedna.<br /> <strong>Prikaži praznike na početnoj strani</strong>:<br />Prikaži današnje praznike na početnoj strani foruma.<br /> <strong>Prikaži događaje na početnoj strani</strong>:<br />Pokazuje današnje događaje na početnoj strani foruma.<br /> <strong>Podrazumijevani forum za upisivanje</strong>:<br />Koji je podrazumijevani forum za upisivanje događaja?<br /> <strong>Omogući događaje koji nisu povezani sa postom</strong>:<br />Omogućava postavljanje događaja koji nisu povezani sa temama ili postovima iz foruma.<br /> <strong>Minimalna godina</strong>:<br />Izaberite &quot;prvu&quot; godinu za prikazivanje u kalendaru.<br /> <strong>Maksimalna godina</strong>:<br />Izaberite &quot;poslijednju&quot; godinu za prikazivanje u kalendaru<br /> <strong>Omogući događaje za više dana</strong>:<br />Obilježite za događaje koji traju više dana.<br /> <strong>Maksimalna dužina trajanja događaja</strong>:<br />Izaberite maksimalan broj dana koliko događaj može trajati.<br /><br /> Zapamtite da se korištenje kalendara (dodavanje događaja, pregled događaja itd.) kontrolire dozvolama foruma.
';
$helptxt['localCookies'] = 'SMF koristi kolačiće da sačuva informacije za prijavljivanje na klijent računalu.
	Kolačići mogu biti sačuvani globalno (mojserver.com) ili lokalno (mojserver.com/putanja/do/foruma).<br />
	Provjerite ove opcije ako vaši dosadašnji problemi sa korisnicima ukazuju na automatsko odjavljivanje.<hr />
	Globano sačuvani kolačići su manje sigurni kada se koriste na dijeljenim web serverima (npr. Tripod).<hr />
	Lokalni kolačići ne djeluju izvan forumskog foldera tako, ako je vaš forum smješten na www.mojserver.com/forum, stranice kao www.mojserver.com/index.php ne mogu pristupati informacijama računa.
	Izuzetno, kad koristite SSI.php globalni kolačići su preporučljivi.';
$helptxt['enableBBC'] = 'Izborom ove opcije omogućavate vašim članovima da koriste Bilten Forum Kod (BBC) širom foruma, omogućavate korisnicima da oblikuju poruke sa slikama, oblikuju štampu i više.';
$helptxt['time_offset'] = 'Not all forum administrators want their forum to use the same time zone as the server upon which it is hosted. Use this option to specify a time difference (in hours) from which the forum should operate from the server time. Negative and decimal values are permitted.';
$helptxt['default_timezone'] = 'Vremenska zona servera govori PHP-u gdje se nalazi vaš server. Budite sigurni da je podešeno ispravno, po mogućnosti za zemlju/grad u kojem se grad nalazi.  Više informacija možete naći na <a href \'http://www.php.net/manual/en/timezones.php\' meta \'_BLANK\' >PHP Sajt< /a>.';
$helptxt['spamWaitTime'] = 'Ovdje možete odabrati vrijeme koji mora da proteći između poruka. Ovo se može koristiti da spriječi ljude da "spamaju" vaš forum ograničavanjem koliko često mogu pisati.';

$helptxt['enablePostHTML'] = 'Ovo će omogućiti korištenje nekih osnovnih HTML tagova u porukama:
	<ul style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'Here you can select whether the default theme can be chosen, what theme guests will use,
	as well as other options. Click on a theme to the right to change the settings for it.';
$helptxt['theme_install'] = 'This allows you to install new themes.  You can do this from an already created directory, by uploading an archive for the theme, or by copying the default theme.<br /><br />Note that the archive or directory must have a <tt>theme_info.xml</tt> definition file.';
$helptxt['enableEmbeddedFlash'] = 'Ova opcija omogućava korisnicima da postavljaju Fleš animacije direktno u svoje poruke,
	kao što mogu da postavljaju i slike.  Ovo može da predstavlja bezbednosni rizik, iako je broj malicioznih animacija mali.
	KORISTITE NA SOPSTVENI RIZIK!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Allows people to link to <a href="%s?action=.xml;sa=news">Recent news</a>
	and similar data.  It is also recommended that you limit the size of recent posts/news because, when rss data
	is displayed in some clients, like Trillian, it is expected to be truncated.';
$helptxt['hotTopicPosts'] = 'Change the number of posts for a topic to reach the state of a &quot;hot&quot; or
	&quot;very hot&quot; topic.';
$helptxt['globalCookies'] = 'Omogućava kolačiće za prijavljivanje dostupne i u poddomenama.  Na primjer, ako je...<br />
	Vaša stranica je na adresi http://www.simplemachines.org/,<br />
	A vaš forum je http://forum.simplemachines.org/,<br />
	Korišćenje ove opcije će vašem sajtu dozvoliti pristup kolačićima sa vašeg foruma.  Ne omogućavajte ovu opciju ukoliko postoje i druge poddomene (kao haker.simplemachines.org) koje ne kontrolirate vi.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = 'This <em>disables</em> the additional password check for the administration section. This is not recommended!';
$helptxt['securityDisable_why'] = 'This is your current password. (the same one you use to login.)<br /><br />Having to type this helps ensure that you want to do whatever administration you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['emailmembers'] = 'In this message you can use a few &quot;variables&quot;.  These are:<br />
	{\\$board_url} - The URL to your forum.<br />
	{\\$current_time} - The current time.<br />
	{\\$member.email} - The current member\'s email.<br />
	{\\$member.link} - The current member\'s link.<br />
	{\\$member.id} - The current member\'s id.<br />
	{\\$member.name} - The current member\'s name.  (for personalization.)<br />
	{\\$latest_member.link} - The most recently registered member\'s link.<br />
	{\\$latest_member.id} - The most recently registered member\'s id.<br />
	{\\$latest_member.name} - The most recently registered member\'s name.';
$helptxt['attachmentEncryptFilenames'] = 'Encrypting attachment filenames allows you to have more than one attachment of the
	same name, to safely use .php files for attachments, and heightens security.  It, however, could make it more
	difficult to rebuild your database if something drastic happened.';

$helptxt['failed_login_threshold'] = 'Set the number of failed login attempts before directing the user to the password reminder screen.';
$helptxt['oldTopicDays'] = 'If this option is enabled a warning will be displayed to the user when attempting to reply to a topic which has not had any new replies for the amount of time, in days, specified by this setting. Set this setting to 0 to disable the feature.';
$helptxt['edit_wait_time'] = 'Number of seconds allowed for a post to be edited before logging the last edit date.';
$helptxt['edit_disable_time'] = 'Number of minutes allowed to pass before a user can no longer edit a post they have made. Set to 0 disable. <br /><br /><em>Note: This will not affect any user who has permission to edit other people\'s posts.</em>';
$helptxt['posts_require_captcha'] = 'This setting will force users to enter a code shown on a verification image each time they make a post to the board. Only users with a post count below the number set will need to enter the code - this should help combat automated spamming scripts.';
$helptxt['enableSpellChecking'] = 'Omogućava provjeru pravopisa. MORATE imati instaliranu pspell biblioteku na svom serveru, a vaša PHP konfiguracija mora biti podešena tako da koristi pspell biblioteku. Izgleda da vaš server  ' . (function_exists('pspell_new') ? 'IMA' : 'NEMA') . ' podešenu ovu mogućnost.';
$helptxt['disable_wysiwyg'] = 'Ovo podešavanje onemogućava sve korisnike da koriste WYSIWYG (&quot;What You See Is What You Get&quot; - što vidiš to i dobiješ) editor prilikom slanja poruka.';
$helptxt['lastActive'] = 'Podesi broj minuta da prikažeš ljude koji su aktivni u X minuta na početnoj stranici.Podrazumijevano je 15 minuta.';

$helptxt['customoptions'] = 'This section defines the options that a user may choose from a drop down list. There are a few key points to note in this section: <ul class="normallist"> <li><strong>Default Option:</strong> Whichever option box has the &quot;radio button&quot; next to it selected will be the default selection for the user when they enter their profile.</li> <li><strong>Removing Options:</strong> To remove an option simply empty the text box for that option - all users with that selected will have their option cleared.</li> <li><strong>Reordering Options:</strong> You can reorder the options by moving text around between the boxes. However - an important note - you must make sure you do <strong>not</strong> change the text when reordering options as otherwise user data will be lost.</li> </ul> ';

$helptxt['autoOptDatabase'] = 'This option optimizes the database every so many days.  Set it to 1 to make a daily optimization.  You can also specify a maximum number of online users, so that you won\'t overload your server or inconvenience too many users.';
$helptxt['autoFixDatabase'] = 'This will automatically fix broken tables and resume like nothing happened.  This can be useful, because the only way to fix it is to REPAIR the table, and this way your forum won\'t be down until you notice.  It does email you when this happens.';

$helptxt['enableParticipation'] = 'Ovo prikazuje malu ikonu u temama koje je korisnik objavio.';

$helptxt['db_persist'] = 'Održava vezu aktivnom da bi povećala brzinu. Ukoliko ne koristite odvojeni (dedicated) server, možete imati problema sa svojim hostingom.';
$helptxt['ssi_db_user'] = 'Opcionalno podešavanje koje vam dozvoljava da precizirate drugo korisničko ime i lozinku za bazu kada koristite SSI.php.';

$helptxt['queryless_urls'] = 'Ova opcija mijenja format URL-a tako da budu prihvatljiviji pretraživačima. Novi linkovi su oblika index.php/topic,1.html.

Ova mogućnost ' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'not') . ' će radit na vašem serveru.';
$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s child board will count toward its totals on the index page.<br /><br />This will make things notably slower, but means that a parent with no posts in it won\'t show \'0\'.';
$helptxt['fixLongWords'] = 'This option breaks words longer than a certain length into pieces so they don\'t disturb the forum\'s layout. (as much...)  This option should not be set to a value under 40. This option will not work with forums using UTF-8 and PHP less than 4.4.0. This ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? 'WILL' : 'WILL NOT') . ' work on your server';
$helptxt['allow_ignore_boards'] = 'Odabir ove opcije će omogućiti korisnicima da odaberu forume koje žele ignorirati.';

$helptxt['who_enabled'] = 'Ova opcija vam omogućava da uključite ili isključite mogućnost korisnicima da vide tko pretražuje forum i što radi.';

$helptxt['recycle_enable'] = '&quot;Reciklira&quot; izbrisane teme i postove u određenu rubriku.';

$helptxt['enableReportPM'] = 'Ova opcija omogućava korisnicima da prijave primljene privatne poruke administratorskom timu. To može biti korisno u pronalaženju bilo kakve zloupotrebe sistema privatnih poruka. ';
$helptxt['max_pm_recipients'] = 'Ova opcija vam omogućava podešavanje najvećeg dozvoljenog broja primaloca za privatnu poruku poslanu od člana foruma. Ovo može se upotrijebiti kao pomoć da se zaustavi spam zloupotreba sistema PP. Obratite pažnju na to da su korisnici sa dozvolom da šalju infodopise izuzeti iz ovog ograničenja. Podesite nula za neograničeno.';
$helptxt['pm_posts_verification'] = 'Ovo podešavanje će prisiliti korisnike da unesu kod prikazan na verifikacijskoj slici svaki put kada šalju privatne poruke. Samo korisnici ispod podešenog broja treba da unesu kod - to bi trebalo da pomoći u borbi protiv automatskih spam skripti.';
$helptxt['pm_posts_per_hour'] = 'Ovo će ograničiti broj privatnih poruka koje korisnik može poslati za jedan sat. Ovo ne utječe na administratore ili moderatore.';

$helptxt['default_personal_text'] = 'Podešavanja podrazumijevanog teksta koji će korisnik imati kao &quot;osobni tekst&quot;';

$helptxt['modlog_enabled'] = 'Evidentira sve moderatorske aktivnosti.';

$helptxt['guest_hideContacts'] = 'Ako je izabrana ova opcija će sakriti e-mail adrese i kontakt detalje svih članova od bilo kojih gostiju na vašem forumu';

$helptxt['registration_method'] = 'Ova opcija pokazuje koju metodu registracije će koristiti članovi koji žele se pridružiti forumu. Možete izabrati između:<br /><br /> <ul class="normallist"> <li> <strong>Registracija isključena</strong><br /> Isključuje registraciju što znači da članovi neće moći se pridružiti forumu.<br /> </li><li> <strong>Trenutna registracija</strong><br /> Novi članovi se mogu prijaviti i pisati odmah poslije registracije na forum.<br /> </li><li> <strong>Imejl Aktivacija</strong><br /> Ova opcija zahtijeva od korisnika da potvrde svoj e-mail klikom na link iz e-maila prije nego što se mogu prijaviti i pisati na forumu.<br /> </li><li> <strong>Odobrenje administratora</strong><br /> Ovo znači da će svaki novi član morati će morati biti odobren od strane administratora prije nego postane regularan član. </li> </ul> ';
$helptxt['register_openid'] = '<strong>Authenticate with OpenID</strong><br />
	OpenID is a means of using one username across different websites, to simplify the online experience. To use OpenID you first need to create an OpenID account - a list of providers can be found on the <a href="http://openid.net/" target="_blank">OpenID Official Site</a><br /><br />
	Once you have an OpenID account simply enter your unique identification URL into the OpenID input box and submit. You will then be taken to your providers site to verify your identity before being passed back to this site.<br /><br />
	On your first visit to this site you will be asked to confirm a couple of details before you will be recognized, after which you can login to this site and change your profile settings using just your OpenID.<br /><br />
	For more information please visit the <a href="http://openid.net/" target="_blank">OpenID Official Site</a>';

$helptxt['send_validation_onChange'] = 'Kada je ova opcija uključena svi članovi koji menjaju svoju e-mail adresu u profilu će morati ponovno aktivirati svoje račune preko e-maila poslanog na tu adresu';
$helptxt['send_welcomeEmail'] = 'Kada je ova opcija omogućena svim novim članovima će biti poslat e-mail dobrodošlice u vašu zajednicu';
$helptxt['password_strength'] = 'Ovo podešavanje određuje jačinu lozinki odabranih od strane vaših forum korisnika. Jača lozinka, teže će se komprimitirati računi članova.
	Moguće opcije su:
	<ul>
		<li><b>Niska:</b> Lozinka mora biti duljine najmanje četiri znaka.</li>
		<li><b>Srednja:</b> Lozinka mora biti duljine najmanje osam znakova, i ne može biti dio korisničkog imena ili e-mail adrese.</li>
		<li><b>Visoka:</b> Kao za srednju, osim što lozinka također mora sadržavati mješavinu velikih i malih slova te najmanje jedan broj.</li>
	</ul>
';

$helptxt['coppaAge'] = 'The value specified in this box will determine the minimum age that new members must be to be granted immediate access to the forums.
	On registration they will be prompted to confirm whether they are over this age, and if not will either have their application rejected or suspended awaiting parental approval - dependant on the type of restriction choosen.
	If a value of 0 is choosen for this setting then all other age restriction settings shall be ignored.';
$helptxt['coppaType'] = 'If age restrictions are enabled, then this setting will define that happens when a user below the minimum age attempts to register with your forum. There are two possible choices: <ul class="normallist"> <li> <strong>Reject Their Registration:</strong><br /> Any new member below the minimum age will have their registration rejected immediately.<br /> </li><li> <strong>Require Parent/Guardian Approval</strong><br /> Any new member who attempts to register and is below the minimum permitted age will have their account marked as awaiting approval, and will be presented with a form upon which their parents must give permission to become a member of the forums. They will also be presented with the forum contact details entered on the settings page, so they can send the form to the administrator by mail or fax. </li> </ul>';
$helptxt['coppaPost'] = 'The contact boxes are required so that forms granting permission for underage registration can be sent to the forum administrator. These details will be shown to all new minors, and are required for parent/guardian approval. At the very least a postal address or fax number must be provided.';

$helptxt['allow_hideOnline'] = 'With this option enabled all members will be able to hide their online status from other users (except administrators). If disabled only users who can moderate the forum can hide their presence. Note that disabling this option will not change any existing member\'s status - it just stops them from hiding themselves in the future.';
$helptxt['make_email_viewable'] = 'If this option is enabled instead of users email addresses being hidden to normal members and guests they will be publicly viewable on the forum. Enabling this will put your users at greater risk of being victims of spam as a result of email harvesters visiting your forum. Note this setting does not override the user setting for hiding their email address from users. Enabling this setting is <strong>not</strong> recommended.';
$helptxt['meta_keywords'] = 'Ključne reči se šalju na svaku stranicu kako bi pokazale pretraživačima ključne pojmove na vašoj stranici. Trebali bi riječi odvojiti zarezom i ne smijete koristiti HTML.';

$helptxt['latest_support'] = 'This panel shows you some of the most common problems and questions on your server configuration. Don\'t worry, this information isn\'t logged or anything.<br /><br />If this stays as &quot;Retrieving support information...&quot;, your computer probably cannot connect to <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Here you can see some of the most popular and some random packages or mods, with quick and easy installations.<br /><br />If this section doesn\'t show up, your computer probably cannot connect to <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'This area shows a few of the latest and most popular themes from <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.  It may not show up properly if your computer can\'t find <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>, though.';

$helptxt['secret_why_blank'] = 'For your security, the answer to your question (as well as your password) is encrypted in such a way that SMF can only tell you if get it right, so it can never tell you (or anyone else, importantly!) what your answer or password is.';
$helptxt['moderator_why_missing'] = 'Since moderation is done on a board-by-board basis, you have to make members moderators from the <a href="javascript:window.open(\'%s?action=manageboards\'); self.close();">board management interface</a>.';

$helptxt['permissions'] = 'Permissions are how you either allow groups to, or deny groups from, doing specific things.<br /><br />You can modify multiple boards at once with the checkboxes, or look at the permissions for a specific group by clicking \'Modify.\'';
$helptxt['permissions_board'] = 'If a board is set to \'Global,\' it means that the board will not have any special permissions.  \'Local\' means it will have its own permissions - separate from the global ones.  This allows you to have a board that has more or less permissions than another, without requiring you to set them for each and every board.';
$helptxt['permissions_quickgroups'] = 'These allow you to use the &quot;default&quot; permission setups - standard means \'nothing special\', restrictive means \'like a guest\', moderator means \'what a moderator has\', and lastly \'maintenance\' means permissions very close to those of an administrator.';
$helptxt['permissions_deny'] = 'Uskraćivanje dozvole može biti korisno kad želite oduzeti dozvolu pojedinim članovima. Možete dodati člansku grupu sa \'oduzmi\'-dozvolom za članove kojima želite oduzeti dozvolu.<br /><br />Koristite pažljivo, oduzeta dozvola će ostati oduzeta bez obzira da li je član u nekoj drugoj članskoj grupi. ';
$helptxt['permissions_postgroups'] = 'Omogućavanje dozvola za grupe zasnovane na broju poruka će vam omogućiti dodavanje dozvola članovima koji su objavili određeni broj poruka. Dozvole za grupe zasnovane na broju poruka su <em>dodane</em>u dozvolama regularnih članskih grupa.';
$helptxt['membergroup_guests'] = 'Članska grupa Gosti su svi korisnici koji nisu prijavljeni.';
$helptxt['membergroup_regular_members'] = 'Regularni članovi su svi članovi koji su prijavljeni, ali nemaju dodanu primarnu člansku grupu.';
$helptxt['membergroup_administrator'] = 'Administrator može, po definiciji, uraditi bilo što i vidjeti bilo koji forum. Ovdje nema podešavanja dozvola za administratora.';
$helptxt['membergroup_moderator'] = 'Članska grupa Moderator je posebna članska grupa. Dozvole i podešavanja dodane ovoj grupi su dodjeljene moderatorima, ali samo <em>na forumima koje uređuju</em>. Izvan tih foruma oni su kao i bilo koji drugi član.';
$helptxt['membergroups'] = 'U SMF-u postoje dvije vrste grupa kojih vaši članovi mogu biti dio. To su:
	<ul>
		<li><b>Redovne Grupe:</b> Redovna grupa je grupa u koju se članovi ne stavljaju automatski. Da pridružite člana grupi jednostavno idite u njegov profil i kliknite &quot;Podešavanja Naloga&quot;. Odavde mu možete dodjeliti bilo koji broj redovnih grupa kojih će on biti dio.</li>
		<li><b>Grupe zasnovane na broju poruka:</b> Za razliku od redovnih grupa, grupe zasnovane na broju poruka ne mogu biti dodjeljivane. Umesto toga, članovi su automatski dodjeljeni grupi zasnovanoj na broju poruka kada dostignu minimalni broj poruka zahtjevanih za tu grupu.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Možete izmjeniti ove događaje klikom na crvenu zvjezdicu (*) pored njihovog imena.';

$helptxt['maintenance_backup'] = 'Ovaj odjeljak vam omogućava da sačuvate kopiju svih poruka, postavki, članove i ostale informacije koje se odnose na vaš forum u veliku datoteku.<br /><br />Preporučljivo je da to često radite, možda tjedno, zbog sigurnosti i osiguranja.';
$helptxt['maintenance_rot'] = 'Ovo Vam omogućava da <strong>potpuno</strong> i <strong>neopozivo</strong>uklonite stare teme. Preporučljivo je da  pokušate napraviti prvo kopiju, u slučaju da uklonite nešto što niste mislili.<br /><br />Pažljivo koristite ovu mogućnost. ';
$helptxt['maintenance_members'] = 'Ovo Vam omogućava da <strong>potpuno</strong> i <strong>neopozivo</strong> uklonite račune članova sa vašeg foruma.<strong>Veoma </strong> je preporučljivo da pokušate napraviti prvo kopiju, u slučaju da uklonite nešto što niste mislili.<br /><br />Pažljivo koristite ovu mogućnost. ';

$helptxt['avatar_server_stored'] = 'Ovo omogućava vašim članovima da sami izaberu avatare smeštene na vašem serveru. Oni su, po pravilu, na istom mestu, kao i SMF u avatar folderu.<br />Kao tip, ako napravite direktorijume u tom folderu, možete napraviti &quot;kategorije&quot; avatara.';
$helptxt['avatar_external'] = 'Omogućavanjem ovog, članovi mogu da unesu URL do sopstvenih avatara. S druge strane, u nekim slučajevima, oni mogu da koriste avatare koji su preterano veliki ili slike koje ne želite na vašem forumu.';
$helptxt['avatar_download_external'] = 'Omogućavanjem ove opcije, URL dat od strane korisnika ima pristup za preuzimanje avatara na toj lokaciji. Konačno, avatar će se tretirati kao dostavljeni avatar.';
$helptxt['avatar_upload'] = 'This option is much like &quot;Allow members to select an external avatar&quot;, except that you have better control over the avatars, a better time resizing them, and your members do not have to have somewhere to put avatars.<br /><br />However, the downside is that it can take a lot of space on your server.';
$helptxt['avatar_download_png'] = 'PNGs are larger, but offer better quality compression.  If this is unchecked, JPEG will be used instead - which is often smaller, but also of lesser or blurry quality.';

$helptxt['disableHostnameLookup'] = 'This disables host name lookups, which on some servers are very slow.  Note that this will make banning less effective.';

$helptxt['search_weight_frequency'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor counts the amount of matching messages and divides them by the total number of messages within a topic.';
$helptxt['search_weight_age'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor rates the age of the last matching message within a topic. The more recent this message is, the higher the score.';
$helptxt['search_weight_length'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor is based on the topic size. The more messages are within the topic, the higher the score.';
$helptxt['search_weight_subject'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a search term can be found withing the subject of a topic.';
$helptxt['search_weight_first_message'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a match can be found in the first message of a topic.';
$helptxt['search_weight_sticky'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site, might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.<br /><br />This factor looks whether a topic is sticky and increases the relevancy score if it is.';
$helptxt['search'] = 'Adjust all settings for the search function here.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50.000 messages, you might want to consider creating a search index to assure peak performance of your forum.<br /><br />Note that a search index can take up quite some space. A fulltext index is a built-in index of MySQL. It\'s relatively compact (approximately the same size as the message table), but a lot of words aren\'t indexed and it can some search queries turn out to be very slow. The custom index is often bigger (depending on your configuration it can be up to 3 times the size of the messages table) but it\'s performance is better than fulltext and relatively stable.';

$helptxt['see_admin_ip'] = 'IP addresses are shown to administrators and moderators to facilitate moderation and to make it easier to track people up to no good.  Remember that IP addresses may not always be identifying, and most people\'s IP addresses change periodically.<br /><br />Members are also allowed to see their own IPs.';
$helptxt['see_member_ip'] = 'Your IP address is shown only to you and moderators.  Remember that this information is not identifying, and that most IPs change periodically.<br /><br />You cannot see other members\' IP addresses, and they cannot see yours.';
$helptxt['whytwoip'] = 'SMF uses various methods to detect user IP addresses. Usually these two methods result in the same address but in some cases more than one address may be detected. In this case SMF logs both addresses, and uses them both for ban checks (etc). You can click on either address to track that IP and ban if necessary.';

$helptxt['ban_cannot_post'] = 'The \'cannot post\' restriction turns the forum into read-only mode for the banned user. The user cannot create new topics, or reply to existing ones, send personal messages or vote in polls. The banned user can however still read personal messages and topics.<br /><br />A warning message is shown to the users that are banned this way.';

$helptxt['posts_and_topics'] = '<ul class="normallist"> <li> <strong>Post Settings</strong><br /> Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here. </li><li> <strong>Bulletin Board Code</strong><br /> Enable the code that shows forum messages in the right layout. Also adjust which codes are allowed and which aren\'t. </li><li> <strong>Censored Words</strong> In order to keep the language on your forum under control, you can censor certain words. This function allows you to convert forbidden words into innocent versions. </li><li> <strong>Topic Settings</strong> Modify the settings related to topics. The number of topics per page, whether sticky topics are enabled or not, the number of messages needed for a topic to be hot, etc. </li> </ul>';
$helptxt['spider_group'] = 'By selecting a restrictive group, when a guest is detected as a search crawler it will automatically be assigned any &quot;deny&quot; deny permissions of this group in addition to the normal permissions of a guest. You can use this to provide lesser access to a search engine than you would a normal guest. You might for example wish to create a new group called &quot;Spiders&quot; and select that here. You could then deny permission for that group to view profiles to stop spiders indexing your members profiles.<br />Note: Spider detection is not perfect and can be simulated by users so this feature is not guaranteed to restrict content only to those search engines you have added.';
$helptxt['show_spider_online'] = 'This setting allows you to select whether spiders should be listed in the who\'s online list on the board index and &quot;Who\'s Online&quot; page. Options are:
	<ul class="normallist">
		<li>
			<strong>Not at All</strong><br />
			Spiders will simply appear as guests to all users.
		</li><li>
			<strong>Show Spider Quantity</strong><br />
			The Board Index will display the number of spiders currently visiting the forum.
		</li><li>
			<strong>Show Spider Names</strong><br />
			Each spider name will be revealed, so users can see how many of each spider is currently visiting the forum - this takes effect in both the Board Index and Who\'s Online page.
		</li><li>
			<strong>Show Spider Names - Admin Only</strong><br />
			As above except only Administrators can see spider status - to all other users spiders appear as guests.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Izaberite poruku za čestitanje rođendana koju želite da koristite. Primjer poruke će biti prikazan u polju za naslov poruke i polju za tijelo poruke.<br /><strong>Napomena:</strong> Podešavanje ove opcije ne uključujuje automatski i samu čestitku. Za uključivanje rođendanskih čestitki putem e-maila koristite stranicu <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Planirani zadaci</a> na kojoj možete naći opciju za uključivanje ove čestitke. ';
$helptxt['pm_bcc'] = 'When sending a personal message you can choose to add a recipient as BCC or &quot;Blind Carbon Copy&quot;. BCC recipients do not have their identities revealed to other recipients of the message.';

$helptxt['move_topics_maintenance'] = 'To će vam omogućiti da premestite sve poruke iz jednog foruma u drugi';
$helptxt['maintain_reattribute_posts'] = 'You can use this function to attribute guest posts on your board to a registered member. This is useful if, for example, a user deleted their account and changed their mind and wished to have their old posts associated with their account.';
$helptxt['chmod_flags'] = 'You can manually set the permissions you wish to set the selected files to. To do this enter the chmod value as a numeric (octet) value. Note - these flags will have no effect on Microsoft Windows operating systems.';

$helptxt['postmod'] = 'This section allows members of the moderation team (with sufficient permissions) to approve any posts and topics before they are shown.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or html.  This will allow you to add more instant message providers, images or an embed etc. For example:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		Note that you can use the following variables:<br />
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - Url to images folder in the users current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - Url to the images folder in the default theme.</li>
		</ul>';

$helptxt['custom_mask'] = 'Maska za unos je vrlo bitna stavka za sigurnost foruma. Validan unos od strane korisnika pomaže da se osigurate da se podaci koriste onako kako očekujete. Slijedi nekoliko jednostavnih savjeta kao naprimjer.<br /><br /> <div class="smalltext" style="margin: 0 2em"> &quot;[A-Za-z]+&quot; - Uskladi sva velika i mala slova.<br /> &quot;[0-9]+&quot; - Uskladi sve numeričke karaktere.<br /> &quot;[A-Za-z0-9]{7}&quot; -Uskladite sva velika i mala slova i numeričke karaktere sedam puta.<br /> &quot;[^0-9]?&quot; - Zabrani bilo koji broj da bude uklopljen.<br /> &quot;^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$&quot; - Dozvoli samo 3 ili 6 hex znakova.<br /> </div><br /><br /> Dodatni specijalni karakteri ?+*^$ and {xx} mogu biti definirani. <div class="smalltext" style="margin: 0 2em"> ? - Ni jedan ili jedan pogodak prethodnog izraza.<br /> + - Jedan ili više pogodataka iz prethodnog izraza.<br /> * - Ni jedan ili više pogodataka iz prethodnog izraza.<br /> {xx} - Precizan broj pogodaka iz prethodnog izraza.<br /> {xx,} - Precizan broj ili broj veći od datog, iz prethodnog izraza.<br /> {,xx} - Precizan broj ili broj manji od datog, iz prethodnog izraza.<br /> {xx,yy} - Točan pogodak između dva pogotka iz prethodnog izraza.<br /> ^ - Početak stringa.<br /> $ - Kraj stringa.<br /> \\ - Poništava sljedeći karakter.<br /> </div><br /><br /> Dodatne informacije i više o ovim tehnikama možete pronaći na internetu. ';
$helptxt['image_proxy_enabled'] = 'Whether to enable the image proxy';
$helptxt['image_proxy_secret'] = 'Keep this a secret, protects your forum from hotlinking images. Change it in order to render current hotlinked images useless';
$helptxt['image_proxy_maxsize'] = 'Maximum image size that the image proxy will cache: bigger images will be not be cached. Cached images are stored in your SMF cache folder, so make sure you have enough free space.';

?>