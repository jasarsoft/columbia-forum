<?php
// Version: 2.0; ManageMembers

global $context;

$txt['groups'] = 'Grupe';
$txt['viewing_groups'] = 'Pregledava Grupe članova';

$txt['membergroups_title'] = 'Upravljanje korisničkim grupama';
$txt['membergroups_description'] = 'Korisničke grupe su grupe korisnika sa istovjetnim postavkama dopuštenja, prikaza i prava pristupa. Neke korisničke grupe su temeljene na broju poruka koje je korisnik napisao. Korisnika se svrstava u korisničku grupu odabirom njegovog profila i promjenom postavki korisničkog računa.';
$txt['membergroups_modify'] = 'Promijeni';

$txt['membergroups_add_group'] = 'Dodaj Grupu';
$txt['membergroups_regular'] = 'Standardne grupe';
$txt['membergroups_post'] = 'Grupe prema broju poruka';

$txt['membergroups_group_name'] = 'Naziv korisničke grupe';
$txt['membergroups_new_board'] = 'Vidljivi Forumi';
$txt['membergroups_new_board_desc'] = 'Forumi koje korisničke grupe mogu vidjeti.';
$txt['membergroups_new_board_post_groups'] = '<em>Napomena: Grupe obično ne trebaju pristup jer će im pristup dati grupa čiji su članovi.</em>';
$txt['membergroups_new_as_inherit'] = 'naslijedi od';
$txt['membergroups_new_as_type'] = 'po tipu';
$txt['membergroups_new_as_copy'] = 'ili utemeljeno na';
$txt['membergroups_new_copy_none'] = '(nijedan)';
$txt['membergroups_can_edit_later'] = '(možete ih uređivati kasnije.)';

$txt['membergroups_edit_group'] = 'Uredi Grupu';
$txt['membergroups_edit_name'] = 'Ime grupe';
$txt['membergroups_edit_inherit_permissions'] = 'Inherit Permissions';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Select &quot;No&quot; to enable group to have own permission set.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Ne - Koristi Jedinstvene Dozvole';
$txt['membergroups_edit_inherit_permissions_from'] = 'Naslijedi od';
$txt['membergroups_edit_hidden'] = 'Vidljivost';
$txt['membergroups_edit_hidden_no'] = 'Vidljivo';
$txt['membergroups_edit_hidden_boardindex'] = 'Vidljivo - Osim u Listi Grupa';
$txt['membergroups_edit_hidden_all'] = 'Nevidljivo';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Are you sure you want to disallow assignment of this group as a users primary group?\\n\\nDoing so will restrict assignment to additional groups only, and will update all current &quot;primary&quot; members to have it as an additional group only.';
$txt['membergroups_edit_desc'] = 'Opis Grupe';
$txt['membergroups_edit_group_type'] = 'Tip Grupe';
$txt['membergroups_edit_select_group_type'] = 'Odaberi Tip Grupe';
$txt['membergroups_group_type_private'] = 'Private <span class="smalltext">(Membership must be assigned)</span>';
$txt['membergroups_group_type_protected'] = 'Protected <span class="smalltext">(Only administrators can manage and assign)</span>';
$txt['membergroups_group_type_request'] = 'Requestable <span class="smalltext">(User may request membership)</span>';
$txt['membergroups_group_type_free'] = 'Free <span class="smalltext">(User may leave and join group at will)</span>';
$txt['membergroups_group_type_post'] = 'Post Based <span class="smalltext">(Membership based on post count)</span>';
$txt['membergroups_min_posts'] = 'Potrebno poruka';
$txt['membergroups_online_color'] = 'Boja na online popisu';
$txt['membergroups_star_count'] = 'Broj zvjezdica';
$txt['membergroups_star_image'] = 'Ime datoteke zvjezdica';
$txt['membergroups_star_image_note'] = '(starting off theme URL/images, možete koristiti $language za jezik korisnika.)';
$txt['membergroups_max_messages'] = 'Maksimum Privatnih Poruka';
$txt['membergroups_max_messages_note'] = '(0 = neograničeno)';
$txt['membergroups_edit_save'] = 'Spremi';
$txt['membergroups_delete'] = 'Izbriši';
$txt['membergroups_confirm_delete'] = 'Jeste li sigurani da želite izbrisati ovu grupu?!';

