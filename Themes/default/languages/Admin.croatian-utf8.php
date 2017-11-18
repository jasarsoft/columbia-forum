<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Forumske Rubrike';
$txt['admin_users'] = 'Korisnici';
$txt['admin_newsletters'] = 'Slanje E-maila';
$txt['admin_edit_news'] = 'Novosti';
$txt['admin_groups'] = 'Uređivanje Grupa';
$txt['admin_members'] = 'Svi korisnici';
$txt['admin_members_list'] = 'Ispod je popis svih korisnika koji su registrirani na ovom forumu.';
$txt['admin_next'] = 'Dalje';
$txt['admin_censored_words'] = 'Cenzurirane Riječi';
$txt['admin_censored_where'] = 'Riječ koju planirate cenzurirati stavite lijevo, a riječ u koju mislite promijeniti cenzuriranu riječ desno.';
$txt['admin_censored_desc'] = 'Zbog prirode javnih foruma možda postoje riječi koje želite zabraniti da se prikazuju na ovom forumu. Ispod možete unijeti bilo koju riječ koju želite cenzurirati.<br />Ostavite prazno da uklonite riječ';
$txt['admin_reserved_names'] = 'Rezervirana Imena';
$txt['admin_template_edit'] = 'Promijenite predloške foruma';
$txt['admin_modifications'] = 'Postavke Modifikacija';
$txt['admin_security_moderation'] = 'Sigurnost i Moderacija';
$txt['admin_server_settings'] = 'Postavke poslužitelja';
$txt['admin_reserved_set'] = 'Rezervirana Imena';
$txt['admin_reserved_line'] = 'Jedno rezervirano ime po retku.';
$txt['admin_basic_settings'] = 'Ova stranica vam omogućava uređivanje osnovnih postavki foruma.  Budite oprezni s ovim postavkama, jer one mogu uzrokovati probleme u funkcioniranju foruma.';
$txt['admin_maintain'] = 'Staviti u Mod za Održavanje?';
$txt['admin_title'] = 'Naziv foruma';
$txt['admin_url'] = 'URL foruma';
$txt['cookie_name'] = 'Naziv Cookie-a';
$txt['admin_webmaster_email'] = 'E-mail adresa webmastera';
$txt['boarddir'] = 'SMF Direktorij';
$txt['sourcesdir'] = 'Sources Direktorij';
$txt['cachedir'] = 'Cache direktorij';
$txt['admin_news'] = 'Omogućiti novosti?';
$txt['admin_guest_post'] = 'Omogućiti gostima pisanje poruka?';
$txt['admin_manage_members'] = 'Korisnici';
$txt['admin_main'] = 'Postavke';
$txt['admin_config'] = 'Konfiguracija';
$txt['admin_version_check'] = 'Detaljna provjera verzije';
$txt['admin_smffile'] = 'SMF datoteka';
$txt['admin_smfpackage'] = 'SMF paket';
$txt['admin_maintenance'] = 'Održavanje';
$txt['admin_image_text'] = 'Prikazati dugmad kao slike, a ne kao tekst';
$txt['admin_credits'] = 'Zasluge';
$txt['admin_agreement'] = 'Prikazati i zatražiti prihvaćanja Ugovora kod registracije';
$txt['admin_agreement_default'] = 'Standardno';
$txt['admin_agreement_select_language'] = 'Jezik za uređivanje';
$txt['admin_agreement_select_language_change'] = 'Izmijeni';
$txt['admin_delete_members'] = 'Izbrisati označene članove';
$txt['admin_repair'] = 'Popraviti sve rubrike i teme';
$txt['admin_main_welcome'] = 'Ovo je vaša &quot;%s&quot;. Odavde možete mijenjati postavke, održavati forum, pregledavati logove, instalirati pakete, uređivati teme, i mnogo drugih stvari.<div style="margin-top: 1ex;">Ukoliko naiđete na probleme, potražite rješenje na &quot;SimpleMachines&quot; forumu. Ako vam tamo dostupne informacije ne pomognu, slobodno <a href="http://www.simplemachines.org/community/index.php" target="_blank">pitajte nas za pomoć</a>.</div>Odgovore na vaša pitanja ili probleme također možete naći ako kliknete <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%s" title="%s" border="0" /> simbol za više informacija o funkciji na koju se taj simbol odnosi.';
$txt['admin_news_desc'] = 'Unesite jednu novost po polju. BBC tagovi, kao npr. <span title="Jesi li podebljan?">[b]</span>, <span title="Ukošeno!!">[i]</span> i <span title="Podcrtano je bitno, ne?">[u]</span> su dozvoljeni u vašim vijestima, baš kao i smajlići i HTML kod. Očistite polje za novosti ako ovo više ne želite vidjeti.';
$txt['administrators'] = 'Administratori';
$txt['admin_reserved_desc'] = 'Članovi neće moći koristiti rezervirana imena kao korisnička imena ili imena koja se prikazuju. Prije potvrđivanja odaberite opciju koju želite koristiti.';
$txt['admin_activation_email'] = 'Poslati email za aktivaciju novom članu nakon registracije?';
$txt['admin_match_whole'] = 'Podudaranje samo u cijelim imenima. Ako je neoznačeno, traži i unutar imena.';
$txt['admin_match_case'] = 'Podudaranje u velikim i malim slovima. Ako je neoznačeno, traženje se neće obazirati na velika i mala slova.';
$txt['admin_check_user'] = 'Provjeriti korisničko ime.';
$txt['admin_check_display'] = 'Provjeriti imena koja se prikazuju.';
$txt['admin_newsletter_send'] = 'Možete poslati email bilo kome s ove stranice. E-mail adrese označenih Grupa članova bi se trebale pojaviti ispod, ali email adrese možete naknadno dodati ili/i maknuti. Svaka adresa treba biti razdvojena na ovaj način: \'adresa1; adresa2\'.';
$txt['admin_fader_delay'] = 'Vrijeme u milisekundama za prikazivanje svake stavke u novostima';
$txt['admin_bbc'] = 'Prikazati BBC tipke kod pisanja postova ili slanja privatnih poruka?';

