<?php
// Version: 2.0; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Ova stranica vam dozvoljava da promijenite podešavanja mogućnosti, modifikacija i osnovnih opcija vašeg foruma. Pogledajte <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">podešavanja tema</a> za više opcija.  Kliknite na ikone pomoći za više informacija o podešavanju.';
$txt['security_settings_desc'] = 'Ova stranica vam dozvoljava da podesite opcije vezane za sigurnost i uređivanje vašeg foruma, uključujući i zaštitu od spama.';
$txt['modification_settings_desc'] = 'Ova stranica sadrži podešavanja koje su dodale modifikacije vašeg foruma.';

$txt['modification_no_misc_settings'] = 'Nema modifikacija koje su dodale podešavanja u ovaj odjeljak.';

$txt['pollMode'] = 'Mod anketa';
$txt['disable_polls'] = 'Onemogući ankete';
$txt['enable_polls'] = 'Omogući ankete';
$txt['polls_as_topics'] = 'Prikaži postojeće ankete kao teme';
$txt['allow_guestAccess'] = 'Dozvoli gostima da pregledaju forum';
$txt['userLanguage'] = 'Omogući korisnicima odabir jezika';
$txt['allow_editDisplayName'] = 'Dozvoli korisnicima izmenu prikazanog imena';
$txt['allow_hideOnline'] = 'Dozvoli ne-administratorima da sakriju svoj status prisutnosti';
$txt['guest_hideContacts'] = 'Ne otkrivaj gostima detalje kontaktiranja članova';
$txt['titlesEnable'] = 'Omogući prilagođene nazive';
$txt['enable_buddylist'] = 'Omogući popis prijatelja/ignoriranja';
$txt['default_personal_text'] = 'Podrazumijevani osobni tekst';
$txt['number_format'] = 'Podrazumijevani format brojeva';
$txt['time_format'] = 'Podrazumijevani format vremena';
$txt['setting_time_offset'] = 'Opći vremenski pomak<div class="smalltext">(dodaje se onom koji postavi član.)</div>';
$txt['setting_default_timezone'] = 'Vremenska zona servera';
$txt['failed_login_threshold'] = 'Prag neuspjelih prijava';
$txt['lastActive'] = 'Prag vremena za utvrđivanje prisutnosti';
$txt['trackStats'] = 'Prati dnevnu statistiku';
$txt['hitStats'] = 'Prati dnevne posjete (zahtjeva omogućenu statistiku)';
$txt['enableCompressedOutput'] = 'Omogući komprimirani izlaz';
$txt['disableTemplateEval'] = 'Onemogući procjenu predložaka';
$txt['databaseSession_enable'] = 'Koristi sesije upravljane bazom';
$txt['databaseSession_loose'] = 'Dozvoli preglednicima da se vraćaju unazad na keširane stranice';
$txt['databaseSession_lifetime'] = 'Sekundi prije isteka nekorištene sesije';
$txt['enableErrorLogging'] = 'Omogući zapisivanje grešaka';
$txt['enableErrorQueryLogging'] = 'Uvrsti upite prema bazi podataka u dnevnik grešaka';
$txt['pruningOptions'] = 'Omogući pražnjenje dnevnika.';
$txt['pruneErrorLog'] = 'Ukloni unose u dnevniku grešaka starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneModLog'] = 'Ukloni unose u dnevnik uređivanja starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneBanLog'] = 'Ukloni unose u dnevnik zabrana starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneReportLog'] = 'Ukloni unose u dnevnik prijavljivanja urednicima starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneScheduledTaskLog'] = 'Ukloni unose u dnevnik planiranih zadataka starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['pruneSpiderHitLog'] = 'Ukloni unose u dnevnik posjeta pretraživača starije od<div class="smalltext">(0 za onemogućeno)</div>';
$txt['cookieTime'] = 'Podrazumijevana dužina kolačića za prijavljivanje (u minutima)';
$txt['localCookies'] = 'Omogući lokalno čuvanje kolačića<div class="smalltext">(SSI ne radi dobro sa ovom opcijom uključenom.)</div>';
$txt['globalCookies'] = 'Koristi kolačiće nezavisne od poddomena<div class="smalltext">(prvo isključite lokalne kolačiće!)</div>';
$txt['secureCookies'] = 'Preferiraj kolačiće radi sigurnosti<div class="smalltext">(Ovo važi samo ako koristite HTTPS - ne koristite inače!)</div>';
$txt['securityDisable'] = 'Onemogući sigurnost administracijske sekcije';
$txt['send_validation_onChange'] = 'Zahtjevaj ponovnu aktivaciju nakon promjene e-mail adrese';
$txt['approveAccountDeletion'] = 'Zahtjevaj odobrenje administratora kada član obriše račun';
$txt['autoOptMaxOnline'] = 'Najveći broj prisutnih korisnika prilikom optimizacije<div class="smalltext">(0 za neograničeno.)</div>';
$txt['autoFixDatabase'] = 'Automatski popravi oštećene tablice';
$txt['allow_disableAnnounce'] = 'Dozvoli korisnicima da onemoguće obavijesti';
$txt['disallow_sendBody'] = 'Onemogući tekst poruke u obavijestima';
$txt['queryless_urls'] = 'URL-ovi prilagođeni pretraživačima<div class="smalltext"><b>samo za Apache/Lighttpd!</b></div>';
$txt['max_image_width'] = 'Najveća širina poslanih slika (0 = onemogućeno)';
$txt['max_image_height'] = 'Najveća visina poslanih slika (0 = onemogućeno)';
$txt['enableReportPM'] = 'Omogući prijavljivanje privatnih poruka';
$txt['max_pm_recipients'] = 'Najveći dozvoljeni broj primatelja u privatnim porukama<div class="smalltext">(0 za onemogućeno, administratori su izuzetak)</div>';
$txt['pm_posts_verification'] = 'Broj poruka ispod kojih korisnici moraju unijeti kod sa slike da bi poslali privatnu poruku<div class="smalltext">(0 za neograničeno, administratori su izuzetak)</div>';
$txt['pm_posts_per_hour'] = 'Broj privatnih poruka koje korisnik može da pošalje za jedan sat<div class="smalltext">(0 za neograničeno, moderatori su izuzetak)</div>';
$txt['compactTopicPagesEnable'] = 'Ograniči broj prikazanih linkova ka stranicama';
$txt['contiguous_page_display'] = 'Uzastopnih stranica za prikaz';
$txt['to_display'] = 'da bi se prikazalo';
$txt['todayMod'] = 'Omogući opciju &quot;Danas&quot;';
$txt['today_disabled'] = 'Onemogućeno';
$txt['today_only'] = 'Samo &quot;Danas&quot;';
$txt['yesterday_today'] = 'Danas i Jučer';
$txt['topbottomEnable'] = 'Omogući dugmad Idi gore/Idi dolje';
$txt['onlineEnable'] = 'Prikaži prisutnost u temama i privatnim porukama';
$txt['enableVBStyleLogin'] = 'Prikaži polje za brzo prijavljivanje na svakoj stranici';
$txt['defaultMaxMembers'] = 'Članova po stranici u popisu članova';
$txt['timeLoadPageEnable'] = 'Prikaži vrijeme potrebno za kreiranje svake stranice';
$txt['disableHostnameLookup'] = 'Onemogući pretraživanje imena domaćina';
$txt['who_enabled'] = 'Omogući popis &quot;Ko je prisutan&quot;';
$txt['make_email_viewable'] = 'Prikaži e-mail adrese';
$txt['meta_keywords'] = 'Ciljne ključne riječi povezane sa forumom<div class="smalltext"> Za pretraživače. Ostavi prazno za podrazumijevano.</div>';
$txt['image_proxy_enabled'] = 'Enable Image Proxy';
$txt['image_proxy_enabled_desc'] = 'This will proxy images posted within <b>[img]</b> tags.';
$txt['image_proxy_secret'] = 'Image Proxy Secret';
$txt['image_proxy_secret_desc'] = 'This should be unique to your site. Be sure to keep it a secret.';
$txt['image_proxy_maxsize'] = 'Maximum file size of images to cache';
$txt['image_proxy_maxsize_postinput'] = 'KB';
$txt['image_proxy_maxsize_desc'] = 'Images above this threshold are still shown.';

