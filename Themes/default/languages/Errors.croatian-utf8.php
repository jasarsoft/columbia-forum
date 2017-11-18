<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Pristup ovoj sekciji nije dopušten';
$txt['wireless_error_notyet'] = 'Nažalost ova sekcije u ovom trenutku nije dostupna za bežićne korisnike.';

$txt['mods_only'] = 'Samo moderatori mogu koristiti funkciju direktnog uklanjanja, molimo izbrišite poruku putem opcije Uredi.';
$txt['no_name'] = 'Niste ispunili polje za ime. Navedeno polje je obavezno.';
$txt['no_email'] = 'Niste ispunili polje za email. Navedeno polje je obavezno.';
$txt['topic_locked'] = 'Ova tema je zaključana. Nije dopušteno pisanje ili uređivanje poruka...';
$txt['no_password'] = 'Polje za lozinku je prazno';
$txt['already_a_user'] = 'Korisničko ime koje ste unijeli već postoji u bazi.';
$txt['cant_move'] = 'Nije dopušteno premještanje teme...';
$txt['login_to_post'] = 'Da biste napisali poruku trebate biti prijavljeni. Ako još nemate korisnički račun, molimo <a href="' . $scripturl . '?action=register">registrirajte se</a>.';
$txt['passwords_dont_match'] = 'Lozinke se ne podudaraju.';
$txt['register_to_use'] = 'Trebate se registrirati prije korištenja ove mogućnosti.';
$txt['password_invalid_character'] = 'Nedopušten znak upotrijebljen u lozinki.';
$txt['name_invalid_character'] = 'Nedopušten znak upotrijebljen u imenu.';
$txt['email_invalid_character'] = 'Nedopušten znak upotrijebljen u email adresi.';
$txt['username_reserved'] = 'Korisničko ime koje ste upisali je rezervirano \'%s\'. Pokušajte sa drugačijim korisničkim imenom.';
$txt['numbers_one_to_nine'] = 'Ovo polje prihvaća samo brojeve 0-9';
$txt['not_a_user'] = 'Korisnik čiji profil pokušavate pogledati ne postoji.';
$txt['not_a_topic'] = 'Tražena tema ne postoji.';
$txt['not_approved_topic'] = 'Ova tema još nije odobrena.';
$txt['email_in_use'] = 'Tu email adresu (%1$s) već koristi registrirani korisnik. Ako smatrate da je to pogrešno, posjetite login stranicu i koristite funkciju podsjetnika na lozinku pomoću te email adrese.';

$txt['didnt_select_vote'] = 'Niste izabrali za koju opciju glasate.';
$txt['poll_error'] = 'Ova anketa ili ne postoji, ili je zaključana, ili ste pokušali glasati dvaput.';
$txt['members_only'] = 'Ova usluga dostupna je samo članovima...';
$txt['locked_by_admin'] = 'Ovu temu je zaključao administrator foruma.  Nije je moguće otključati.';
$txt['not_enough_posts_karma'] = 'Žao nam je, nemate dovoljno postova da bi mogli promijeniti karmu - potrebno Vam je barem %1$d.';
$txt['cant_change_own_karma'] = 'Nije dopušteno mijenjanje vlastite karme.';
$txt['karma_wait_time'] = 'Žao nam je, ne možete ponoviti karma akciju bez da pričekate %1$s %2$s.';
$txt['feature_disabled'] = 'Žao nam je, ova mogućnost je zaključana.';
$txt['cant_access_upload_path'] = 'Nemoguće pristupiti upload putanji za privitke!';
$txt['file_too_big'] = 'Datoteka je prevelika. Maksimalna veličina privitka iznosi %d KB.';
$txt['attach_timeout'] = 'Privitak nije moguće spremiti. Ovo se dogodilo jer je proteklo previše vremena za prijenos datoteke na poslužitelj ili je datoteka prevelika za prihvat na poslužitelju.<br /><br />Molimo da konzultirate administratora ovog poslužitelja za daljnju pomoć.';
$txt['filename_exists'] = 'Žao nam je! Već postoji privitak s istim imenom datoteke. Molimo preimenujte datoteku pa pokušajte ponovo.';
$txt['bad_attachment'] = 'Vaš privitak nije prošao sigurnosnu provjeru i ne može se uploadati. Molimo konzultirajte se s administratorom.';
$txt['ran_out_of_space'] = 'Direktorij za prihvat datoteka je pun. Pokušajte sa manjom datotekom i/ili prijavite ovu grešku administratoru.';
$txt['couldnt_connect'] = 'Nije moguće se spojiti na poslužitelj ili nije moguće pronaći datoteku';
$txt['no_board'] = 'Traženi forum ne postoji';
$txt['cant_split'] = 'Niste autorizirani za razdvajanje teme';
$txt['cant_merge'] = 'Niste autorizirani za spajanje tema';
$txt['no_topic_id'] = 'Naveden je pogrešan ID teme.';
$txt['split_first_post'] = 'Nije moguće podijeliti temu nakon samo jedne poruke.';
$txt['topic_one_post'] = 'Ova tema sadrži samo jednu poruku i ne može biti podijeljena.';
$txt['no_posts_selected'] = 'Ni jedna poruka nije izabrana';
$txt['selected_all_posts'] = 'Razdvajanje nije moguće. Odabrali ste sve poruke.';
$txt['cant_find_messages'] = 'Nije moguće pronaći poruke';
$txt['cant_find_user_email'] = 'Nije mougće pronaći korisnikovu email adresu.';
$txt['cant_insert_topic'] = 'Nije moguće ubaciti temu';
$txt['already_a_mod'] = 'Izabrali ste korisničko ime jednog od moderatora. Unesite drugačije korisničko ime';
$txt['session_timeout'] = 'Vaša prijava je istekla tijekom pisanja poruke.  Vratite se nazad i pokušajte ponovno.';
$txt['session_verify_fail'] = 'Provjera sesije nije uspjela. Molimo pokušajte se odjaviti, pa ponoviti prijavu, te zatim pokušajte ponovo.';
$txt['verify_url_fail'] = 'Nije moguće provjeriti prethodni URL s kojeg ste stigli.  Vratite se nazad i pokušajte ponovno.';
$txt['guest_vote_disabled'] = 'Gosti ne mogu glasati u ovoj anketi.';

