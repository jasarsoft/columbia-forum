<?php
// Version: 2.0.12; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'hr_HR.utf8';
$txt['lang_dictionary'] = 'hr';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Nedjelja', 'Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak', 'Subota');
$txt['days_short'] = array('Ned', 'Pon', 'Uto', 'Sri', 'Čet', 'Pet', 'Sub');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Siječanj', 'Veljača', 'Ožujak', 'Travanj', 'Svibanj', 'Lipanj', 'Srpanj', 'Kolovoz', 'Rujan', 'Listopad', 'Studeni', 'Prosinac');
$txt['months_titles'] = array(1 => 'Siječanj', 'Veljača', 'Ožujak', 'Travanj', 'Svibanj', 'Lipanj', 'Srpanj', 'Kolovoz', 'Rujan', 'Listopad', 'Studeni', 'Prosinac');
$txt['months_short'] = array(1 => 'Sij', 'Vel', 'Ožu', 'Tra', 'Svi', 'Lip', 'Srp', 'Kol', 'Ruj', 'Lis', 'Stu', 'Pro');

$txt['time_am'] = 'prijepodne';
$txt['time_pm'] = 'poslijepodne';

$txt['newmessages0'] = 'je novo';
$txt['newmessages1'] = 'su nove';
$txt['newmessages3'] = 'Nove';
$txt['newmessages4'] = ' novih je ';

$txt['admin'] = 'Admin';
$txt['moderate'] = 'Moderiranje';

$txt['save'] = 'Pošalji';

$txt['modify'] = 'Uredi';
$txt['forum_index'] = ' Naslovnica';
$txt['members'] = 'Članova';
$txt['board_name'] = 'Forum';
$txt['posts'] = 'Odgovora';

$txt['member_postcount'] = 'Postova';
$txt['no_subject'] = '(Nema naslova)';
$txt['view_profile'] = 'Profil';
$txt['guest_title'] = 'Gost';
$txt['author'] = 'Autor';
$txt['on'] = ' u';
$txt['remove'] = 'Izbriši';
$txt['start_new_topic'] = 'Nova Tema';

$txt['login'] = 'Prijava';
// Use numeric entities in the below string.
$txt['username'] = 'Korisničko Ime';
$txt['password'] = 'Lozinka';

$txt['username_no_exist'] = 'Korisničko Ime ne postoji.';
$txt['no_user_with_email'] = 'Ne postoji korisničko ime povezano s tom email adresom.';

$txt['board_moderator'] = 'Moderator';
$txt['remove_topic'] = 'Brisanje Teme';
$txt['topics'] = 'Tema';
$txt['modify_msg'] = 'Uređivanje poruke';
$txt['name'] = 'Ime';
$txt['email'] = 'Email';
$txt['subject'] = 'Naslov';
$txt['message'] = 'Poruka';
$txt['redirects'] = 'Preusmjerenja';
$txt['quick_modify'] = 'Uredi Inline';

$txt['choose_pass'] = 'Unesite lozinku';
$txt['verify_pass'] = 'Potvrdite lozinku';
$txt['position'] = 'Status';

$txt['profile_of'] = 'Pregled profila korisnika:';
$txt['total'] = 'Ukupno';
$txt['posts_made'] = 'Postova';
$txt['website'] = 'Website';
$txt['register'] = 'Registracija';
$txt['warning_status'] = 'Status upozorenja';
$txt['user_warn_watch'] = 'Član je na moderatorskom popisu praćenih';
$txt['user_warn_moderate'] = 'Postovi člana su na listi čekanja za odobrenje';
$txt['user_warn_mute'] = 'Članu je zabranjeno objavljivanje';
$txt['warn_watch'] = 'Praćen';
$txt['warn_moderate'] = 'Moderiran';
$txt['warn_mute'] = 'Prigušen';

$txt['message_index'] = 'Referentni Forum';
$txt['news'] = 'Novosti';
$txt['home'] = 'Forum';

