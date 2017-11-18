<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Upravljanje Dozvolama';
$txt['permissions_modify'] = 'Urediti';
$txt['permissions_view'] = 'Pregled';
$txt['permissions_allowed'] = 'Dozvoljeno';
$txt['permissions_denied'] = 'Zabranjeno';
$txt['permission_cannot_edit'] = '<strong>Note:</strong> You cannot edit this permission profile as it is a predefined profile included within the forum software by default. If you wish to change the permissions of this profile you must first create a duplicate profile. You can carry out this task by clicking <a href="%1$s">here</a>.';

$txt['permissions_for_profile'] = 'Permissions for Profile';
$txt['permissions_boards_desc'] = 'The list below shows which set of permissions has been assigned to each board on your forum. You may edit the assigned permission profile by either clicking the board name or select &quot;edit all&quot; from the bottom of the page. To edit the profile itself simply click the profile name.';
$txt['permissions_board_all'] = 'Edit All';
$txt['permission_profile'] = 'Permission Profile';
$txt['permission_profile_desc'] = 'Which <a href="%1$s">permission set</a> the board should use.';
$txt['permission_profile_inherit'] = 'Inherit from parent board';

$txt['permissions_profile'] = 'Profile';
$txt['permissions_profiles_desc'] = 'Permission profiles are assigned to individual boards to allow you to easily manage your security settings. From this area you can create, edit and delete permission profiles.';
$txt['permissions_profiles_change_for_board'] = 'Edit Permission Profile For: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'Default';
$txt['permissions_profile_no_polls'] = 'No Polls';
$txt['permissions_profile_reply_only'] = 'Reply Only';
$txt['permissions_profile_read_only'] = 'Read Only';

$txt['permissions_profile_rename'] = 'Rename';
$txt['permissions_profile_edit'] = 'Edit Profiles';
$txt['permissions_profile_new'] = 'New Profile';
$txt['permissions_profile_new_create'] = 'Create';
$txt['permissions_profile_name'] = 'Profile Name';
$txt['permissions_profile_used_by'] = 'Used By';
$txt['permissions_profile_used_by_one'] = '1 Board';
$txt['permissions_profile_used_by_many'] = '%1$d Boards';
$txt['permissions_profile_used_by_none'] = 'No Boards';
$txt['permissions_profile_do_edit'] = 'Edit';
$txt['permissions_profile_do_delete'] = 'Delete';
$txt['permissions_profile_copy_from'] = 'Copy Permissions From';

$txt['permissions_includes_inherited'] = 'Inherited Groups';

$txt['permissions_all'] = 'sve';
$txt['permissions_none'] = 'ništa';
$txt['permissions_set_permissions'] = 'Postaviti dozvole';

$txt['permissions_advanced_options'] = 'Advanced Options';
$txt['permissions_with_selection'] = 'Sa odabirom';
$txt['permissions_apply_pre_defined'] = 'Primjeniti profil unaprijed definirane dozvole';
$txt['permissions_select_pre_defined'] = 'Odabrati unaprijed definirani profil';
$txt['permissions_copy_from_board'] = 'Kopiranje dozvole s ovog foruma';
$txt['permissions_select_board'] = 'Odabrati forum';
$txt['permissions_like_group'] = 'Postaviti dozvole kao za ovu grupu';
$txt['permissions_select_membergroup'] = 'Odabrati člansku grupu';
$txt['permissions_add'] = 'Dodati dozvolu';
$txt['permissions_remove'] = 'Izbrisati dozvolu';
$txt['permissions_deny'] = 'Uskratiti dozvolu';
$txt['permissions_select_permission'] = 'Odabrati dozvolu';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Možete odabrati samo jedan postupak za promjenu dozvola';
$txt['permissions_no_action'] = 'Nije odabran nijedan postupak';
$txt['permissions_deny_dangerous'] = 'Uskratiti ćete jednu ili više dozvola.\\nTo može biti opasno i uzrokovati neočekivane rezultate ako niste sigurni da nitko nije \\"slučajno\\" u grupi ili grupama kojima će te uskratiti dozvole.\\n\\nSigurni ste da želite nastaviti?';