$txt['cannot_access_mod_center'] = 'Nemate dozvolu pristupa moderatorskom centru.';
$txt['cannot_admin_forum'] = 'Niste autorizirani za administraciju ovog foruma.';
$txt['cannot_announce_topic'] = 'Niste autorizirani za najavu tema u ovoj rubrici.';
$txt['cannot_approve_posts'] = 'Nemate dozvolu odobravati stavke.';
$txt['cannot_post_unapproved_attachments'] = 'Nemate dozvolu za objavu neodobrenih privitaka.';
$txt['cannot_post_unapproved_topics'] = 'Nemate dozvolu za objavu neodobrenih tema.';
$txt['cannot_post_unapproved_replies_own'] = 'Nemate dozvolu objave neodobrenih odgovora na Vašu temu.';
$txt['cannot_post_unapproved_replies_any'] = 'Nemate dozvolu objave neodobrenih odgovora na teme ostalih korisnika.';
$txt['cannot_calendar_edit_any'] = 'Niste autorizirani za uređivanje događaja u kalendaru.';
$txt['cannot_calendar_edit_own'] = 'Niste autorizirani za uređivanje vlastitih događaja.';
$txt['cannot_calendar_post'] = 'Upis događaja nije dopušten - žao nam je.';
$txt['cannot_calendar_view'] = 'Žao nam je, pregled kalendara nije dopušten.';
$txt['cannot_remove_any'] = 'Uklanjanje poruka u ovoj temi nije dozvoljeno.';
$txt['cannot_remove_own'] = 'Nije vam dopušteno, u ovoj rubrici, uklanjanje vlastitih poruka.';
$txt['cannot_edit_news'] = 'Niste autorizirani za uređivanje vijesti na ovoj rubrici.';
$txt['cannot_pm_read'] = 'Žao nam je, ne možete čitati vlastite Privatne Poruke.';
$txt['cannot_pm_send'] = 'Nije Vam dopušteno slanje Privatnih poruka.';
$txt['cannot_karma_edit'] = 'Niste autorizirani za uređivanje karme ostalih članova.';
$txt['cannot_lock_any'] = 'Niste autorizirani zaključavanje tema ovdje.';
$txt['cannot_lock_own'] = 'Žao nam je, ne možete zaključati vlastitu temu ovdje.';
$txt['cannot_make_sticky'] = 'Niste autorizirani za zalijepljivanje ove teme na vrh.';
$txt['cannot_manage_attachments'] = 'Niste autorizirani za upravljanje privicima i avatarima.';
$txt['cannot_manage_bans'] = 'Niste autorizirani za izmjenu liste isključenih.';
$txt['cannot_manage_boards'] = 'Niste autorizirani za upravljanje forumima i kategorijama.';
$txt['cannot_manage_membergroups'] = 'Niste autorizirani za upravljanje ili dodjeljivanje korisničke grupe.';
$txt['cannot_manage_permissions'] = 'Niste autorizirani za izmjenu dopuštenja.';
$txt['cannot_manage_smileys'] = 'Niste autorizirani za upravljanje smajlijima.';
$txt['cannot_mark_any_notify'] = 'Nemate dovoljno dopuštenje za primanje obavijesti iz ove teme.';
$txt['cannot_mark_notify'] = 'Žao nam je, nemate dozvolu za zahtijevanje obavijesti iz ovog foruma.';
$txt['cannot_merge_any'] = 'Niste autorizirani za spajanje tema na jednom od izabranih foruma.';
$txt['cannot_moderate_forum'] = 'Niste autorizirani za moderiranje ovog foruma.';
$txt['cannot_moderate_board'] = 'Nemate dozvolu moderirati ovaj board.';
$txt['cannot_modify_any'] = 'Niste autorizirani za uređivanje poruka.';
$txt['cannot_modify_own'] = 'Niste autorizirani za izmjenu vlastitih poruka.';
$txt['cannot_modify_replies'] = 'Premda je ova poruka odgovor u Vašoj temi, ne možete je uređivati.';
$txt['cannot_move_own'] = 'Niste autorizirani za premještanje vlastitih tema u ovoj rubrici.';
$txt['cannot_move_any'] = 'Niste autorizirani za premještanje tema u ovoj rubrici.';
$txt['cannot_poll_add_own'] = 'Niste autorizirani za dodavanje anketa u vlastitim temama u ovoj rubrici.';
$txt['cannot_poll_add_any'] = 'Nemate pristup dodavanju anketa u ovoj temi.';
$txt['cannot_poll_edit_own'] = 'Ne možete uređivati anketu, čak i ako ste je vi pokrenuli.';
$txt['cannot_poll_edit_any'] = 'Nemate pristup uređivanju anketa u ovoj rubrici.';
$txt['cannot_poll_lock_own'] = 'Niste autorizirani za zaključavanje vlastitih anketa u ovoj rubrici.';
$txt['cannot_poll_lock_any'] = 'Žao nam je, nemate dopuštenje za zaključavanje bilo koje ankete.';
$txt['cannot_poll_post'] = 'Niste autorizirani za otvaranje anketa u ovoj rubrici.';
$txt['cannot_poll_remove_own'] = 'Niste autorizirani za uklanjanje ankete iz vlastite teme.';
$txt['cannot_poll_remove_any'] = 'Niste autorizirani za uklanjanje bilo koje ankete u ovoj rubrici.';
$txt['cannot_poll_view'] = 'Niste autorizirani za pregled anketa u ovoj rubrici.';
$txt['cannot_poll_vote'] = 'Žao nam je, ne možete glasati u anketi u ovoj rubrici.';
$txt['cannot_post_attachment'] = 'Niste autorizirani za objavu privitaka ovdje.';
$txt['cannot_post_new'] = 'Žao nam je, ne možete objavljivati nove teme u ovoj rubrici.';
$txt['cannot_post_reply_any'] = 'Niste autorizirani za objavljivanje odgovora na teme u ovoj rubrici.';
$txt['cannot_post_reply_own'] = 'Niste autorizirani za pisanje odgovora čak ni u vlastitim temama u ovoj rubrici.';
$txt['cannot_profile_remove_own'] = 'Žao nam je, nije dozvoljeno brisanje vlastitog korisničkog računa.';
$txt['cannot_profile_remove_any'] = 'Niste autorizirani za uklanjanje tuđih korisničkih računa!';
$txt['cannot_profile_extra_any'] = 'Niste autorizirani za izmjenu postavki unutar profila.';
$txt['cannot_profile_identity_any'] = 'Niste autorizirani za uređivanje postavki korisničkog računa.';
$txt['cannot_profile_title_any'] = 'Niste autorizirani za uređivanje korisničkih imena ostalih korisnika.';
$txt['cannot_profile_extra_own'] = 'Žao nam je, nemate dovoljni stupanj dopuštenja za uređivanje podataka unutar vlastitog profila.';
$txt['cannot_profile_identity_own'] = 'Trenutno nije moguće mijenjanje vlastitog identiteta na forumu.';
$txt['cannot_profile_title_own'] = 'Niste autorizirani za izmjenu vlastitog korisničkog imena.';
$txt['cannot_profile_server_avatar'] = 'Nemate pravo korisiti avatare spremljene na serveru.';
$txt['cannot_profile_upload_avatar'] = 'Nemate dovoljno prava za upload avatara.';
$txt['cannot_profile_remote_avatar'] = 'Niste autorizirani za korištenje avatara koji nije smješten na ovom poslužitelju.';
$txt['cannot_profile_view_own'] = 'Žao nam je, ne možete vidjeti vlastiti profil.';
$txt['cannot_profile_view_any'] = 'Žao nam je, ne možete vidjeti tuđi profil.';
$txt['cannot_delete_own'] = 'Nije dopušteno uklanjanje vlastitih tema u ovoj rubrici.';
$txt['cannot_delete_replies'] = 'Žao nam je, ne možete ukloniti ove poruke, premda su odgovori na vašu temu.';
$txt['cannot_delete_any'] = 'Nije dopušteno premještanje/uklanjanje bilo koje teme.';
$txt['cannot_report_any'] = 'Nije dopuštena prijava poruka u ovoj rubrici.';
$txt['cannot_search_posts'] = 'Niste autorizirani za pretraživanje poruka na ovoj rubrici.';
$txt['cannot_send_mail'] = 'Niste autorizirani za slanje email poruka svima.';
$txt['cannot_issue_warning'] = 'Žao nam je, nemate dozvolu poslati upozorenje članu.';
$txt['cannot_send_topic'] = 'Žao nam je, administrator je zabranio slanje tema u ovu rubriku.';
$txt['cannot_split_any'] = 'Razdvajanje tema u ovoj rubrici nije dopušteno.';
$txt['cannot_view_attachments'] = 'Čini se da nemate dopuštenje za skidanje ili pregled privitaka u ovoj rubrici.';
$txt['cannot_view_mlist'] = 'Nije dozvoljen pregled liste članova zato jer nemate dopuštenje za to.';
$txt['cannot_view_stats'] = 'Niste autorizirani za pregled statistika foruma.';
$txt['cannot_who_view'] = 'Žao nam je, nemate odgovarajuće dopuštenje za pregled liste Tko je Online.';

