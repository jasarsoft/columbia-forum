<?php
// Version: 2.0; Search

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['set_parameters'] = 'Postavi Parametre Pretraživanja';
$txt['choose_board'] = 'Odaberite forume koje želite pretražiti';
$txt['all_words'] = 'Traži sve riječi';
$txt['any_words'] = 'Traži bilo koju riječ';
$txt['by_user'] = 'Od korisnika';

$txt['search_post_age'] = 'Starost posta';
$txt['search_between'] = 'između';
$txt['search_and'] = 'i';
$txt['search_options'] = 'Opcije';
$txt['search_show_complete_messages'] = 'Prikaži rezultate kao Poruke';
$txt['search_subject_only'] = 'Pretraži samo naslove Tema';
$txt['search_relevance'] = 'Relev';
$txt['search_date_posted'] = 'Datum';
$txt['search_order'] = 'Redoslijed';
$txt['search_orderby_relevant_first'] = 'Prvo najRelevantniji rezultati';
$txt['search_orderby_large_first'] = 'Prvo najveće teme';
$txt['search_orderby_small_first'] = 'Prvo najmanje teme';
$txt['search_orderby_recent_first'] = 'Prvo najnovije teme';
$txt['search_orderby_old_first'] = 'Prvo najstarije teme';
$txt['search_visual_verification_label'] = 'Verifikacija';
$txt['search_visual_verification_desc'] = 'Molimo unesite kod u slici iznad da biste mogli koristiti Pretraživanje.';

$txt['search_specific_topic'] = 'Traži samo unutar teme';

$txt['mods_cat_search'] = 'Traži';
$txt['groups_search_posts'] = 'Grupe članova s pristupom funkciji pretraživanja';
$txt['simpleSearch'] = 'Dozvoli jednostavno pretraživanje';
$txt['search_results_per_page'] = 'Broj rezultata pretraživanja po stranici';
$txt['search_weight_frequency'] = 'Relativan značaj pretraživanja za broj odgovarajućih poruka u okviru teme';
$txt['search_weight_age'] = 'Relativan značaj pretraživanja za starost posljednje odgovarajuće poruke';
$txt['search_weight_length'] = 'Relativan značaj pretraživanja za duljinu teme';
$txt['search_weight_subject'] = 'Relativan značaj pretraživanja za odgovarajući subjekt';
$txt['search_weight_first_message'] = 'Relativan značaj pretraživanja za prvu odgovarajuću poruku';
$txt['search_weight_sticky'] = 'Relativan značaj pretraživanja za stalnu temu';

$txt['search_settings_desc'] = 'Ovdje možete promjeniti temeljne postavke funkcije pretraživanja.';
$txt['search_settings_title'] = 'Funkcija pretraživanja - postavke';

$txt['search_weights_desc'] = 'Ovdje možete promjeniti individualne komponente ocjene značaja. ';
$txt['search_weights_title'] = 'Pretraživanje - značaji';
$txt['search_weights_total'] = 'Ukupno';
$txt['search_weights_save'] = 'Spremi';

$txt['search_method_desc'] = 'Ovdje možete odrediti način na koji se pokreće pretraživanje.';
$txt['search_method_title'] = 'Pretraživanje - metoda';
$txt['search_method_save'] = 'Spremi';
$txt['search_method_messages_table_space'] = 'Prostor kojeg koriste poruke s foruma u bazi podataka';
$txt['search_method_messages_index_space'] = 'Prostor koji se koristi za indeksiranje poruka u bazi podataka';
$txt['search_method_kilobytes'] = 'kB';
$txt['search_method_fulltext_index'] = 'Index cijelog teksta';
$txt['search_method_no_index_exists'] = 'trenutno ne postoji';
$txt['search_method_fulltext_create'] = 'kreiraj index';
$txt['search_method_fulltext_cannot_create'] = 'kreiranje nije moguće jer je max duljina poruke veća od 65,535 ili vrsta tablice nije MyISAM';
$txt['search_method_index_already_exists'] = 'već kreirano';
$txt['search_method_fulltext_remove'] = 'izbriši index';
$txt['search_method_index_partial'] = 'djelomično kreiran';
$txt['search_index_custom_resume'] = 'nastavi';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Da bi ste mogli koristiti pretraživanje cijelog teksta, trebate ga prvo kreirati!';