$txt['lock_unlock'] = 'Zaključaj/Otključaj Temu';
$txt['post'] = 'Pošalji';
$txt['error_occured'] = 'Došlo je do Greške!';
$txt['at'] = 'na';
$txt['logout'] = 'Odjava';
$txt['started_by'] = 'Autor';
$txt['replies'] = 'Odgovora';
$txt['last_post'] = 'Zadnji post';
$txt['admin_login'] = 'Administracija';
// Use numeric entities in the below string.
$txt['topic'] = 'Tema';
$txt['help'] = 'Pomoć';
$txt['notify'] = 'Obavijest';
$txt['unnotify'] = 'Ne obavijesti';
$txt['notify_request'] = 'Želite li primati email obavijesti o novim postovima u ovoj temi?';
// Use numeric entities in the below string.
$txt['regards_team'] = "Poštovanje,\n" . $context['forum_name'] . ' Tim.';
$txt['notify_replies'] = 'Pretplata na ovaj Forum';
$txt['move_topic'] = 'Premještanje Teme';
$txt['move_to'] = 'Premjestiti u';
$txt['pages'] = '&nbsp;Str';
$txt['users_active'] = 'Aktivnih korisnika u zadnjih %s minuta';
$txt['personal_messages'] = 'Privatne Poruke';
$txt['reply_quote'] = 'Citirati ovo u Odgovoru';
$txt['reply'] = 'Odgovor';
$txt['reply_noun'] = 'Odgovori';
$txt['approve'] = 'Odobri';
$txt['approve_all'] = 'Odobri sve';
$txt['awaiting_approval'] = 'Čeka odobrenje';
$txt['attach_awaiting_approve'] = 'Privitci koji čekaju odobrenje';
$txt['post_awaiting_approval'] = 'Napomena: Ova poruka čeka odobrenje moderatora';
$txt['there_are_unapproved_topics'] = 'U ovoj rubrici je %1$s tema i %2$s postova koji čekaju odobrenje. Kliknite <a href="%3$s">ovdje</a> da biste ih sve pregledali. ';

$txt['msg_alert_none'] = 'Nema poruka...';
$txt['msg_alert_you_have'] = 'Privatne Poruke: ';
$txt['msg_alert_messages'] = 'poruka';
$txt['remove_message'] = 'Brisanje poruke';

$txt['online_users'] = 'Korisnika online';
$txt['personal_message'] = 'Privatne Poruke';
$txt['jump_to'] = 'Skoči na';
$txt['go'] = 'kreni';
$txt['are_sure_remove_topic'] = 'Jeste li sigurni da želite ukloniti ovu temu?';
$txt['yes'] = 'Da';
$txt['no'] = 'Ne';

$txt['search_end_results'] = 'Kraj rezultata';
$txt['search_on'] = '-';

$txt['search'] = 'Traži';
$txt['all'] = 'Sve';

$txt['back'] = 'Natrag';
$txt['password_reminder'] = 'Podsjetnik';
$txt['topic_started'] = 'Autor teme';
$txt['title'] = 'Naslov';
$txt['post_by'] = 'Autor';
$txt['memberlist_searchable'] = 'Lista svih registriranih članova.';
$txt['welcome_member'] = 'Dobrodošli';
$txt['admin_center'] = 'Administracija';
$txt['last_edit'] = 'Zadnja izmjena';
$txt['notify_deactivate'] = 'Želite li otkazati Pretplatu na ovu temu?';

$txt['recent_posts'] = 'Novi Postovi';

$txt['location'] = 'Lokacija';
$txt['gender'] = 'Spol';
$txt['date_registered'] = 'Datum registracije';

$txt['recent_view'] = 'Najnoviji Postovi';
$txt['recent_updated'] = 'je najnovija tema';

$txt['male'] = 'Muški';
$txt['female'] = 'Ženski';

$txt['error_invalid_characters_username'] = 'Korišteni su neispravni znakovi u Korisničkom Imenu.';

$txt['welcome_guest'] = 'Dobrodošli, <strong>%1$s</strong>. Molimo <a href="' . $scripturl . '?action=login">prijavite se</a> ili se <a href="' . $scripturl . '?action=register">registrirajte</a>.';
$txt['login_or_register'] = 'Molimo <a href="' . $scripturl . '?action=login">prijavite se</a> ili <a href="' . $scripturl . '?action=register">registrirajte</a>.';
$txt['welcome_guest_activate'] = '
Jeste li propustili svoj <a href="' . $scripturl . '?action=activate">aktivacijski email</a>?';
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Dobrodošli,';
$txt['welmsg_hey'] = 'Hej,';
$txt['welmsg_welcome'] = 'Dobrodošli,';
$txt['welmsg_please'] = 'Molimo';
$txt['select_destination'] = 'Odaberite odredište';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Autor';

$txt['icon_smiley'] = 'Smješko';
$txt['icon_angry'] = 'Ljut';
$txt['icon_cheesy'] = 'Sirast';
$txt['icon_laugh'] = 'Smijeh';
$txt['icon_sad'] = 'Tužan';
$txt['icon_wink'] = 'Namigujem';
$txt['icon_grin'] = 'Cerim se';
$txt['icon_shocked'] = 'Šokiran';
$txt['icon_cool'] = 'Cool';
$txt['icon_huh'] = 'Š?';
$txt['icon_rolleyes'] = 'Vrtim očima';
$txt['icon_tongue'] = 'Jezik';
$txt['icon_embarrassed'] = 'Osramoćen';
$txt['icon_lips'] = 'Vezanih usana';
$txt['icon_undecided'] = 'Neodlučan';
$txt['icon_kiss'] = 'Poljubac';
$txt['icon_cry'] = 'Plač';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatori';

$txt['mark_board_read'] = 'Označi ovaj Forum kao Pročitan';
$txt['views'] = 'Hitova';
$txt['new'] = 'Novo';

