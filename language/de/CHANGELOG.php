
<?php

/**
 *  2Moons
 *  Copyright (C) 2011  Slaver
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Slaver <slaver7@gmail.com>
 * @copyright 2009 Lucky <lucky@xgproyect.net> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.4 (2011-07-10)
 * @info $Id$
 * @link http://code.google.com/p/2moons/
 */
 
$LNG['Version']     = 'Version';
$LNG['Description'] = 'Beschreibung';

$LNG['changelog']   = array(

'v1.4.5' => 'ShadoX 30.07.11
- FIX: clear planets after spy
- FIX: little template iusses
- FIX: SQL Error on FleetBack, if fleet is on a acs
- FIX: JS Error on Combat Raports
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'v1.4' => 'ShadoX 10.07.11
- ADD: FirePHP Log System
- ADD: Language selectable on Global Messages
- ADD: New Message System (includes old global message system like another XNova versions)
- ADD: {lang} Block for tpls. Directly access to langvars with {lang}varname{/lang}
- ADD: More dynamic for new languages
- FIX: Ressource Cheat
- FIX: Multiply Messages
- FIX: Forgotten password
- FIX: Defender bonus on combats
- FIX: Fixed Register on large Unis
- FIX: Redirect on Messages
- FIX: Unable to send recylers to vacation players
- FIX: Cencored coors on hall of frame know correctly
- FIX: Fixed not correct calculaton of DM extras on destruction
- FIX: Chat
- FIX: Fixed incorrect display of reycler fleets
- FIX: Fixed Servertime are not localize
- FIX: MaxElemens for shields &amp; missiles
- FIX: wrong padding for leftmenu
- FIX: Moduls after a fresh installation
- FIX: search
- FIX: Fixed Register on lange Unis
- FIX: cancel researches
- FIX: UTF8 names on fleet shortcuts
- FIX: galaxy messages
- FIX: Deactive modules are not visible on galaxy
- FIX: Multiply load cache files
- FIX: Wrong datatype for lage numbers
- FIX: Wrong Queue display, if 2 elements with same level in there
- FIX: Bypass module check on spy and recyle
- DIV: Refresh database design
- DIV: Old Popups for Playercard &amp; Messages
- DIV: Includes Smarty
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'v1.3.5' => 'ShadoX 11.06.11
- ADD: New ChatSystem
- ADD: New Popup UI
- ADD: Refferalsystem
- ADD: Destroy Rocket
- ADD: Wellformed URLs on Bulidsides
- ADD: Solarsat on Moon give now energy
- FIX: Correct Calculation of maximum amount rockets
- FIX: Division by Zero
- FIX: Wrong TotalUsercount, if a new User join the Game
- FIX: Shipyard Iusses, with BCMath is not avalible
- FIX: reCAPTCHA
- FIX: Incoming Recylcer Fleet, where display on overview &amp; phalanx
- FIX: Facebook Login
- FIX: Universe Import/Export
- FIX: Disapier Ships
- FIX: Short Names on Combat Reports
- FIX: Queues
- FIX: $_SESSION[&quot;uni&quot;] = 0, after leave Admin Panel
- FIX: Grap Debris from Fleetmenu
- DEL: Spanish &amp; French Language
- DIV: set correct favicon Metatag
- DIV: Moonsize Calculation
- DIV: Added Bonus Maxfields on Planets (AccountEditor)
- DIV: Added missed language keys
- DIV: Improved request_vars
- DIV: Rewrite LoginPage
- DIV: Improved Javascript Code
- DIV: MultiUniverse Support
- DIV: Rewrite UpdateSystem
- DIV: Change Copyright Header
- DIV: Rewrite Connect wit Facebook
- DIV: Update Smarty and jQuery
- DIV: Remove Soundmanager and overLIB Liberary
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'v1.3' => 'ShadoX 05.03.11
- ADD: MultiUniverse Support
- ADD: IPv6 Support
- ADD: Limit of max Colony
- ADD: Template Cache System
- ADD: Daily Cronjob for clear Cache
- ADD: Fleettrader
- ADD: SessionSystem
- ADD: AdminHack Protection
- ADD: FTP Service on Installer to solved the CHMOD Problems
- ADD: New Chat System
- ADD: Cyrillic Char support for UserBanner
- FIX: Facebook Connector
- FIX: ACS
- FIX: SQL Injections on FleetsShoutcuts
- FIX: XSS on Battlesim
- FIX: TF Iusses
- FIX: UpdateSystem
- FIX: Ressource Cheat
- FIX: Admin Attack
- FIX: SSL on IIS
- FIX: Admin on Records
- FIX: Noobprotection for Holding Mission
- FIX: BattleReports show correct Techs now
- FIX: ResetPage
- FIX: Updated Ressource on TargetPlanet on Attacks
- FIX: Fleetspeed Hack
- FIX: BuildTime Hack
- FIX: Cache System
- FIX: Moondestruction
- FIX: Teamspeak API for Teamspeak 3 Servers
- FIX: UpdateSystem dont donwload same Files now
- DIV: 2Moons not longer require safe_mode = off
- DIV: Change Copyright Header
- DIV: Max Buttons on Jumpgate
- DIV: OfficiersVars now on vars.php
- DIV: Fleet Ressoucres go up tp 18.446.744.073.709.551.616
- DIV: Allow Change Version on ACP
- DIV: Get Language via HTTP Header on Index
- DIV: Use Facebooks new Graph API now.
- DIV: Set new location for error.log
- DIV: Update TS³ Lib, Soundmanager, reCAPTCHA Lib, Smarty and jQuery (UI)
',
'v1.2' => 'ShadoX 04.10.10
- ADD: Set Max Fleets on ACS (Default: 16)
- ADD: New RightsSystem on ACP
- ADD: .htaccess Protection for some dirs
- FIX: Expedition
- FIX: Servertime at Overview
- FIX: Research Hack while Build ID:6 or 31
- FIX: Alliance Exit
- FIX: See not invited ACS
- FIX: overLIB Problems with Internet Explorer
- FIX: Multilanguages Iusses
- FIX: reCAPTCHA
- FIX: Admin Protection
- FIX: Moon Creation Explod
- FIX: Rights on Alliance
- FIX: Jumpgate
- FIX: Build Points
- FIX: Some HTML Errors
- FIX: Linebreaks on Alliance Rundmails
- FIX: UMode
- DIV: Update Langauges
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'v1.1' => 'ShadoX 31.08.10
- ADD: GoW Skin
- ADD: Mod Versions Control
- ADD: Cronjoboption für Banner
- ADD: Options for Loginmusic
- FIX: Anzeigefehler in Raports
- FIX: Ressoucre Hack
- FIX: Fleet Bugs
- DEL: Unused Pictures
- DIV: Optimized CSS
- DIV: Changed HTML Tree (Changed td.c to th / th to td)
- DIV: Update to HTML 5
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'v1.0' => 'ShadoX 07.08.10
- FIX: Global Messages
- FIX: Forgotten Password
- FIX: Gamereset
- FIX: Ressouce Glitch
- FIX: Accout Informationen
- FIX: Destroying Fleet after Fights
- FIX: User Activation on ACP
- FIX: Account delection
- FIX: Bonusspeed for small cargo
- FIX: Recycling Derbis
- FIX: Message delection on ACP
- FIX: Modules on English language
- FIX: UpdatePage
- FIX: class.ShowShipyardPage.php on line 43: Division by zero
- DIV: Limited Random on Dm Mission
- DIV: Changed System of Rapidfire
- DIV: Solved Problems with BattleSimulator
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'RC6' => 'ShadoX 28.07.10
- ADD: Russian Language (ssAAss &amp; InquisitorEA)
- ADD: Portuguese Language (morgado)
- ADD: Spanish Language (ZideN) ALPHA (!)
- FIX: UTF-8 Support for Buddy Requests
- FIX: Messages Notify
- FIX: Phalanx
- FIX: Installer
- FIX: Trümmerfeld bei Mondangriffen
- FIX: Trümmerfeldabbau
- FIX: Ressourcenberechnung bei Angriffen
- FIX: Mondzerstörung
- DIV: Neue Loginmusik
- DIV: Removeold Settings
- DIV: Recoding ACP
- DIV: Optimized CSS for Login
- DIV: zlib.output_compression wird statt ob_gzhandler genutzt
- DIV: Change Path for reCAPTCHA AJAX
- DIV: Remove old UGamla Functions
- DIV: Sicherheit im Game erhöht
- DIV: Include New Version of Soundmanager (2.96a.20100624)
- DIV: Update Smarty Engine
- DIV: Diverse Anpassungen am Game
',
'RC5.1' => 'ShadoX 23.06.10
- ADD: Für Halten muss man in der Ally/Buddy sein
- ADD: Name des HP bei der Reg.
- ADD: Passwort Abfrage bei Authlevel/Reset
- FIX: Flottenverluste
- FIX: AKW, wenn keine Deuterium vorhanden ist
- FIX: reCAPTCHA wird beim Direkt Link nicht geladen
- FIX: Englische VaildMail
- FIX: IRaks
- FIX: Langauge Select beim Registieren
- FIX: Koloniename
- FIX: UMode
- FIX: Admin Hack via Facebook
- FIX: Flottenrückkehr
- FIX: Nachrichten Transport
- FIX: Forschung
- FIX: Phalax
- FIX: Steal
- FIX: BuildQueue
- FIX: Install
- FIX: Forschungen
- DIV: Mienen auf 100% nach UMode
- DIV: Full MultiLangauge Support
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'RC5.0' => 'ShadoX 30.05.10
- ADD: Neue Schiffe
- ADD: Support Planet in System != 15
- ADD: Cookie für LoginMusik
- ADD: Check für verfügbare Missions in Fleet3
- ADD: Multi-Lang Installer
- ADD: Kampfsimulator
- ADD: bcmath for JS
- DEL: PluginSystem
- FIX: View Database Logindata, if connections problems to database.
- FIX: Dublicate Ressis Bug
- FIX: Bewerbungstext
- FIX: Support
- FIX: Mondzerstörung
- FIX: Flotten
- FIX: Gebäude Cheat
- FIX: Resource Bug
- FIX: Shipyard supports now Trillion \'Build per Row\'
- FIX: Darmatter Kosten bei Verteidigung
- FIX: Mood Löschung
- FIX: Intergal. Netzwerk
- FIX: class.FlyingFleetMissions.php on 1183:SQL Error (Duplicate entry \'Key\' for key \'rid\')
- FIX: Bauzeiten, wenn Gebäude nicht baubar war
- FIX: Gebäude mit 0 Sekunden Bauzeit
- FIX: Allianzstatistik
- FIX: SQL Injection in Notizen, Nachrichten un Fleet Shoutcuts
- FIX: Große TF`s
- FIX: Evo Trans. &amp; Gigarec.
- FIX: Große HoF KBs
- FIX: GebäudeCheat
- FIX: Statistiken Fehler bei neuen Spielern
- DIV: Use IE7-js for IE CSS Fixs
- DIV: Use Googles Host for jQuery JS
- DIV: Updatet TS 3 Lib
- DIV: Flottenquery vereinfacht
- DIV: Sicherheit im Game erhöht
- DIV: Leftmenu
- DIV: Diverse Anpassungen am Game
',

'RC5.0b8' => 'ShadoX 20.04.10
- FIX: Bann
- FIX: Unmarkierte Nachrichten Löschen
- FIX: Query log
- FIX: Steal
- FIX: Aktivitätstern
- FIX: Planetenerstellung im ACP
- FIX: Sprungtor
- FIX: Ress up to 9e132
- FIX: BBCodes
- FIX: Lost Ressis
- FIX: Install
- DIV: AddBuildingToQueue überarbeitet
- DIV: Sicherheit im Game erhöht
- DIV: min. Requieres PHP 5.2.6
- DIV: Diverse Anpassungen am Game
',

'RC5.0b7' => 'ShadoX 16.04.10
- ADD: Google Analytics Mod
- FIX: max Button, if thousend Sep is not "."
- FIX: Große Transporte
- FIX: Globale Nachrichten
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',

'RC5.0b6' => 'ShadoX 15.04.10
- ADD: Updated ACP (XG Proyecto 2.9.4)
- ADD: Facebook Connector Alpha
- ADD: Diplomatie-System
- ADD: Gigarecyler on Galaxy
- ADD: Ori. Platform, Spalteinreißer, Bahamut
- ADD: Händlergebühren
- ADD: Universität
- ADD: Konstanten für Mondentstehung
- ADD: Download Patch Files in ACP
- ADD: Locale Settings in Language File
- FIX: Trader
- FIX: Ressverlust bei hohen Zahlen.
- FIX: Galaxy
- FIX: Spioangeabwehr
- FIX: Aliianz Übergeben
- FIX: Minus-Werte bei NPC`s in Expeditions Kämpfen
- FIX: Allianz Hack
- FIX: UMode
- FIX: Sprungtor
- FIX: BuildQuere
- FIX: Aktivitäts Stern
- FIX: Playercard
- FIX: General
- FIX: AKS-Stealberechnung
- FIX: Negative Rückflugzeit bei AKS-Einheiten
- FIX: Rohstoffberechnung
- FIX: Zeit von Spionageberichten
- FIX: Allianzstatistiken
- FIX: Font-FIX in overLIB
- DIV: Updated ACP
- DIV: Update Smarty to 3.0b8
- DIV: Change Buildsystem für Gebäude/Flotten
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'RC5.0b5' => 'ShadoX 06.03.10
- FIX: Attack
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'RC5.0b4' => 'ShadoX 01.03.10
- ADD: Plugin-System v0.4 (Green @ XG Proyecto)
- ADD: Neu StatBuilder
- FIX: AKS
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',

'RC5.0b3' => 'ShadoX 23.02.10
- ADD: DM BANK
- ADD: Koords werden nicht mehr in der HoF angezeigt.
- ADD: Update System BETA
- ADD: Admin in Statistiken ausblendbar
- ADD: jQuery UI 1.8rc2
- ADD: Neue Expedition
- FIX: Phalax &amp; Interplanetarrakten Reichweiten
- FIX: Urlaubsmodus fixed
- FIX: Haltende Flotten werden im Spiobericht dazugezählt.
- FIX: Anzeige der Canche der Mondzerstörung
- FIX: Admins in Rekorden
- FIX: Planetensuche
- FIX: Neues Kampfscript für Interplanetarraketeneinschläge
- DIV: Set DB Connection to UTF-8
- DIV: Userbanner wird nurnoch einmal ein Tag aktualisiert.
- DIV: Webseitenoptimierung(YSlow Grande: A/Score: 91)
- DIV: Add Headers für Browsercaching 
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
- DIV: Update jQuery to 1.4.2
',
'RC5.0b2' => 'ShadoX 20.02.10
- ADD: Accountlöschung w&auml;hrend des U-Modes
- ADD: UTF-8 Support for Names
- ADD: Kosten Dunkle Materie
- ADD: Some langs (not complete)
- FIX: Quere
- FIX: Gebäude Abreißen
- FIX: Allianzerstellung
- FIX: AKS in der Overview
- FIX: AKS-Hack
- FIX: AKS-Ressisverteilung
- FIX: Deuteriumberechung Planetentemperaturabhb&auml;nig
- FIX: Fusionkrafwerk: Bonus durch Energietechnik 
- FIX: Zeilenumbruch in Globalen Nachrichten fixed
- DIV: Update Smarty to 3.0b7
- DIV: UserStats Mod an AKS angepasst.
- DIV: Optimized Game Messages
- DIV: Rechtschreibfehler korrigiert
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'RC5.0b1' => 'ShadoX 02.02.10
- NEW: Search-Engine
- NEW: LOGIN
- NEW: Change Name to 2Moons
- ADD: Smarty-Template-Engine
- ADD: Forschungsmaximum in vars.php einstellbar
- ADD: fb-share
- ADD: Planetenliste
- ADD: Teampseak-Addon: Support für Teamspeak 3
- ADD: Max. Auftr&auml;ge in Fleet/Def einstellbar (Standart: 10)
- ADD: Cache for Records
- ADD: Realtime-Ressanzeige
- ADD: Optimize Hall of Fame DB
- ADD: Postausgang
- ADD: Abbruch Schiffswert
- FIX: Wirtschaftssystem
- FIX: Ress. - Page
- FIX: DM-Untersuchung
- FIX: Playercard
- FIX: Speicheranzeige in Rohstoffe
- FIX: Design
- FIX: Pranger
- FIX: Teamspeak-Overview
- FIX: Useramount
- FIX: Spioangebericht, -anzeige und -abwehr
- FIX: Allianz Chat
- FIX: TF-Entstehungs Bug bei Mondentstehung
- FIX: CheckPlanetUsedFields
- FIX: DeleteSelectedUser
- FIX: Moon TF
- FIX: Intergal. Forschungsnetzwerk
- FIX: Werte für den Verbrauch
- FIX: Error-Handler
- FIX: U-Mode &amp; Adminschutz - Iraks
- FIX: AKS-BUG in der SendFleetBack Funktion
- FIX: Flottenflugzeit
- FIX: CAPTCHA
- FIX: Bug bei Mond- und Planetzerstörung
- FIX: Reyclerrückkehr
- FIX: Kolonisierung: Mitgebrachte Ressis werden nun gutschreiben
- FIX: Flottenverbrauch
- FIX: SQL-Lücke in FleetAjax.php
- FIX: Planetenentfernung
- FIX: Diverse Flottencheats entfernt
- FIX: Magic TF`s
- FIX: ACP-fopen Error
- FIX: Opera Style Fix
- FIX: Mondzerstörung
- FIX: Module-Addon
- FIX: Support-Ticket
- FIX: DM Untersuchungs Mission
- FIX: Probleme mit der erstellung von Haputplaneten nach der mauellen Erstellung von Usern
- FIX: Allianzmemberanzahl in ainfo
- FIX: Noobschutz
- FIX: Moon Building
- FIX: Adminschutz
- FIX: Schiffebauen ohne Schiffswerft
- FIX: Anzeigefehler im KB Erstellung
- FIX: Passwort vergessen
- FIX: Passwort/Nichname &auml;ndern
- FIX: Umlaute in den Beschreibungen
- DIV: Neue Methode zum Aufruf von Fleethandler
- DIV: Neue Plantenbilder
- DIV: Flexibilit&auml;t für einfügen neue Geb&auml;ude erhöht
- DIV: Neue Formel für Speicherberechung
- DIV: Info im ACP, wenn FlyingFleetHandler einen Fehler hatte
- DIV: Useraktivierung per ACP
- DIV: Neue Formel für Solarsats, Deuterium, Planettemp und Felderanzahl
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
- DIV: Update jQuery to 1.4.1
',

'RC4.2' => 'ShadoX 06.12.09
- ADD: StatBanner
- ADD: Sycrogs robots.txt
- ADD: UserVaild-Funktion einstellbar
- FIX: News
- FIX: Offiziere
- FIX: Vaild-Maillink
- FIX: Retrun-Subject in Messages
- FIX: Global Adminmessage
- FIX: SQL Lücken in Notes
- FIX: NEWS
- FIX: Flotten Geschwindigkeit
- FIX: BeuteMath (by WOT-Game)
- FIX: GalxyMoonRow
- FIX: Mail
- FIX: Allianzinfo
- FIX: LostPassword
- FIX: Allianzr&auml;nge
- FIX: max. Expiditionen / max. Haltezeit
- FIX: Usernamenüberprüfung bei der Registration
- FIX: Registration close &amp; Game Close
- FIX: AdminChatPage
- FIX: Speicheranzeige in Rohstoffe korrigiert
- FIX: Galaxy Allyname Crash
- FIX: Statfunctions.php
- DIV: Mails über SMTP-Auth
- DIV: Chat-Class
- DIV: überarbeitung Installer
- DIV: Notes-Class
- DIV: Chat-Interval auf 10 Sekunden gesetzt
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',

'RC4.1' => 'ShadoX 23.11.09
- FIX: Moderration-ACP
- FIX: Userlöschung
- FIX: cronjob.php
- FIX: Mail-Funktion
- FIX: ACP-Topnav - Error
- FIX: UTF-8 im ACP
- FIX: Kleinere SQL-Lücken
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',

'RC4' => 'ShadoX 13.11.09
- ADD: Fleet/Def ins TF einstellbar
- ADD: Neue Funktion request_var, set_var und msg_handler
- ADD: Komplett überarbeitetes ACP (XGP 2.9.1)
- ADD: FlyingFleetHandler wird nicht mehr im Login aufgerufen
- ADD: FlyingFleetHandler wird nun nicht mehr 2x aufgerufen
- ADD: Neue Cronjob - "Engine"
- ADD: Verwendung von PHPMailer v5.1 Lite
- MOD: Datenbankverbindung nun mit mysqli
- MOD: AKS-Overview
- MOD: Neue Chat Engine based on jQuery
- MOD: Bauschleifennachrichten pro User abschaltbar
- MOD: Nutztung von mysqli::multi_query (5%)
- MOD: $_GET und $_POST durch request_var ersetzt (70%)
- MOD: Uservaris mit $db->sql_escape (mysqli_real_escape_string) verstzt (80%)
- MOD: Neue EMail-Klasse
- MOD: Bauzeit der aktuellen Forschung/des aktuellen Geb&auml;udes in der Titelleiste
- MOD: autoload - Funktion
- FIX: Zeilenumbrüche in Allianztexten
- FIX: Buddyliste
- FIX: Statistiken: Punkte up to 18.446.744.073.709.551.616 (Ja wei&szlig;, unnütz)
- FIX: Universumreset
- FIX: Spionageangriff
- FIX: SQL-Lücke in MissilesAjax.php
- FIX: Anonyme User können nicht ins Spiel kommen
- FIX: Planetenlöschung
- FIX: Ressourcen bei Forschungsabbruch
- FIX: Keine 10 Deu für eigene Gala mehr
- FIX: Planiliste im ACP
- FIX: (ID:01)-Bauen
- FIX: Geb&auml;ude mit Vorrausetztungen können nicht mehr ohne Vorraussetztung gebaut werden
- FIX: Hauptplanet hei&szlig;t nun standartm&auml;&szlig;ig Hauptplanet
- FIX: Attacklink bei Mondspionageberichten
- FIX: DM-Forschungsmission
- DIV: luna und galaxy Tabellen entfernt
- DIV: Komplett UTF-8 umgestellt
- DIV: Koords-Verliunkung zur Galaxie in Fleets
- DIV: Skinoptimierungen
- DIV: DB-Speichertyp für Geb&auml;ude und Forschung von int(11) auf TINYINT(3) unsigned ge&auml;ndert
- DIV: Anpassung an Internet Explorer (IE8) &amp; Opera
- DIV: Unnötige SQL-Abfragen(SELECT * FROM) ge&auml;ndert
- DIV: register_globals standartm&auml;ssig aus
- DIV: Alle Tabellen werden nun 1x pro Tag Aufger&auml;mt (OPTIMIZE TABLE)
- DIV: Seiten werden komprimiert an Client versendet
- DIV: Allianzpage nun mit switches gesteuert
- DIV: Performance Ingal. Netzwerk erhöht
- DIV: formatCR und calculateAttack in der FlyingFleetHandler nun integriert
- DIV: Neue Registration (XNova-Reloaded 0.1)
- DIV: Neue Nachrichtenverwaltung (XNova-Reloaded 0.1)
- DIV: Neue Baulisten (XNova-Reloaded 0.1)
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
',
'RC3' => 'ShadoX 18.10.09
- ADD: AGB
- ADD: Rules
- ADD: Vaild E-Mail Funktion
- ADD: Datenbank-Backup
- ADD: Datenbank-Port ausw&auml;hlbar
- MOD: Datenbank Optimirungen
- FIX: Allianzr&auml;nge
- FIX: Allianzname &auml;ndern
- FIX: Aliianztag &auml;ndern
- FIX: Mehr als 2.147.483.647 Einheiten transportierbar
- FIX: statbuilder.php
- FIX: Userlöschung
- FIX: Beute beim Angriff
- FIX: DM Fund bei Expedition
- DIV: Alte Steal und Wirtschaftsysteme wieder eingefügt
- DIV: Neuer EMail-Text fü vergessendes Passwort
- DIV: Sicherheit im Game erhöht
- DIV: W3C Vaild (Login)
- DIV: Diverse Anpassungen am Game
',
'RC2' => 'ShadoX 13.10.09
- MOD: Lotterie
- MOD: TS-Overview Mod
- MOD: Mindestbauzeit einstellbar
- MOD: Captcha-Mod powerd by reCAPTCHA.net
- MOD: News in der Overview/auf der Startseite
- MOD: Hall of Fame + Allianzstatistik + Playercard
- MOD: Neue Planeten-, Mond- und Spielerlisten im ACP
- MOD: 4 Neue Schiffe(Evolution Transporter, Gigarecyler, Intergal. Materiensammler, Sternenzerstörer)
- MOD: Neue Def (Gravitationskannone)
- MOD: Neue Mission zur DM-Bergung
- MOD: Neues Wirtschaftssystem
- MOD: Module
- MOD: Supportsystem
- MOD: Rekorde
- FIX: Mondgrö&szlig;e wird richtig berechnet
- FIX: Korrekte Stealberechnung beim Angriff
- FIX: Sichheitslücke in der Allianzseite
- FIX: Flotten kommen bei zerstörten Mond auf den Planet wieder
- DIV: Neuer Standartskin: Darkness&sup2;
- DIV: Game zu 100% in Deutsche übersetzt (danke an Sycrog für das übersetzte ACP)
- DIV: Sicherheit im Game erhöht
- DIV: Diverse Anpassungen am Game
- DIV: Anzeige der Admins, die zurzeit online sind


Based on XG Proyect 2.8 on 11.10.09
',
);
?>