$txt['admin_backup_fail'] = 'Neuspješno spremanje sigurnosne kopije Settings.php-a - uvjerite se da Settings_bak.php postoji i da se u njega može zapisivati.';
$txt['modSettings_info'] = 'Uređivanje najvažnijih postavki i opcija koje kontroliraju rad ovog foruma.';
$txt['database_server'] = 'Poslužitelj na kojemu je baza podataka:';
$txt['database_user'] = 'Korisničko ime baze podataka:';
$txt['database_password'] = 'Lozinka baze podataka';
$txt['database_name'] = 'Naziv baze podataka';
$txt['registration_agreement'] = 'Registracijski Ugovor';
$txt['registration_agreement_desc'] = 'Ovaj ugovor se prikazuje pri registraciji i mora biti prihvaćen prije nego što korisnik nastavi registraciju.';
$txt['database_prefix'] = 'Prefiks tablica baze';
$txt['errors_list'] = 'Lista forumskih grešaka';
$txt['errors_found'] = 'Sljedeće greške su pronađene na ovom forumu';
$txt['errors_fix'] = 'Želite li popraviti ove greške?';
$txt['errors_do_recount'] = 'Sve greške su ispravljene - izrađeno je područje za spašavanje! Molimo kliknite tipku ispod da biste reobračunali ključne statistike.';
$txt['errors_recount_now'] = 'Rekalkulacija statistika';
$txt['errors_fixing'] = 'Popravljanje forumskih grešaka.';
$txt['errors_fixed'] = 'Sve greške su popravljene! Pogledajte napravljene kategorije, forume, ili teme pa odlučite što ćete s njima.';
$txt['attachments_avatars'] = 'Upravljanje Privitcima';
$txt['attachments_desc'] = 'Odavde možete upravljati svim privitcima koji se nalaze na ovom forumu. Možete brisati privitke po veličini i po datumu. Statistika vezana uz privitke je također prikazana ispod.';
$txt['attachment_stats'] = 'Statistika privitaka';
$txt['attachment_integrity_check'] = 'Provjera integriteta privitaka';
$txt['attachment_integrity_check_desc'] = 'Ova funkcija će provjeriti integritet i veličine privitaka i imena datoteka upisane u bazi i, ako je potrebno, ispraviti pogreške koje pronađe.';
$txt['attachment_check_now'] = 'Pokreni provjeru odmah';
$txt['attachment_pruning'] = 'Čišćenje privitaka';
$txt['attachment_pruning_message'] = 'Poruka za dodavanje u post';
$txt['attachment_pruning_warning'] = 'Jeste li sigurni da želite izbrisati ove privitke?\\nTo se ne može kasnije poništiti!';
$txt['attachment_total'] = 'Ukupno privitaka';
$txt['attachmentdir_size'] = 'Ukupna veličina direktorija za privitke';
$txt['attachmentdir_size_current'] = 'Ukupna trenutna veličina mape s privitcima';
$txt['attachment_space'] = 'Preostali slobodan prostor u direktoriju za privitke';
$txt['attachment_space_current'] = 'Ukupno dostupno prostora u mapi sa privitcima';
$txt['attachment_options'] = 'Postavke Privitaka';
$txt['attachment_log'] = 'Evidencija privitaka';
$txt['attachment_remove_old'] = 'Ukloni privitke starije od';
$txt['attachment_remove_size'] = 'Ukloni privitke veće od';
$txt['attachment_name'] = 'Naziv privitka';
$txt['attachment_file_size'] = 'Veličina datoteke';
$txt['attachmentdir_size_not_set'] = 'Maksimalna veličina direktorija trenutno nije postavljena';
$txt['attachment_delete_admin'] = '[privitak je izbrisao admin]';
$txt['live'] = 'Uživo sa Simple Machinesa...';
$txt['remove_all'] = 'Ukloni sve';
$txt['approve_new_members'] = 'Administratori moraju odobriti sve nove članove';
$txt['agreement_not_writable'] = 'Upozorenje - u agreement.txt nije moguće pisati, promjene koje napravite NEĆE biti spremljene.';

$txt['version_check_desc'] = 'Ovo prikazuje usporedbu verzija vaših instalacijskih datoteka i zadnjih izašlih verzija. Ako je bilo koja datoteka stare verzije, trebali biste preuzeti i instalirati najnoviju verziju s <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(detaljnije)';

$txt['lfyi'] = 'Neuspješno spajanje sa simplemachines.org datotekom sa zadnjim novostima.';

$txt['manage_calendar'] = 'Kalendar';
$txt['manage_search'] = 'Pretraživanje';

$txt['smileys_manage'] = 'Postavke Smajlija';
$txt['smileys_manage_info'] = 'Upravljanje smajlijima i ikonama poruka.';
$txt['package_info'] = 'Dodavanje novih mogućnosti ili promjena postojećih.';
$txt['theme_admin'] = 'Izgled Foruma';
$txt['theme_admin_info'] = 'Upravljanje temama i podešavanje opcija koje određuju izgled foruma.';
$txt['registration_center'] = 'Postavke Registracije';
$txt['member_center_info'] = 'Pregledajte listu korisnika, tražite korisnike i uređujte još neodobrene korisnike i korisnike koji još nisu aktivirali svoj račun.';

$txt['viewmembers_name'] = 'Korisničko ime (ime koje se prikazuje)';
$txt['viewmembers_online'] = 'Aktivnost';
$txt['viewmembers_today'] = 'Danas';
$txt['viewmembers_day_ago'] = 'jučer';
$txt['viewmembers_days_ago'] = 'dana prije';