$txt['no_theme'] = 'Ta tema ne postoji.';
$txt['theme_dir_wrong'] = 'Primarni direktorij za teme ne postoji, ispravite ovu grešku klikom na ovaj tekst.';
$txt['registration_disabled'] = 'Žao nam je, registracija je trenutno onemogućena.';
$txt['registration_no_secret_question'] = 'Žao nam je, ne postoji skup tajnih pitanja za ovog člana.';
$txt['poll_range_error'] = 'Anketa treba biti aktivna više od 0 dana.';
$txt['delFirstPost'] = 'Niste autorizirani za brisanje prve pouke u ovoj temi.<p>Ako želite obrisati ovu temu, kliknite na link Ukloni Temu, ili zamolite moderatora/administratora da to učini za Vas.</p>';
$txt['parent_error'] = 'Nije moguće stvoriti rubriku!';
$txt['login_cookie_error'] = 'Niste se prijavili.  Molimo, provjerite postavke kolačića u vašem pregledniku.';
$txt['incorrect_answer'] = 'Žao nam je, niste odgovorili točno na svoje tajno pitanje.  Kliknite na povratak da biste pokušali ponovno, ili kliknite nazad dva puta da pokušate sa primarnom metodom dobivanja lozinke.';
$txt['no_mods'] = 'Moderatori nisu pronađeni!';
$txt['parent_not_found'] = 'Struktura foruma je neispravna: nije moguće pronaći matični forum';
$txt['modify_post_time_passed'] = 'Ne možete urediti komentar. Vrijeme za uređivanje je isteklo.';