$txt['view_all_members'] = 'Svi korisnici';
$txt['view'] = 'Prikaži';

$txt['viewing_members'] = 'Pregled članova %1$s do %2$s ';
$txt['of_total_members'] = 'od ukupno %1$s članova';

$txt['forgot_your_password'] = 'Zaboravili ste lozinku?';

$txt['date'] = 'Datum';
// Use numeric entities in the below string.
$txt['from'] = 'Od';
$txt['check_new_messages'] = 'Osvježi';
$txt['to'] = 'Za';

$txt['board_topics'] = 'Tema';
$txt['members_title'] = 'Članovi';
$txt['members_list'] = 'Lista Članova';
$txt['new_posts'] = 'Novi Postovi';
$txt['old_posts'] = 'Nema Novih Postova';
$txt['redirect_board'] = 'Rubrika Preusmjerenja';

$txt['sendtopic_send'] = 'Pošalji';
$txt['report_sent'] = 'Vaša prijava uspješno je poslana.';

$txt['time_offset'] = 'Vremenski Pomak';
$txt['or'] = 'ili';

$txt['no_matches'] = 'Nažalost, ništa nije pronađeno';

$txt['notification'] = 'Obavijesti';

$txt['your_ban'] = 'Žao nam je %1$s, zabranjen vam je pristup ovom forumu!';
$txt['your_ban_expires'] = 'Ova zabrana će isteći %1$s.';
$txt['your_ban_expires_never'] = 'Ova zabrana nije postavljena da istekne.';
$txt['ban_continue_browse'] = 'Možete nastaviti pregledavati forum kao gost.';

$txt['mark_as_read'] = 'Označi kao Pročitano';

$txt['hot_topics'] = 'Popularna Tema (Više od %s odgovora)';
$txt['very_hot_topics'] = 'Vrlo Popularna Tema (Više od %s odgovora)';
$txt['locked_topic'] = 'Zaključana Tema';
$txt['normal_topic'] = 'Normalna Tema';
$txt['participation_caption'] = 'Teme u kojima ste vi sudjelovali';

$txt['go_caps'] = 'Kreni';

$txt['print'] = 'Ispis';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Pregled Teme';
$txt['not_applicable'] = 'n/a';
$txt['message_lowercase'] = 'poruka';
$txt['name_in_use'] = 'Ovo ime već postoji.';

$txt['total_members'] = 'Ukupno Članova';
$txt['total_posts'] = 'Ukupno Postova';
$txt['total_topics'] = 'Ukupno Tema';

$txt['mins_logged_in'] = 'Zapamti me ovoliko minuta';

$txt['preview'] = 'Pregled';
$txt['always_logged_in'] = 'Zapamti me Zauvijek';

$txt['logged'] = 'Evidentirano';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'od';

$txt['hours'] = 'sati';
$txt['days_word'] = 'dana';

$txt['newest_member'] = ', naš najnoviji član.';

$txt['search_for'] = 'Ključne riječi';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hej.+Ima+li+koga?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Ne zaboravite, ovaj forum je u \'Modu za Održavanje\'.';

$txt['read'] = 'Posjeta:';
$txt['times'] = 'vremena';

$txt['forum_stats'] = 'Statistika Foruma';
$txt['latest_member'] = 'Najnoviji Član';
$txt['total_cats'] = 'Ukupno Kategorija';
$txt['latest_post'] = 'Najnoviji Post';

$txt['you_have'] = 'Imate';
$txt['click'] = 'Pogledajte ih';
$txt['here'] = 'ovdje';
$txt['to_view'] = 'za pregledati.';

$txt['total_boards'] = 'Ukupno Foruma';

$txt['print_page'] = 'Ispis Stranice';

$txt['valid_email'] = 'Ovo mora biti valjana email adresa.';

$txt['geek'] = 'Ja sam geek!!';
$txt['info_center_title'] = '%1$s - Info Centar';

$txt['send_topic'] = 'Preporuka';

$txt['sendtopic_title'] = 'Preporučite temu &quot;%1$s&quot; prijateljima.';
$txt['sendtopic_sender_name'] = 'Vaše ime';
$txt['sendtopic_sender_email'] = 'Vaša email adresa';
$txt['sendtopic_receiver_name'] = 'Ime primatelja';
$txt['sendtopic_receiver_email'] = 'Email adresa primatelja';
$txt['sendtopic_comment'] = 'Komentar';

$txt['allow_user_email'] = 'Dozvola korisnicima da vam šalju email';

$txt['check_all'] = 'Označi sve';

