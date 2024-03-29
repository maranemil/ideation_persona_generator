<?php /** @noinspection SpellCheckingInspection */
/**
 * Created by PhpStorm.
 * User: lime
 * Date: 06.09.17
 * Time: 21:43
 */

#header('Content-Type: application/json; charset=utf-8');
#header('Content-Type: text/html; charset=utf-8');

// http://phptester.net/
// http://sandbox.onlinephpfunctions.com/

$anrede = ["Frau", "Herr"];
$nachname = ["M\u00fcller ", " Schmidt ", " Schneider ", " Fischer ", " Weber", " Meyer", " Wagner", " Becker", " Schulz", " Hoffmann", " Sch\u00e4fer", " Bauer", " Koch", " Richter", " Klein", " Wolf", " Schr\u00f6der", " Neumann", " Schwarz", " Braun", " Hofmann", " Zimmermann", " Schmitt", " Hartmann", " Kr\u00fcger", " Schmid", " Werner", " Lange", " Schmitz", " Meier", " Krause", " Maier", " Lehmann", " Huber", " Mayer", " Herrmann", " K\u00f6hler", " Walter", " K\u00f6nig", " Schulze", " Fuchs", " Kaiser", " Lang", " Wei\u00df", " Peters", " Scholz", " Jung", " M\u00f6ller", " Hahn", " Keller", " Vogel", " Schubert", " Roth", " Frank", " Friedrich", " Beck", " G\u00fcnther", " Berger", " Winkler", " Lorenz", " Baumann"];
$vorname_f = ["Andrea", " Jennifer", " Melanie", " Angelika", " Jessica", " Jessika", "\r\nMichelle", " Anja", " Julia", " Monika", " Anke", " Juliane", " Nadine", " Anna", " Anne", " Karin", " Nicole", "\r\nAnnett", " Karolin", " Petra", " Antje", " Katharina", " Sabine", " Barbara", " Kathrin", " Katrin", " Sabrina", " \r\nBirgit", " Katja", " Sandra", " Brigitte", " Kerstin", " Sara", " Sarah", " Christin", " Klaudia", " Silke", " \r\nChristina", " Christine", " Kristin", " Simone", " Claudia", " Laura", " Sophia", " Sophie", " Daniela", " Lea"];
$vorname_m = ["Dennis", " Jan", " Alexander", " Dieter", " Jens", " Andreas", " Dirk", " Jonas", " Benjamin", " Dominik", " J\u00f6rg", " Bernd", " Eric", " Erik", " J\u00fcrgen", " Christian", " Felix", " Kevin", " Daniel", " Florian", " Klaus", " David", " Frank", " Kristian", " Leon", " Mike", " Maik", " Steffen", " Lukas", " Niklas", " Sven", " Swen", " Marcel", " Patrick", " Thomas", " Marco", " Marko", " Paul", " Thorsten", " Torsten", " Mario", " Peter", " Tim", " Markus", " Philipp", " Phillipp", " Tobias", " Martin", " Ralf", " Ralph", " Tom", " Mathias", " Matthias", " Ren\u00e9", " Ulrich", " Max", " Robert", " Uwe", " Maximilian"];
$location = ["Club-Haus", " Alter Bahnhof", " Alter Botanischer Garten", " Alter Markt", " Altstadt", " Kirche", " Antiquariat Lesart", " Aquarium", " Platz", " Bar", " Atelier", " Park", " Autohaus", "Cafe Bar", "Cinemax", "Galerie", "Hotel", "Museum", "Pizzeria", "Restaurant"];
$subst_m = ["Anruf", " Anzug", "Arm", "Arzt", " Ausweis", " Bahnhof", " Balkon", " Baum", " Berg", " Beruf", " Bildschirm", " Bus", " Computer", " Durst", " Drucker", " Eintrittskarte", " Einwohner", " Fahrschein", "Fernseher", " Finger", " Flughafen", " Flur", " Fr\u00fchling", " F\u00fcller", " Fu\u00df", " Fu\u00dfboden", " Garten", " Gast", " Geburtstag", " Hafen", " Hamburger", " Hut", " Hunger", " Kaffee", " Kakao", " Keller", " Kleiderhaken", " Koch", " Kuchen", " Kugelschreiber", " Kuchen", " Kunde", " Laden", "Locher", " L\u00f6ffel", " Markt", " Marktplatz", " Monitor", " Name", " Mann", " Oktober", " Opa", " Park", " Pass", " Passant", " Platz", " Projektor", " Pullover", " Radiergummi", " Regen", " Rock", " Schinken", " Schl\u00fcssel", " Schnaps", " Schnee", " Schrank", " September", " Sessel", " Sommer", " Star", " Strumpf", " Stuhl", " Supermarkt", " Tag", " Tee", " Teppich", " Test", " Tisch", " Tourist", " Urlaub", " Vater", " Wagen", " Wunsch", " Zeiger", " Zug", " Zuschauer"];
$subst_f = ["Adresse", " Apfelsine", " Apotheke", " Bank", " Bankkarte", " Bedienung", " Beschreibung", " Bestellung", " Bibliothek", " Bluse", " Brille", " Br\u00fccke", " City", " Cola", " Decke", " Diskette", " Dolmetscherin", " Dose", " Dusche", " Eile", " Einladung", " Etage", " Fahrkarte", " Festung", " Fotografie", " Frage", " Funktion", " Gabel", " Garage", " Gardine", " Gasse", " Gitarre", " Gr\u00f6\u00dfe", " Hilfe", " Hose", " H\u00fctte", " Information", " Kasse", " Kassette", " Kirche", " Krawatte", " Kreditkarte", " Kreide", " K\u00fcche", " Kultur", " Lampe", " Landkarte", " Landschaft", " Mandarine", " Maschine", " Maus", " Milch", " Mutter", " M\u00fctze", " Nachricht", " Nacht", " Nase", " Natur", " Nummer", " Oma", " Oper", " Ordnung", " Pause", " Pflanze", " Pizza", " Polizistin", " Post", " Postkarte", " Pr\u00fcfung", " Reparatur", " Reservierung", " Sache", " Sahne", " Schule", " Sehensw\u00fcrdigkeit", " SMS", " Socke", " Sonne", " Stra\u00dfe", " Stra\u00dfenbahn", " Tasche", " Tasse", " Toilette", " Torte", " U-Bahn", " \u00dcberraschung", " \u00dcbung", " Uhr", " Umwelt", " Universit\u00e4t", " Verbindung", " Wand", " Wanderung", " Welt", " Werbung", " Werkstatt", " Wirtschaft", " Woche", " Wurst", " Zeitung"];
$subst_n = [" Auto", " Bad", " Bein", " Bett", " Bier", " Bild", " Br\u00f6tchen", " Buch", " Caf\u00e9", " Einkaufszentrum", " Fahrrad", " Fest", " Flugzeug", " Foto", " Fr\u00e4ulein", " Fr\u00fchst\u00fcck", " Gef\u00fchl", " Gem\u00fcse", " Gesch\u00e4ft", " Glas", " Gleis", " Handy", " Haus", " Heft", " Hemd", " Hotel", " K\u00e4nnchen", " Internet", " Kind", " Kino", " Kleid", " Leben", " M\u00e4dchen", " Motorrad", " Museum", " Radio", " Regal", " Restaurant", " Schiff", " Schnitzel", " Sofa", " Spiel", " St\u00fcck", " Taxi", " Telefon", " Theater", " Ticket", " Tonbandger\u00e4t", " Warenhaus", " Wetter"];

