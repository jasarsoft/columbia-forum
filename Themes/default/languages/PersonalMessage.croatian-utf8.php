<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Privatne Poruke';
$txt['send_message'] = 'Pošalji Poruku';
$txt['pm_add'] = 'Dodaj';
$txt['make_bcc'] = 'Dodaj BBC';
$txt['pm_to'] = 'Primatelj';
$txt['pm_bcc'] = 'Bcc';
$txt['inbox'] = 'Sandučić';
$txt['conversation'] = 'Razgovor';
$txt['messages'] = 'Poruke';
$txt['sent_items'] = 'Poslane Stavke';
$txt['new_message'] = 'Nova Poruka';
$txt['delete_message'] = 'Brisanje Poruka';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Brisanje svih poruka u vašem PMBOX';
$txt['delete_all_confirm'] = 'Jeste li sigurni da želite izbrisati sve poruke?';
$txt['recipient'] = 'Primatelj';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nova Privatna Poruka: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Korisnik SENDER vam je poslao privatnu poruku sa ' . $context['forum_name'] . '.' . "\n\n" . 'NAPOMENA: Ovo je samo obavijest. Nemojte odgovarati na ovu poruku.' . "\n\n" . 'Poruka glasi:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(više primatelja: \'ime1, ime2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Odgovorite na ovu Privatnu Poruku ovdje:';

$txt['delete_selected_confirm'] = 'Jeste li sigurni da želite izbrisati sve označene privatne poruke?';

$txt['sent_to'] = 'Primatelj';
$txt['reply_to_all'] = 'Odgovor na Sve';
$txt['delete_conversation'] = 'Izbriši Razgovor';

$txt['pm_capacity'] = 'Kapacitet';
$txt['pm_currently_using'] = '%1$s poruka, %2$s%% iskorišteno.';
$txt['pm_sent'] = 'Your message has been sent successfully.';

$txt['pm_error_user_not_found'] = 'Nije pronađen korisnik \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'Korisnik \'%1$s\' je blokirao vašu privatnu poruku.';
$txt['pm_error_data_limit_reached'] = 'PP za \'%1$s\' nije poslana jer je korisnikov inbox pun!';
$txt['pm_error_user_cannot_read'] = 'User \'%1$s\' can not receive personal messages.';
$txt['pm_successfully_sent'] = 'Uspješno poslana PP za \'%1$s\'.';
$txt['pm_send_report'] = 'Pošalji izvještaj';
$txt['pm_save_outbox'] = 'Spremi kopiju u moj outbox';
$txt['pm_undisclosed_recipients'] = 'Neotkriveni primatelji';
$txt['pm_too_many_recipients'] = 'Ne smijete poslati poruku na više od %1$d primatelja odjednom.';

$txt['pm_read'] = 'Pročitaj';
$txt['pm_replied'] = 'Odgovoreno';

// Message Pruning.
$txt['pm_prune'] = 'Počisti Poruke';
$txt['pm_prune_desc1'] = 'Izbriši sve privatne poruke starije od';
$txt['pm_prune_desc2'] = 'dana.';
$txt['pm_prune_warning'] = 'Sigurni ste da želite počistiti svoje privatne poruke?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Daljnje Akcije';
$txt['pm_actions_delete_selected'] = 'Izbriši Odabrano';
$txt['pm_actions_filter_by_label'] = 'Filtriraj po Nazivu';
$txt['pm_actions_go'] = 'Kreni';

// Manage Labels Screen.
$txt['pm_apply'] = 'Primjeni';
$txt['pm_manage_labels'] = 'Uredi Mape';
$txt['pm_labels_delete'] = 'Sigurni ste da želite izbrisati odabrane mape?';
$txt['pm_labels_desc'] = 'Odavdje možete dodati, urediti ili izbrisati mape koje koristite u centru za privatne poruke.';
$txt['pm_label_add_new'] = 'Nova Mapa';
$txt['pm_label_name'] = 'Mapa';
$txt['pm_labels_no_exist'] = 'Trenutno nemate definiranih mapa!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Mapa';
$txt['pm_msg_label_title'] = 'Dodjeli Poruku Mapi';
$txt['pm_msg_label_apply'] = 'Dodaj Mapu';
$txt['pm_msg_label_remove'] = 'Izbriši Mapu';
$txt['pm_msg_label_inbox'] = 'Inbox';
$txt['pm_sel_label_title'] = 'Dodjeli Označeno Mapi';

// Sidebar Headings.
$txt['pm_labels'] = 'Mape';
$txt['pm_messages'] = 'Poruke';
$txt['pm_actions'] = 'Actions';
$txt['pm_preferences'] = 'Postavke';

$txt['pm_is_replied_to'] = 'Na ovu poruku ste odgovorili ili ste je proslijedili.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Prijavi Administratoru';
$txt['pm_report_title'] = 'Obavijesti o privatnoj poruci';
$txt['pm_report_desc'] = 'S ove stranice možete administratorima prijaviti neprihvatljive privatne poruke koje ste primili. Uključite objašnjenje zašto prijavljujete ovu poruku, ono će biti poslano uz originalnu poruku.';
$txt['pm_report_admins'] = 'Administrator kojemu šaljete obavijest';
$txt['pm_report_all_admins'] = 'Pošalji svim forum administratorima';
$txt['pm_report_reason'] = 'Razlog prijavljivanja ove poruke';
$txt['pm_report_message'] = 'Pošalji';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[PRIJAVA] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} je prijavio privatnu poruku ispod, koju je poslao {SENDER}, iz slijedećih razloga:';
$txt['pm_report_pm_other_recipients'] = 'Drugi primatelji poruke:';
$txt['pm_report_pm_hidden'] = '%1$d skriven(a) primatelj(a)';
$txt['pm_report_pm_unedited_below'] = 'Ispod se nalazi originalni sadržaj prijavljene poruke:';
$txt['pm_report_pm_sent'] = 'Poslano:';

