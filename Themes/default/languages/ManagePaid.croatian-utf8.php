<?php
// Version: 2.0.10; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'Američki dolar ($)';
$txt['eur'] = 'Euro (&euro;)';
$txt['gbp'] = 'Britanska funta (&pound;)';
$txt['other'] = 'Drugo';

$txt['paid_username'] = 'Korisničko ime';

$txt['paid_subscriptions_desc'] = 'Ovdje možete dodati, uklanjati ili izmjeniti načine za plaćanje pretplate na vašem forumu.';
$txt['paid_subs_settings'] = 'Podešavanja';
$txt['paid_subs_settings_desc'] = 'Ovdje možete izmjeniti sve metode plaćanja dostupne vašim korisnicima.';
$txt['paid_subs_view'] = 'Pregledaj pretplate';
$txt['paid_subs_view_desc'] = 'Ovdje možete vidjeti sve dostupne pretplate.';

// Setting type strings.
$txt['paid_enabled'] = 'Omogući plaćene pretplate';
$txt['paid_enabled_desc'] = 'Ovo mora biti uključeno da bi se plaćene pretplate koristile na vašem forumu.';
$txt['paid_email'] = 'Pošalji mailove sa obavjestima';
$txt['paid_email_desc'] = 'Obavještava administratore kada se pretplata automatski promjeni.';
$txt['paid_email_to'] = 'Email za obavještavanje';
$txt['paid_email_to_desc'] = 'Popis adresa odvojenih točka-zarezom na koje će se, pored administratorskih adresa, slati obavijesti.';
$txt['paidsubs_test'] = 'Omogući mod testiranja';
$txt['paidsubs_test_desc'] = 'Ovo će postaviti opciju plaćenih pretplata u &quot;mod testiranja&quot; koji će, gdjegod je to moguće, koristiti sandbox metodu plaćanja u PayPalu i sl. Nemojte omogućavati ako ne znate što radite!';
$txt['paidsubs_test_confirm'] = 'Jeste li sigurni da želite omogućiti test mod?';
$txt['paid_email_no'] = 'Nemoj slati obavijesti';
$txt['paid_email_error'] = 'Obavjesti kad pretplata ne uspije';
$txt['paid_email_all'] = 'Obavjesti prilikom svih automatskih promjena pretplate';
$txt['paid_currency'] = 'Izaberite valutu';
$txt['paid_currency_code'] = 'Kod valute';
$txt['paid_currency_code_desc'] = 'Kod koji koriste pružatelji naplate';
$txt['paid_currency_symbol'] = 'Simbol koji koristi metoda za plaćanje';
$txt['paid_currency_symbol_desc'] = 'Koristite \'%1.2f\' da biste precizirali gdje se nalazi broj. Na primjer: $%1.2f, %1.2f kuna itd.';
$txt['paypal_email'] = 'Email adresa za pretplatu';
$txt['paypal_email_desc'] = 'Ostavite prazno ukoliko ne želite koristiti PayPal.';
$txt['worldpay_id'] = 'WorldPay Install ID';
$txt['worldpay_id_desc'] = 'Instalacijski ID koji je generirao WorldPay. Ostavite prazno ako ne koristite WorldPay';
$txt['worldpay_password'] = 'WorldPay Callback lozinka';
$txt['worldpay_password_desc'] = 'Pripazite se da kad je podešavate, ova lozinka u WorldPay-u bude jedinstvena, a ne ista kao i lozinka vašeg administratorskog naloga!';
$txt['authorize_id'] = 'Authorize.net Install ID';
$txt['authorize_id_desc'] = 'Instalacijski ID koji je generirao Authorize.net. Ostavite prazno ako ne koristite Authorize.net';
$txt['authorize_transid'] = 'Authorize.Net Transaction ID';
$txt['2co_id'] = '2co.com Install ID';
$txt['2co_id_desc'] = 'Instalacijski ID koji je generirao 2co.com. Ostavite prazno ako ne koristite 2co.com';
$txt['2co_password'] = '2co.com tajna riječ';
$txt['2co_password_desc'] = 'Vaša 2checkout tajna riječ.';
$txt['nochex_email'] = 'Nochex email adresa';
$txt['nochex_email_desc'] = 'Email naloga za trgovinu na Nochex-u. Ostavite prazno ako ne koristite Nochex';
$txt['paid_settings_save'] = 'Spremi';