$txt['karmaMode'] = 'Mod karme';
$txt['karma_options'] = 'Onemogući karmu|Omogući ukupnu karmu|Omogući pozitivnu/negativnu karmu';
$txt['karmaMinPosts'] = 'Najmanji broj poruka potreban za izmjenu karme';
$txt['karmaWaitTime'] = 'Vrijeme čekanja u satima (između dva mijenjanja karme)';
$txt['karmaTimeRestrictAdmins'] = 'Da li vrijeme čekanja vrijedi i za administratore?';
$txt['karmaLabel'] = 'Naslov karme';
$txt['karmaApplaudLabel'] = 'Naslov povećavanja karme';
$txt['karmaSmiteLabel'] = 'Naslov smanjivanja karme';

$txt['caching_information'] = '<div align="center"><b><u>Važno! Pročitaj prije nego odobravanja ove osobine.</b></u></div><br />
	SMF podržava keširanje upotrebom akceleratora. Trenutno podržani akceleratori:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	</ul>
	Keširanje radi najbolje ako imate PHP preveden sa jednim od navedenih optimizera, ili ako je memcache
	dostupan. Ako nemate ni jedan instalirani optimizer SMF će napraviti osnovno keširanje.<br /><br />
	SMF vrši keširanje zavisno od nivoa. Najviši nivo keširanja omogućava da se više CPU vremena utroši za
	preuzimanje keširane informacije. Ako je keširanje dostupno preporučljivo je da pokušate keširanje na nivou 1 najprije.
	<br /><br />
	Zapamtite da ako koristite memcache treba da osigurati pojedinosti o serveru u podešavanjima ispod. Ovo bi trebalo biti uneseno u listu odvojeno zarezima
	kao što je na primjeru ispod:<br />
	&quot;server1,server2,server3:port,server4&quot;<br /><br />
	Znajte da ako port nije naveden SMF će koristiti port 11211. SMF će pokušati da izvrši grubo/slučajno balansiranje opterećenja kroz servere.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<strong class="alert">SMF nije mogao da pronađe kompatibilan akcelerator na vašem serveru.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF je pronašao da vaš server ima instaliran APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF je pronašao da vaš server ima instaliran eAccelerator.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF je pronašao da vaš server ima instaliran MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF je pronašao da vaš server ima instaliran Zend.</strong>';
