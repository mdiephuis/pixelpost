<?php
/*
Pixelpost version 1.7

SVN file version:
$Id$

Version 1.7:
Development Team:
Ramin Mehran, Will Duncan, Joseph Spurling,
Piotr "GeoS" Galas, Dennis Mooibroek, Karin Uhlig, Jay Williams, David Kozikowski

Former members of the Development Team:
Connie Mueller-Goedecke
Version 1.1 to Version 1.3: Linus <http://www.shapestyle.se>

Contact: thecrew (at) pixelpost (dot) org
Copyright 2007 Pixelpost.org <http://www.pixelpost.org>

Pixelpost www:  	http://www.pixelpost.org/
Pixelpost wiki: 	http://wiki.pixelpost.org/
Pixelpost forum: 	http://forum.pixelpost.org
_____________________________________________________________________________
Some text are generated by the script itself and not controlled through template design.
Edit these lines of text in this file and have the script generate other wording or
in other languages.
_____________________________________________________________________________

BEGIN OF LANGUAGE VARIABLES

Dont edit                     ||      Edit                          */

$_lang_file_translator        = 'Piotr "GeoS" Galas - <a href="http://www.piotrgalas.com/" target="_blank">www.piotrgalas.com</a>';
$_lang_file_email             = 'geos@pixelpost.org';
$_lang_file_rev               = '1.6';

// IMAGE NAVIGATION
$lang_previous								= "Poprzedni";
$lang_next										= "Następny";
$lang_no_previous							= "Brak poprzedniego zdjęcia";
$lang_no_next									= "Brak następnego zdjęcia";
$lang_latest									 = "Ostatnie";
$lang_first										 = "Pierwsze";
$lang_browse_select_category	= "Wybierz kategorię";
$lang_browse_all							= "Wszystkie";
$lang_permalink								= "Permalink";
$lang_paged_archive						= "Archiwum";

// COMMENTS
$lang_message_missing_image		= "Nie wybrano zdjęcia. Komentarz nie został zapisany.";
$lang_message_missing_comment	= "Nie wpisano treści. Komentarz nie został zapisany.";
$lang_message_missing_name    = "Nie wpisano nazwy. Komentarz nie został zapisany.";
$lang_message_moderating_comment = "Komentarz został zapisany! Zostanie opublikowany po zaakceptowaniu go przez administratora photobloga.";
$lang_visit_homepage					= "Odwiedź stronę domową";
$lang_no_comments_yet					= "Brak komentarzy.";
$lang_comment_thank_you				= "Dziękuję za odwiedziny i poświęcenie czasu na dodanie komentarza.";
$lang_comment_redirect				= "Kliknij, aby przenieść się spowrotem.";
$lang_comment_redirect_error	= "Wystąpił błąd dodawania komentarza! Kliknij, aby przenieść się spowrotem.";
$lang_comment_page_title			= "Komentarz";
$lang_comment_popup						= "Komentarze";
$lang_message_banned_comment  = "Komentarz nie został zapisany! Zawiera on jedno lub więcej zabronionych słów/emaili/IP.";
$lang_comment_popup_disabled  = "Komentarze dla tego zdjęcia zostały wyłączone";
$lang_comment_plural					= "Komentarze";
$lang_comment_single					= "Komentarz";
$lang_tags                    = "Tagi:<br/>";
$lang_none                    = "brak";

// EXIF DATA
$lang_exposure              = "Ekspozycja:";
$lang_aperture              = "Przesłona:";
$lang_capture_date          = "Data wykonania:";
$lang_focal                 = "Ogniskowa:";
$lang_camera_maker          = "Producent aparatu:";
$lang_camera_model          = "Model aparatu:";
$lang_flash_fired           = "Flash: Wyzwolony";
$lang_flash_not_fired       = "Flash: Niewyzwolony";
$lang_flash_not_detected    = "Flash: Niewykryty";
$lang_iso                   = "ISO:";

// Category
$lang_category_singular	   = "Kategoria:";
$lang_category_plural      = "Kategorie:";

// Month and Day
$lang_monday              = "poniedziałek";
$lang_tuesday             = "wtorek";
$lang_wednesday           = "środa";
$lang_thursday            = "czwartek";
$lang_friday              = "piątek";
$lang_saturday            = "sobota";
$lang_sunday              = "niedziela";

$lang_january             = "styczeń";
$lang_february            = "luty";
$lang_march               = "marzec";
$lang_april               = "kwiecień";
$lang_may                 = "maj";
$lang_june                = "czerwiec";
$lang_july                = "lipiec";
$lang_august              = "sierpień";
$lang_september           = "wrzesień";
$lang_october             = "październik";
$lang_november            = "listopad";
$lang_december            = "grudzień";

// Alternative language
$lang_alt_lang_dutch							="Nederlands";
$lang_alt_lang_english						="English";
$lang_alt_lang_french							="Fran&ccedil;ais";
$lang_alt_lang_german							="Deutsch";
$lang_alt_lang_italian						="Italiano";
$lang_alt_lang_norwegian					="Norsk";
$lang_alt_lang_persian						="Farsi";
$lang_alt_lang_polish							="Polski";
$lang_alt_lang_portuguese					="Portugu&egrave;s";
$lang_alt_lang_simplified_chinese	="Chinese";
$lang_alt_lang_spanish						="Espa&ntilde;ol";
$lang_alt_lang_swedish						="Svenska";
$lang_alt_lang_japanese						="Japanese";
$lang_alt_lang_danish							="Dansk";
$lang_alt_lang_romanian 					="Romana";
$lang_alt_lang_hungarian					="Magyar";

// Email Notification

$lang_email_notification_subject = "Nowy komentarz";
$lang_email_notification_pt1 = "
	  Witaj,<br>
      Na Twoim photoblogu został dodany nowy komentarz.<br><br>
	  ";
$lang_email_notification_pt2 = "
      <br>
      Treść komentarza: <br>
      ----------------------------------------------------------------------<br>
	  ";
$lang_email_notification_pt3 = "przez";
$lang_email_notification_pt4 = "
            ----------------------------------------------------------------------    <br>
      Email wysłany przez Pixelposta<br>
";
$lang_email_notificationplain_pt1 = "
	  Witaj,
      Na Twoim photoblogu został dodany nowy komentarz.";
$lang_email_notificationplain_pt2 = "
      Treść komentarza:
      ----------------------------------------------------------------------";
$lang_email_notificationplain_pt3 = "przez";
$lang_email_notificationplain_pt4 = "
      ----------------------------------------------------------------------
      Email wysłany przez Pixelposta
";

// Error Message
$lang_nothing_to_show             = "Zapraszamy już niebawem! Obecnie jeszcze nie ma czego oglądać lub zdjęcia są ustawione z datą w przyszłości!";
// Please do not translate any tags like this one: <TIME_TO_WAIT>
$lang_spamflood										= "Zabezpieczenie przed zalewem komentarzami jest aktywne. Musisz poczekać <TIME_TO_WAIT> przez dodaniem kolejnego komentarza.";

// RSS & ATOM Feed
$lang_comment_feed_title        = "Newest comments on";
$lang_comment_feed_image_title  = "New comment on";
?>