$txt['pm_report_done'] = 'Hvala na obavijesti. Administratorski tim će vam se ubrzo javiti';
$txt['pm_report_return'] = 'Povratak u inbox';

$txt['pm_search_title'] = 'Pretraži Privatne Poruke';
$txt['pm_search_bar_title'] = 'Pretraži Poruke';
$txt['pm_search_text'] = 'Traži';
$txt['pm_search_go'] = 'Traži';
$txt['pm_search_advanced'] = 'Napredno Pretraživanje';
$txt['pm_search_user'] = 'Od korisnika';
$txt['pm_search_match_all'] = 'Sve riječi';
$txt['pm_search_match_any'] = 'Bilo koja riječ';
$txt['pm_search_options'] = 'Opcije';
$txt['pm_search_post_age'] = 'Starost poruke';
$txt['pm_search_show_complete'] = 'U rezultatima prikaži cijelu poruku.';
$txt['pm_search_subject_only'] = 'Traži samo po naslovu i autoru.';
$txt['pm_search_between'] = 'između';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dana';
$txt['pm_search_order'] = 'Sortiranje po';
$txt['pm_search_choose_label'] = 'Odaberite mapu za pretraživanje ili označite sve mape';

$txt['pm_search_results'] = 'Rezultati Pretraživanja';
$txt['pm_search_none_found'] = 'Nema rezultata';

$txt['pm_search_orderby_relevant_first'] = 'Najrelevantniji prvi';
$txt['pm_search_orderby_recent_first'] = 'Najnoviji prvi';
$txt['pm_search_orderby_old_first'] = 'Najstariji prvi';

$txt['pm_visual_verification_label'] = 'Provjera';
$txt['pm_visual_verification_desc'] = 'Molimo Vas da unesete kod sa slike iznad da bist poslali ovu privatnu poruku.';

$txt['pm_settings'] = 'Promijenite Postavke';
$txt['pm_change_view'] = 'Change View';

$txt['pm_manage_rules'] = 'Manage Rules';
$txt['pm_manage_rules_desc'] = 'Message rules allow you to automatically sort incoming messages dependant on a set of criteria you define. Below are all the rules you currently have setup. To edit a rule simply click the rule name.';
$txt['pm_rules_none'] = 'You have not yet setup any message rules.';
$txt['pm_rule_title'] = 'Rule';
$txt['pm_add_rule'] = 'Add New Rule';
$txt['pm_apply_rules'] = 'Apply Rules Now';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Are you sure you wish to apply the current rules to all personal messages?';
$txt['pm_edit_rule'] = 'Edit Rule';
$txt['pm_rule_save'] = 'Save Rule';
$txt['pm_delete_selected_rule'] = 'Delete Selected Rules';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Are you sure you wish to delete the selected rules?';
$txt['pm_rule_name'] = 'Name';
$txt['pm_rule_name_desc'] = 'Name to remember this rule by';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Description';
$txt['pm_rule_not_defined'] = 'Add some criteria to begin building this rule description.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Note:</strong> You appear to have javascript disabled. We highly recommend you enable javascript to use this feature.</span>';
$txt['pm_rule_criteria'] = 'Criteria';
$txt['pm_rule_criteria_add'] = 'Add Criteria';
$txt['pm_rule_criteria_pick'] = 'Choose Criteria';
$txt['pm_rule_mid'] = 'Sender Name';
$txt['pm_rule_gid'] = 'Sender\'s Group';
$txt['pm_rule_sub'] = 'Message Subject Contains';
$txt['pm_rule_msg'] = 'Message Body Contains';
$txt['pm_rule_bud'] = 'Sender is Buddy';
$txt['pm_rule_sel_group'] = 'Select Group';
$txt['pm_rule_logic'] = 'When Checking Criteria';
$txt['pm_rule_logic_and'] = 'All criteria must be met';
$txt['pm_rule_logic_or'] = 'Any criteria can be met';
$txt['pm_rule_actions'] = 'Actions';
$txt['pm_rule_sel_action'] = 'Select an Action';
$txt['pm_rule_add_action'] = 'Add Action';
$txt['pm_rule_label'] = 'Label message with';
$txt['pm_rule_sel_label'] = 'Select Label';
$txt['pm_rule_delete'] = 'Obriši Poruku';
$txt['pm_rule_no_name'] = 'You forgot to enter a name for the rule.';
$txt['pm_rule_no_criteria'] = 'A rule must have at least one criteria and one action set.';
$txt['pm_rule_too_complex'] = 'The rule you are creating is too long for SMF to store. Try breaking it up into smaller rules.';

$txt['pm_readable_and'] = '<em>and</em>';
$txt['pm_readable_or'] = '<em>or</em>';
$txt['pm_readable_start'] = 'If ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'message is from &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'sender is from the &quot;{GROUP}&quot; group';
$txt['pm_readable_subject'] = 'message subject contains &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'message body contains &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'sender is a buddy';
$txt['pm_readable_label'] = 'apply label &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'obriši pruku';
$txt['pm_readable_then'] = '<strong>then</strong>';

?>