$txt['detected_Memcached'] = '<strong style="color: green">SMF je pronašao da vaš server ima instaliran Memcached.</strong>';
$txt['detected_XCache'] = '<strong style="color: green">SMF je otkrio da vaš server ima instaliran XCache.</strong>';

$txt['cache_enable'] = 'Nivo keširanja';
$txt['cache_off'] = 'Bez keširanja';
$txt['cache_level1'] = 'Nivo 1 keširanja';
$txt['cache_level2'] = 'Nivo 2 keširanja (nije preporučeno)';
$txt['cache_level3'] = 'Nivo 3 keširanja (nije preporučeno)';
$txt['cache_memcached'] = 'Memcache podešavanja';

$txt['loadavg_warning'] = '<span class="error">Primjetite: podešavanja ispod su za mijenjanje uz veliki oprez. Ukoliko postavite podešavanja previše nisko, to bi moglo da učini forum <strong>neupotrebljivim</strong>!</span>Trenutni prosjek opterećenja je <strong>%01.2f</strong></span> ';
$txt['loadavg_enable'] = 'Omogućite balansiranje opterećenja sa prosječnim opterećenjem';
$txt['loadavg_auto_opt'] = 'Prag za onemogućavanje automatske optimizacije baze podataka';
$txt['loadavg_search'] = 'Prag za onemogućavanje pretrage';
$txt['loadavg_allunread'] = 'Prag za onemogućavanje svih nepročitanih tema';
$txt['loadavg_unreadreplies'] = 'Prag za onemogućavanje nepročitanih odgovora';
$txt['loadavg_show_posts'] = 'Prag za onemogućavanje prikazivanja poruka korisnika';
$txt['loadavg_forum'] = 'Prag za <strong>potpuno</strong> onemogućavanje foruma';
$txt['loadavg_disabled_windows'] = '<span class="error">Balansiranje opterećenje nije omogućeno na Windows platformi.</span> ';
$txt['loadavg_disabled_conf'] = '<span class="error">Balansiranje opterećenja je zabranjeno konfiguracijom vašeg domaćina.</span> ';

$txt['setting_password_strength'] = 'Zahtjevana jačina korisničkih lozinki';
$txt['setting_password_strength_low'] = 'Niska - sadrži najmanje 4 znaka';
$txt['setting_password_strength_medium'] = 'Srednja - ne smije sadržavati korisničko ime';
$txt['setting_password_strength_high'] = 'Visoka - sastavljena od više različitih znakova';