// Use numeric entities in the below string.
$txt['database_error'] = 'Greška u bazi podataka';
$txt['try_again'] = 'Pokušajte ponovno.  Ako ponovno dođe do ove greške, obavijestite administratora.';
$txt['file'] = 'Datoteka';
$txt['line'] = 'Linija';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF je otkrio i pokušao automatski popraviti grešku u vašoj bazi podataka.  Ako i dalje budete imali problema ili ako i dalje budete primali ovakav email, kontaktirajte svoju hosting tvrtku.';
$txt['database_error_versions'] = '<b>:</b> Izgleda da vaša baza podataka <em>možda</em> treba noviju verziju. Datoteke vašeg foruma trenutno su verzija  %s, a verzija vaše baze podataka je %s. Greška koja se javlja iznad, možda će biti ispravljena ako instalirate najnoviju verziju upgrade.php.
<strong>Napomena:</strong> Čini se da vaša baza podataka <em>možda</em> treba nadogradnju. Vaše forumske datoteke su trenutno na verziji %1$s, dok je baza na verziji %2$s. Gornja pogreška možda će se rješiti ako preuzmete, pokrenete i izvršite posljednju verziju upgrade.php alata.';
$txt['template_parse_error'] = 'Parse Greška predloška!';
$txt['template_parse_error_message'] = 'Izgleda da je došlo do problema sa predloškom foruma.  Ovaj problem trebao bi biti samo privremen pa vas molimo da se vratite kasnije i pokušate ponovno.   Ako se ova poruka bude i dalje pojavljivala, molimo vas da kontaktirate administratora.<br /><br />You can also try <a href="javascript:location.reload();">refreshing this page</a>.';
$txt['template_parse_error_details'] = 'Došlo je do problema kod učitavanja <tt><strong>%1$s</strong></tt> predloška ili jezične datoteke. Molimo provjerite sintasku i pokušajte ponovo - zapamtite, jednostruki navodnici (<tt>\'</tt>) često moraju imati unatrag ukošenu crtu  (<tt>\\</tt>) ispred sebe. Da biste vidjeli detaljniju informaciju o pogrešci od strane PHP-a, pokušajte <a href="' . $boardurl . '%1$s">direktno pristupiti datoteci</a>.

Mogli biste pokušati <a href="javascript:location.reload();">osvježiti ovu stranicu</a> ili <a href="' . $scripturl . '?theme=1">koristiti osnovnu temu</a>.';

$txt['today'] = '<strong>Danas</strong> u ';
$txt['yesterday'] = '<strong>Jučer</strong> u ';
$txt['new_poll'] = 'Nova Anketa';
$txt['poll_question'] = 'Pitanje';
$txt['poll_vote'] = 'Glasaj';
$txt['poll_total_voters'] = 'Ukupno Glasova';
$txt['shortcuts'] = 'kratice: alt+s za slanje ili alt+p za pregled poruke';
$txt['shortcuts_firefox'] = 'kratice: pritisnite Shift+Alt+S za slanje/objavu ILI Shift+Alt+P za pregled';
$txt['poll_results'] = 'Rezultati';
$txt['poll_lock'] = 'Zaključaj Glasanje';
$txt['poll_unlock'] = 'Otključaj Glasanje';
$txt['poll_edit'] = 'Uređivanje Ankete';
$txt['poll'] = 'Anketa';
$txt['one_day'] = '1 Dan';
$txt['one_week'] = '1 Tjedan';
$txt['one_month'] = '1 Mjesec';
$txt['forever'] = 'Beskonačno';
$txt['quick_login_dec'] = 'Prijavite se korisničkim imenom, lozinkom i duljinom prijave';
$txt['one_hour'] = '1 Sat';
$txt['moved'] = 'Premješteno';
$txt['moved_why'] = 'Kratki opis o razlogu premještanja.';
$txt['board'] = 'Forum';
$txt['in'] = 'u';
$txt['sticky_topic'] = 'Stalna Tema';

$txt['delete'] = 'Izbriši';

$txt['your_pms'] = 'Vaše Privatne Poruke';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Ostale Statistike]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Kod';
$txt['code_select'] = '[Odaberi]';
$txt['quote_from'] = 'Citat';
$txt['quote'] = 'Citat:';

$txt['merge_to_topic_id'] = 'ID ciljne teme';
$txt['split'] = 'Razdvajanje Teme';
$txt['merge'] = 'Spajanje Tema';
$txt['subject_new_topic'] = 'Naslov Nove Teme';
$txt['split_this_post'] = 'Odvojiti samo ovaj post.';
$txt['split_after_and_this_post'] = 'Odvojiti ovaj post i postove ispod.';
$txt['select_split_posts'] = 'Odabir postova za odvajanje.';
$txt['new_topic'] = 'Nova Tema';
$txt['split_successful'] = 'Tema je uspješno razdvojena na dvije teme.';
$txt['origin_topic'] = 'Izvorna Tema';
$txt['please_select_split'] = 'Odaberite postove koje želite odvojiti.';
$txt['merge_successful'] = 'Teme su uspješno spojene.';
$txt['new_merged_topic'] = 'NovoStvorena Tema';
$txt['topic_to_merge'] = 'Teme za spojiti';
$txt['target_board'] = 'Ciljni forum';
$txt['target_topic'] = 'Tema';
$txt['merge_confirm'] = 'Jeste li sigurni da želite spojiti';
$txt['with'] = 'sa';
$txt['merge_desc'] = 'Ova funkcija će spojiti poruke iz dvije temu u jednu novu temu. Poruke će biti sortirane po datumu. Najstarija poruka iz obje teme će postati prva poruka nove teme.';