$txt['display_name'] = 'Vidljivo Ime';
$txt['email_address'] = 'Email Adresa';
$txt['ip_address'] = 'IP adresa';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'nepoznato';
$txt['security_wrong'] = 'Pokušaj administratorske prijave!' . "\n" . 'Pokazatelj: %1$s' . "\n" . 'Korisnikov agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Slanje u HTML formatu.  (s ovim možete staviti običan HTML u ovaj email.)';
$txt['email_parsed_html'] = 'Dodaj lt;br /&gt; i &amp;nbsp; ovoj poruci.';
$txt['email_variables'] = 'U ovoj poruci možete koristiti par &quot;varijabli&quot;.  Kliknite <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">ovdje</a> za više informacija.';
$txt['email_force'] = 'Pošalji ovo članovima iako su oni odabrali da ne primaju obavijesti.';
$txt['email_as_pms'] = 'Pošalji ovo ovim grupama koristeći privatne poruke.';
$txt['email_continue'] = 'Nastaviti';
$txt['email_done'] = 'kraj.';

$txt['ban_title'] = 'Popis zabrana';
$txt['ban_ip'] = 'IP zabrane: (npr. 192.168.12.213 or 128.0.*.*) - jedan upis po retku';
$txt['ban_email'] = 'Email zabrane: (npr. badguy@somewhere.com) - jedan upis po retku';
$txt['ban_username'] = 'Zabrana korisničkog imena: (npr. l33tuser) - jedan upis po retku';

$txt['ban_description'] = 'Ovdje možete zabraniti neke problematične ljude po njihovom IP, hostname, korisničkom imenu ili emailu.';
$txt['ban_add_new'] = 'Dodaj novu zabranu';
$txt['ban_banned_entity'] = 'Zabranjeni identitet';
$txt['ban_on_ip'] = 'Zabrana za (npr. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Zabrana za Hostname (npr. *.mil)';
$txt['ban_on_email'] = 'Zabrana za Email Adresu (npr. *@badsite.com)';
$txt['ban_on_username'] = 'Zabrana za korisničko ime';
$txt['ban_notes'] = 'Zabilješke';
$txt['ban_restriction'] = 'Ograničenje';
$txt['ban_full_ban'] = 'Potpuna zabrana';
$txt['ban_partial_ban'] = 'Djelomična zabrana';
$txt['ban_cannot_post'] = 'Ne može pisati';
$txt['ban_cannot_register'] = 'Ne može se registrirati';
$txt['ban_cannot_login'] = 'Ne može se prijaviti';
$txt['ban_add'] = 'Dodaj';
$txt['ban_edit_list'] = 'Lista zabrana';
$txt['ban_type'] = 'Vrsta zabrane';
$txt['ban_days'] = 'dan(a)';
$txt['ban_will_expire_within'] = 'Zabrana će završiti nakon';
$txt['ban_added'] = 'Dodano';
$txt['ban_expires'] = 'Završava';
$txt['ban_hits'] = 'Posjeta';
$txt['ban_actions'] = 'Akcije';
$txt['ban_expiration'] = 'Završava';
$txt['ban_reason_desc'] = 'Razlog za zabranu koji će se prikazati članu sa zabranom.';
$txt['ban_notes_desc'] = 'Napomene koje mogu pomoći drugom administrativnom osoblju.';
$txt['ban_remove_selected'] = 'Izbriši odabrano';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Sigurni ste da želite izbrisati odabrane zabrane?';
$txt['ban_modify'] = 'Uredi';
$txt['ban_name'] = 'Naziv zabrane';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Uredi zabranu';
$txt['ban_add_notes'] = '<b>Napomena</b>: nakon što kreirate gornju zabranu, možete dodati razloge koji aktiviraju zabranu kao što su IP adrese, hostname i email adrese.';
$txt['ban_expired'] = 'Završeno / isključeno';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Nije izabrano niti jedno ograničenje.';

$txt['ban_triggers'] = 'Aktivatori';
$txt['ban_add_trigger'] = 'Dodaj aktivator zabrane';
$txt['ban_add_trigger_submit'] = 'Dodaj';
$txt['ban_edit_trigger'] = 'Uredi';
$txt['ban_edit_trigger_title'] = 'Uredi aktivator zabrane';
$txt['ban_edit_trigger_submit'] = 'Uredi';
$txt['ban_remove_selected_triggers'] = 'Izbriši odabrane aktivatore zabrane';
$txt['ban_no_entries'] = 'Trenutno nema aktivnih zabrana.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Sigurni ste da želite izbrisati odabrane aktivatore zabrane?';
$txt['ban_trigger_browse'] = 'Pregledaj aktivatore zabrane';
$txt['ban_trigger_browse_description'] = 'Ovaj prozor prikazuje sve zabranjene identitete grupirane po IP adresi, hostname, email adresi i korisničkom imenu.';

$txt['ban_log'] = 'Dnevnik zabrana';
$txt['ban_log_description'] = 'Dnevnik prikazuje sve pokušaje ulaska na forum od strane korisnika sa zabranom (\'full ban\' i \'cannot register\' ban only).';
$txt['ban_log_no_entries'] = 'Nema podataka u dnevniku zabrana';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Email adresa';
$txt['ban_log_member'] = 'Član';
$txt['ban_log_date'] = 'Datum';
$txt['ban_log_remove_all'] = 'Ukloni sve';
$txt['ban_log_remove_all_confirm'] = 'Da li ste sigurni da želite izbrisati sve evidencije o zabranama pristupa?';
$txt['ban_log_remove_selected'] = 'Ukloni označene';
$txt['ban_log_remove_selected_confirm'] = 'Da li ste sigurni da želite izbrisati sve označene logove?';
$txt['ban_no_triggers'] = 'Trenutno nema aktivatora zabrane';