$txt['antispam_Settings'] = 'Anti-spam potvrda';
$txt['antispam_Settings_desc'] = 'Ovaj odjeljak vam dozvoljava podešavanje potvrde koje provjeravaju da li je korisnik čovjek (a ne bot), kao da i podesite gdje i na koji način one rade.';
$txt['setting_reg_verification'] = 'Zahtjevaj potvrdu prilikom registracije';
$txt['posts_require_captcha'] = 'Broj poruka ispod kojih korisnici moraju proći provjeru prije nego što pošalju poruku';
$txt['posts_require_captcha_desc'] = '(0 za neograničeno, moderatori su izuzetak)';
$txt['search_enable_captcha'] = 'Zahtijevaj potvrdu kod svih pretraga koje zatraže gosti';
$txt['setting_guests_require_captcha'] = 'Gosti moraju proći potvrdu prilikom slanja poruka';
$txt['setting_guests_require_captcha_desc'] = '(Automatski je uključeno ukoliko je najmanji broj poruka preciziran ispod)';
$txt['guests_report_require_captcha'] = 'Gosti moraju proći verifikaciju prilikom prijavljivanja posta.';

$txt['configure_verification_means'] = 'Podesi metode potvrde';
$txt['setting_qa_verification_number'] = 'Broj pitanja za potvrdu na koje korisnik mora odgovoriti';
$txt['setting_qa_verification_number_desc'] = '(0 za onemogućavanje; pitanje se postavljaju ispod)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Ispod možete podesiti koje opcije za zaštitu od spama želite koristiti kad god je potrebno provjeriti da li je korisnik zaista čovjek. Imajte na umu da korisnik mora proći <em>sve</em> potvrde tako da, ukoliko omogućite i slike za potvrdu i test sa pitanjima, morat će završiti oba prije nego što nastave dalje.</span>';
$txt['setting_visual_verification_type'] = 'Vizualna potvrda za prikazivanje';
$txt['setting_visual_verification_type_desc'] = 'Što je slika složenija, teže će biti robotima da je zaobiđu';
$txt['setting_image_verification_off'] = 'Bez';
$txt['setting_image_verification_vsimple'] = 'Vrlo jednostavna - Običan tekst na slici';
$txt['setting_image_verification_simple'] = 'Jednostavna - Preklapajuća slova u boji, bez šuma';
$txt['setting_image_verification_medium'] = 'Srednja - Preklapajuća slova u boji, sa šumom/linijama';
$txt['setting_image_verification_high'] = 'Visoka - Iskošena slova, sa velikim šumom/linijama';
$txt['setting_image_verification_extreme'] = 'Jaka - Iskošena slova, šum, linije i blokovi';
$txt['setting_image_verification_sample'] = 'Primjer';
$txt['setting_image_verification_nogd'] = '<strong>Pažnja:</strong> pošto ovaj server nema instaliranu GD biblioteku, različita podešavanja složenosti neće imati efekta.';
$txt['setup_verification_questions'] = 'Pitanja za potvrdu';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Ako želite da korisnici odgovore na pitanje da biste spriječili botove, potrebno je da postavite više pitanja. Trebali bi izabrati relativno jednostanva pitanja; odgovori nisu osjetljivi na velika i mala slova. Možete koristiti BBkod u pitanjima za formatiranje. Da biste obrisali pitanje, jednostavno obrišite sadržaj dotične linije.</span>';
$txt['setup_verification_question'] = 'Pitanje';
$txt['setup_verification_answer'] = 'Odgovor';
$txt['setup_verification_add_more'] = 'Dodaj još jedno pitanje';