$txt['calendar_off'] = 'Trenutno ne možete pristupiti kalendaru jer je isključen.';
$txt['invalid_month'] = 'Pogrešna vrijednost za mjesec.';
$txt['invalid_year'] = 'Pogrešna vrijednost za godinu.';
$txt['invalid_day'] = 'Pogrešna vrijednost za dan.';
$txt['event_month_missing'] = 'Mjesec događaja nedostaje.';
$txt['event_year_missing'] = 'Godina događaja nedostaje.';
$txt['event_day_missing'] = 'Dan događaja nedostaje.';
$txt['event_title_missing'] = 'Naslov događaja nedostaje.';
$txt['invalid_date'] = 'Pogrešan datum.';
$txt['no_event_title'] = 'Nije unesen naslov događaja.';
$txt['missing_event_id'] = 'Nedostaje ID događaja.';
$txt['cant_edit_event'] = 'Niste autorizirani za uređivanje ovog događaja.';
$txt['missing_board_id'] = 'ID foruma nedostaje.';
$txt['missing_topic_id'] = 'ID teme nedostake.';
$txt['topic_doesnt_exist'] = 'Tema ne postoji.';
$txt['not_your_topic'] = 'Vi niste vlasnik ove teme.';
$txt['board_doesnt_exist'] = 'Rubrika ne postoji.';
$txt['no_span'] = 'Mogućnost rastezanja je trenutno onemogućena.';
$txt['invalid_days_numb'] = 'Neispravan broj dana kroz koje se događaj rasteže.';

$txt['moveto_noboards'] = 'Ne postoje forumi u koje bi ova tema mogla biti preseljena!';

$txt['already_activated'] = 'Vaš korisnički račun već je aktiviran.';
$txt['still_awaiting_approval'] = 'Vaš korisnički račun čeka na odobrenje od administratora.';

$txt['invalid_email'] = 'Neispravna email adresa ili raspon email adresa.<br />Primjer ispravne email adrese: alice@wonderland.com<br />Primjer ispravnog raspona email adresa: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'Datum isteka nije ispravan';
$txt['invalid_hostname'] = 'Pogrešno ime hosta / raspon hostova.<br />Primjer ispravnog imena hosta: proxy4.badhost.com<br />Primjer ispravnog raspona hostova: *.badhost.com';
$txt['invalid_ip'] = 'Pogrešan IP ili IP raspon.<br />Primjer ispravne IP adrese: 127.0.0.1<br />Primjer ispravnog IP raspona: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Pogrešan IP / IP raspon.<br />Primjer ispravne IP adrese: 127.0.0.1<br />Primjer ispravnog IP raspona: 127.0.0.*';
$txt['invalid_username'] = 'Ime člana nije pronađeno';
$txt['no_ban_admin'] = 'Ne možete izbacivati administratore - Prvo im trebate ukloniti status administratora!';
$txt['no_bantype_selected'] = 'Nije izabran tip izbacivanja';
$txt['ban_not_found'] = 'Izbacivanje nije pronađeno';
$txt['ban_unknown_restriction_type'] = 'Tip zabrane nepoznat';
$txt['ban_name_empty'] = 'Ime zabrane niste popunili';
$txt['ban_name_exists'] = 'Ime ove zabrane (%1$s) već postoji. Molimo odaberite drugo ime.';
$txt['ban_trigger_already_exists'] = 'Aktivator ove zabrane (%1$s) već postoji u %2$s.';

$txt['recycle_no_valid_board'] = 'Nije izabrana važeća rubrika za arhiviranje tema';