$txt['set_sticky'] = 'Zalijepiti ovu temu';
$txt['set_nonsticky'] = 'Odlijepiti ovu temu';
$txt['set_lock'] = 'Zaključati ovu temu';
$txt['set_unlock'] = 'Otključati ovu temu';

$txt['search_advanced'] = 'Napredno pretraživanje';

$txt['security_risk'] = 'VELIKI SIGURNOSNI RIZIK:';
$txt['not_removed'] = 'Niste uklonili ';
$txt['not_removed_extra'] = '%1$s je sigurnosna kopija od %2$s koju nije generirao SMF. Može joj se direktno pristupiti i iskoristiti za pridobivanje neautoriziranog pristupa vašem forumu. Trebali biste ju odmah izbrisati.';

$txt['cache_writable_head'] = 'Upozorenje na Performanse';
$txt['cache_writable'] = 'U Cache direktorij nije moguće zapisivati - ovo će negativno utjecati na performanse vašeg foruma.';

$txt['page_created'] = 'Stranica je generirana za ';
$txt['seconds_with'] = ' sekundi uz ';
$txt['queries'] = ' upita.';

$txt['report_to_mod_func'] = 'Koristite ovaj obrazac da biste informirali moderatore i administratore o uvredljivom ili pogrešno objavljenom postu.<br /><em>Molimo zapamtite da će vaša email adresa biti otkrivena moderatorima ako koristite ovu funkciju.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Privatna Poruka (Online)';
$txt['pm_offline'] = 'Privatna Poruka (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Gore';
$txt['go_down'] = 'Dolje';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2016</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Rođendani:';
$txt['events'] = 'Događaji:';
$txt['birthdays_upcoming'] = 'Nadolazeći Rođendani:';
$txt['events_upcoming'] = 'Nadolazeći Događaji:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Mjesec:';
$txt['calendar_year'] = 'Godina:';
$txt['calendar_day'] = 'Dan:';
$txt['calendar_event_title'] = 'Naslov Događaja';
$txt['calendar_event_options'] = 'Opcije događaja';
$txt['calendar_post_in'] = 'Poslati u:';
$txt['calendar_edit'] = 'Uređivanje Događaja';
$txt['event_delete_confirm'] = 'Izbrisati ovaj događaj?';
$txt['event_delete'] = 'Brisanje Događaja';
$txt['calendar_post_event'] = 'Dodavanje Događaja';
$txt['calendar'] = 'Kalendar';
$txt['calendar_link'] = 'Link na Kalendar';
$txt['calendar_upcoming'] = 'Nadolazeći kalendar';
$txt['calendar_today'] = 'Današnji kalendar';
$txt['calendar_week'] = 'Tjedan';
$txt['calendar_week_title'] = 'Tjedan %1$d od %2$d';
$txt['calendar_numb_days'] = 'Broj dana:';
$txt['calendar_how_edit'] = 'kako se uređuju ovi događaji?';
$txt['calendar_link_event'] = 'Link na Događaj';
$txt['calendar_confirm_delete'] = 'Jeste li sigurni da želite izbrisati ovaj događaj?';
$txt['calendar_linked_events'] = 'Povezani Događaji';
$txt['calendar_click_all'] = 'kliknite da biste vidjeli sve %1$s';

$txt['moveTopic1'] = 'Obavijest o premještanju na izvornom mjestu teme';
$txt['moveTopic2'] = 'Promijeni naslov teme';
$txt['moveTopic3'] = 'Novi naslov';
$txt['moveTopic4'] = 'Promijeni naslove svih postova u temi';
$txt['move_topic_unapproved_js'] = 'Upozorenje! Ova tema još nije odobrena.\\n\\nNije preporučeno da izradite Temu za preusmjerenje, osim ako ne namjeravate odobriti post odmah nakon premještanja.';

$txt['theme_template_error'] = 'Nije uspjelo učitavanje \'%1$s\' predloška.';
$txt['theme_language_error'] = 'Nije uspjelo učitavanje jezične datoteke \'%1$s\'.';

$txt['parent_boards'] = 'Podrubrike';

$txt['smtp_no_connect'] = 'Ne mogu se spojiti na SMTP poslužitelj';
$txt['smtp_port_ssl'] = 'SMTP port postavke su neispravne; treba biti 465 za SSL servere.';
$txt['smtp_bad_response'] = 'Ne mogu dobiti odgovor email poslužitelja';
$txt['smtp_error'] = 'Problemi prilikom slanja emaila. Greška: ';
$txt['mail_send_unable'] = 'Neuspješno slanje emaila na adresu \'%1$s\'';