$txt['search_index'] = 'Index pretraživanja';
$txt['search_index_none'] = 'Nema indexa';
$txt['search_index_custom'] = 'Posebni index';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'Admin panel samo omogućuje prebacivanje između indeksa pretraživanja. Za daljnju prilagodbu postavki Sphinxa koristite alat sphinx_config.php.';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Veličina';
$txt['search_index_create_custom'] = 'kreiraj index';
$txt['search_index_custom_remove'] = 'izbriši index';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Da bi ste mogli pretraživati pomoću posebnog indexa, trebate ga prvo kreirati!';

$txt['search_force_index'] = 'Nametni upotrebu indexa pretraživanja';
$txt['search_match_words'] = 'Pronađi samo cijele riječi';
$txt['search_max_results'] = 'Maksimalan broj rezultata za prikazivanje';
$txt['search_max_results_disable'] = '(0: neograničeno)';
$txt['search_floodcontrol_time'] = 'Time required between searches from same member';
$txt['search_floodcontrol_time_desc'] = '(0 za neograničeno, u sekundama) ';

$txt['search_create_index'] = 'Kreiraj index';
$txt['search_create_index_why'] = 'Zašto kreirati index pretraživanja?';
$txt['search_create_index_start'] = 'Kreiraj';
$txt['search_predefined'] = 'Unaprijed definiran profil';
$txt['search_predefined_small'] = 'Index male veličine';
$txt['search_predefined_moderate'] = 'Index srednje veličine';
$txt['search_predefined_large'] = 'Index velike veličine';
$txt['search_create_index_continue'] = 'Nastavak';
$txt['search_create_index_not_ready'] = 'SMF trenutno kreira index pretraživanja vaših poruka. Postupak je privremeno zaustavljen kako bi ste izbjegli preopterećenje vašeg servera. On će se automatski nastaviti za par sekundi. Ako se postupak ne nastavi, kliknite nastavak ispod.';
$txt['search_create_index_progress'] = 'Progres';
$txt['search_create_index_done'] = 'Standardni index pretraživanja je kreiran!';
$txt['search_create_index_done_link'] = 'Nastavak';
$txt['search_double_index'] = 'Kreirali ste dva indexa u tablici poruka. Za najbolju učinkovitost savjetujemo vam da izbrišete jedan od dva indexa.';

$txt['search_error_indexed_chars'] = 'Neispravni broj indeksiranih znakova. Potrebna su najmanje 3 znaka za koristan index.';
$txt['search_error_max_percentage'] = 'Nevaljani postotak riječi koje treba preskočiti. Koristite vrijednost od najmanje 5%.';
$txt['error_string_too_long'] = 'Tekst pretraživanja ne smije biti kraći od %1$d znakova.';

$txt['search_adjust_query'] = 'Parametri Pretraživanja';
$txt['search_adjust_submit'] = 'Revidiraj Pretraživanje';
$txt['search_did_you_mean'] = 'Možda ste mislili na';

$txt['search_example'] = '<em>npr.</em> Orwell "Životinjska Farma" -film';