$txt['login_threshold_fail'] = 'Žao nam je, prekoračili ste broj pokušaja prijave.  Vratite se kasnije i pokušajte ponovno.';
$txt['login_threshold_brute_fail'] = 'Žao nam je, dostigli ste ograničenje pokušaja neispravne prijave.  Molimo pričekate 30 sekundi pa pokušajte ponovo.';

$txt['who_off'] = 'Trenutno ne možete pristupiti listi Tko je Online jer je onemogućena.';

$txt['merge_create_topic_failed'] = 'Greška pri otvaranju nove teme.';
$txt['merge_need_more_topics'] = 'Spajanje tema zahtijeva barem dvije teme.';

$txt['postWaitTime_broken'] = 'Posljednja objava s Vaše IP adrese je prije manje od %1$d sekundi. Molimo pokušajte kasnije.';
$txt['registerWaitTime_broken'] = 'Već ste se registrirali prije %d sekundi!';
$txt['loginWaitTime_broken'] = 'Trebate pričekati otprilike %d sekundi za pokušaj ponovne prijave.';
$txt['pmWaitTime_broken'] = 'Posljednja privatna poruka s Vaše IP adrese bila je prije manje od %1$d sekundi. Molimo pokušajte kasnije.';
$txt['reporttmWaitTime_broken'] = 'Posljednja prijava teme s Vaše IP adrese bila je prije manje od %1$d sekundi. Molimo pokušajte kasnije.';
$txt['sendtopcWaitTime_broken'] = 'Posljednja tema poslana s Vaše IP adrese bila je prije manje od %1$d sekundi. Molimo pokušajte kasnije.';
$txt['sendmailWaitTime_broken'] = 'Posljednji email poslan s Vaše IP adrese bila je prije manje od %1$d sekundi. Molimo pokušajte kasnije.';
$txt['searchWaitTime_broken'] = 'Vaše posljednje pretraživanje bilo je prije %d sekundi. Molimo pokušajte kasnije.';

$txt['email_missing_data'] = 'Morate popuniti oba polja, predmet i poruku.';

$txt['topic_gone'] = 'Tema ili forum koji ste tražili, čini se, ne postoji ili ima ograničenje pristupa.';
$txt['theme_edit_missing'] = 'Datoteka koju pokušavate urediti... čak niti ne može biti pronađena!';

$txt['attachments_no_write'] = 'Nije moguće spremati u direktorij za privitke.  Vaš privitak ili avatar ne može biti spremljen.';
$txt['attachments_limit_per_post'] = 'Ne možete dodati više od %d privitaka po postu';

$txt['no_dump_database'] = 'Samo administratori mogu spremati bazu podataka!';
$txt['pm_not_yours'] = 'Privatna poruka koju pokušavate citirati nije vaša ili ne postoji, molimo, vratite se nazad i pokušajte ponovno.';
$txt['mangled_post'] = 'Neispravni podatci u obrascu - vratite se nazad i pokušajte ponovno.';
$txt['quoted_post_deleted'] = 'Post koji pokušavate citirati je izbrisan, ne postoji ili vama više nije dostupan.';
$txt['pm_too_many_per_hour'] = 'Prešli ste dozvoljenu granicu od %1$d privatnih poruka na sat.';
$txt['labels_too_many'] = 'Žao nam je, %1$s poruka već sadrži maksimalan dozvoljeni broj oznaka!';

$txt['register_only_once'] = 'Žao nam je, možete imati samo jedan korisnički račun.';
$txt['admin_setting_coppa_require_contact'] = 'Morate unijeti ili poštansku adresu ili fax broj roditelja/skrbnika za odobrenje.';

$txt['error_long_name'] = 'Ime koje ste pokušali koristiti je predugačko.';
$txt['error_no_name'] = 'Nije uneseno ime.';
$txt['error_bad_name'] = 'Ime koje ste poslali se ne može koristiti jer je rezervirano.';
$txt['error_no_email'] = 'Nije unesena email adresa.';
$txt['error_bad_email'] = 'Unesena je neispravna email adresa.';
$txt['error_no_event'] = 'Nije unesen naziv događaja.';
$txt['error_no_subject'] = 'Nije unesen naslov.';
$txt['error_no_question'] = 'Nije uneseno pitanje za ovu anketu.';
$txt['error_no_message'] = 'Nije unesena poruka.';
$txt['error_long_message'] = 'Poruka nadilazi dozvoljeni maksimum od (%s znakova).';
$txt['error_no_comment'] = 'Polje komentara je ostalo prazno.';
$txt['error_session_timeout'] = 'Vaša prijava je istekla. Pokušajte ponoviti slanje poruke.';
$txt['error_no_to'] = 'Nisu navedeni primatelji.';
$txt['error_bad_to'] = 'Jedan ili više \'to\'- primatelja nije pronađen.';
$txt['error_bad_bcc'] = 'Jedan il više \'bcc\'- primatelja nije pronađen.';
$txt['error_form_already_submitted'] = 'Već ste poslali ovu poruku!  Možda ste slučajno kliknuli dva puta ili pokušali osvježiti stranicu.';
$txt['error_poll_few'] = 'Anketa mora imati bar dvije opcije!';
$txt['error_need_qr_verification'] = 'Molimo završite verifikaciju kako biste završili post.';
$txt['error_wrong_verification_code'] = 'Slova koja ste upisali ne poklapaju se sa slovima koju su pokazana na slici.';
$txt['error_wrong_verification_answer'] = 'Niste ispravno odgovorili na verifikacijsko pitanje.';
$txt['error_need_verification_code'] = 'Molimo, unesite verifikacijski kod ispod, kako biste nastavili do rezultata.';
$txt['error_bad_file'] = 'Žao nam je, ali datoteka koju ste odabrali ne može biti otvorena: %1$s';
$txt['error_bad_line'] = 'Linija koju ste naveli je neispravna.';