$txt['permissions_modify_group'] = 'Urediti Grupu';
$txt['permissions_general'] = 'Opće Dozvole';
$txt['permissions_board'] = 'Opće Dozvole Foruma';
$txt['permissions_board_desc'] = '<strong>Note</strong>: changing these board permissions will affect all boards currently assigned the &quot;Default&quot; permissions profile. Boards not using the &quot;Default&quot; profile will not be affected by changes to this page.';
$txt['permissions_commit'] = 'Spremiti promjene';
$txt['permissions_on'] = 'na forumu';
$txt['permissions_local_for'] = 'Lokalne dozvole za grupu';
$txt['permissions_option_on'] = 'D';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'Za svaku funkciju možete odabrati \'Dozvoli\' (A), \'Ne dozvoli\' (X), or <span style="color: red;">\'Uskrati\' (D)</span>.<br /><br />Zapamtite da će dozvola, ako je uskratite, biti uskraćena za svakog člana - bio on moderator ili drugo.<br />Stoga morate biti oprezni s uskraćivanjem dozvola, koristite taj postupak samo kada je to <b>neophodno</b>. S druge strane, Ne dozvoli opcija uskraćuje prava, ako ona nisu odobrena na drugi način.';
$txt['permissions_change_view'] = 'Change View';
$txt['permissions_view_simple'] = 'Simple';
$txt['permissions_view_classic'] = 'Classic';

$txt['permissiongroup_general'] = 'Općenito';
$txt['permissionname_view_stats'] = 'Pregledati statistike foruma';
$txt['permissionhelp_view_stats'] = 'Statistika foruma je stranica koja daje pregled svih statističkih podataka foruma, npr. broj članova, broj dnevnih postova, i drugih 10 statističkih pregleda. Omogućavanje ove dozvole dodaje link na dno indexa foruma (\'[Više statistike]\').';
$txt['permissionname_view_mlist'] = 'Pregledati popis članova';
$txt['permissionhelp_view_mlist'] = 'Popis članova prikazuje sve članove registrirane na vašem forumu. Popis se može pretraživati i sortirati. Popis članova povezan je sa indexa foruma i stranice sa statistikom, klikom na broj članova.';
$txt['permissionname_who_view'] = 'Tko je online';
$txt['permissionhelp_who_view'] = 'Tko je online prikazuje sve članove koji su trenutno online i što rade. Ova dozvola funkcionirati će samo ako je omogućena i u \'Mogućnosti i opcije\'. Pristup \'Tko je online\' prozoru moguć; je putem klika na link u \'Korisnici Online\' sekciji indexa foruma. čak i ako je ova dozvola uskraćena, članovi će još uvijek moći vidjeti tko je online ali neće moći vidjeti gdje su.';
$txt['permissionname_search_posts'] = 'Tražiti postova i tema';
$txt['permissionhelp_search_posts'] = 'Dozvola Traženja omogućava korisnicima da pretražuju sve forume za koje imaju dozvolu pristupa. Kada je dozvola Traženja omogućena, popisu dugmadi na forumu dodati će se \'Traži\' dugme.';
$txt['permissionname_karma_edit'] = 'Promjeniti karmu drugih osoba';
$txt['permissionhelp_karma_edit'] = 'Karma je opcija koja pokazuje popularnost člana. Da bi ste koristili ovu mogućnost, morate ju omogućiti u \'Mogućnosti i opcije\'. Ova dozvola omogućiti će grupi članova da glasuju. Dozvola nema efekta za posjetitelje.';

$txt['permissiongroup_pm'] = 'Privatne Poruke';
$txt['permissionname_pm_read'] = 'čitati privatne poruke';
$txt['permissionhelp_pm_read'] = 'Ova dozvola omogućava korisnicima da pristupe sekciji Privatne poruke i čitaju svoje Privatne poruke. Bez ove dozvole, korsinici neće moći slati Privatne poruke.';
$txt['permissionname_pm_send'] = 'Poslati privatne poruke';
$txt['permissionhelp_pm_send'] = 'Poslati privatne poruke drugim registriranim članovima. Zahtijeva dozvolu \'čitaj privatne poruke\'.';