$txt['paid_note'] = '<strong class="alert">Pažnja:</strong><br />Da bi se pretplate vaših korisnika automatski ažurirale, morat će te podesiti povratni URL za svaku od vaših metoda plaćanja. Za sve metode plaćanja, povratni URL bi trebalo podesiti na:<br /><br />
	&nbsp;&nbsp;&bull; <strong>' . $boardurl . '/subscriptions.php</strong><br /><br />
	Ako koristite PayPal, ovaj link možete direktno promijeniti ako kliknete <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">ovdje</a>.<br />
	Što se ostalih metoda za plaćanje tiče (ukoliko ih koristite), ovo podešavanje možete naći u vašem korisničkom panelu, obično pod terminom &quot;Return URL&quot; ili &quot;Callback URL&quot;.';

$txt['paypal_additional_emails'] = 'Primary PayPal email address';
$txt['paypal_additional_emails_desc'] = 'If different (for business account)';

// View subscription strings.
$txt['paid_name'] = 'Naziv';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Cijena';
$txt['paid_duration'] = 'Trajanje';
$txt['paid_active'] = 'Aktivna';
$txt['paid_pending'] = 'Čeka se na plaćanje';
$txt['paid_finished'] = 'Završena';
$txt['paid_total'] = 'Ukupno';
$txt['paid_is_active'] = 'Aktivirana';
$txt['paid_none_yet'] = 'Još uvijek niste dodali nijednu pretplatu.';
$txt['paid_payments_pending'] = 'Čeka se na plaćanje';
$txt['paid_order'] = 'Naruči';

$txt['yes'] = 'Da';
$txt['no'] = 'Ne';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Dodaj novu pretplatu';
$txt['paid_edit_subscription'] = 'Izmjeni pretplatu';
$txt['paid_delete_subscription'] = 'Obriši pretplatu';

$txt['paid_mod_name'] = 'Ime pretplate';
$txt['paid_mod_desc'] = 'Opis';
$txt['paid_mod_reminder'] = 'Pošalji mail za podsjetnik';
$txt['paid_mod_reminder_desc'] = 'Broj dana prije isteka pretplate kada treba poslati podsjetnik. (0 za onemogućeno)';
$txt['paid_mod_email'] = 'Email koji se šalje nakon završetka';
$txt['paid_mod_email_desc'] = 'Gdje je {NAME} ime člana; {FORUM} ime zajednice. Naslov e-maila treba biti u prvom redu. Ostavite prazno ukoliko ne želite slati obavijesti e-mailom.';
$txt['paid_mod_cost_usd'] = 'Cijena (USD)';
$txt['paid_mod_cost_eur'] = 'Cijena (EUR)';
$txt['paid_mod_cost_gbp'] = 'Cijena (GBP)';
$txt['paid_mod_cost_blank'] = 'Ostavite prazno ukoliko ne želite koristiti ovu valutu.';
$txt['paid_mod_span'] = 'Trajanje pretplate';
$txt['paid_mod_span_days'] = 'Dana';
$txt['paid_mod_span_weeks'] = 'Tjedana';
$txt['paid_mod_span_months'] = 'Mjeseci';
$txt['paid_mod_span_years'] = 'Godina';
$txt['paid_mod_active'] = 'Aktivna';
$txt['paid_mod_active_desc'] = 'Pretplata mora biti aktivna da bi novi članovi mogli je kupiti.';
$txt['paid_mod_prim_group'] = 'Primarna grupa nakon pretplate';
$txt['paid_mod_prim_group_desc'] = 'Primarna grupa u koju treba staviti korisnika kada se pretplati.';
$txt['paid_mod_add_groups'] = 'Dodatne grupe nakon pretplate';
$txt['paid_mod_add_groups_desc'] = 'Dodatne grupe u koje treba dodati korisnika kada se pretplati.';
$txt['paid_mod_no_group'] = 'Bez promjene';
$txt['paid_mod_edit_note'] = 'Napomena: pošto ova grupa sadrži postojeće pretplatnike, podešavanja grupe ne mogu se promijeniti!';
$txt['paid_mod_delete_warning'] = '<strong>UPOZORENJE</strong><br /><br />Ako obrišete ovu pretplatu, svi trenutno pretplaćeni korisnici će izgubiti sva prava pristupa koja su dobili ovom pretplatom. Ukoliko niste sigurni da želite ovo učiniti, bolje samo deaktivirajte pretplatu i nemojte je brisati.<br />';
$txt['paid_mod_repeatable'] = 'Dozvoli korisniku da automatski obnovi ovu pretplatu';
$txt['paid_mod_allow_partial'] = 'Dozvoli djelomičnu pretplatu';
$txt['paid_mod_allow_partial_desc'] = 'Ukoliko je ova opcija omogućena, u slučaju da korisnik plati manju svotu nego što je potrebno, bit će mu uključena pretplata u trajanju ovisno od postotku iznosa koji je platio.';
$txt['paid_mod_fixed_price'] = 'Pretplata za fiksnu cijenu i period';
$txt['paid_mod_flexible_price'] = 'Cijena pretplate ovisi o naručenom trajanju';
$txt['paid_mod_price_breakdown'] = 'Cijene fleksibilne pretplate';
$txt['paid_mod_price_breakdown_desc'] = 'Podesite koliko će pretplata koštati ovisno o dužini perioda na koji se korisnici pretplate. Na primjer, pretplata može koštati 12 dolara za jedan mjesec, ali samo 100 dolara za godinu dana. Ukoliko ne želite definirati cijenu za određeni period vremena, ostavite polje prazno.';
$txt['flexible'] = 'Fleksibilno';