$txt['moderation_settings'] = 'Podešavanja moderiranja';
$txt['setting_warning_enable'] = 'Omogući sistem za upozoravanje korisnika';
$txt['setting_warning_watch'] = 'Nivo upozorenja da bi se korisnik nadgledao<div class="smalltext">Nivo upozorenja korisnika nakon kojeg će njegovo ponašanje pratiti moderatori - 0 za onemogućivanje.</div>';
$txt['setting_warning_moderate'] = 'Nivo upozorenja za uređivanje poruka<div class="smalltext">Nivo upozorenja korisnika nakon kojeg će sve njegove poruke morati da se odobre prije nego što postanu javne - 0 za onemogućivanje.</div>';
$txt['setting_warning_mute'] = 'Nivo upozorenja za ušutkivanje<div class="smalltext">Nivo upozorenja korisnika nakon kojeg više neće moći slati poruke - 0 za onemogućivanje.</div>';
$txt['setting_user_limit'] = 'Najveći broj bodova za upozoravanje po danu<div class="smalltext">Najveća vrijednost bodova za upozoravanje koje jedan moderator može dodjeliti korisniku u periodu od 24 sata - 0 za neograničeno.</div>';
$txt['setting_warning_decrement'] = 'Broj bodova za upozoravanje koji će se oduzimati korisniku svakih 24 sata<div class="smalltext">Primjenjuje se samo na korisnike koji nisu upozoreni u proteklih 24 sata - 0 za onemogućivanje.</div>';
$txt['setting_warning_show'] = 'Korisnici koji mogu vidjeti status upozorenja<div class="smalltext">Određuje tko može vidjeti status upozorenja korisnicima na forumu.</div>';
$txt['setting_warning_show_mods'] = 'Samo Moderatori';
$txt['setting_warning_show_user'] = 'Moderatori i Upozoreni Korisnici';
$txt['setting_warning_show_all'] = 'Svi Korisnici';

$txt['signature_settings'] = 'Podešavanja potpisa';
$txt['signature_settings_desc'] = 'Na ovoj stranici možete podesiti kako potpisi korisnika mogu izgledati na vašem forumu.';
$txt['signature_settings_warning'] = 'Napomena: nova podešavanja se ne primjenjuju na postojeće potpise. Kliknite <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">ovde</a> da biste primjenili pravila na sve postojeće potpise.';
$txt['signature_enable'] = 'Omogući potpise';
$txt['signature_max_length'] = 'Najveći broj dozvoljenih znakova<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_lines'] = 'Najveći broj dozvoljenih linija<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_images'] = 'Najveći broj slika<div class="smalltext">(0 za neograničeno - ne uključuje smajlije)</div>';
$txt['signature_allow_smileys'] = 'Omogući smajlije u potpisu.';
$txt['signature_max_smileys'] = 'Najveći broj smajlija<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_image_width'] = 'Najveći širina slika u potpisima (piksela)<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_image_height'] = 'Najveći visina slika u potpisima (piksela)<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_max_font_size'] = 'Najveća veličina fonta dozvoljena u potpisima<div class="smalltext">(0 za neograničeno)</div>';
$txt['signature_bbc'] = 'Omogućene BBC oznake';

$txt['custom_profile_title'] = 'Osobna polja profila';
$txt['custom_profile_desc'] = 'Ovde možjete dodati svoja polja u profil tako da odgovaraju potrebama vašeg foruma';
$txt['custom_profile_active'] = 'Aktivno';
$txt['custom_profile_fieldname'] = 'Ime polja';
$txt['custom_profile_fieldtype'] = 'Tip polja';
$txt['custom_profile_make_new'] = 'Novo polje';
$txt['custom_profile_none'] = 'Još niste dodali osobna polja!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Veliki tekst';
$txt['custom_profile_type_select'] = 'Polje za odabir';
$txt['custom_profile_type_radio'] = 'Radio polje';
$txt['custom_profile_type_check'] = 'Polje za provjeru';

$txt['custom_add_title'] = 'Dodaj polje u profilu';
$txt['custom_edit_title'] = 'Izmjeni polje u profilu';
$txt['custom_edit_general'] = 'Podešavanja prikaza';
$txt['custom_edit_input'] = 'Podešavanja unosa';
$txt['custom_edit_advanced'] = 'Napredna podešavanja';
$txt['custom_edit_name'] = 'Ime';
$txt['custom_edit_desc'] = 'Opis';
$txt['custom_edit_profile'] = 'Odjeljak profila';
$txt['custom_edit_profile_desc'] = 'Odjeljak profila u kojem se polje nalazi.';
$txt['custom_edit_profile_none'] = 'Bez';
$txt['custom_edit_registration'] = 'Prikaži pri registraciji';
$txt['custom_edit_registration_disable'] = 'Ne';
$txt['custom_edit_registration_allow'] = 'Da';
$txt['custom_edit_registration_require'] = 'Da, i zahtjevaj unos';
$txt['custom_edit_display'] = 'Prikaži pri prikazu tema';
$txt['custom_edit_picktype'] = 'Tip polja';