$txt['mlist_search'] = 'Traženje korisnika';
$txt['mlist_search_again'] = 'Traži ponovo';
$txt['mlist_search_email'] = 'Po email adresi';
$txt['mlist_search_messenger'] = 'Po nadimku';
$txt['mlist_search_group'] = 'Po poziciji';
$txt['mlist_search_name'] = 'Po imenu';
$txt['mlist_search_website'] = 'Po websajtu';
$txt['mlist_search_results'] = 'Rezultati za';
$txt['mlist_search_by'] = 'Pretraživanje po %1$s';
$txt['mlist_menu_view'] = 'Vidi Popis članova';

$txt['attach_downloaded'] = '<span class="verysmall">(downloada:';
$txt['attach_viewed'] = '(hitova:';
$txt['attach_times'] = ')</span>';

$txt['settings'] = 'Postavke';
$txt['never'] = 'Nikada';
$txt['more'] = 'više';

$txt['hostname'] = 'Host';
$txt['you_are_post_banned'] = 'Nažalost %1$s, zabranjeno vam je pisanje postova i slanje privatnoh poruka na ovom forumu.';
$txt['ban_reason'] = 'Razlog';

$txt['tables_optimized'] = 'Baza je optimizirana';

$txt['add_poll'] = 'Dodavanje Ankete';
$txt['poll_options6'] = 'Možete imati maksimalno %1$s opcija.';
$txt['poll_remove'] = 'Brisanje Ankete';
$txt['poll_remove_warn'] = 'Jeste li sigurni da želite ukloniti ovu Anketu?';
$txt['poll_results_expire'] = 'Rezultati će biti prikazani kada glasanje završi.';
$txt['poll_expires_on'] = 'Glasanje završava';
$txt['poll_expired_on'] = 'Glasanje završeno';
$txt['poll_change_vote'] = 'Ukloni moj glas';
$txt['poll_return_vote'] = 'Glasačke Opcije';
$txt['poll_cannot_see'] = 'Ne možete vidjeti rezultate ove ankete u ovom trenutku.';

$txt['quick_mod_approve'] = 'Odobri odabrano';
$txt['quick_mod_remove'] = 'Ukloni odabrano';
$txt['quick_mod_lock'] = 'Zaključaj/Otključaj odabrano';
$txt['quick_mod_sticky'] = 'Postavi/Ukloni oznaku Stalnog članka za odabrano';
$txt['quick_mod_move'] = 'Premjesti odabrano na';
$txt['quick_mod_merge'] = 'Spoji odabrano';
$txt['quick_mod_markread'] = 'Označi pročitanim';
$txt['quick_mod_go'] = 'Kreni!';
$txt['quickmod_confirm'] = 'Jeste li sigurni da želite to učiniti?';

$txt['spell_check'] = 'Provjera Pravopisa';

$txt['quick_reply'] = 'Brzi Odgovor';
$txt['quick_reply_desc'] = 'Sa <em>Brzim Odgovorom</em> možete napisati post dok pregledavate temu, bez potrebe učitavanja nove stranice. I dalje možete koristiti BB kod i smajlije kao što možete u normalnoj objavi posta.';
$txt['quick_reply_warning'] = 'Upozorenje: ova tema je trenutno zaključana! Samo administratori i moderatori mogu odgovarati.';
$txt['quick_reply_verification'] = 'Nakon objave vašeg posta biti ćete preusmjereni na redovnu post stranicu da biste provjerili vaš post %1$s.';
$txt['quick_reply_verification_guests'] = '(obavezno za sve goste)';
$txt['quick_reply_verification_posts'] = '(obavezno za sve korisnike s manje od %1$d postova)';
$txt['wait_for_approval'] = 'Napomena: ovaj post neće biti objavljen sve dok ga ne odobri moderator.';

$txt['notification_enable_board'] = 'Jeste li sigurni da želite Uključiti obavjesti o novim temama u ovoj rubrici?';
$txt['notification_disable_board'] = 'Jeste li sigurni da želite Isključiti obavjesti o novim temama u ovoj rubrici?';
$txt['notification_enable_topic'] = 'Jeste li sigurni da želite Uključiti obavjesti o novim odgovorima u ovoj temi?';
$txt['notification_disable_topic'] = 'Jeste li sigurni da želite Isključiti obavjesti o novim odgovorima u ovoj temi?';

$txt['report_to_mod'] = 'Prijaviti moderatoru';
$txt['issue_warning_post'] = 'Izdajte upozorenje zbog ove poruke';