$txt['permissiongroup_calendar'] = 'Kalendar';
$txt['permissionname_calendar_view'] = 'Pregledati kalendara';
$txt['permissionhelp_calendar_view'] = 'Ovaj kalendar pokazuje rođendane, zbivanja i blagdane za svaki mjesec. Ova dozvola omogućava pristup ovom kalendaru. Kada je ova dozvola omogućena, dodaje se dugme na gornjem popisu dugmadi, a na dnu indexa foruma dodaje se popis sadašnjih i nadolazećih rođendana, zbivanja i blagdana. Kalendar treba biti omogućen u \'Konfiguracija - Osnovne Postavke\'.';
$txt['permissionname_calendar_post'] = 'Kreiranje zbivanja u kalendaru';
$txt['permissionhelp_calendar_post'] = 'Zbivanje je tema povezana sa određenim datumom ili datumima. Zbivanja se mogu kreirati u samom kalendaru. Zbivanje se može kreirati samo ako korisnik koji ga kreira ima dozvolu za postavljanje novih tema.';
$txt['permissionname_calendar_edit'] = 'Urediti zbivanja u kalendaru';
$txt['permissionhelp_calendar_edit'] = 'Zbivanje je tema povezana sa određenim datumom ili datumima. Zbivanje se može urediti klikom na crveni asterisk (*) pored zbivanja u pregledu kalendara. Da bi mogao urediti zbivanje, korisnik mora imati odgovarajuće dozvole za uređivanje prve poruke za temu koja je povezana sa zbivanjem.';
$txt['permissionname_calendar_edit_own'] = 'Vlastita zbivanja';
$txt['permissionname_calendar_edit_any'] = 'Bilo koje zbivanje';

$txt['permissiongroup_maintenance'] = 'Administriranje foruma';
$txt['permissionname_admin_forum'] = 'Administriranje foruma i baze podataka';
$txt['permissionhelp_admin_forum'] = 'Ova dozvola omogućava korisniku da:<ul><li>promjeni postavke foruma, baze podataka i teme</li><li>upravlja paketima</li><li>koristi alate održavanja foruma i baze podataka</li><li>pregleda error i mod log</li></ul> Ova dozvola je moćna pa ju stoga koristite s oprezom.';
$txt['permissionname_manage_boards'] = 'Upravljati forumima i kategorijama';
$txt['permissionhelp_manage_boards'] = 'Ova dozvola omogućava kreiranje, uređivanje i brisanje foruma i kategorija.';
$txt['permissionname_manage_attachments'] = 'Upravljati Privitcima i avatarima';
$txt['permissionhelp_manage_attachments'] = 'Ova dozvola omogućava pristup centru za privitke u kojem su popisani svi Privitci i avatari foruma, i gdje se oni mogu brisati.';
$txt['permissionname_manage_smileys'] = 'Upravljanje smileyevima i ikonama poruka';
$txt['permissionhelp_manage_smileys'] = 'Omogućavati pristup smiley centru. U ovom centru možete dodati, urediti i brisati smileys i smiley grupe.';
$txt['permissionname_edit_news'] = 'Urediti novosti';
$txt['permissionhelp_edit_news'] = 'Funkcija novosti omogućava prikazivanje nasumično odabrane novosti u svakom prozoru. Da bi ste koristili funkciju novosti, omogućite ju u postavkama foruma.';
$txt['permissionname_access_mod_center'] = 'Access the moderation center';
$txt['permissionhelp_access_mod_center'] = 'With this permission any members of this group can access the moderation center from where they will have access to functionality to ease moderation. Note that this does not in itself grant any moderation privileges.';