$txt['custom_edit_max_length'] = 'Najveća dužina';
$txt['custom_edit_max_length_desc'] = '(0 za neograničeno)';
$txt['custom_edit_dimension'] = 'Dimenzije';
$txt['custom_edit_dimension_row'] = 'Redova';
$txt['custom_edit_dimension_col'] = 'Stupaca';
$txt['custom_edit_bbc'] = 'Dozvoli BBC';
$txt['custom_edit_options'] = 'Opcije';
$txt['custom_edit_options_desc'] = 'Ostavite polje za opcije prazno da biste ga uklonili. Radio dugme odabira podrazumijevanu opciju.';
$txt['custom_edit_options_more'] = 'Još';
$txt['custom_edit_default'] = 'Podrazumijevano stanje';
$txt['custom_edit_active'] = 'Aktivno';
$txt['custom_edit_active_desc'] = 'Ako nije izabrano, ovo polje će se prikazivati svima.';
$txt['custom_edit_privacy'] = 'Privatnost';
$txt['custom_edit_privacy_desc'] = 'Tko može vidjeti i mijenjati ovo polje.';
$txt['custom_edit_privacy_all'] = 'Korisnici mogu vidjeti ovo polje; vlasnik može da ga mijenja';
$txt['custom_edit_privacy_see'] = 'Korisnici mogu vidjeti ovo polje; samo administratori mogu mijenjati';
$txt['custom_edit_privacy_owner'] = 'Korisnici ne mogu vidjeti ovo polje; vlasnik i administratori ga mogu uređivati.';
$txt['custom_edit_privacy_none'] = 'Ovo polje je vidljivo samo administratorima';
$txt['custom_edit_can_search'] = 'Pretraživo';
$txt['custom_edit_can_search_desc'] = 'Da li ovo polje može pretraživati u popisu članova?';
$txt['custom_edit_mask'] = 'Očekivani unos';
$txt['custom_edit_mask_desc'] = 'Za tekstualna polja, možete provjeravati unesene podatke.';
$txt['custom_edit_mask_email'] = 'Ispravna e-mail adresa';
$txt['custom_edit_mask_number'] = 'Brojevi';
$txt['custom_edit_mask_nohtml'] = 'Bez HTML';
$txt['custom_edit_mask_regex'] = 'Regularni izraz (Napredno)';
$txt['custom_edit_enclose'] = 'Prikaži Zatvoreno u Okviru Teksta (Neobavezno)';
$txt['custom_edit_enclose_desc'] = '<strong>strogo</strong> preporučujemo da koristite ulaznu masku radi provjere unosa od strane korisnika.';

$txt['custom_edit_placement'] = 'Izaberite Postavljanje';
$txt['custom_edit_placement_standard'] = 'Standardno(sa naslovom)';
$txt['custom_edit_placement_withicons'] = 'Sa Ikonama';
$txt['custom_edit_placement_abovesignature'] = 'Iznad Potpisa';
$txt['custom_profile_placement'] = 'Postavljanje';
$txt['custom_profile_placement_standard'] = 'Standardno';
$txt['custom_profile_placement_withicons'] = 'Sa Ikonama';
$txt['custom_profile_placement_abovesignature'] = 'Iznad Potpisa';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Da li ste sigurni da želite izbrisati ovo polje - svi podaci koji su korisnici unijeli bit će izgubljeni!';

$txt['standard_profile_title'] = 'Standardna polja profila';
$txt['standard_profile_field'] = 'Polje';