$txt['settings_not_writable'] = 'Ove postavke ne mogu biti promijenjene zato što Settings.php nije otvoren za zapisivanje.';

$txt['maintain_title'] = 'Održavanje foruma';
$txt['maintain_info'] = 'Alati za optimizaciju tablica, spremanje sigurnosnih kopija baze, provjeru grešaka i čišćenje foruma.';
$txt['maintain_sub_database'] = 'Baza podataka';
$txt['maintain_sub_routine'] = 'Rutina';
$txt['maintain_sub_members'] = 'Članovi';
$txt['maintain_sub_topics'] = 'Teme';
$txt['maintain_done'] = 'Posao održavanja \'%1$s\' je uspješno izvršen.';
$txt['maintain_no_errors'] = 'Čestitamo, greške nisu pronađene! Hvala što ste provjeravali.';

$txt['maintain_tasks'] = 'Planirani zadaci';
$txt['maintain_tasks_desc'] = 'Uredi sve zadatke planirane od strane SMF-a.';

$txt['scheduled_log'] = 'Dnevnik zadataka';
$txt['scheduled_log_desc'] = 'Ispisi dnevnika zadataka koji su već izvršeni.';
$txt['admin_log'] = 'Dnevnik administriranja';
$txt['admin_log_desc'] = 'Ispisuje administrativne zadatke koji su završeni od strane admina ovog foruma';
$txt['moderation_log'] = 'Dnevnik moderacije';
$txt['moderation_log_desc'] = 'Ispis moderatorskih aktivnosti koje su izvršili moderatori ovog foruma';
$txt['spider_log_desc'] = 'Pregledajte unose koji se odnose na aktivnosti spidera pretraživača na vašem forum.';
$txt['pruning_log_desc'] = 'Koristi ove alate za odbacivanje starijih unosa u razne evidencije.';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'Pošalji email o grešci u spajanju na MySQL';
$txt['db_persist'] = 'Koristi trajnu vezu';
$txt['ssi_db_user'] = 'Ime baze za korištenje u SSI modu';
$txt['ssi_db_passwd'] = 'Lozinka baze koja će se koristiti u SSI modu';

$txt['default_language'] = 'Primarni Jezik foruma';

$txt['maintenance_subject'] = 'Naslov';
$txt['maintenance_message'] = 'Poruka za prikaz';

$txt['errlog_desc'] = 'Evidencija grešaka prati svaku grešku koja se dogodi na ovom forumu. Za brisanje bilo koje greške iz baze podataka, označi kućicu, i pritisni %s gumb na dnu stranice.';
$txt['errlog_no_entries'] = 'Trenutno nema grešaka u evidenciji.';

$txt['theme_settings'] = 'Izgled Foruma';
$txt['theme_current_settings'] = 'Postavke trenutne Teme';

$txt['dvc_your'] = 'Vaša verzija';
$txt['dvc_current'] = 'Trenutna verzija';
$txt['dvc_sources'] = 'Izvori';
$txt['dvc_default'] = 'Primarni predlošci';
$txt['dvc_templates'] = 'Trenutni predlošci';
$txt['dvc_languages'] = 'Datoteke jezika';

$txt['smileys_default_set_for_theme'] = 'Izaberite osnovne postavke smajlija za ovaj predložak';
$txt['smileys_no_default'] = '(koristi osnovne kao globalne postavke smajlija)';

$txt['censor_test'] = 'Testiranje Cenzuriranih riječi';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Zanemariti razliku između velikih i malih slova prilikom cenzure.';
$txt['censor_whole_words'] = 'Provjeri samo cijele riječi.';

$txt['admin_confirm_password'] = '(potvrda)';
$txt['admin_incorrect_password'] = 'Neispravna lozinka';

$txt['date_format'] = '(GGGG-MM-DD) ';
$txt['undefined_gender'] = 'Nije definirano';
$txt['age'] = 'Starost člana';
$txt['activation_status'] = 'Status aktivacije';
$txt['activated'] = 'Aktivirano';
$txt['not_activated'] = 'Nije aktivirano';
$txt['primary'] = 'Primarno';
$txt['additional'] = 'Dodatno';
$txt['messenger_address'] = 'Messenger adresa';
$txt['wild_cards_allowed'] = 'dopušteno je korištenje ? i * za nepoznate dijelove';
$txt['search_for'] = 'Traži';
$txt['member_part_of_these_membergroups'] = 'Član je dio ovih grupa članova';
$txt['membergroups'] = 'Grupe članova';
$txt['confirm_delete_members'] = 'Da li ste sigurni da želite izbrisati označene članove?';

$txt['support_credits_title'] = 'Podrška i Zasluge';
$txt['support_credits_info'] = 'Informacije koje trebate znati za postavljanje ispravnih pitanja u vezi eventualnih problema.';
$txt['support_title'] = 'Informacije za Podršku';
$txt['support_versions_current'] = 'Trenutna SMF verzija';
$txt['support_versions_forum'] = 'Verzija foruma';
$txt['support_versions_php'] = 'PHP verzija';
$txt['support_versions_db'] = '%1$s verzija';
$txt['support_versions_server'] = 'Server verzija';
$txt['support_versions_gd'] = 'GD verzija';
$txt['support_versions'] = 'Informacije o verziji';
$txt['support_resources'] = 'Resursi podrške';
$txt['support_resources_p1'] = 'Naš <a href="%1$s">Online Priručnik</a> je glavna dokumentacija za SMF. SMF Online Priručnik ima mnogo dokumenata koji će vam dati odgovor na vaša pitanja i objasniti <a href="%2$s">Značajke</a>, <a href="%3$s">Postavke</a>, <a href="%4$s">Teme</a>, <a href="%5$s">Pakete</a>, itd. Online Priručnik detaljno dokumentira svaki dio SMF-a i trebao bi brzo odgovoriti na većinu pitanja.';
$txt['support_resources_p2'] = 'Ako ne možete pronaći odgovor na vaša pitanja u Online Priručniku, možete pretražiti naš <a href="%1$s">Support Community</a> ili zatražiti pomoć u našem <a href="%2$s">Engleskom</a> ili nekom od mnogih <a href="%3$s">internacionalnih rubrika za podršku</a>. SMF Support Community može se koristiti za <a href="%4$s">podršku</a>, <a href="%5$s">prilagodbe</a>, i mnoge druge mogućnosti poput diskusije o SMF-u, pronalaženju hostinga, i diskutiranje administrativnih problema s drugim administratorima foruma.';