$txt['permissiongroup_member_admin'] = 'Administriranje članova';
$txt['permissionname_moderate_forum'] = 'Moderiranje članova foruma';
$txt['permissionhelp_moderate_forum'] = 'Ova dozvola uključuje sve značajne funkcije moderiranja članova:<ul><li>pristup upravljanju registracijom</li><li>pristup pregledu/brisanju članova</li><li>proširene informacije o profilu, uključujući prati IP/korisnika i (skriveno) online status</li><li>aktiviranje računa</li><li>primitak obavijesti o odobrenju i odobravanje računa</li><li>imunitet u ignoriranju PM</li><li>dodatne sitne funkcije</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Upravljati i dodijeliti grupe članova';
$txt['permissionhelp_manage_membergroups'] = 'Ova dozvola omogućava korisniku uređivanje grupa članova i dodijeljivanje grupa drugim članovima.';
$txt['permissionname_manage_permissions'] = 'Upravljati dozvolama';
$txt['permissionhelp_manage_permissions'] = 'Ova dozvola omogućava korisniku uređivanje svih dozvola za grupu članova, globalno ili za pojedine forume.';
$txt['permissionname_manage_bans'] = 'Upravljati popisom zabrana';
$txt['permissionhelp_manage_bans'] = 'Ova dozvola omogućava korisniku dodavanje ili brisanje korisničkih imena, IP adresa, host imena i email adresa korisnika sa zabranom. Također omogućava pregled i brisanje log upisa korisnika sa zabranom koji su se pokušali prijaviti na forum.';
$txt['permissionname_send_mail'] = 'Poslati forum email članovima';
$txt['permissionhelp_send_mail'] = 'Slati grupni mail svim članovima foruma ili samo nekim grupama članova putem emaila ili privatnih poruka (privatne poruke trebaju dozvolu \'Pošalji privatnu poruku\').';
$txt['permissionname_issue_warning'] = 'Issue warnings to members';
$txt['permissionhelp_issue_warning'] = 'Issue a warning to members of the forum and change that members\' warning level. Requires the warning system to be enabled.';

$txt['permissiongroup_profile'] = 'Profili članova';
$txt['permissionname_profile_view'] = 'Pregledati sažetke i statistike za profil';
$txt['permissionhelp_profile_view'] = 'Ova dozvola omogućava korisnicima da kliknu na pojedino korisničko ime za uvid u pregled sažetka postavki profila, neke statističke podatke i sve postove korisnika.';
$txt['permissionname_profile_view_own'] = 'Vlastiti profil';
$txt['permissionname_profile_view_any'] = 'Bilo koji profil';
$txt['permissionname_profile_identity'] = 'Urediti postavke računa';
$txt['permissionhelp_profile_identity'] = 'Postavke računa su temeljne postavke profila, kao što su lozinka, email adresa, članska grupa i jezik.';
$txt['permissionname_profile_identity_own'] = 'Vlastiti profil';
$txt['permissionname_profile_identity_any'] = 'Bilo koji profil';
$txt['permissionname_profile_extra'] = 'Urediti dodatne postavke profila';
$txt['permissionhelp_profile_extra'] = 'Dodatne postavke profila uključuju postavke za avatare, teme, obavijesti i Privatne poruke.';
$txt['permissionname_profile_extra_own'] = 'Vlastiti profil';
$txt['permissionname_profile_extra_any'] = 'Bilo koji profil';
$txt['permissionname_profile_title'] = 'Urediti uobičajeni naslov';
$txt['permissionhelp_profile_title'] = 'Uobičajeni naziv se prikazuje na stranici sa prikazom teme, ispod profila svakog korisnika koji ima uobičajeni naslov.';
$txt['permissionname_profile_title_own'] = 'Vlastiti profil';
$txt['permissionname_profile_title_any'] = 'Bilo koji profil';
$txt['permissionname_profile_remove'] = 'Izbrisati račun';
$txt['permissionhelp_profile_remove'] = 'Ova dozvola omogućava korisniku brisanje svog računa ako je postavljena na \'Vlastiti račun\'.';
$txt['permissionname_profile_remove_own'] = 'Vlastiti račun';
$txt['permissionname_profile_remove_any'] = 'Bilo koji račun';
$txt['permissionname_profile_server_avatar'] = 'Odabrati avatar sa servera';
$txt['permissionhelp_profile_server_avatar'] = 'Ako je dozvoljeno, korisnik će moći odabrati avatar iz zbirke avatara instalirane na serveru.';
$txt['permissionname_profile_upload_avatar'] = 'Uploadati avatara na server';
$txt['permissionhelp_profile_upload_avatar'] = 'Omogućavati korisniku upload osobnog avatara na server.';
$txt['permissionname_profile_remote_avatar'] = 'Odabrati avatar pohranjen na drugom serveru';
$txt['permissionhelp_profile_remote_avatar'] = 'Kako avatari mogu negativno utjecati na otvaranje stranice, moguće je zabraniti korištenje avatara sa drugih servera za određene grupe članova.';