$txt['core_settings_welcome_msg'] = 'Dobrodošli u vaš novi forum';
$txt['core_settings_welcome_msg_desc'] = 'Za početak, preporučujemo vam da odaberete koje osnovne mogućnosti SMF-a želite omogućiti. Preporučujemo da omogućite samo one mogućnosti koje vam trebaju!';
$txt['core_settings_item_cd'] = 'Kalendar';
$txt['core_settings_item_cd_desc'] = 'Uključivanje ove opcije će otvoriti odabir opcija za dozvoljavanje vašim korisnicima da pogledaju kalendar, dodaju ili mijenjaju događaje, vide rođendane ostalih korisnika kao i mnogo, mnogo više.';
$txt['core_settings_item_cp'] = 'Napredna polja u profilu';
$txt['core_settings_item_cp_desc'] = 'Ovo vam omogućava da sakrijete standardna polja u profilu, dodajete nova polja za unos prilikom registracije kao i da napravite nova polja u profilu na vašem forumu.';
$txt['core_settings_item_k'] = 'Karma';
$txt['core_settings_item_k_desc'] = 'Karma je opcija koja pokazuje popularnost člana. Članovi, ako im je dozvoljeno, mogu da \'povećavaju\' ili \'smanjuju\' karmu ostalih članova i time direktno utiču na njihovu popularnost.';
$txt['core_settings_item_ml'] = 'Dnevnici uređivanja, administracije i korisnika';
$txt['core_settings_item_ml_desc'] = 'Omogućite dnevnik uređivanja i administracije da biste pratili sve akcije koji su vaši moderatori proveli na forumu. Slično, omogućeno je i praćenje ključnih promjena koje korisnici naprave na svom profilu.';
$txt['core_settings_item_pm'] = 'Nadgledanje poruka';
$txt['core_settings_item_pm_desc'] = 'Nadgledanje poruka vam dozvoljava da izaberete grupe ili forume unutar kojih poruke moraju biti odobrene prije nego što budu prikazane javno. Nakon što omogućite ovu opciju, posjetite odjeljak za podešavanje dozvola da biste podesili odgovarajuće dozvole.';
$txt['core_settings_item_ps'] = 'Plaćene pretplate';
$txt['core_settings_item_ps_desc'] = 'Plaćene pretplate dozvoljavaju korisnicima da plate promjenu grupe članova kojoj pripadaju i time promijene prava za pristup pojedinim opcijama.';
$txt['core_settings_item_rg'] = 'Generiranje izvještaja';
$txt['core_settings_item_rg_desc'] = 'Ova opcija dozvoljava generiranje izvještaja (koji se mogu isprintati) koji će prikazati trenutno podešavanje vašeg foruma u jako čitljivom obliku - naročito korisno za velike forume.';
$txt['core_settings_item_sp'] = 'Praćenje pretraživača';
$txt['core_settings_item_sp_desc'] = 'Ova opcija dozvoljava administratorima da prate kako pretraživači indeksiraju vaš forum.';
$txt['core_settings_item_w'] = 'Sistem za upozoravanje';
$txt['core_settings_item_w_desc'] = 'Ova mogućnost dozvoljava administratorima i urednicima da izdaju upozorenja korisnicima; omogućena je i napredna funkcionalnost za automatsko uklanjanje prava korisnicima kako se nivo njihovih upozorenja povećava. Da biste izvukli maksimum iz ove funkcije, uključite i opciju &quot;Nadgledanje poruka&quot;.';
$txt['core_settings_switch_on'] = 'Kliknite da biste omogućili';
$txt['core_settings_switch_off'] = 'Kliknite da biste onemogućili';
$txt['core_settings_enabled'] = 'Omogućeno';
$txt['core_settings_disabled'] = 'Onemogućeno';

$txt['languages_lang_name'] = 'Ime jezika';
$txt['languages_locale'] = 'Lokalno';
$txt['languages_default'] = 'Podrazumijevano';
$txt['languages_character_set'] = 'Set znakova';
$txt['languages_users'] = 'Korisnika';
$txt['language_settings_writable'] = 'Upozorenje: Settings.php nije otvoren za upisivanje tako da podešavanje podrazumijevanog jezika ne može biti sačuvano.';
$txt['edit_languages'] = 'Izmjeni jezike';
$txt['lang_file_not_writable'] = '<strong>Upozorenje:</strong> Primarna jezička datoteka (%1$s) nije otvorena za upisivanje. Morate je otvoriti za upisivanje da biste mogli izvršiti promjene.';
$txt['lang_entries_not_writable'] = '<strong>Upozorenje:</strong> Jezička datoteka koju želite izmijeniti (%1$s) nije otvorena za upisivanje. Morate je otvoriti za upisivanje da biste mogli izvršiti promjene.';
$txt['languages_ltr'] = 'S desna na lijevo';