$txt['smiley_not_found'] = 'Smajli nije pronađen.';
$txt['smiley_has_no_code'] = 'Nije unesen -kod- za ovaj smajli.';
$txt['smiley_has_no_filename'] = 'Nije unesena datoteka za ovaj smajli.';
$txt['smiley_not_unique'] = 'Smajli sa ovim -kodom- već postoji.';
$txt['smiley_set_already_exists'] = 'Grupa smajlija sa referentnim URL-om već postoji';
$txt['smiley_set_not_found'] = 'Grupa smajlija nije pronađena';
$txt['smiley_set_path_already_used'] = 'URL ove grupe smajlija se već koristi.';
$txt['smiley_set_unable_to_import'] = 'Nije moguće uvesti grupu smajlija. Ili je direktorij pogrešan ili nije dostupan.';

$txt['smileys_upload_error'] = 'Prijenos datoteke nije uspio.';
$txt['smileys_upload_error_blank'] = 'Sve grupe smajlija moraju imati sliku!';
$txt['smileys_upload_error_name'] = 'Svi smajliji trebaju imati isti naziv datoteke!';
$txt['smileys_upload_error_illegal'] = 'Nedopušteni tip.';

$txt['search_invalid_weights'] = 'Težine pretraživanja nisu ispravno konfigurirane. Barem jedna težina mora biti postavljena na različito od nule. Molimo prijavite ovu grešku administratoru.';
$txt['unable_to_create_temporary'] = 'Tražilica nije uspjela kreirati privremene tablice. Molimo prijavite ovu grešku administratoru.';

$txt['package_no_file'] = 'Nije moguće pronaći paket datoteka!';
$txt['packageget_unable'] = 'Vezu sa poslužiteljem nije moguće uspostaviti.  Umjesto toga, pokušajte upotrijebiti <a href="%s" target="_blank">ovu adresu</a>.';
$txt['not_on_simplemachines'] = 'Žao name je, na ovaj način se paketi mogu dohvatiti samo sa poslužitelja simplemachines.org.';
$txt['package_cant_uninstall'] = 'Ovaj paket ili nije bio instaliran ili je uklonjen već prije - ne možete ga ukloniti sada.';
$txt['package_cant_download'] = 'Ne možete skinuti ili instalirati nove pakete jer upis u direktorij za pakete nije dozvoljen!';
$txt['package_upload_error_nofile'] = 'Niste odabrali paket za upload.';
$txt['package_upload_error_failed'] = 'Upload nije moguć, molimo provjerite dozvole direktorija za upload!';
$txt['package_upload_error_exists'] = 'Datoteka koju pokušavate prenijeti na poslužitelj već postoji. Molimo da navedenu prvo obrišete, a potom pokušate ponovno.';
$txt['package_upload_error_supports'] = 'Upravitelj paketima trenutno dozvoljava samo ove tipove datoteka: %1$s.';
$txt['package_upload_error_broken'] = 'Upload paketa nije uspio zbog sljedeće greške:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'Paket koji pokušavate instalirati ne mogu pronaći. Morat ćete ručno uploadati paket u svoj direktorij za pakete na serveru.';
$txt['package_get_error_missing_xml'] = 'U paketu koji pokušavate instalirati nedostaje package-info.xml koji mora biti u korijenskom direktoriju paketa.';
$txt['package_get_error_is_zero'] = 'Iako je paket skinut na server, izgleda da je prazan. Provjerite da li je za direktorij za pakete, te &quot;temp&quot; poddirektorij omogućeno zapisivanje. Ako i dalje budete imali ovaj problem pokušajte raspakirati paket na Vašem računalu i uploadati raspakirane datoteke u poddirektorij u direktoriju za pakete Vašeg foruma, te pokušati ponovo. Npr. ako se paket zove shout.tar.gz potrebno je:<br />1) Preuzeti paket na Vaše računalo i raspakirati datoteke.<br />2) Koristeći FTP klijent izradite novi direktorij u Vašem &quot;Packages&quot; direktoriju, u ovom primjeru nazvali biste ga "shout".<br />3) Uploadajte sve datoteke iz raspakiranog paketa u taj poddirektorij.<br />4) Vratite se u Upravitelj paketima i SMF će automatski prepoznati paket.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF nije uspio pronaći ispravne informacije unutar package-info.xml datoteke uključene u paket. Možda postoji greška u modifikaciji, ili je paket neispravan.';

$txt['no_membergroup_selected'] = 'Nije izabrana korisnička grupa';
$txt['membergroup_does_not_exist'] = 'Korisnička grupa ne postoji ili je neispravna.';

$txt['at_least_one_admin'] = 'Mora postojati najmanje jedan administrator na forumu&nbsp;!';