$txt['permissiongroup_general_board'] = 'Općenito';
$txt['permissionname_moderate_board'] = 'Moderiranje foruma';
$txt['permissionhelp_moderate_board'] = 'Ova dozvola dodaje nekoliko manjih dozvola koje čine pravog moderatora. Te dozvole uključuju odgovore ta zaključane teme, promjenu vremena završetka ankete i pregled rezulatata anketa.';

$txt['permissiongroup_topic'] = 'Teme';
$txt['permissionname_post_new'] = 'Objaviti nove teme';
$txt['permissionhelp_post_new'] = 'Ova dozvola omogućava korisnicima objavljivanje novih tema. Ne omogućava slanje odgovora na teme.';
$txt['permissionname_merge_any'] = 'Spojiti teme';
$txt['permissionhelp_merge_any'] = 'Spajanje dvije ili više tema u jednu. Redoslijed poruka u novonastaloj temi ovisiti će o vremenu kada su poruke kreirane. Korisnik može spojiti teme na forumima za koje ima dozvolu spajanja. Da bi spojio više tema odjednom, korisnik mora omogućiti brzu moderaciju u postavkama svog profila.';
$txt['permissionname_split_any'] = 'Razdvojiti temu';
$txt['permissionhelp_split_any'] = 'Razdvojiti temu na dvije zasebne teme.';
$txt['permissionname_send_topic'] = 'Poslati temu prijatelju';
$txt['permissionhelp_send_topic'] = 'Ova dozvola omogućava korisniku slanje teme prijatelju, upisom njihove email adrese, i dozvoljava dodavanje poruke.';
$txt['permissionname_make_sticky'] = 'Postaviti temu kao stalnu';
$txt['permissionhelp_make_sticky'] = 'Stalne teme su teme koje se uvijek nalaze na vrhu foruma. One mogu biti korisne za razne objave ili druge važne poruke.';
$txt['permissionname_move'] = 'Premjestiti temu';
$txt['permissionhelp_move'] = 'Premjestiti temu na drugi forum. Korisnici mogu odabrati samo forume za koje imaju dozvolu pristupa.';
$txt['permissionname_move_own'] = 'Vlastita tema';
$txt['permissionname_move_any'] = 'Bilo koja tema';
$txt['permissionname_lock'] = 'Zaključati temu';
$txt['permissionhelp_lock'] = 'Ova dozvola omogućava korisniku da zaključa temu. To se može učiniti kako bi se osiguralo da nitko ne može odgovoriti na temu. Samo korisnici s dozvolom \'Moderiraj forum\' mogu poslati poruke u zaključane teme.';
$txt['permissionname_lock_own'] = 'Vlastita tema';
$txt['permissionname_lock_any'] = 'Bilo koja tema';
$txt['permissionname_remove'] = 'Izbrisati teme';
$txt['permissionhelp_remove'] = 'Izbrisati cijelu temu. Ova dozvola ne omogućava brisanje pojednih poruka za temu!';
$txt['permissionname_remove_own'] = 'Vlastita tema';
$txt['permissionname_remove_any'] = 'Bilo koja tema';
$txt['permissionname_post_reply'] = 'Pošalji odgovore za teme';
$txt['permissionhelp_post_reply'] = 'Ova dozvola omogućava odgovore za teme.';
$txt['permissionname_post_reply_own'] = 'Vlastita tema';
$txt['permissionname_post_reply_any'] = 'Bilo koja tema';
$txt['permissionname_modify_replies'] = 'Promjeniti odgovore na vlastite teme';
$txt['permissionhelp_modify_replies'] = 'Ova dozvola omogućava korisniku koji je započeo temu da promjeni sve odgovore za nju.';
$txt['permissionname_delete_replies'] = 'Izbrisati odgovore na vlastite teme';
$txt['permissionhelp_delete_replies'] = 'Ova dozvola omogućava korisniku koji je započeo temu da izbriše sve odgovore za nju.';
$txt['permissionname_announce_topic'] = 'Najaviti temu';
$txt['permissionhelp_announce_topic'] = 'Omogućiti korisniku slanje email najave teme svim članovima ili nekim grupama članova.';