$txt['support_latest'] = 'Poznati problemi';
$txt['support_latest_fetch'] = 'Učitavanje informacija...';

$txt['edit_permissions_info'] = 'Upravljanje dozvolama i ograničenjima, globalno kao i za specifične forume.';
$txt['membergroups_members'] = 'Registrirani Članovi';
$txt['membergroups_guests'] = 'Gosti';
$txt['membergroups_guests_na'] = 'nepoznato';
$txt['membergroups_add_group'] = 'Dodavanje grupe';
$txt['membergroups_permissions'] = 'Dozvole';

$txt['permitgroups_restrict'] = 'Ograničeni';
$txt['permitgroups_standard'] = 'Standardni';
$txt['permitgroups_moderator'] = 'Moderator';
$txt['permitgroups_maintenance'] = 'Održavanje';
$txt['permitgroups_inherit'] = 'Nasljedno';

$txt['confirm_delete_attachments_all'] = 'Da li ste sigurni da želite izbrisati sve privitke?';
$txt['confirm_delete_attachments'] = 'Da li ste sigurni da želite izbrisati odabrane privitke?';
$txt['attachment_manager_browse_files'] = 'Pregled datoteka';
$txt['attachment_manager_repair'] = 'Zadrži';
$txt['attachment_manager_avatars'] = 'Avatari';
$txt['attachment_manager_attachments'] = 'Privitci';
$txt['attachment_manager_thumbs'] = 'Mini-Slike';
$txt['attachment_manager_last_active'] = 'Zadnja aktivnost';
$txt['attachment_manager_member'] = 'Član';
$txt['attachment_manager_avatars_older'] = 'Ukloni avatare članova koji su neaktivni više od';
$txt['attachment_manager_total_avatars'] = 'Ukupno avatara';

$txt['attachment_manager_avatars_no_entries'] = 'Trenutno nema avatara.';
$txt['attachment_manager_attachments_no_entries'] = 'Trenutno nema privitaka.';
$txt['attachment_manager_thumbs_no_entries'] = 'Trenutno nema mini-slika.';

$txt['attachment_manager_settings'] = 'Postavke Privitaka';
$txt['attachment_manager_avatar_settings'] = 'Postavke Avatara';
$txt['attachment_manager_browse'] = 'Pregled Datoteka';
$txt['attachment_manager_maintenance'] = 'Održavanje Datoteka';
$txt['attachment_manager_save'] = 'Spremi';

$txt['attachmentEnable'] = 'Mod s privitcima';
$txt['attachmentEnable_deactivate'] = 'Isključi privitke';
$txt['attachmentEnable_enable_all'] = 'Omogući sve privitke';
$txt['attachmentEnable_disable_new'] = 'Isključi nove privitke';
$txt['attachmentCheckExtensions'] = 'Provjeri nastavke privitaka';
$txt['attachmentExtensions'] = 'Dozvoljeni nastavci privitaka';
$txt['attachmentRecodeLineEndings'] = 'Rekodiraj završetke linija u tekstualnim privitcima';
$txt['attachmentShowImages'] = 'Prikaži sliku privitka ispod komentara';
$txt['attachmentEncryptFilenames'] = 'Enkriptiraj spremljene nazive datoteka';
$txt['attachmentUploadDir'] = 'Direktorij privitaka<div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Podesi višestruke direktorije za privitke</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Mapa za priloge';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Podesi više mapa sa prilozima]</a>';
$txt['attachmentDirSizeLimit'] = 'Maksimalna veličina foldera';
$txt['attachmentPostLimit'] = 'Maksimalna veličina privitka po komentaru';
$txt['attachmentSizeLimit'] = 'Maksimalna veličina po privitku';
$txt['attachmentNumPerPostLimit'] = 'Maksimalan broj privitaka po komentaru';
$txt['attachment_gd_warning'] = 'GD modul trenutno nije instaliran. Re-enkodiranje slika nije moguće.';
$txt['attachment_image_reencode'] = 'Re-enkodiraj potencijalno opasne slikovne privitke';
$txt['attachment_image_reencode_note'] = '(potreban GD modul)';
$txt['attachment_image_paranoid_warning'] = 'Detaljna sigurnosna provjera može rezultirati velikom brojem odbačenih privitaka.';
$txt['attachment_image_paranoid'] = 'Izvrši detaljne sigurnosne provjere uploadanim slikovnim privitcima';
$txt['attachmentThumbnails'] = 'Promijeni veličinu slike kada se prikazuje u komentaru';
$txt['attachment_thumb_png'] = 'Spremi mini-slike kao PNG';
$txt['attachmentThumbWidth'] = 'Maksimalna širina slike';
$txt['attachmentThumbHeight'] = 'Maksimalna visina slike';

$txt['attach_dir_does_not_exist'] = 'Ne postoji';
$txt['attach_dir_not_writable'] = 'Nije moguće zapisivanje';
$txt['attach_dir_files_missing'] = 'Nedostaju datoteke (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Popravi</a>)';
$txt['attach_dir_unused'] = 'Nekorišteno';
$txt['attach_dir_ok'] = 'U redu';

