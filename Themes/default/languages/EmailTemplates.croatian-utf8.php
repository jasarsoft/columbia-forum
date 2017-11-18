<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Sljedeće teme čekaju odobrenje:';
$txt['scheduled_approval_email_msg'] = 'Sljedeći postovi čekaju odobrenje:';
$txt['scheduled_approval_email_attach'] = 'Sljedeći privitci čekaju odobrenje:';
$txt['scheduled_approval_email_event'] = 'Sljedeći događaji čekaju odobrenje:';

$txt['emails'] = array(
	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONCODE:  The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala Vam što ste se registrirali na {FORUMNAME}. Vaše korisničko ime je {USERNAME}. Ako zaboravite svoju lozinku možete je resetirati koristeći ovaj link {FORGOTPASSWORDLINK}.

Prije no što se možete prijaviti u forum, morate prvo aktivirati svoj korisnički račun klikom na sljedeći link:

{ACTIVATIONLINK}

Ako ćete imati bilo kakvih problema kod aktivacije, molimo posjetite {ACTIVATIONLINKWITHOUTCODE} i unesite kod "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Primili smo zahtjev za registraciju na forum {FORUMNAME}, {REALNAME}.

Korisničko ime kojim ste registrirani kod nas je {USERNAME}.

Prije no što se možete prijaviti i započeti koristiti forum, Vaš zahtjev treba biti pregledan i odobren.  Kada se to obavi primit ćete još jedan email s ove adrese.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'Odobrenje članstva u grupi',
		'body' => '{USERNAME},

Vrlo nam je drago što Vas možemo obavijestiti da je Vaša zamolba za priključivanje "{GROUPNAME}" grupi na {FORUMNAME} upravo odobrena, a Vaš korisnički račun je upravo ažuriran i sadržava ovu grupu.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'Odbijanje članstva u grupi',
		'body' => '{USERNAME},

Žao nam je što Vas moramo izvjestiti da je Vaša zamolba za priključivanje "{GROUPNAME}" grupi na {FORUMNAME} odbijena.

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => 'Odbijanje članstva u grupi',
		'body' => '{USERNAME},

Žao nam je što Vas moramo izvjestiti da je Vaša zamolba za priključivanje "{GROUPNAME}" grupi na {FORUMNAME} odbijena.

Navedena odluka donesena je iz sljedećeg razloga: {REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				NAME: The display name of the member.
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
				FORGOTPASSWORDLINK: The URL of the "forgot password" page.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Dobrodošli, {NAME}!

Vaš korisnički račun ručno je aktiviran od strane administratora i sada se možete prijaviti u forum. Vaše korisničko ime je: {USERNAME}. Ako zaboravite lozinku možete je promjeniti posjetom slijedećem linku {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Dobrodošli, {USERNAME}!

Vaš korisnički račun na {FORUMNAME} je odoboren od strane administratora foruma. Prije prijave u forum, prvo morate aktivirati Vaš korisnički račun klikom na sljedeći link:

{ACTIVATIONLINK}

Ako ćete imati bilo kakvih problema kod aktivacije, molimo posjetite {ACTIVATIONLINKWITHOUTCODE} i unesite kod "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Registracija odbijena',
		'body' => '{USERNAME},

Nažalost, Vaša prijava za registraciju na forumu {FORUMNAME} je odbijena.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Brisanje računa',
		'body' => '{USERNAME},

Vaš korisnički račun na {FORUMNAME} je izbrisan.  To je vjerojatno iz razloga što nikad niste aktivirali taj račun, i u tom slučaju možete se ponovo registrirati.

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Podsjetnik na registraciju',
		'body' => '{USERNAME},
još uvijek niste aktivirali Vaš korisnički račun na {FORUMNAME}.

Molimo koristite donji link da biste aktivirali Vaš račun:
{ACTIVATIONLINK}

Ako ćete imati bilo kakvih problema kod aktivacije, molimo posjetite {ACTIVATIONLINKWITHOUTCODE} i unesite kod "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala Vam što ste se registrirali na forum {FORUMNAME}. Vaše korisničko ime je {USERNAME} a Vaša lozinka je {PASSWORD}.

Prije no što se možete prijaviti u form, prvo morate aktivirati Vaš korisnički račun klikom na sljedeći link:

{ACTIVATIONLINK}

Ako ćete imati bilo kakvih problema kod aktivacije, molimo posjetite {ACTIVATIONLINKWITHOUTCODE} i unesite kod "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala Vam što ste se registrirali na forum {FORUMNAME}. Vaše korisničko ime je {USERNAME} a Vaša lozinka je {PASSWORD}.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:

		*/
		'subject' => 'Nova objava: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

Da biste isključili pretplatu na ove objave, prijavite se na forum i isključite oznaku kod "Primaj forumske objave i bitne obavijesti putem emaila." u Vašem Profilu.

Punu objavu možete vidjeti posjetivši sljedeći link:
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nova tema: {TOPICSUBJECT}',
		'body' => 'Nova tema, \'{TOPICSUBJECT}\', otvorena je u rubrici koju pratite.

Možete je pogledati ovdje
{TOPICLINK}

Možda je objavljeno još novih tema, no nećete primiti još email obavijesti prije nego ponovo posjetite rubriku i pročitate neke od njih.

Tekst teme priložen je ispod:
{MESSAGE}

Želite li isključiti pretplatu nove teme iz ove rubrike slijedite ovaj link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nova tema: {TOPICSUBJECT}',
		'body' => 'Nova tema, \'{TOPICSUBJECT}\', objavljena je u rubrici koju pratite.

Možete je pogledati ovdje
{TOPICLINK}

Možda je objavljeno još novih tema, no nećete primiti još email obavijesti prije nego ponovo posjetite rubriku i pročitate neke od njih.

Želite li isključiti pretplatu nove teme iz ove rubrike slijedite ovaj link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nova tema: {TOPICSUBJECT}',
		'body' => 'Nova tema, \'{TOPICSUBJECT}\', objavljena je u rubrici koju pratite.

Možete je pogledati ovdje
{TOPICLINK}

Tekst teme priložen je ispod:
{MESSAGE}

Želite li isključiti pretplatu nove teme iz ove rubrike slijedite ovaj link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Nova tema: {TOPICSUBJECT}',
		'body' => 'Nova tema, \'{TOPICSUBJECT}\', objavljena je u rubrici koju pratite.

Možete je pogledati ovdje
{TOPICLINK}

Želite li isključiti pretplatu nove teme iz ove rubrike slijedite ovaj link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => 'Nova prijava za Grupu',
		'body' => '{RECPNAME},

{APPYNAME} je zatražio članstvo u "{GROUPNAME}" grupi. Korisnik je naveo sljedeći razlog:

{REASON}

Ovu prijavu možete odobriti ili odbiti klikom na donji link:

{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.
			@description:
		*/
		'subject' => 'Pretplata uskoro istiće na {FORUMNAME}',
		'body' => '{REALNAME},

Pretplata na koju ste pretplaćeni na forumu {FORUMNAME} uskoro će isteći. Ako ste kod pretplaćivanja odabrali auto-obnavljanje ne morate poduzimati nikakve aktivnosti - u protivnom razmislite da se ponovo pretplatite. Detalji su u nastavku:

Ime pretplate: {SUBSCRIPTION}
Istjeće: {END_DATE}

Da biste upravljali svojim pretplatama posjetite sljedeći URL:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => 'Dobrodošli natrag na {FORUMNAME}',
		'body' => 'Da biste re-validirali Vašu email adresu, Vaš korisnički račun je deaktiviran. Kliknite na sljedeći link da ga ponovo aktivirate:
{ACTIVATIONLINK}

Ako ćete imati problema kod aktivacije, molimo posjetite {ACTIVATIONLINKWITHOUTCODE} i koristite kod "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => 'Nova lozinka za {FORUMNAME}',
		'body' => 'Dragi/a {REALNAME},
Ovaj email Vam šaljemo jer je korištena funkcija \'zaboravljena lozinka\' na Vašem računu. Da biste postavili novu lozinku kliknite na:
{REMINDLINK}

IP: {IP}
Korisničko ime: {MEMBERNAME}

{REGARDS}',
	),
	'forgot_openid' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				IP: The IP address of the requester.
				OPENID: The members OpenID identity.
			@description:
		*/
		'subject' => 'OpenID podsjetnik za {FORUMNAME}',
		'body' => 'Dragi/a {REALNAME},
Ovaj email Vam šaljemo jer je korištena funkcija \'zaboravljen OpenID\' na Vašem računu. Dolje je OpenID s kojim je povezan Vaš korisnički račun:
{OPENID}

IP: {IP}
Korisničko ime: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'Sažetak postova koji čekaju odobrenje na {FORUMNAME}',
		'body' => '{REALNAME},

ovaj email sadrži sažetak svih stavki koje čekaju odobrenje na {FORUMNAME}.

{BODY}

Molimo prijavite se u forum da bi pregledali ove stavke.
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => 'Tema: {TOPICSUBJECT} (Od: {SENDERNAME})',
		'body' => 'Dragi {RECPNAME},
Želim da pogledaš "{TOPICSUBJECT}" na {FORUMNAME}.  Da bi ga pogledao koristi donji link:

{TOPICLINK}

Hvala,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => 'Tema: {TOPICSUBJECT} (Od: {SENDERNAME})',
		'body' => 'Dragi {RECPNAME},
Želim da pogledaš "{TOPICSUBJECT}" na {FORUMNAME}.  Da bi ga pogledao koristi donji link:

{TOPICLINK}

Imam i komentar vezano za ovu temu:
{COMMENT}

Hvala,

{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => 'Prijavljen post: {TOPICSUBJECT} autora {POSTERNAME}',
		'body' => 'Sljedeći post, "{TOPICSUBJECT}" autora {POSTERNAME} prijavio je {REPORTERNAME} u rubrici koju moderirate:

Tema: {TOPICLINK}
Moderatorski centar: {REPORTLINK}

Prijavitelj je dao sljedeći komentar:
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => 'Detalji o novoj lozinki',
		'body' => 'Hej, {USERNAME}!

Vaši korisnički podaci na {FORUMNAME} su promjenjeni i Vaša lozinka je resetirana. Dolje su novi pristupni podaci.

Vaše korisničko ime je "{USERNAME}" a Vaša lozinka je "{PASSWORD}".

Možete ih promjeniti nakon što se prijavite tako da posjetite Profil, ili klikom na slijedeći link:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala Vam na registraciji na {FORUMNAME}. Vaše korisničko ime je {USERNAME}. Ako zaboravite lozinku možete je resetirati posjetom {FORGOTPASSWORDLINK}.

Prije no što se možete prijaviti, prvo morate aktivirati svoj račun. Da biste to obavili kliknite na slijeći link:

{ACTIVATIONLINK}

Ako ćete imati problema kod aktivacije, posjetite {ACTIVATIONLINKWITHOUTCODE} i upišite kod "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_openid_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala Vam na registraciji na {FORUMNAME}. Vaše korisničko ime je {USERNAME}. Odabrali ste prijavljivanje pomoću OpenID identiteta:
{OPENID}

Prije no što se možete prijaviti, prvo morate aktivirati svoj račun. Da biste to obavili kliknite na slijeći link:

{ACTIVATIONLINK}

Ako ćete imati problema kod aktivacije, posjetite {ACTIVATIONLINKWITHOUTCODE} i upišite kod "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK:  The url link to the coppa form.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala ti na registraciji na {FORUMNAME}. Tvoje korisničko ime je {USERNAME}. Ako zaboraviš lozinku možeš je resetirati posjetom {FORGOTPASSWORDLINK}.

Prije no što se možeš prijaviti u forum admin mora kontaktirati tvog roditelja/skrbnika da bi se mogao pridružiti zajednici. Više informacija možeš pronaći na:

{COPPALINK}

{REGARDS}',
	),
	'register_openid_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				COPPALINK:  The url link to the coppa form.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala što si se registrirao/la na {FORUMNAME}. Tvoje korisničko ime je {USERNAME}.

Odabrao si da ćeš se autentificirati koristeći sljedeći OpenID identitet:
{OPENID}

Prije no što se možeš prijaviti u forum admin mora kontaktirati tvog roditelja/skrbnika da bi se mogao pridružiti zajednici. Više informacija možeš pronaći na:

{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala što ste se registrirali na {FORUMNAME}. Vaše korisničko ime je {USERNAME}. Ako zaboravite lozinku možete je resetirati posjetom {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'register_openid_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => 'Hvala što ste se registrirali na {FORUMNAME}. Vaše korisničko ime je {USERNAME}.

Odabrali ste da ćete se autentificirati koristeći sljedeći OpenID identitet:
{OPENID}

Možete ažurirati Profil posjetom sljedećeg linka nakon prijave:

{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Dobrodošli na {FORUMNAME}',
		'body' => '{REALNAME}, Vaš zahtjev za registraciju na {FORUMNAME} zaprimljen je.

Korisničko ime koje ste registrirali je {USERNAME}. Ako zaboravite lozinku možete je resetirati posjetom {FORGOTPASSWORDLINK}.

Prije nego se možete prijaviti i početi koristiti forum, Vaš zahtjev mora biti pregledan i odobren. Nakon toga primiti ćete novi email s ove adrese.

{REGARDS}',
	),
	'register_openid_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Dobrodošli u {FORUMNAME}',
		'body' => '{REALNAME}, Vaš zahtjev za registraciju na {FORUMNAME} je zaprimljen.

Korisničko ime koje ste registrirali je {USERNAME}.

Odabrali ste da ćete se autentificirati koristeći sljedeći OpenID identitet:
{OPENID}

Prije nego se možete prijaviti i početi koristiti forum, Vaš zahtjev mora biti pregledan i odobren. Nakon toga primiti ćete novi email s ove adrese.

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Odgovor na temu: {TOPICSUBJECT}',
		'body' => 'Na temi koju pratite {POSTERNAME} je objavio odgovor.

Odgovor pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Odgovor na temu: {TOPICSUBJECT}',
		'body' => 'Na temi koju pratite {POSTERNAME} je objavio odgovor.

Odgovor pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

Tekst odgovora je sljedeći:
{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Odgovor na temu: {TOPICSUBJECT}',
		'body' => 'Na temi koju pratite {POSTERNAME} je objavio odgovor.

Odgovor pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

Možda ima više odgovora, no nećete primati dodatne obavijesti sve dok ne posjetite i pročitate tu temu.

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Odgovor na temu: {TOPICSUBJECT}',
		'body' => 'Na temi koju pratite {POSTERNAME} je objavio odgovor.

Odgovor pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

Tekst odgovora je sljedeći:
{MESSAGE}

Možda ima više odgovora, no nećete primati dodatne obavijesti sve dok ne posjetite i pročitate tu temu.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => 'Tema je prikvaćena: {TOPICSUBJECT}',
		'body' => 'Temu koju pratite {POSTERNAME} je postavio kao prikvaćenu.

Temu pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'Tema zaključana: {TOPICSUBJECT}',
		'body' => 'Temu koju pratite zaključao je {POSTERNAME}.

Temu pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'Tema otključana: {TOPICSUBJECT}',
		'body' => 'Temu koju pratite otključao je {POSTERNAME}.

Temu pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'Tema uklonjena: {TOPICSUBJECT}',
		'body' => 'Temu koju pratite uklonio je {POSTERNAME}.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'Tema premještena: {TOPICSUBJECT}',
		'body' => 'Temu koju pratite premjestio je {POSTERNAME}.

Temu pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'Tema spojena: {TOPICSUBJECT}',
		'body' => 'Temu koju pratite spojio je {POSTERNAME}.

Temu pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'Tema razdvojena: {TOPICSUBJECT}',
		'body' => 'Temu koju pratite razdvojio je {POSTERNAME}.

Temu pogledajte na: {TOPICLINK}

Ako želite isljučiti pretplatu na ovu temu kliknite: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => 'Novi član se registrirao',
		'body' => '{USERNAME} se upravo registrirao kao novi član Vašeg foruma. Kliknite na sljedeći link da bi vidjeli njegov/njen profil.
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => 'Novi član se registrirao',
		'body' => '{USERNAME} se upravo registrirao kao novi član Vašeg foruma. Kliknite na sljedeći link da bi vidjeli njegov/njen profil.
{PROFILELINK}

Prije no što ovaj član može započeti sudjelovanje na forumu morate mu prethodno odobriti račun. Kliknite donji link da biste mogli odobriti račun.
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'HITNO! Direktorij za privitke skoro pun',
		'body' => '{REALNAME},

Direktorij za privitke na {FORUMNAME} je skoro pun. Molimo posjetite forum da biste otklonili ovaj problem.

U trenutku kad direktorij privitaka dosegne svoju maksimalno dozvoljenu veličinu korisnici više neće moći objavljuvati privitke ili uploadati svoje avatare (ako je omogućeno).

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Povrat uplaćene pretplate',
		'body' => '{REALNAME},

Korisnik je primio povrat uplaćene pretplate. Ispod se nalaze detalji o toj pretplati:

	Pretplata: {NAME}
	Korisničko ime: {REFUNDNAME} ({REFUNDUSER})
	Datum: {DATE}

Profil tog člana možete pogledati ovdje:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Nova plaćena pretplata',
		'body' => '{REALNAME},

Član je obavio novu plaćenu pretplatu. Ispod su detalji o toj pretplati:

	Pretplata: {NAME}
	Korisničko ime: {SUBNAME} ({SUBUSER})
	Korisnički email: {SUBEMAIL}
	Cijena: {PRICE}
	Datum: {DATE}

Možete pogledati profil tog člana klikom ovdje:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => 'Došlo je do pogreške kod plaćene pretplate',
		'body' => '{REALNAME},

Sljedeća greška dogodila se prilikom obrade plaćene pretplate
---------------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => 'Sretan Vam rođendan od {FORUMNAME}.',
		'body' => 'Dragi {REALNAME},

Mi na forumu {FORUMNAME} poželjeli bismo Vam sretan i veseo rođendan.  Neka Vam ova dan i naredna godina budu ispunjeni veseljem i srećom.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => 'On your Birthday...',
		'body' => 'We could have sent you a birthday card.  We could have sent you some flowers or a cake.

But we didn\'t.

We could have even sent you one of those automatically generated messages to wish you happy birthday where we don\'t even have to replace INSERT NAME.

But we didn\'t

We wrote this birthday greeting just for you.

We would like to wish you a very special birthday.

{REGARDS}

//:: This message was automatically generated :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => 'Happy Birthday!',
		'body' => 'Your friends at {FORUMNAME} would like to take a moment of your time to wish you a happy birthday, {REALNAME}. If you have not done so recently, please visit our community in order for others to have the opportunity to pass along their warm regards.

Even though today is your birthday, {REALNAME}, we would like to remind you that your membership in our community has been the best gift to us thus far.

Best Wishes,
The Staff of {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => 'Birthday Wishes to {REALNAME}',
		'body' => 'Dear {REALNAME},

Another year in your life has passed.  We at {FORUMNAME} hope it has been filled with happiness, and wish you luck in the coming one.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => 'Happy birthday, {REALNAME}!',
		'body' => 'Do you know who\'s having a birthday today, {REALNAME}?

We know... YOU!

Happy birthday!

You\'re now a year older but we hope you\'re a lot happier than last year.

Enjoy your day today, {REALNAME}!

- From your {FORUMNAME} family',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => 'Your Birthday Greeting',
		'body' => 'We hope your birthday is the best ever cloudy, sunny or whatever the weather.
Have lots of birthday cake and fun, and tell us what you have done.

We hope this message brought you cheer, and make it last, until same time same place, next year.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>