$txt['permissiongroup_post'] = 'Postovi';
$txt['permissionname_delete'] = 'Izbrisati postove';
$txt['permissionhelp_delete'] = 'Izbrisati postove. Ovo ne omogućava korisniku brisanje prvog posta za temu.';
$txt['permissionname_delete_own'] = 'Vlastiti post';
$txt['permissionname_delete_any'] = 'Bilo koji post';
$txt['permissionname_modify'] = 'Promjeniti postove';
$txt['permissionhelp_modify'] = 'Urediti postove';
$txt['permissionname_modify_own'] = 'Vlastiti post';
$txt['permissionname_modify_any'] = 'Bilo koji post';
$txt['permissionname_report_any'] = 'Prijaviti postove moderatoru';
$txt['permissionhelp_report_any'] = 'Ova dozvola svakoj poruci dodaje link koji omogućava korisniku da obavijesti moderatora o tom postu. Nakon prijavljivanja, svi moderatori za taj forum primiti će email s linkom za prijavljeni post i opis problema (kojeg je dao korisnik koji ga je prijavio).';

$txt['permissiongroup_poll'] = 'Ankete';
$txt['permissionname_poll_view'] = 'Pregledati anketa';
$txt['permissionhelp_poll_view'] = 'Ova dozvola omogućava korisniku pregled ankete. Ako nema ovu dozvolu, korisnik će vidjeti samo temu.';
$txt['permissionname_poll_vote'] = 'Glasati u anketama';
$txt['permissionhelp_poll_vote'] = 'Ova dozvola omogućava registriranom korisniku da da jedan glas. Ne primjenjuje se za goste.';
$txt['permissionname_poll_post'] = 'Objaviti ankete';
$txt['permissionhelp_poll_post'] = 'Ova dozvola omogućava korisniku da objavi novu anketu.';
$txt['permissionname_poll_add'] = 'Dodati anketu temi';
$txt['permissionhelp_poll_add'] = 'Omogućavati korisniku da doda anketu nakon što je kreirana nova tema. Ova dozvola zahtijeva dozvolu za uređivanje prvog posta za temu.';
$txt['permissionname_poll_add_own'] = 'Vlastite teme';
$txt['permissionname_poll_add_any'] = 'Bilo koja tema';
$txt['permissionname_poll_edit'] = 'Urediti ankete';
$txt['permissionhelp_poll_edit'] = 'Ova dozvola omogućava korisniku uređivanje opcija ankete i resetiranje ankete. Korisnik mora imati dozvolu \'Moderiraj forum\' kako bi mogao urediti maksimalan broj glasova i vrijeme završetka ankete.';
$txt['permissionname_poll_edit_own'] = 'Vlastita anketa';
$txt['permissionname_poll_edit_any'] = 'Bilo koja anketa';
$txt['permissionname_poll_lock'] = 'Zaključati anketu';
$txt['permissionhelp_poll_lock'] = 'Zaključavanje anketa onemogućava nove glasove za anketu.';
$txt['permissionname_poll_lock_own'] = 'Vlastiti anketa';
$txt['permissionname_poll_lock_any'] = 'Bilo koja anketa';
$txt['permissionname_poll_remove'] = 'Izbrisati ankete';
$txt['permissionhelp_poll_remove'] = 'Ova dozvola omogućava brisanje anketa.';
$txt['permissionname_poll_remove_own'] = 'Vlastita anketa';
$txt['permissionname_poll_remove_any'] = 'Bilo koja anketa';

$txt['permissiongroup_approval'] = 'Post Moderation';
$txt['permissionname_approve_posts'] = 'Approve items awaiting moderation';
$txt['permissionhelp_approve_posts'] = 'This permission allows a user to approve all unapproved items on a board.';
$txt['permissionname_post_unapproved_replies'] = 'Post unapproved replies';
$txt['permissionhelp_post_unapproved_replies'] = 'This permission allows a user to post replies to a topic. The replies will not be shown until approved by a moderator.';
$txt['permissionname_post_unapproved_replies_own'] = 'Own topic';
$txt['permissionname_post_unapproved_replies_any'] = 'Any topic';
$txt['permissionname_post_unapproved_topics'] = 'Post unapproved topics';
$txt['permissionhelp_post_unapproved_topics'] = 'This permission allows a user to post a new topic which will require approval before being shown.';
$txt['permissionname_post_unapproved_attachments'] = 'Post unapproved attachments';
$txt['permissionhelp_post_unapproved_attachments'] = 'This permission allows a user to attach files to their posts. The attached files will then require approval before being shown to other users.';