/**
 * Convert hex-unicode to text
 * Bsp.: \u00F6 => ö
 * http://nikoklausnitzer.de/seiten/blog/php-hex-unicode-in-php-string-konvertieren/
 *
 * @param string|array $string
 *
 * @return string|array
 */
function fixHexUnicode($string)
{
    $json = json_encode($string);
    $json = str_replace('\\\\u', '\\u', $json);
    return json_decode($json, true);
}

/**
 * @returns {string}
 */
function generatePersona()
{
    global $anrede, $nachname, $vorname_f, $vorname_m, $location,
           $subst_m, $subst_f, $subst_n;

    $strout = "";
    $genderout = $anrede[mt_rand(0, count($anrede) - 1)];
    $strout .= $genderout;
    if ($genderout === "Herr") {
        $strout .= $vorname_m[mt_rand(0, count($vorname_m) - 1)];
    } else {
        $strout .= $vorname_f[mt_rand(0, count($vorname_f) - 1)];
    }
    $strout .= $nachname[mt_rand(0, count($nachname) - 1)];
    $strout .= ", ist momentan in ";
    $strout .= $location[mt_rand(0, count($location) - 1)];

    $kindernr = mt_rand(0, 3);
    if ($kindernr !== 0) {
        $strout .= " mit seine " . $kindernr . " kinder";
    }

    $strout .= " weil seine ( ";
    $strout .= $subst_m[mt_rand(0, count($subst_m) - 1)] . " / ";
    $strout .= $subst_f[mt_rand(0, count($subst_f) - 1)] . " / ";
    $strout .= $subst_n[mt_rand(0, count($subst_n) - 1)];
    $strout .= " ) ... ";
    return $strout;
}

/**
 * @param int $loop
 * @returns {string}
 *
 * @return string
 */
function loopPersona($loop)
{
    $strloop = "";
    for ($i = 0; $i < $loop; $i++) {
        $strloop .= trim(generatePersona()) . "<br>\n";
    }
    return $strloop;
}

$stroutlist = loopPersona(50);
echo fixHexUnicode($stroutlist);


/*
Output Example:

Herr Kristian Hofmann, ist momentan in  Alter Markt mit seine 2 kinder weil seine (  Projektor /  Landschaft /  Café ) ...<br>
Herr Philipp Köhler, ist momentan in Club-Haus mit seine 1 kinder weil seine (  Eintrittskarte /  Tasse /  Flugzeug ) ...<br>
Frau Karin Günther, ist momentan in Club-Haus weil seine (  Löffel /  Torte /  Bad ) ...<br>
Herr Frank Schäfer, ist momentan in  Antiquariat Lesart mit seine 2 kinder weil seine (  Schrank /  Maschine /  Fräulein ) ...<br>
Frau Christine Schmitz, ist momentan in Hotel mit seine 1 kinder weil seine (  Wagen /  Apfelsine /  Bier ) ...<br>
Herr Marko Wagner, ist momentan in Club-Haus mit seine 3 kinder weil seine (  Urlaub /  Garage /  Brötchen ) ...<br>
Frau Monika Schäfer, ist momentan in  Antiquariat Lesart mit seine 2 kinder weil seine (  Anzug /  Hütte /  Foto ) ...<br>
Frau Kathrin Walter, ist momentan in Restaurant mit seine 1 kinder weil seine (  Beruf /  Gabel /  Handy ) ...<br>

*/