$txt['paid_per_day'] = 'Cijena po danu';
$txt['paid_per_week'] = 'Cijena po tjednu';
$txt['paid_per_month'] = 'Cijena po mesecu';
$txt['paid_per_year'] = 'Cijena po godini';
$txt['day'] = 'Dan';
$txt['week'] = 'Tjedan';
$txt['month'] = 'Mjesec';
$txt['year'] = 'Godina';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Pregled korisnika';
$txt['view_users_subscribed'] = 'Pregled korisnika pretplaćenih na: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Trenutno nema korisnika pretplaćenih na ovu uslugu!';
$txt['add_subscriber'] = 'Dodaj novog pretplatnika';
$txt['edit_subscriber'] = 'Izmjeni pretplatnika';
$txt['delete_selected'] = 'Obriši odabrano';
$txt['complete_selected'] = 'Završi odabrano';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Jeste li sigurni da želite obrisati sve unose izabranih pretplata?';
$txt['complete_are_sure'] = 'Jeste li sigurni da želite završiti sve izabrane pretplate?';

$txt['start_date'] = 'Vrijeme početka';
$txt['end_date'] = 'Vrijeme završetka';
$txt['start_date_and_time'] = 'Početni datum i vrijeme';
$txt['end_date_and_time'] = 'Završni datum i vrijeme';
$txt['edit'] = 'IZMJENI';
$txt['one_username'] = 'Unesite samo jedno korisničko ime.';
$txt['hour'] = 'Sat';
$txt['minute'] = 'Minuta';
$txt['error_member_not_found'] = 'Ne mogu pronaći odabranog člana';
$txt['member_already_subscribed'] = 'Član je već pretplaćen na ovu uslugu. Izmjenite njegovu postojeću pretplatu.';
$txt['search_sub'] = 'Pronađi korisnika';