$txt['membergroups_members_title'] = 'Svi članovi grupe';
$txt['membergroups_members_group_members'] = 'Group Members';
$txt['membergroups_members_no_members'] = 'Ova grupa je trenutno prazna';
$txt['membergroups_members_add_title'] = 'Dodaj člana u ovu grupu';
$txt['membergroups_members_add_desc'] = 'Lista članova za dodavanje';
$txt['membergroups_members_add'] = 'Dodaj članove';
$txt['membergroups_members_remove'] = 'Ukloni iz Grupe';
$txt['membergroups_members_last_active'] = 'Last Active';
$txt['membergroups_members_additional_only'] = 'Add as additional group only.';
$txt['membergroups_members_group_moderators'] = 'Moderatori Grupe';
$txt['membergroups_members_description'] = 'Opis';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Je ste li sigurni da želite ukloniti sebe iz Administratorske grupe?';

$txt['membergroups_postgroups'] = 'Grupe bazirane na broju poruka';
$txt['membergroups_settings'] = 'Postavke grupe korisnika';
$txt['groups_manage_membergroups'] = 'Grupe kojima je dozvoljeno da promjene grupu korisnika';
$txt['membergroups_select_permission_type'] = 'Izaberi profil dozvola';
$txt['membergroups_images_url'] = '{URL Teme}/images/ ';
$txt['membergroups_select_visible_boards'] = 'Prikaži forume';
$txt['membergroups_members_top'] = 'Članovi';
$txt['membergroups_name'] = 'Ime';
$txt['membergroups_stars'] = 'Zvijezde';

$txt['admin_browse_approve'] = 'Članovi čiji korisnički računi čekaju odobrenje';
$txt['admin_browse_approve_desc'] = 'Ovdje možete urediti sve članove koji čekaju da njihovi korsinički računi budu odobreni.';
$txt['admin_browse_activate'] = 'Članovi čiji korisnički računi čekaju aktivaciju';
$txt['admin_browse_activate_desc'] = 'Lista svih članova koji još uvijek nisu aktivirali svoje korisničke račune za vaš forum.';
$txt['admin_browse_awaiting_approval'] = 'Čeka odobrenje <span style="font-weight: normal">(%1$d)</span>';
$txt['admin_browse_awaiting_activate'] = 'Čeka aktivaciju (%1$d) ';

$txt['admin_browse_username'] = 'Korisničko ime';
$txt['admin_browse_email'] = 'Email Adresa';
$txt['admin_browse_ip'] = 'IP Adresa';
$txt['admin_browse_registered'] = 'Registriran';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'S odabranim';
$txt['admin_browse_no_members_approval'] = 'Nema korisnika koji čekaju odobrenje.';
$txt['admin_browse_no_members_activate'] = 'Nema korisnika koji nisu aktivirali svoj korisnički račun.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'sve odabrane članove?';
$txt['admin_browse_outstanding_warn'] = 'sve članove na koje to ima utjecaj?';
$txt['admin_browse_w_approve'] = 'Odobri';
$txt['admin_browse_w_activate'] = 'Aktiviraj';
$txt['admin_browse_w_delete'] = 'Izbriši';
$txt['admin_browse_w_reject'] = 'Odbaci';
$txt['admin_browse_w_remind'] = 'Podsjeti';
$txt['admin_browse_w_approve_deletion'] = 'Odobri (Izbriši račune)';
$txt['admin_browse_w_email'] = 'i pošalji email';
$txt['admin_browse_w_approve_require_activate'] = 'Odobri i traži aktivaciju';

$txt['admin_browse_filter_by'] = 'Filtriraj po';
$txt['admin_browse_filter_show'] = 'Prikaži';
$txt['admin_browse_filter_type_0'] = 'Neaktivirani novi računi';
$txt['admin_browse_filter_type_2'] = 'Neaktivirane promjene Emaila';
$txt['admin_browse_filter_type_3'] = 'Neodobreni novi računi';
$txt['admin_browse_filter_type_4'] = 'Neodobrena brisanja računa';
$txt['admin_browse_filter_type_5'] = 'Neodobreni "Ispod dobne granice" računi';

$txt['admin_browse_outstanding'] = 'Istaknuti članovi';
$txt['admin_browse_outstanding_days_1'] = 'Sa svim članovima registriranim prije više od';
$txt['admin_browse_outstanding_days_2'] = 'dana';
$txt['admin_browse_outstanding_perform'] = 'Izvrši slijedeće';
$txt['admin_browse_outstanding_go'] = 'Izvrši';

$txt['check_for_duplicate'] = 'Provjeri za Duple Račune';
$txt['dont_check_for_duplicate'] = 'Nemoj provjeriti za Duple Račune';
$txt['duplicates'] = 'Duplikati';

$txt['not_activated'] = 'Nije Aktivirano';

?>