$txt['attach_path_manage'] = 'Uredi putanje za priloge';
$txt['attach_paths'] = 'Putanje za priloge';
$txt['attach_current_dir'] = 'Trenutna mapa';
$txt['attach_path'] = 'Putanja';
$txt['attach_current_size'] = 'Trenutna veličina (kB)';
$txt['attach_num_files'] = 'Datoteke';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Dodaj putanju';
$txt['attach_path_current_bad'] = 'Trenutna putanja za priloge je neispravna';

$txt['mods_cat_avatars'] = 'Avatari';
$txt['avatar_directory'] = 'Direktorij Avatara';
$txt['avatar_url'] = 'URL Avatara';
$txt['avatar_dimension_note'] = '(0 = bez ograničenja)';
$txt['avatar_max_width_external'] = 'Maksimalna širina vanjskog avatara';
$txt['avatar_max_height_external'] = 'Maksimalna visina vanjskog avatara';
$txt['avatar_action_too_large'] = 'Ako je Avatar prevelik...';
$txt['option_refuse'] = 'Odbiti ga';
$txt['option_html_resize'] = 'HTML redimenzioniranje';
$txt['option_js_resize'] = 'JavaScript redimenzioniranje';
$txt['option_download_and_resize'] = 'unijeti ga i redimenzionirati (zahtijeva modul GD)';
$txt['avatar_max_width_upload'] = 'Maksimalna širina avatara';
$txt['avatar_max_height_upload'] = 'Maksimalna visina avatara';
$txt['avatar_resize_upload'] = 'Redimenzionirati prevelik avatar';
$txt['avatar_resize_upload_note'] = '(zahtijeva modul GD)';
$txt['avatar_download_png'] = 'Koristiti PNG format za redimenzionirane avatare?';
$txt['avatar_gd_warning'] = 'Modul GD nije instaliran. Neke opcije avatara su nedostupne.';
$txt['avatar_external'] = 'Vanjski avatari';
$txt['avatar_upload'] = 'Dodani avatari';
$txt['avatar_server_stored'] = 'Avatari na serveru';
$txt['avatar_server_stored_groups'] = 'Grupama članova dozvoljeno je biranje avatara pohranjenih na serveru';
$txt['avatar_upload_groups'] = 'Grupama članova dozvoljeno je praviti upload avatara na server';
$txt['avatar_external_url_groups'] = 'Korisničke grupe kojima je dozvoljeno odabrati eksterne avatare';
$txt['avatar_select_permission'] = 'Odabir dozvola za svaku grupu';
$txt['avatar_download_external'] = 'Preuzeti avatar na zadani URL';
$txt['custom_avatar_enabled'] = 'Prebaciti avatare u...';
$txt['option_attachment_dir'] = 'Direktorij Privitaka';
$txt['option_specified_dir'] = 'Određeni direktorij...';
$txt['custom_avatar_dir'] = 'Upload direktorij';
$txt['custom_avatar_dir_desc'] = 'Ovo ne smije biti isto kao direktorij pohranjen na serveru.';
$txt['custom_avatar_url'] = 'URL za upload';
$txt['custom_avatar_check_empty'] = 'Prilagođeni direktorij s avatarima koji ste odabrali vjerojatno je prazan ili neispravan. Molimo provjerite da su te postavke točne.';
$txt['avatar_reencode'] = 'Re-enkodiraj potencijalno opasne avatare';
$txt['avatar_reencode_note'] = '(potreban GD modul)';
$txt['avatar_paranoid_warning'] = 'Detaljna sigurnosna provjera može rezultirati velikim brojem odbačenih avatara.';
$txt['avatar_paranoid'] = 'Izvrši detaljne sigurnosne provjere na uploadanom avataru';

$txt['repair_attachments'] = 'Održavanje Privitaka';
$txt['repair_attachments_complete'] = 'Održavanje Završeno';
$txt['repair_attachments_complete_desc'] = 'Sve odabrane greške su ispravljene';
$txt['repair_attachments_no_errors'] = 'Nije pronađena niti jedna greška!';
$txt['repair_attachments_error_desc'] = 'Tijekom održavanja pronađene su sljedeće greške. Označite kućicu pored grešaka koje želite popraviti pa pritisnite enter za nastavak.';
$txt['repair_attachments_continue'] = 'Nastavi';
$txt['repair_attachments_cancel'] = 'Odustani';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d mini-slike nemaju originalnu sliku';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d originalnih slika navodno ima mini-slike, ali ih nemaju';
$txt['attach_repair_file_missing_on_disk'] = '%1$d privici/avatari prikazani su kao upisani ali više ne postoje na disku';
$txt['attach_repair_file_wrong_size'] = '%1$d privici/avatari imaju pogrešnu veličinu datoteke';
$txt['attach_repair_file_size_of_zero'] = '%1$d privici/avatari imaju veličinu nula na disku. (Oni će biti izbrisani)';
$txt['attach_repair_attachment_no_msg'] = '%1$d privici više nemaju pridruženu poruku';
$txt['attach_repair_avatar_no_member'] = '%1$d avatari više nemaju člana na kojeg asociraju';
$txt['attach_repair_wrong_folder'] = '%1$d priloga je u krivoj mapi';