$txt['permissiongroup_notification'] = 'Obavjestiti';
$txt['permissionname_mark_any_notify'] = 'Zatražiti obavijest o odgovorima';
$txt['permissionhelp_mark_any_notify'] = 'Omogućavati korisnicima da prime obavijest o odgovorima za temu na koju su se pretplatili.';
$txt['permissionname_mark_notify'] = 'Zatražiti obavijest o novim temama';
$txt['permissionhelp_mark_notify'] = 'Obavijest o novim temama omogućava korisniku da primi email svaki put kada je kreirana nova tema za forum na kojeg su se pretplatili.';

$txt['permissiongroup_attachment'] = 'Privitci';
$txt['permissionname_view_attachments'] = 'Pregledati privitaka';
$txt['permissionhelp_view_attachments'] = 'Privitci su datoteke koje se dodaju objavljenim porukama. Ova mogućnost može se aktivirati u  \\Uredi mogućnosti i opcije\'. Kako pristup Privitcima nije direktan, možete spriječiti njihov download od strane korisnika koji nemaju ovu dozvolu.';
$txt['permissionname_post_attachment'] = 'Objaviti privitke';
$txt['permissionhelp_post_attachment'] = 'Privitci su datoteke koje se dodaju objavljenim porukama. Jedna poruka može sadržati više privitaka.';

$txt['permissiongroup_simple_view_basic_info'] = 'Use basic forum functionality';
$txt['permissiongroup_simple_use_pm_system'] = 'Contact members using the personal messaging system';
$txt['permissiongroup_simple_post_calendar'] = 'Post events onto the calendar';
$txt['permissiongroup_simple_edit_profile'] = 'Personalize their profile';
$txt['permissiongroup_simple_delete_account'] = 'Delete their account';
$txt['permissiongroup_simple_use_avatar'] = 'Select or upload an avatar';
$txt['permissiongroup_simple_moderate_general'] = 'Moderate the entire forum';
$txt['permissiongroup_simple_administrate'] = 'Carry out administrative duties';

