<?php
// Version: 2.0; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Registracijski Ugovor';
$txt['agreement_agree'] = 'Prihvaćam uvjete Ugovora.';
$txt['agreement_agree_coppa_above'] = 'Prihvaćam uvjete Ugovora i star sam barem %1$d godina.';
$txt['agreement_agree_coppa_below'] = 'Prihvaćam uvjete Ugovora i mlađi sam od %1$d godina.';

// Registration form.
$txt['registration_form'] = 'Registracijski obrazac';
$txt['need_username'] = 'Morate unijeti korisničko ime';
$txt['no_password'] = 'Nije unesena Lozinka.';
$txt['incorrect_password'] = 'Lozinka je neispravna';
$txt['choose_username'] = 'Unesite Korisničko Ime';
$txt['maintain_mode'] = 'Održavanje';
$txt['registration_successful'] = 'Registracija je uspjela';
$txt['now_a_member'] = 'Čestitamo! Sada ste član ovog Foruma.';
// Use numeric entities in the below string.
$txt['your_password'] = 'a vaša lozinka je';
$txt['valid_email_needed'] = 'Molimo, unesite valjanu email adresu, %1%s.';
$txt['required_info'] = 'Obavezne informacije';
$txt['identification_by_smf'] = 'Samo za internu identifikaciju. (bez kvačica)';
$txt['additional_information'] = 'Dodatne informacije';
$txt['warning'] = 'Upozorenje!';
$txt['only_members_can_access'] = 'Samo registrirani korisnici mogu pristupiti ovoj sekciji.';
$txt['login_below'] = 'Molimo prijavite se ispod ili';
$txt['register_an_account'] = 'registrirajte novi račun';
$txt['login_with_forum'] = 'sa %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Navedenu možete promijeniti prijavom na forum i odlaskom na stranicu profila ili posjetom ove stranice nakon prijave:';
$txt['your_username_is'] = 'Vaše korisničko ime je: ';

$txt['login_hash_error'] = 'Nedavno smo nadogradili sigurnost lozinki. Molimo vas da ponovno upišete vašu lozinku.';

$txt['ban_register_prohibited'] = 'Nažalost, nije vam dopušteno registrirati se na forum';
$txt['under_age_registration_prohibited'] = 'Žao nam je, no korisnici ispod %1$d godina ne mogu se registrirati na ovom forumu.';

$txt['activate_account'] = 'Aktiviranje računa';
$txt['activate_success'] = 'Vaš račun je uspješno aktiviran. Možete nastaviti s prijavom.';
$txt['activate_not_completed1'] = 'Vaša email adresa mora biti provjerena prije tvoje prijave na forum.';
$txt['activate_not_completed2'] = 'Trebate ponovno aktivacijski email?';
$txt['activate_after_registration'] = 'Hvala vam na registriranju. Uskoro će te emailom primiti link za aktivaciju svog računa.';
$txt['invalid_userid'] = 'Korisnik ne postoji';
$txt['invalid_activation_code'] = 'Neispravan aktivacijski kod';
$txt['invalid_activation_username'] = 'Korisničko ime ili email';
$txt['invalid_activation_new'] = 'Ako ste se registrirali sa pogrešnom email adresom, upišite novu adresu i lozinku.';
$txt['invalid_activation_new_email'] = 'Nova email adresa';
$txt['invalid_activation_password'] = 'Stara lozinka';
$txt['invalid_activation_resend'] = 'Ponovite slanje aktivacijskg koda';
$txt['invalid_activation_known'] = 'Ako znate svoj aktivacijski kod, upišite ga ovdje.';
$txt['invalid_activation_retry'] = 'Aktivacijski kod';
$txt['invalid_activation_submit'] = 'Aktiviraj';

$txt['coppa_no_concent'] = 'Administrator još uvijek nije primio odobrenje roditelja/staratelja za vaš korisnički račun.';
$txt['coppa_need_more_details'] = 'Treba više detalja?';

$txt['awaiting_delete_account'] = 'Vaš korisnički račun određen je za brisanje!<br />Ako želite ponovno uspostaviti vaš korisnički račun, označite &quot;Reaktiviraj moj račun&quot; kvadrat, pa se ponovno prijavite.';
$txt['undelete_account'] = 'Reaktiviraj moj račun';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Detalji nove lozinke';
$txt['change_password_login'] = 'Vaši detalji prijave u';
$txt['change_password_new'] = 'su promijenjeni, a lozinka resetirana. Ispod se nalaze novi detalji prijave.';

$txt['in_maintain_mode'] = 'Ovaj forum je u stanju održavanja.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Molim pročitati/prihvatiti uvjete Registracijskog ugovora.';
$txt['register_passwords_differ_js'] = 'Šifre koje ste upisali se ne podudaraju!';

$txt['approval_after_registration'] = 'Hvala vam na registriranju. Administrator mora najprije odobriti registraciju prije početka vašeg korištenja foruma i primiti će te email poruku odmah nakon odluke administratora.';

$txt['admin_settings_desc'] = 'Ovdje možete urediti razne postavke koje se odnose na registraciju novih članova.';

$txt['setting_enableOpenID'] = 'Dozvoli korisnicima registraciju pomoću OpenID-a';

$txt['setting_registration_method'] = 'Metoda registracije krištena za nove članove';
$txt['setting_registration_disabled'] = 'Registracija je onemogućena';
$txt['setting_registration_standard'] = 'Direktna registracija';
$txt['setting_registration_activate'] = 'Email aktivacija';
$txt['setting_registration_approval'] = 'Administratorska dozvola';
$txt['setting_notify_new_registration'] = 'Obavjesti administratore kada se pridruži novi član';
$txt['setting_send_welcomeEmail'] = 'Pošalji pozdravni email novim članovima';