$txt['error_functionality_not_windows'] = 'Žao nam je, ova funkcionalnost trenutno nije dostupna na Windows serverima.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Privitak nije pronađen';

$txt['error_no_boards_selected'] = 'Nije odabran niti jedan valjani forum&nbsp;!';
$txt['error_invalid_search_string'] = 'Jeste li zaboravili upisati što tražite&nbsp;?';
$txt['error_invalid_search_string_blacklist'] = 'Vaše upit za pretraživanje sadrži preopćenite riječi. Pokušajte s drugačijim upitom.';
$txt['error_search_string_small_words'] = 'Svaka riječ mora biti barem duga dva znaka.';
$txt['error_query_not_specific_enough'] = 'Vaše pretraživanje nije vratilo ni jedan rezultat.';
$txt['error_no_messages_in_time_frame'] = 'Nije pronađena ni jedna poruka u zadanom vremenskom intervalu.';
$txt['error_no_labels_selected'] = 'Ni jedna oznaka nije odabrana!';
$txt['error_no_search_daemon'] = 'Nije moguće pristupiti daemonu za pretraživanje';

$txt['profile_errors_occurred'] = 'Sljedeće greške su se pojavile pri pokušaju spremanja profila';
$txt['profile_error_bad_offset'] = 'Vremenska razlika je neispravna';
$txt['profile_error_no_name'] = 'Korisničko ime je ostalo prazno';
$txt['profile_error_name_taken'] = 'Korisničko ime je već zauzeto';
$txt['profile_error_name_too_long'] = 'Odabrano ime je predugo. Ne bi smjelo biti dulje od 60 znakova';
$txt['profile_error_no_email'] = 'Polje za email je ostalo prazno';
$txt['profile_error_bad_email'] = 'Niste unijeli ispravnu email adresu';
$txt['profile_error_email_taken'] = 'Već je registriran korisnik s tom email adresom';
$txt['profile_error_no_password'] = 'Niste upisali lozinku';
$txt['profile_error_bad_new_password'] = 'Nove lozinke koje ste upisali se ne podudaraju';
$txt['profile_error_bad_password'] = 'Lozinka koju ste upisali je neispravna';
$txt['profile_error_bad_avatar'] = 'Avatar koji ste odabrali je prevelik ili nije avatar';
$txt['profile_error_password_short'] = 'Lozinka se mora sastojati od najmanje ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' znakova.';
$txt['profile_error_password_restricted_words'] = 'Lozinka ne može sadržavati vaše ime, email adresu ili lako predvidljivu riječ.';
$txt['profile_error_password_chars'] = 'Lozinka mora biti kombinacija malih slova, velikih slova i brojeva.';
$txt['profile_error_already_requested_group'] = 'Već imate otvoren zahtjev za ovu grupu!';
$txt['profile_error_openid_in_use'] = 'Drugi korisnik već koristi taj OpenID autentifikacijski URL';

$txt['mysql_error_space'] = ' - provjerite veličinu baze podataka ili kontaktirajte administratora servera.';

$txt['icon_not_found'] = 'Ikona poruke nije pronađena u primarnoj temi - provjerite da li je slika stvarno uploadana i pokušajte ponovo.';
$txt['icon_after_itself'] = 'Ikona ne može biti iza sebe&nbsp;!';
$txt['icon_name_too_long'] = 'Imena ikona nije moguće biti dulja od 16 znakova';

$txt['name_censored'] = 'Nažalost, odabrano ime, %s, sadrži nedopuštene riječi.  Molimo da unesete drugo ime.';

$txt['poll_already_exists'] = 'Tema može sadržavati samo jednu anketu&nbsp;!';
$txt['poll_not_found'] = 'Nema anketa u ovoj temi&nbsp;!';

$txt['error_while_adding_poll'] = 'Sljedeće greške su se pojavile pri dodavanju ove ankete';
$txt['error_while_editing_poll'] = 'Sljedeće greške su se pojavile pri uređivanju ankete';

$txt['loadavg_search_disabled'] = 'Kao posljedica velikog opterećenja servera, funkcija traženja je automatski privremeno isključena.  Molimo Vas da ponovo pokušate nešto kasnije.';
$txt['loadavg_generic_disabled'] = 'Žao nam je, zbog velikog opterećenja servera, ova funkcija je trenutno nedostupna.';
$txt['loadavg_allunread_disabled'] = 'Serverski resursi su trenutno preopterećeni da bi mogli pronaći sve nepročitane teme za Vas.';
$txt['loadavg_unreadreplies_disabled'] = 'Server je trenutno vrlo opterećen.  Molimo Vas da ponovo pokušate nešto kasnije.';
$txt['loadavg_show_posts_disabled'] = 'Molimo Vas da pokušate kasnije.  Postovi ovog člana trenutno nisu dostupni zbog visokog opterećenja servera.';
$txt['loadavg_unread_disabled'] = 'Serverski resursi su privremeno pod prevelikim opterećenjem da bi izlistali teme koje niste pročitali.';

$txt['cannot_edit_permissions_inherited'] = 'Ne možete direktno uređivati naslijeđene dozvole, ili morate urediti nadređenu grupu ili uredite nasljeđivanje grupe članova.';