$txt['permissionname_simple_calendar_edit_own'] = 'Edit their own calendar events';
$txt['permissionname_simple_calendar_edit_any'] = 'Edit other people\'s calendar events';
$txt['permissionname_simple_profile_view_own'] = 'View their own profile';
$txt['permissionname_simple_profile_view_any'] = 'View other people\'s profiles';
$txt['permissionname_simple_profile_identity_own'] = 'Edit their account settings';
$txt['permissionname_simple_profile_identity_any'] = 'Edit other people\'s account settings';
$txt['permissionname_simple_profile_extra_own'] = 'Edit their additional profile options';
$txt['permissionname_simple_profile_extra_any'] = 'Edit other people\'s profile options';
$txt['permissionname_simple_profile_title_own'] = 'Choose a custom title for themselves';
$txt['permissionname_simple_profile_title_any'] = 'Edit other people\'s custom titles';
$txt['permissionname_simple_profile_remove_own'] = 'Delete their own account';
$txt['permissionname_simple_profile_remove_any'] = 'Delete other user\'s accounts';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Post topics and replies to the board <span style="text-decoration: underline">only</span> after they have been approved';
$txt['permissiongroup_simple_make_posts'] = 'Post topics and replies to the board';
$txt['permissiongroup_simple_post_polls'] = 'Make new polls';
$txt['permissiongroup_simple_participate'] = 'View additional board content';
$txt['permissiongroup_simple_modify'] = 'Modify their posts';
$txt['permissiongroup_simple_notification'] = 'Request notifications';
$txt['permissiongroup_simple_attach'] = 'Post attachments';
$txt['permissiongroup_simple_moderate'] = 'Moderate the board';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Post replies to a topic - but require approval';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Post replies to any topic - but require approval';
$txt['permissionname_simple_post_reply_own'] = 'Post replies to a topic they started';
$txt['permissionname_simple_post_reply_any'] = 'Post replies to any topic';
$txt['permissionname_simple_move_own'] = 'Move their own topics';
$txt['permissionname_simple_move_any'] = 'Move anyone\'s topic';
$txt['permissionname_simple_lock_own'] = 'Lock their own topic';
$txt['permissionname_simple_lock_any'] = 'Lock anyone\'s topic';
$txt['permissionname_simple_remove_own'] = 'Remove their own topic';
$txt['permissionname_simple_remove_any'] = 'Remove anyone\'s topic';
$txt['permissionname_simple_delete_own'] = 'Delete a post that they made';
$txt['permissionname_simple_delete_any'] = 'Delete a post made by anyone';
$txt['permissionname_simple_modify_own'] = 'Modify their own post';
$txt['permissionname_simple_modify_any'] = 'Modify someone else\'s post';
$txt['permissionname_simple_poll_add_own'] = 'Add a poll to a topic they created';
$txt['permissionname_simple_poll_add_any'] = 'Add a poll to any topic';
$txt['permissionname_simple_poll_edit_own'] = 'Edit a poll they created';
$txt['permissionname_simple_poll_edit_any'] = 'Edit anyone\'s poll';
$txt['permissionname_simple_poll_lock_own'] = 'Lock their own poll';
$txt['permissionname_simple_poll_lock_any'] = 'Lock anyone\'s poll';
$txt['permissionname_simple_poll_remove_own'] = 'Remove a poll they created';
$txt['permissionname_simple_poll_remove_any'] = 'Remove anyone\'s poll';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Postavke Dozvola';
$txt['groups_manage_permissions'] = 'Grupe članova koji mogu upravljati dozvolama';
$txt['permission_settings_submit'] = 'Spremi';
$txt['permission_settings_enable_deny'] = 'Omogućiti opciju uskraćivanje dozvola';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Isključivanje ove opcije ažurirati će dozvolu \\\'Uskrati\\\'-u  \\\'Ne dozvoli\\\'.';
$txt['permission_by_board_desc'] = 'Ovdje možete odrediti da li forum koristi opće dozvole ili ima posebnu grupu dozvola. Korištenjem lokalnih dozvola na forumu, možete odrediti dozvolu za svaku grupu članova.';
$txt['permission_settings_desc'] = 'Ovdje možete odrediti tko ima dozvolu za mjenjanje dozvola, kao koliko složen treba biti sistem dozvola.';
$txt['permission_settings_enable_postgroups'] = 'Omogućiti dozvole za grupe koje se temelje na zbroju postova';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Onemogućavanje ove postavke dovesti će do brisanja dozvola koje su trenutno postavljene za grupe koje se temelje na zbroju postova.';

$txt['permissions_post_moderation_desc'] = 'From this page you can easily change which groups have their posts moderated for a particular permissions profile.';
$txt['permissions_post_moderation_deny_note'] = 'Note that while you have advanced permissions enabled you cannot apply the &quot;deny&quot; permission from this page. Please edit the permissions directly if you wish to apply a deny permission.';
$txt['permissions_post_moderation_select'] = 'Select Profile';
$txt['permissions_post_moderation_new_topics'] = 'New Topics';
$txt['permissions_post_moderation_replies_own'] = 'Own Replies';
$txt['permissions_post_moderation_replies_any'] = 'Any Replies';
$txt['permissions_post_moderation_attachments'] = 'Attachments';
$txt['permissions_post_moderation_legend'] = 'Legend';
$txt['permissions_post_moderation_allow'] = 'Can create';
$txt['permissions_post_moderation_moderate'] = 'Can create but requires approval';
$txt['permissions_post_moderation_disallow'] = 'Cannot create';
$txt['permissions_post_moderation_group'] = 'Group';

$txt['auto_approve_topics'] = 'Post new topics, without requiring approval';
$txt['auto_approve_replies'] = 'Post replies to topics, without requiring approval';
$txt['auto_approve_attachments'] = 'Post attachments, without requiring approval';

?>