$txt['setting_coppaAge'] = 'Starost ispod koje se primjenjuju ograničenja registracije';
$txt['setting_coppaAge_desc'] = '(postavite na 0 za isključenje)';
$txt['setting_coppaType'] = 'Akcija koju se poduzima kada je starost korisnika ispod minimuma';
$txt['setting_coppaType_reject'] = 'Odbaciti njihovu registraciju';
$txt['setting_coppaType_approval'] = 'Zatražiti odobrenje roditelja/skrbnika';
$txt['setting_coppaPost'] = 'Poštanska adresa na koju treba poslati formu za odobrenje';
$txt['setting_coppaPost_desc'] = 'Primjenjuje se samo ako je uključeno ograničenje starosti';
$txt['setting_coppaFax'] = 'Fax broj na koji treba poslati obrazac za odobrenje';
$txt['setting_coppaPhone'] = 'Kontakt broj za roditelje s pitanjima oko ograničenja starosti';

$txt['admin_register'] = 'Registracija novog člana';
$txt['admin_register_desc'] = 'Odavde možete registrirati nove članove na forum, i prema potrebi poslati njihove detalje emailom.';
$txt['admin_register_username'] = 'Korisničko Ime';
$txt['admin_register_email'] = 'E-mail';
$txt['admin_register_password'] = 'Lozinka';
$txt['admin_register_username_desc'] = 'Korisničko ime novog člana';
$txt['admin_register_email_desc'] = 'E-mail adresa člana';
$txt['admin_register_password_desc'] = 'Lozinka novog korisnika';
$txt['admin_register_email_detail'] = 'Pošalji novu lozinku emailom';
$txt['admin_register_email_detail_desc'] = 'Email adresa je obvezna, čak i ako ovo nije označeno';
$txt['admin_register_email_activate'] = 'Traži od korisnika da aktivira račun';
$txt['admin_register_group'] = 'Primarna korisnička grupa';
$txt['admin_register_group_desc'] = 'Primarna korisnička grupa za novog korisnika';
$txt['admin_register_group_none'] = '(nema primarne korisničke grupe)';
$txt['admin_register_done'] = 'Član je uspješno je registriran!';

$txt['coppa_title'] = 'Dobno Ograničenje Foruma';
$txt['coppa_after_registration'] = 'Hvala Vam što ste se registrirali na ' . $context['forum_name_html_safe'] . '.

Pošto spadate u starosnu grupu ispod {MINIMUM_AGE}, zakonski je potrebno da dobijemo odobrenje vašeg roditelja ili skrbnika prije nego smije početi koristiti svoj korisnički račun. Da biste započeli rješavanje aktivacije molimo ispišite donji obrazac:';
$txt['coppa_form_link_popup'] = 'Učitaj obrazac u novom prozoru';
$txt['coppa_form_link_download'] = 'Download Obrazac kao Tekst Datoteku';
$txt['coppa_send_to_one_option'] = 'Roditelji/staratelji trebaju poslati obrazac do:';
$txt['coppa_send_to_two_options'] = 'Obrazac treba poslati na jedan od ovih načina:';
$txt['coppa_send_by_post'] = 'Poštom, na slijedeću adresu:';
$txt['coppa_send_by_fax'] = 'Faxom, na slijedeći broj:';
$txt['coppa_send_by_phone'] = 'Alternativno, mogu i nazvati administratora na {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Obrazac za odobrenje za registraciju na ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Adresa';
$txt['coppa_form_date'] = 'Datum';
$txt['coppa_form_body'] = 'Ja {PARENT_NAME},<br /><br />dajem odobrenje da  {CHILD_NAME} (ime djeteta) postane registrirani član foruma: ' . $context['forum_name_html_safe'] . ', s korisničkim imenom: {USER_NAME}.<br /><br />Upoznat(a) sam s time da će određene osobne informacije koje upiše {USER_NAME} biti prikazane drugim korisnicima foruma.<br /><br />Potpis:<br />{PARENT_NAME} (Roditelj/Staratelj).';

$txt['visual_verification_sound_again'] = 'Emitiraj ponovo';
$txt['visual_verification_sound_close'] = 'Zatvoriti prozor';
$txt['visual_verification_sound_direct'] = 'Ne čujete čitane znakove?  Pokušajte direktan link.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Korisničko ime nije dostupno';
$txt['registration_username_unavailable'] = 'Korisničko ime nije dostupno';
$txt['registration_username_check'] = 'Provjeri da li je korisničko ime dostupno';
$txt['registration_password_short'] = 'Lozinka je prekratka';
$txt['registration_password_reserved'] = 'Lozinka sadrži vaše korisničko ime/email';
$txt['registration_password_numbercase'] = 'Lozinka mora sadržavati oboje, velika i mala slova,  te brojeve';
$txt['registration_password_no_match'] = 'Lozinke nisu jednake';
$txt['registration_password_valid'] = 'Lozinka je ispravna';

$txt['registration_errors_occurred'] = 'Slijedeće greške su uočene u Vašoj registraciji. Molimo da ih ispravite da biste nastavili:';

$txt['authenticate_label'] = 'Metoda Autentifikacije';
$txt['authenticate_password'] = 'Lozinka';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'OpenID Autentifikacijski URL';

?>