$txt['news_title'] = 'Vijesti i obavijesti korisnicima';
$txt['news_settings_desc'] = 'Ovdje možete urediti vijesti.';
$txt['news_settings_submit'] = 'Spremi';
$txt['news_mailing_desc'] = 'Iz ovog menija možete poslati obavijest svim korisnima koji su ostavili svoje email adrese. Možete izmijeniti listu za distribuciju ili poslati poruku svima. Korisno je za informaciju o izmjenama ili važnim obavijestima.';
$txt['groups_edit_news'] = 'Grupe sa dozvolom za uređivanje vijesti';
$txt['groups_send_mail'] = 'Groupe sa dozvolom za slanje obavjesti na forumu';
$txt['xmlnews_enable'] = 'Uključi XML/RSS novosti';
$txt['xmlnews_maxlen'] = 'Maksimalna dužina poruke:<div class="smalltext">(0 za isključeno, loša ideja.)</div>';
$txt['editnews_clickadd'] = 'Kliknite ovdje za dodavanje još jednog polja za novosti.';
$txt['editnews_remove_selected'] = 'Uklonite odabrano';
$txt['editnews_remove_confirm'] = 'Da li ste sigurni da želite izbrisati odabrane novosti?';
$txt['censor_clickadd'] = 'Kliknite ovdje za dodavanje još jedne riječi.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Dnevnici';
$txt['generate_reports'] = 'Izvještaji';

$txt['update_available'] = 'Dostupna je Nadogradnja!';
$txt['update_message'] = 'Koristite zastarjelu verziju SMF-a, koja sadrži neke bugove koji su od tada popravljeni.
	Preporučljivo je <a href="" id="update-link">nadograditi vaš forum</a> na posljednju verziju što je prije moguće. Cijeli postupak traje kratko!';

$txt['manageposts'] = 'Postovi i Teme';
$txt['manageposts_title'] = 'Uređivanje postova i tema';
$txt['manageposts_description'] = 'Ovdje možete urediti sve postavke tema i postova.';

$txt['manageposts_seconds'] = 'sekundi';
$txt['manageposts_minutes'] = 'minuta';
$txt['manageposts_characters'] = 'znakova';
$txt['manageposts_days'] = 'dana';
$txt['manageposts_posts'] = 'postova';
$txt['manageposts_topics'] = 'tema';

$txt['manageposts_settings'] = 'Postavke Postova';
$txt['manageposts_settings_description'] = 'Ovdje možete urediti sve postavke postova i slanja postova.';
$txt['manageposts_settings_submit'] = 'Spremi';

$txt['manageposts_bbc_settings'] = 'BBC Kod';
$txt['manageposts_bbc_settings_description'] = 'BBC kodovi se mogu isticanje dijelova posta. Npr, za isticanje riječi \'house\' možete upisati [b]house[/b]. Svi bbc kodovi su okruženi uglatim zagradama (\'[\' i \']\').';
$txt['manageposts_bbc_settings_title'] = 'Postavke BBC Kodova';
$txt['manageposts_bbc_settings_submit'] = 'Spremi';

$txt['manageposts_topic_settings'] = 'Postavke Tema';
$txt['manageposts_topic_settings_description'] = 'Ovdje možete urediti sve postavke tema (topic).';
$txt['manageposts_topic_settings_submit'] = 'Spremi';

$txt['removeNestedQuotes'] = 'Ukloni citate u citatima kod citiranja';
$txt['enableEmbeddedFlash'] = 'Flash u postovima';
$txt['enableEmbeddedFlash_warning'] = 'može biti sigurnosni rizik!';
$txt['enableSpellChecking'] = 'Provjera Pravopisa';
$txt['enableSpellChecking_warning'] = 'ovo ne radi na svim serverima!';
$txt['disable_wysiwyg'] = 'Isključi WYSIWYG uređivač';
$txt['max_messageLength'] = 'Maksimalna veličina posta';
$txt['max_messageLength_zero'] = '0 za neograničeno.';
$txt['fixLongWords'] = 'Razlomiti riječi s više od';
$txt['fixLongWords_zero'] = '0 za deaktivaciju.';
$txt['fixLongWords_warning'] = 'ovo ne radi na svim serverima!';
$txt['topicSummaryPosts'] = 'Broj postova u sažetku teme';
$txt['spamWaitTime'] = 'Vrijeme između postova sa istog IP';
$txt['edit_wait_time'] = 'Vrijeme čekanja na uređivanje';
$txt['edit_disable_time'] = 'Maksimalno vrijeme za uređivanje posta';
$txt['edit_disable_time_zero'] = '0 za deaktivaciju';

$txt['enableBBC'] = 'Dozvoli BBC kod';
$txt['enablePostHTML'] = 'Dozvoli <em>osnovne</em> HTML tagove u postovima';
$txt['autoLinkUrls'] = 'Automatski linkaj URL-ove';
$txt['disabledBBC'] = 'Dozvoljeni BBC tagovi';
$txt['bbcTagsToUse'] = 'Aktivni BBC tagovi';
$txt['bbcTagsToUse_select'] = 'Odabir tagova koji će se moći koristiti';
$txt['bbcTagsToUse_select_all'] = 'Odaberi sve tagove';

$txt['enableStickyTopics'] = 'Dozvoli usidrene teme';
$txt['enableParticipation'] = 'Dozvoli ikone sudjelovanja';
$txt['oldTopicDays'] = 'Period nakon kojeg će se, pri pokušaju slanja odgovora, pojaviti upozorenje o odgovaranju na stare teme';
$txt['oldTopicDays_zero'] = '0 za deaktivaciju';
$txt['defaultMaxTopics'] = 'Broj tema po stranici na listi tema';
$txt['defaultMaxMessages'] = 'Broj postova po stranici';
$txt['hotTopicPosts'] = 'Broj postova za popularnu temu';
$txt['hotTopicVeryPosts'] = 'Broj postova za vrlo popularnu temu';
$txt['enableAllMessages'] = 'Max veličina teme za prikazivanje &quot;Svih&quot; postova';
$txt['enableAllMessages_zero'] = '0 da se nikada ne prikaže &quot;Sve&quot;';
$txt['disableCustomPerPage'] = 'Isključi korisnički predefinirano brojanje tema/poruka po stranici';
$txt['enablePreviousNext'] = 'Omogući prethodna/slijedeća linkove';