$txt['search_engines_description'] = 'Iz ovog područja možete odlučiti koliko detaljno želite pratiti tražilice kako indeksiraju vaš forum, kao i pregled Dnevnika tražilica.';
$txt['spider_mode'] = 'Razina praćenja Pretraživača <div class="smalltext">Napomena: viša razina za praćenje povećava opterećenje resursa poslužitelja.</div> ';
$txt['spider_mode_off'] = 'Onemogućeno';
$txt['spider_mode_standard'] = 'Standardno - zapisuje minimalno o aktivnosti pauka';
$txt['spider_mode_high'] = 'Visoko - Pruža točnije statistike. ';
$txt['spider_mode_vhigh'] = 'Vrlo Visoko - Jednako kao za &quot;Visoko&quot; ali zapisuje podatke o posjeti svakoj stranici';
$txt['spider_settings_desc'] = 'Možete promijeniti postavke za praćenje pauka putem ove stranice. Napomena: ako želite omogućiti automatsko skraćivanje dnevnika možete to postaviti <a href="%1$s">ovdje</a> ';

$txt['spider_group'] = 'Primijeniti restriktivne dozvole od grupe <div class="smalltext"> kako bi se omogućilo da se zaustavi pauke od indeksiranja nekih stranica. </ div>';
$txt['spider_group_none'] = 'Onemogućeno';

$txt['show_spider_online'] = 'Prikaži paukove na online listi';
$txt['show_spider_online_no'] = 'Nipošto';
$txt['show_spider_online_summary'] = 'Prikaži broj pauka';
$txt['show_spider_online_detail'] = 'Prikaži imena paukova';
$txt['show_spider_online_detail_admin'] = 'Prikaži imena paukova - samo admin';

$txt['spider_name'] = 'Ime pauka';
$txt['spider_last_seen'] = 'Viđen posljednji put';
$txt['spider_last_never'] = 'Nikad';
$txt['spider_agent'] = 'Korisnički Agent';
$txt['spider_ip_info'] = 'IP adrese';
$txt['spiders_add'] = 'Dodaj novog pauka';
$txt['spiders_edit'] = 'Uredi pauka';
$txt['spiders_remove_selected'] = 'Ukloni odabrane pauke';
$txt['spider_remove_selected_confirm'] = 'Jeste li sigurni da želite ukloniti te pauke?\\n\\nSve povezanie statistike također će biti izbrisane!';
$txt['spiders_no_entries'] = 'Trenutno nema konfiguriranih pauka.';

$txt['add_spider_desc'] = 'S ove stranice možete urediti parametre prema kojima se kategoriziraju pauci. Ako gostov korisnički agent/IP adresa odgovaraju onima unesenim ispod biti će zapaženi kao pauk tražilica i pratiti ga s obzirom na postavke foruma.';
$txt['spider_name_desc'] = 'Ime pod kojim će se pauk spominjati.';
$txt['spider_agent_desc'] = 'Korisnički Agenti povezani s ovim paukom.';
$txt['spider_ip_info_desc'] = 'Zarezom odvojen popis IP adresa povezan s ovom paukom.';

$txt['spider'] = 'Pauk';
$txt['spider_time'] = 'Vrijeme';
$txt['spider_viewing'] = 'Pregledava';
$txt['spider_logs_empty'] = 'Trenutno nema unosa u Dnevnik pauka';
$txt['spider_logs_info'] = 'Imajte na umu da se zapisuje svaka akcija pauka samo ako je praćenje postavljeno na &quot;Visoko&quot; ili &quot;Vrlo Visoko&quot;. Detalji svake akcije pauka se zapisuju samo ako je praćenje postavljeno na &quot;Vrlo Visoko&quot;. ';
$txt['spider_disabled'] = 'Onemogućeno';

$txt['spider_logs_delete'] = 'Izbriši unose';
$txt['spider_logs_delete_older'] = 'Izbriši sve unose starije od';
$txt['spider_logs_delete_day'] = 'dana.';
$txt['spider_logs_delete_submit'] = 'Izbriši';
// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Jeste li sigurni da želite isprazniti sve unose u dnevniku?';

$txt['spider_stats_select_month'] = 'Skoči na mjesec';
$txt['spider_stats_page_hits'] = 'Posjeta stranici (hitovi)';
$txt['spider_stats_no_entries'] = 'Trenutno nema statistika o paucima.';

?>