$txt['add_language'] = 'Dodaj jezik';
$txt['add_language_smf'] = 'Preuzmi sa Simple Machines stranice';
$txt['add_language_smf_browse'] = 'Unesite ime jezika za pretragu ili ostavite prazno da biste prikazali sve.';
$txt['add_language_smf_install'] = 'Instaliraj';
$txt['add_language_smf_found'] = 'Pronađeni su slijedeći jezici. Kliknite link za instaliranje pored jezika kojeg želite instalirati da biste otvorili menadžer paketa.';
$txt['add_language_error_no_response'] = 'Stranica Simple Machines-a ne odgovara. Pokušajte ponovo malo kasnije.';
$txt['add_language_error_no_files'] = 'Nema pronađenih datoteka.';
$txt['add_language_smf_desc'] = 'Opis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Verzija';

$txt['edit_language_entries_primary'] = 'Ispod se nalaze primarna podešavanja jezika za ovaj jezični paket.';
$txt['edit_language_entries'] = 'Izmjeni unose jezika';
$txt['edit_language_entries_file'] = 'Izaberite unose za izmjenu';
$txt['languages_dictionary'] = 'Rječnik';
$txt['languages_spelling'] = 'Pravopis';
$txt['languages_for_pspell'] = 'Ovo je za <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - ukoliko je instaliran';
$txt['languages_rtl'] = 'Omogući mod &quot;s desna na lijevo&quot;';

$txt['lang_file_desc_index'] = 'Opći prevodi';
$txt['lang_file_desc_EmailTemplates'] = 'Mail predlošci';

$txt['languages_download'] = 'Preuzmi jezički paket';
$txt['languages_download_note'] = 'Ova strana prikazuje sve datoteke koje su sadržane u jezičkom paketu kao i neke korisne informacije o svakoj od njih. Sve datoteke pored kojih stoji znak potvrde bit će kopirane.';
$txt['languages_download_info'] = '<strong>Pažnja:</strong> Za datoteke koje imaju status &quot;Nije upisivo&quot; znači da SMF trenutno neće moći ih kopirati u direktorij tako da ćete morati odredište otvoriti za upisivanje, ili preko nekog FTP klijenta ili upisivanje svojih detalja pri dnu stranice.<br />
	Informacija o verziji datoteke prikazuje posljednju verziju SMF-a za koju je ažurirana. Ukoliko je indikator zelene boje, ovo je novija verzija od prethodne; ukoliko je siv, verzija datoteke je ista kao i ona koju posjedujete dok crvena boja pokazuje da je vaša verzija novija nego ona sadržana u paketu.<br />
	Ukoliko datoteka već postoji na vašem forumu, stupac &quot;Već postoji&quot; imati će jednu od dvije vrijednosti. &quot;Identična&quot; pokazuje da je datoteka koju imate potpuno ista sa onom u paketu tako da ne postoji potreba za njenim prepisivanjem. &quot;Različita&quot; znači da se sadržaj razlikuje u nekom značenju i da je njeno prepisivanje vjerovatno najbolje rješenje.';

$txt['languages_download_main_files'] = 'Primarne datoteke';
$txt['languages_download_theme_files'] = 'Datoteke vezane za temu';
$txt['languages_download_filename'] = 'Ime datoteke';
$txt['languages_download_dest'] = 'Odredište';
$txt['languages_download_writable'] = 'Upisivo';
$txt['languages_download_version'] = 'Verzija';
$txt['languages_download_older'] = 'Imate instaliranu noviju verziju ove datoteke; prepisivanje nije preporučljivo.';
$txt['languages_download_exists'] = 'Već postoji';
$txt['languages_download_exists_same'] = 'Identična';
$txt['languages_download_exists_different'] = 'Različita';
$txt['languages_download_copy'] = 'Kopiraj';
$txt['languages_download_not_chmod'] = 'Ne možete nastaviti sa instalacijom sve dok sve datoteke označene za kopiranje ne budu otvorene za upisivanje.';
$txt['languages_download_illegal_paths'] = 'Paket sadrži pogrešne putanje - kontaktirajte Simple Machines';
$txt['languages_download_complete'] = 'Instalacija je završena';
$txt['languages_download_complete_desc'] = 'Jezični paket je uspešno instaliran. Kliknite <a href="%1$s">ovdje</a> da biste se vratili na stranicu sa jezicima.';
$txt['languages_delete_confirm'] = 'Da li ste sigurni da želite izbrisati ovaj jezik?';

?>