// Make payment.
$txt['paid_confirm_payment'] = 'Potvrdi plaćanje';
$txt['paid_confirm_desc'] = 'Da biste izvršili plaćanje, provjerite detalje koji se nalaze ispod i kliknite na &quot;Naruči&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Da biste platili preko <a href="http://www.paypal.com">PayPal</a>-a kliknite na tipku koje se nalazi ispod. Bit će te preusmjereni na PayPal stranicu da biste izvršili uplatu.';
$txt['paid_paypal_order'] = 'Naruči preko PayPal-a';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Da biste platili preko <a href="http://www.worldpay.com">WorldPay</a>-a kliknite na tipku koje se nalazi ispod. Bit će te preusmjereni na WorldPay stranicu da biste izvršili uplatu.';
$txt['paid_worldpay_order'] = 'Naruči preko WorldPay-a';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Da biste platili preko <a href="http://www.nochex.com">Nochex</a>-a kliknite na tipku koje se nalazi ispod. Bit će te preusmjereni na Nochex stranicu da biste izvršili uplatu.';
$txt['paid_nochex_order'] = 'Naruči preko Nochex-a';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Da biste platili preko <a href="http://www.authorize.net">Authorize.Net</a> kliknite na tipku koje se nalazi ispod. Bit će te preusmjereni na Authorize.Net stranicu da biste izvršili uplatu.';
$txt['paid_authorize_order'] = 'Naruči preko Authorize.Net-a';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Da biste platili preko <a href="http://www.2com.com">2co.com</a> kliknite na tipku koje se nalazi ispod. Bit će te preusmjereni na 2co.com da biste izvršili uplatu.';
$txt['paid_2co_order'] = 'Naruči preko 2co.com-a';
$txt['paid_done'] = 'Plaćanje završeno';
$txt['paid_done_desc'] = 'Hvala vam što ste izvršili uplatu. Čim transakcija bude potvrđena, vaša pretplata će biti aktivirana.';
$txt['paid_sub_return'] = 'Vrati se na pretplate';
$txt['paid_current_desc'] = 'Ispod se nalazi popis svih vaših trenutnih i prethodnih pretplata. Da biste produžili postojeću pretplatu, izaberite je iz popisa.';
$txt['paid_admin_add'] = 'Dodaj ovu pretplatu';

$txt['paid_not_set_currency'] = 'Još niste podesili svoju valutu. Napravite to u podešavanjima prije nego što nastavite.';
$txt['paid_no_cost_value'] = 'Morate unijeti cijenu i dužinu trajanja pretplate.';
$txt['paid_all_freq_blank'] = 'Morate unijeti cijenu makar za jedan od četiri perioda.';

// Some error strings.
$txt['paid_no_data'] = 'Poslani su neispravni podaci do skripte.';

$txt['paypal_could_not_connect'] = 'Nije moguće povezivanje sa PayPal serverom';
$txt['paid_sub_not_active'] = 'Ova pretplata više ne prima nove korisnike!';
$txt['paid_disabled'] = 'Plaćene pretplate su trenutno onemogućene!';
$txt['paid_unknown_transaction_type'] = 'Nepoznat tip transakcije za plaćenu pretplatu.';
$txt['paid_empty_member'] = 'Nije moguće pronaći odgovarajući ID člana';
$txt['paid_could_not_find_member'] = 'Nije moguće pronaći člana sa ID-om: %1$d';
$txt['paid_count_not_find_subscription'] = 'Nije moguće pronaći pretplatu člana sa ID-om: %1$s, ID pretplate: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Nije moguće pronaći unos u dnevniku pretplata za člana sa ID-om: %1$s, ID pretplate: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Nije moguće pronaći pretplatu na čekanju za člana sa ID-om: %1$s, ID pretplate: %2$s tako da se ignorira';
$txt['paid_admin_not_setup_gateway'] = 'Administrator još nije završio sa podešavanjem plaćene pretplate. Pokušajte ponovno malo kasnije.';
$txt['paid_make_recurring'] = 'Napravi ovo pretplatom koja se obnavlja';

$txt['subscriptions'] = 'Pretplate';
$txt['subscription'] = 'Pretplata';
$txt['paid_subs_desc'] = 'Ispod se nalazi popis svih pretplata dostupnih na ovom forumu.';
$txt['paid_subs_none'] = 'Trenutno nema dostupnih plaćenih pretplata!';

$txt['paid_current'] = 'Postojeće pretplate';
$txt['pending_payments'] = 'Čeka na plaćanje';
$txt['pending_payments_desc'] = 'Ova član je pokušao napraviti sljedeća plaćanja za ovu pretplatu, ali potvrda plaćanja još uvijek nije poslana forumu. Ukoliko ste sigurni da je ovo plaćanje primljeno, kliknite na &quot;prihvati&quot; da biste aktivirali pretplatu. Možete klikneti i na &quot;ukloni&quot; da obrišete sve reference na ovo plaćanje.';
$txt['pending_payments_value'] = 'Vrijednost';
$txt['pending_payments_accept'] = 'Prihvati';
$txt['pending_payments_remove'] = 'Ukloni';

?>