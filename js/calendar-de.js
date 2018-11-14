// ** I18N

// Calendar HU language
// Author: ???
// Modifier: Anton Remeli, <anton.remeli@gmail.com>
// Encoding: any
// Distributed under the same terms as the calendar itself.

// For translators: please use UTF-8 if possible.  We strongly believe that
// Unicode is the answer to a real internationalized world.  Also please
// include your contact information in the header, as can be seen above.

// full day names
Calendar._DN = new Array
("Sonntag",
 "Montag",
 "Dienstag",
 "Mittwoch",
 "Donnerstag",
 "Freitag",
 "Samstag",
 "Sonntag");

// Please note that the following array of short day names (and the same goes
// for short month names, _SMN) isn't absolutely necessary.  We give it here
// for exemplification on how one can customize the short day names, but if
// they are simply the first N letters of the full name you can simply say:
//
//   Calendar._SDN_len = N; // short day name length
//   Calendar._SMN_len = N; // short month name length
//
// If N = 3 then this is not needed either since we assume a value of 3 if not
// present, to be compatible with translation files that were written before
// this feature.

Calendar._FD = 0;

// short day names
Calendar._SDN = new Array
("so.",
 "mo.",
 "di.",
 "mi",
 "do.",
 "fr.",
 "sa",
 "so.");

// full month names
Calendar._MN = new Array
("Januar",
 "Februar",
 "März",
 "April",
 "Mai",
 "Juni",
 "Juli",
 "August",
 "September",
 "Oktober",
 "November",
 "Dezember");

// short month names
Calendar._SMN = new Array
("jan",
 "feb",
 "mar",
 "apr",
 "mai",
 "jun",
 "jul",
 "aug",
 "sep",
 "okt",
 "nov",
 "dec");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "Der Kalender";

Calendar._TT["ABOUT"] =
"wahl des DHTML Datum/Zeit\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"najnovija verzija moe se naæi na: http://www.dynarch.com/projects/calendar/\n" +
"GNU LGPL Lizenz.  Sehe http://gnu.org/licenses/lgpl.html Seite für weitere Informazionen." +
"\n\n" +
"Datenwahl:\n" +
"- benutzen Sie \xab, \xbb Knopf für Jahresauswahl\n" +
"- benutzen Sie " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " Knopf für Monatsauswahl\n" +
"- für den Auswahl halten Sie die Maus gedrückt.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Zeitauswahl:\n" +
"- mit knüpfen vergrößern Sie die Zeit\n" +
"- mit shift verkleinert sich\n" +
"- gedrückt und gezogen geht schneller.";

Calendar._TT["PREV_YEAR"] = "Voriges Jahr (halten Sie gedrückt)";
Calendar._TT["PREV_MONTH"] = "Voriges Monat (halten Sie gedrückt)";
Calendar._TT["GO_TODAY"] = "Sprung zu heutigem Tag";
Calendar._TT["NEXT_MONTH"] = "Nächster Monat (halten Sie gedrückt)";
Calendar._TT["NEXT_YEAR"] = "Nächstes Jahr (halten Sie gedrückt)";
Calendar._TT["SEL_DATE"] = "Wählen Sie Datum";
Calendar._TT["DRAG_TO_MOVE"] = "Ziehen Sie für Änderung";
Calendar._TT["PART_TODAY"] = " (heute)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "%s wird dre erste Wochentag sein";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Zumachen";
Calendar._TT["TODAY"] = "Heute";
Calendar._TT["TIME_PART"] = "(Shift-)Klik oder ziehen für Änderung des Wertes";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%d-%m-%Y";
Calendar._TT["TT_DATE_FORMAT"] = "%b %e, %a";

Calendar._TT["WK"] = "Woche";
Calendar._TT["TIME"] = "Zeit:";
