<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Datum';
$txt['modlog_member'] = 'Član';
$txt['modlog_position'] = 'Pozicija';
$txt['modlog_action'] = 'Akcija';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Rezultati pretrage';
$txt['modlog_total_entries'] = 'Ukupni unosi';
$txt['modlog_ac_approve_topic'] = 'Odobrena tema &quot;{topic}&quot; od &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Odobrena poruka &quot;{subject}&quot; u &quot;{topic}&quot; od &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Zaključano &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = 'Upozoren {member} zbog &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Otključan &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Zaljepljen &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Odljepljen &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Obrisan &quot;{subject}&quot; od &quot;{member}&quot; iz &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Izbrisan član &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Obrisana tema &quot;{topic}&quot; u &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Izmjenjena &quot;{message}&quot; od &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Teme spojene da bi se dobio &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Razdvojena &quot;{topic}&quot; da bi se stvorila &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Uklonjena &quot;{topic}&quot; iz &quot;{board_from}&quot; u &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Izmjenjen profil od &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Pobrisane neke poruke starije od {days} dana';
$txt['modlog_ac_news'] = 'Izmjena vijesti';
$txt['modlog_enter_comment'] = 'Unos moderacijskog komentara';
$txt['modlog_moderation_log'] = 'Dnevnik Moderatorskih Akcija';
$txt['modlog_moderation_log_desc'] = 'Ispod je lista svih moderatorskih akcija koje su zabilježene na vašem forumu.<br /><strong>Molimo primijetite:</strong> Unosi iz ovog zapisa ne mogu biti uklonjeni dok nisu stari najmanje 24 sata.';
$txt['modlog_no_entries_found'] = 'Trenutno nema zapisa u moderatorskom dnevniku.';
$txt['modlog_remove'] = 'Ukloni';
$txt['modlog_removeall'] = 'Ukloni Sve';
$txt['modlog_go'] = 'Idi';
$txt['modlog_add'] = 'Dodaj';
$txt['modlog_search'] = 'Brza pretraga';
$txt['modlog_by'] = 'Od';
$txt['modlog_id'] = '<em>(ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = 'Dodan predložak upozorenja: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = 'Izmjenjen predložak upozorenja: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Izbrisan predložak upozorenja: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Dodani okidači banova';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Član:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = '<em>Hostname:</em> {hostname}';

$txt['modlog_admin_log'] = 'Dnevnik administracije';
$txt['modlog_admin_log_desc'] = 'Ispod je lista svih administratorskih akcija koje su zabilježene na vašem forumu.<br /><strong>Molimo primijetite:</strong> Unosi iz ovog zapisa ne mogu biti uklonjeni dok nisu stari najmanje 24 sata.';
$txt['modlog_admin_log_no_entries_found'] = 'Trenutno nema administratorskih dnevničkih zapisa.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Forum nadograđen na verziju {version}';
$txt['modlog_ac_install'] = 'Instalirana verzija {version}';
$txt['modlog_ac_add_board'] = 'Dodana nova rubrika: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Izmjenjena &quot;{board}&quot; rubrika';
$txt['modlog_ac_delete_board'] = 'Izbrisana &quot;{boardname}&quot; rubrika';
$txt['modlog_ac_add_cat'] = 'Dodana nova kategorija, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Editirana &quot;{catname}&quot; kategorija';
$txt['modlog_ac_delete_cat'] = 'Izbrisana &quot;{catname}&quot; kategorija';

$txt['modlog_ac_delete_group'] = 'Izbrisana &quot;{group}&quot; grupa';
$txt['modlog_ac_add_group'] = 'Dodana &quot;{group}&quot; grupa';
$txt['modlog_ac_edited_group'] = 'Editirana &quot;{group}&quot; grupa';
$txt['modlog_ac_added_to_group'] = 'Dodan &quot;{member}&quot; u &quot;{group}&quot; grupu';
$txt['modlog_ac_removed_from_group'] = 'Uklonjen &quot;{member}&quot; iz the &quot;{group}&quot; grupe';
$txt['modlog_ac_removed_all_groups'] = 'Uklonjen &quot;{member}&quot; iz svih grupa';

$txt['modlog_ac_remind_member'] = 'Poslan podsjetnik &quot;{member}&quot; da aktivira svoj nalog';
$txt['modlog_ac_approve_member'] = 'Odobren/Aktiviran nalog od &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Poslan newsletter';

$txt['modlog_ac_install_package'] = 'Instaliran novi paket: &quot;{package}&quot;, verzija {version}';
$txt['modlog_ac_upgrade_package'] = 'Nadograđen paket: &quot;{package}&quot; na verziju {version}';
$txt['modlog_ac_uninstall_package'] = 'Deinstaliran paket: &quot;{package}&quot;, verzija {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Vraćena tema &quot;{topic}&quot; iz &quot;{board}&quot; u &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Vraćene poruke iz &quot;{subject}&quot; u temu &quot;{topic}&quot; u &quot;{board}&quot; rubrici.';

$txt['modlog_parameter_guest'] = '<em>Gost</em>';

?>