$txt['unread_topics_visit'] = 'Nove Nepročitane Teme';
$txt['unread_topics_visit_none'] = 'Nema nepročitanih tema od vaše zadnje posjete.  <a href="' . $scripturl . '?action=unread;all">Kliknite ovdje za sve nepročitane teme</a>.';
$txt['unread_topics_all'] = 'Sve Nepročitane Teme';
$txt['unread_replies'] = 'Novi odgovori';

$txt['who_title'] = 'Tko je Online';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' pregledava ovu temu.';
$txt['who_viewing_board'] = ' pregledava ovaj forum.';
$txt['who_member'] = 'Član';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Pokreće PHP';
$txt['powered_by_mysql'] = 'Pokreće MySQL';
$txt['valid_css'] = 'Valjani CSS!';

// Current footer strings
$txt['valid_html'] = 'Valjani HTML 4.01!';
$txt['valid_xhtml'] = 'Valjani XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Gost';
$txt['guests'] = 'Gostiju';
$txt['user'] = 'Korisnik';
$txt['users'] = 'Korisnika';
$txt['hidden'] = 'Skriven';
$txt['buddy'] = 'Prijatelj';
$txt['buddies'] = 'Prijatelja';
$txt['most_online_ever'] = 'Najviše Online Ikada';
$txt['most_online_today'] = 'Najviše Online Danas';

$txt['merge_select_target_board'] = 'Odaberite ciljnu rubriku za spojenu temu';
$txt['merge_select_poll'] = 'Odaberi koja anketa će ostati na spojenoj temi';
$txt['merge_topic_list'] = 'Odabir tema za spajanje';
$txt['merge_select_subject'] = 'Odaberite naslov spojene teme';
$txt['merge_custom_subject'] = 'Novi naslov';
$txt['merge_enforce_subject'] = 'Promjeniti naslov svih poruka';
$txt['merge_include_notifications'] = 'Obavijesti?';
$txt['merge_check'] = 'Spojiti?';
$txt['merge_no_poll'] = 'Bez ankete';

$txt['response_prefix'] = 'Odg: ';
$txt['current_icon'] = 'Trenutna Ikona';
$txt['message_icon'] = 'Ikona poruke';

$txt['smileys_current'] = 'Trenutni Smajliji';
$txt['smileys_none'] = 'Bez Smajlija';
$txt['smileys_forum_board_default'] = 'Forum Default';

$txt['search_results'] = 'Rezultati Pretraživanja';
$txt['search_no_results'] = 'Nažalost, pretraživanje nije dalo rezultata';

$txt['totalTimeLogged1'] = 'Ukupno vrijeme provedeno na forumu: ';
$txt['totalTimeLogged2'] = ' dan(a), ';
$txt['totalTimeLogged3'] = ' sat(i) i ';
$txt['totalTimeLogged4'] = ' min.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Trenutno';
$txt['approve_thereare'] = 'Trenutno';
$txt['approve_member'] = 'jedan član';
$txt['approve_members'] = 'članova';
$txt['approve_members_waiting'] = 'čeka odobrenje.';

$txt['notifyboard_turnon'] = 'Želite li primati email obavijesti o novim temama u ovoj rubrici?';
$txt['notifyboard_turnoff'] = 'Jeste li sigurni da više ne želite primati email obavijesti o novim temama u ovoj rubrici?';

$txt['activate_code'] = 'Vaš aktivacijski kod je';

$txt['find_members'] = 'Pronađi Korisnike';
$txt['find_username'] = 'Ime, korisničko ime ili email adresa';
$txt['find_buddies'] = 'Prikazati samo prijatelje?';
$txt['find_wildcards'] = 'Dozvoljeni Jockeri: *, ?';
$txt['find_no_results'] = 'Ništa nije pronađeno';
$txt['find_results'] = 'Rezultati';
$txt['find_close'] = 'Zatvori';

$txt['unread_since_visit'] = 'Novi postovi od vaše zadnje posjete';
$txt['show_unread_replies'] = 'Novi odgovori na vaše postove';

$txt['change_color'] = 'Promjena Boje';

$txt['quickmod_delete_selected'] = 'Izbrisati Označeno';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Primili ste jednu ili više privatnih poruka.\\nŽelite li otvoriti novi prozor da ih pregledate?';

$txt['previous_next_back'] = '&laquo; natrag';
$txt['previous_next_forward'] = 'naprijed &raquo;';

$txt['movetopic_auto_board'] = '[RUBRIKA] ';
$txt['movetopic_auto_topic'] = '[LINK TEME] ';
$txt['movetopic_default'] = 'Ova tema je premještena u ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Smanjite ili povećajte zaglavlje.';

$txt['mark_unread'] = 'Nepročitano';