$txt['mc_no_modreport_specified'] = 'Trebate odabrati koji izvještaj želite prikazati.';
$txt['mc_no_modreport_found'] = 'Odabrani prikaz ne postoji ili je van Vaših dozvola za pregled';

$txt['st_cannot_retrieve_file'] = 'Nije moguće učitati datoteku %1$s.';
$txt['admin_file_not_found'] = 'Nije moguće učitati traženu datoteku: %1$s.';

$txt['themes_none_selectable'] = 'Barem jednu temu mora biti moguće odabrati.';
$txt['themes_default_selectable'] = 'Osnovna tema cijelog foruma mora biti odabiriva tema.';
$txt['ignoreboards_disallowed'] = 'Opcija ignoriranja rubrika nije omogućena.';

$txt['mboards_delete_error'] = 'Ni jedna kategorija nije odabrana!';
$txt['mboards_delete_board_error'] = 'Ni jedna rubruka nije odabrana!';

$txt['mboards_parent_own_child_error'] = 'Nemoguće je napraviti glavnu grupu vlastitom podgrupom!';
$txt['mboards_board_own_child_error'] = 'Nemoguće je napraviti grupu vlastitiom podgrupom!';

$txt['smileys_upload_error_notwritable'] = 'Sljedeći Smajli direktoriji nisu omogućeni za pisanje: %1$s';
$txt['smileys_upload_error_types'] = 'Slika može imati samo sljedeće ekstenzije: %1$s.';

$txt['change_email_success'] = 'Vaša email adresa je promjenjena, te Vam je na nju poslan aktivacijski email.';
$txt['resend_email_success'] = 'Novi aktivacijski email je uspješno poslan.';

$txt['custom_option_need_name'] = 'Opcija profila mora imati ime!';
$txt['custom_option_not_unique'] = 'Ime polja nije jedinstveno!';

$txt['warning_no_reason'] = 'Morate unijeti razlog za za izmjenu stanja upozorenja korisnika.';
$txt['warning_notify_blank'] = 'Odabrali ste obavještavanje korisnika ali niste ispunili predmet/poruka polja.';

$txt['cannot_connect_doc_site'] = 'Nije moguće spajanje na Simple Machines Online Priručnik. Molimo provjerite da li konfiguracija Vašeg servera dozvoljava vanjske internet konekcije i kasnije pokušajte ponovo.';

$txt['movetopic_no_reason'] = 'Morate unijeti razlog za premještanje teme, ili uklonite oznaku s opcije \'objavi temu za preusmjerenje\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'Traženi identifikator nije vratio ispravnu informaciju.';
$txt['openid_return_no_mode'] = 'Pružatelj identiteta nije odgovorio sa Open ID modom.';
$txt['openid_not_resolved'] = 'Pružatelj identiteta nije potvrdio Vaš zahtjev.';
$txt['openid_no_assoc'] = 'Nije moguće pronaći traženu asocijaciju s pružateljem identiteta.';
$txt['openid_sig_invalid'] = 'Potpis od strane pružatelja identiteta nije ispravan.';
$txt['openid_load_data'] = 'Nije moguće učitati podatke iz Vašeg zahtjeva za prijavu.  Molimo da pokušate ponovo.';
$txt['openid_not_verified'] = 'Unesena OpenID adresa nije još potvrđena	.  Molimo da se ulogirate za verifikaciju.';

$txt['error_custom_field_too_long'] = 'Polje &quot;%1$s&quot; ne može biti dulje od %2$d znakova.';
$txt['error_custom_field_invalid_email'] = 'Polje &quot;%1$s&quot; mora biti ispravna email adresa.';
$txt['error_custom_field_not_number'] = 'Polje &quot;%1$s&quot; mora biti numeričko.';
$txt['error_custom_field_inproper_format'] = 'Polje &quot;%1$s&quot; ima neispravan format.';
$txt['error_custom_field_empty'] = 'Polje &quot;%1$s&quot; ne može biti ostavljeno prazno.';

$txt['email_no_template'] = 'Email predložak &quot;%1$s&quot; nije pronađen.';

$txt['search_api_missing'] = 'API za pretraživanje nije moguće pronaći! Molimo kontaktirajte administratora da provjeri jesu li uploadane ispravne datoteke.';
$txt['search_api_not_compatible'] = 'Odabrani API za pretraživanje koji forum koristi je zastario - prebacujem se natrag na standardno pretraživanje. Molimo provjerite datoteku %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Ne možete vratiti prvi post u temi.';
$txt['parent_topic_missing'] = 'Nadređena tema posta koji želite vratiti je izbrisana.';
$txt['restored_disabled'] = 'Vraćanje tema je onemogućeno.';
$txt['restore_not_found'] = 'Sljedeće poruke ne mogu se vratiti; originalna tema je možda uklonjena:<ul style="margin-top: 0px;">%1$s</ul>Morat ćete ih ručno premjestiti.';

$txt['error_invalid_dir'] = 'Unešeni direktorij nije ispravan.';

$txt['error_sqlite_optimizing'] = 'Sqlite optimizira bazu, forumu nije moguće pristupiti dok ne završi.  Molimo da pokušate osvježiti ovu stranicu.';

?>