$txt['not_done_title'] = 'Još nije gotovo!';
$txt['not_done_reason'] = 'Proces je zastao kako bi se izbjeglo preopterećenje vašeg servera.  Automatski će se nastaviti za nekoliko sekundi.  Ako do toga ne dođe, kliknite na link ispod.';
$txt['not_done_continue'] = 'Nastavak';

$txt['general_settings'] = 'Općenito';
$txt['database_paths_settings'] = 'Baze i putanje';
$txt['cookies_sessions_settings'] = 'Kolačići i sessioni';
$txt['caching_settings'] = 'Keširanje';
$txt['load_balancing_settings'] = 'Balansiranje opterećenja (Load Balancing)';

$txt['language_configuration'] = 'Jezici';
$txt['language_description'] = 'Ovaj dio omogućava Vam uređivanje jezika instaliranih u Vašem forumu i skidanje novih sa Simple Machines weba. Također ovdje možete izmijeniti postavke vezane za jezik';
$txt['language_edit'] = 'Uredi jezike';
$txt['language_add'] = 'Dodaj jezik';
$txt['language_settings'] = 'Postavke';

$txt['advanced'] = 'Napredno';
$txt['simple'] = 'Jednostavno';

$txt['admin_news_select_recipients'] = 'Molimo odaberite tko treba primiti kopiju newslettera';
$txt['admin_news_select_group'] = 'Grupe članova';
$txt['admin_news_select_group_desc'] = 'Odaberi grupe koje će primati newsletter';
$txt['admin_news_select_members'] = 'Članovi';
$txt['admin_news_select_members_desc'] = 'Dodatni članovi koji će primiti newsletter';
$txt['admin_news_select_excluded_members'] = 'Isključeni članovi';
$txt['admin_news_select_excluded_members_desc'] = 'Članovi koji ne bi trebali primiti newsletter';
$txt['admin_news_select_excluded_groups'] = 'Isključene grupe';
$txt['admin_news_select_excluded_groups_desc'] = 'Odaberite grupe koje nikako ne bi smjele primiti newsletter';
$txt['admin_news_select_email'] = 'Email adrese';
$txt['admin_news_select_email_desc'] = 'Točka-zarezom razdvojen popis email adresa kojima bi trebao biti poslan newsletter (npr.  adresa1;adresa2)';
$txt['admin_news_select_override_notify'] = 'Ignoriraj postavke za obavještavanje';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Ne možete poslati osobnu poruku na email adresu. Ako nastavite sve unesene email adrese biti će ignorirane.\\n\\nJeste li sigurni da to želite?';

$txt['mailqueue_browse'] = 'Pregledaj listu čekanja';
$txt['mailqueue_settings'] = 'Postavke';

$txt['admin_search'] = 'Brzo traženje';
$txt['admin_search_type_internal'] = 'Zadatak/Postavka';
$txt['admin_search_type_member'] = 'Član';
$txt['admin_search_type_online'] = 'Online priručnik';
$txt['admin_search_go'] = 'Kreni';
$txt['admin_search_results'] = 'Rezultati pretrage';
$txt['admin_search_results_desc'] = 'Rezultata ove pretrage: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Traži ponovo';
$txt['admin_search_results_none'] = 'Nije pronađen ni jedan rezultat!';

$txt['admin_search_section_sections'] = 'Sekcije';
$txt['admin_search_section_settings'] = 'Postavke';

$txt['core_settings_title'] = 'Bazne mogućnosti';
$txt['mods_cat_features'] = 'Općenito';
$txt['mods_cat_security_general'] = 'Općenito';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Razno';
$txt['mods_cat_layout'] = 'Razmještaj';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderiranje';
$txt['signature_settings_short'] = 'Potpisi';
$txt['custom_profile_shorttitle'] = 'Polja profila';
$txt['pruning_title'] = 'Dnevnik čišćenja';

$txt['boardsEdit'] = 'Izmjeni rubrike';
$txt['mboards_new_cat'] = 'Izradi novu kategoriju';
$txt['manage_holidays'] = 'Uredi praznike';
$txt['calendar_settings'] = 'Postavke kalendara';
$txt['search_weights'] = 'Težine';
$txt['search_method'] = 'Metoda pretraživanja';

$txt['smiley_sets'] = 'Setovi smajlija';
$txt['smileys_add'] = 'Dodaj smajlija';
$txt['smileys_edit'] = 'Uredi smajlije';
$txt['smileys_set_order'] = 'Postavi poredak smajlija';
$txt['icons_edit_message_icons'] = 'Uredi ikone poruka';

$txt['membergroups_new_group'] = 'Dodaj grupu članova';
$txt['membergroups_edit_groups'] = 'Uredi grupu članova';
$txt['permissions_groups'] = 'Dozvole po grupama članova';
$txt['permissions_boards'] = 'Dozvole po rubrikama';
$txt['permissions_profiles'] = 'Uredi profile';
$txt['permissions_post_moderation'] = 'Moderiranje posta';

$txt['browse_packages'] = 'Pregledaj pakete';
$txt['download_packages'] = 'Skini pakete';
$txt['installed_packages'] = 'Instalirani paketi';
$txt['package_file_perms'] = 'Dozvole datoteka';
$txt['package_settings'] = 'Opcije';
$txt['themeadmin_admin_title'] = 'Uredi i instaliraj';
$txt['themeadmin_list_title'] = 'Postavke teme';
$txt['themeadmin_reset_title'] = 'Članske opcije';
$txt['themeadmin_edit_title'] = 'Uredi predloške';
$txt['admin_browse_register_new'] = 'Registriraj novog člana';

$txt['search_engines'] = 'Pretraživači';
$txt['spiders'] = 'Spideri';
$txt['spider_logs'] = 'Spider dnevnici';
$txt['spider_stats'] = 'Spider statistike';

$txt['paid_subscriptions'] = 'Plaćene pretplate';
$txt['paid_subs_view'] = 'Vidi pretplate';

?>