$txt['ssi_not_direct'] = 'Molimo, nemojte pristupati SSI.php datoteci direktno putem URL-a; bolje je da koristite (%s) ili dodate ?ssi_function=nesto.';
$txt['ssi_session_broken'] = 'SSI.php nije uspio učitati session! To bi moglo predstavljati probleme sa odjavom i ostalim funkcijama - molimo provjerite da li je SSI.php \'include-an\' prije  BILO ČEGA drugog u Vašoj skripti!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Pregled posta';
$txt['preview_fetch'] = 'Otvaranje pregleda...';
$txt['preview_new'] = 'Nova poruka';
$txt['error_while_submitting'] = 'Pri slanju ove poruke je došlo do slijedećih grešaka:';
$txt['error_old_topic'] = 'Upozorenje: u ovoj temi nije objavljeno najmanje %1$d dana.<br /> Osim ako ste sigurni da želite odgovoriti, molimo vas da razmislite o započinjanju nove teme..';

$txt['split_selected_posts'] = 'Odabrani postovi';
$txt['split_selected_posts_desc'] = 'Postovi odabrani ispod će formirati novu temu nakon razdvajanja.';
$txt['split_reset_selection'] = 'poništi odabir';

$txt['modify_cancel'] = 'Odustani';
$txt['mark_read_short'] = 'Pročitano';

$txt['pm_short'] = 'Moje Poruke';
$txt['pm_menu_read'] = 'Pročitajte svoje poruke';
$txt['pm_menu_send'] = 'Pošaljite poruku';

$txt['hello_member_ndt'] = 'Pozdrav';

$txt['unapproved_posts'] = 'Neodobreni postovi (Teme: %1$d, Postovi: %2$d)';

$txt['ajax_in_progress'] = 'Učitava se...';

$txt['mod_reports_waiting'] = 'Trenutno je otvoreno %1$d Prijava moderatoru.';

$txt['view_unread_category'] = 'Nepročitani postovi';
$txt['verification'] = 'Verifikacija';
$txt['visual_verification_description'] = 'Upišite znakove prikazane na slici';
$txt['visual_verification_sound'] = 'Poslušajte znakove';
$txt['visual_verification_request_new'] = 'Zatražite novu sliku';

// Sub menu labels
$txt['summary'] = 'Sažetak';
$txt['account'] = 'Postavke računa';
$txt['forumprofile'] = 'Forumski profil';

$txt['modSettings_title'] = 'Značajke i Opcije';
$txt['package'] = 'Upravitelj Paketima';
$txt['errlog'] = 'Dnevnik Grešaka';
$txt['edit_permissions'] = 'Dozvole';
$txt['mc_unapproved_attachments'] = 'Neodobreni privitci';
$txt['mc_unapproved_poststopics'] = 'Neodobreni Postovi i Teme';
$txt['mc_reported_posts'] = 'Prijavljeni Postovi';
$txt['modlog_view'] = 'Dnevnik moderiranja';
$txt['calendar_menu'] = 'Vidi kalendar';

//!!! Send email strings - should move?
$txt['send_email'] = 'Šalji Email';
$txt['send_email_disclosed'] = 'Napomena: to će biti vidljivo primatelju';
$txt['send_email_subject'] = 'Tema Emaila';

$txt['ignoring_user'] = 'Ignorirate tog korisnika';
$txt['show_ignore_user_post'] = 'Prikaži mi taj post.';

$txt['spider'] = 'Pauk';
$txt['spiders'] = 'Pauci';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Preuzimanja';
$txt['filesize'] = 'Veličina datoteke';
$txt['subscribe_webslice'] = 'Pretplatite se na Webslice';

// Restore topic
$txt['restore_topic'] = 'Vrati Temu';
$txt['restore_message'] = 'Vrati';
$txt['quick_mod_restore'] = 'Vrati odabrano';

// Editor prompt.
$txt['prompt_text_email'] = 'Molimo unesite email adresu.';
$txt['prompt_text_ftp'] = 'Molimo unesite FTP adresu.';
$txt['prompt_text_url'] = 'Molimo unesite URL na koji želite postaviti vezu.';
$txt['prompt_text_img'] = 'Unesite lokaciju slike';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Izbrišite stavku';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Predlošci:';
$txt['debug_subtemplates'] = 'PodPredlošci';
$txt['debug_language_files'] = 'Jezične datoteke:';
$txt['debug_stylesheets'] = 'Stilski Predlošci (CSS):';
$txt['debug_files_included'] = 'Uključene datoteke:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'prikaži';
$txt['debug_cache_hits'] = 'Cache "hitova":';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bajtova';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss za %2$s bajtova';
$txt['debug_queries_used'] = 'Korišteni upiti: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Korišteni upiti: %1$d, %2$d upozorenja.';
$txt['debug_query_in_line'] = 'u <em>%1$s</em> liniji <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'za što je trebalo %1$s sekundi.';
$txt['debug_query_which_took_at'] = 'za što je trebalo %1$s sekundi na %2$s u zahtjevu.';
$txt['debug_show_queries'] = '[Prikaži Upite]';
$txt['debug_hide_queries'] = '[Sakrij Upite]';

?>