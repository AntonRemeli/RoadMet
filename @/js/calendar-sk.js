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
("NedeŸa",
 "Pondelok",
 "Utorok",
 "Streda",
 "tvrtok",
 "Piatok",
 "Sobota",
 "NedeŸa");

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
("ne.",
 "po.",
 "ut.",
 "st.",
 "t.",
 "pi.",
 "so.",
 "ne.");

// full month names
Calendar._MN = new Array
("Január",
 "Február",
 "Marec",
 "Apríl",
 "Máj",
 "Jún",
 "Júl",
 "August",
 "September",
 "Október",
 "November",
 "December");

// short month names
Calendar._SMN = new Array
("jan",
 "feb",
 "mar",
 "apr",
 "máj",
 "jún",
 "júl",
 "aug",
 "sep",
 "okt",
 "nov",
 "dec");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "Kalendár";

Calendar._TT["ABOUT"] =
"zvoŸ DHTML dátum/èas\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"najnoviu verziu môe nájs na: http://www.dynarch.com/projects/calendar/\n" +
"GNU LGPL licencia.  pozri http://gnu.org/licenses/lgpl.html Stránka pre ïaŸie informácie." +
"\n\n" +
"Výber dátumu:\n" +
"- pouite \xab, \xbb tlaèidlo na výber roku\n" +
"- pouite " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " tlaèidlo na výber mesiaca\n" +
"- pre výber drte stlaèenú my";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Výber èasu:\n" +
"- stlaèením vyberiete èas\n" +
"- shift-tom zmeníte\n" +
"- stlaèením a ahaním ide skôr";

Calendar._TT["PREV_YEAR"] = "Predchádzajúci rok (drte stlaèené)";
Calendar._TT["PREV_MONTH"] = "Predchádzajúci mesiac (drte stlaèené)";
Calendar._TT["GO_TODAY"] = "Skok na dnený deò";
Calendar._TT["NEXT_MONTH"] = "ÏaŸí mesiac (drte stlaèené)";
Calendar._TT["NEXT_YEAR"] = "Slj.godina (drte stlaèené)";
Calendar._TT["SEL_DATE"] = "ZvoŸte dátum";
Calendar._TT["DRAG_TO_MOVE"] = "Pretiahnite pre zmenu";
Calendar._TT["PART_TODAY"] = " (dnes)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "Bude prvý deò v týdni";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Zatvor";
Calendar._TT["TODAY"] = "Dnes";
Calendar._TT["TIME_PART"] = "(Shift-)Klikni alebo pretiahni na zmenu hodnoty";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%d-%m-%Y";
Calendar._TT["TT_DATE_FORMAT"] = "%b %e, %a";

Calendar._TT["WK"] = "týdeò";
Calendar._TT["TIME"] = "èas:";