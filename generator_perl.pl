#!/usr/bin/perl
  use strict;
  use warnings;

print "content-type: text/html \n\n";	#HTTP HEADER

# http://codepad.org/
# https://www.jdoodle.com/execute-perl-online

 my @anrede = ("Frau", "Herr");
 my @nachname = ("M\u00fcller ", " Schmidt ", " Schneider ", " Fischer ", " Weber", " Meyer", " Wagner", " Becker", " Schulz", " Hoffmann", " Sch\u00e4fer", " Bauer", " Koch", " Richter", " Klein", " Wolf", " Schr\u00f6der", " Neumann", " Schwarz", " Braun", " Hofmann", " Zimmermann", " Schmitt", " Hartmann", " Kr\u00fcger", " Schmid", " Werner", " Lange", " Schmitz", " Meier", " Krause", " Maier", " Lehmann", " Huber", " Mayer", " Herrmann", " K\u00f6hler", " Walter", " K\u00f6nig", " Schulze", " Fuchs", " Kaiser", " Lang", " Wei\u00df", " Peters", " Scholz", " Jung", " M\u00f6ller", " Hahn", " Keller", " Vogel", " Schubert", " Roth", " Frank", " Friedrich", " Beck", " G\u00fcnther", " Berger", " Winkler", " Lorenz", " Baumann");
 my @vorname_f = ("Andrea", " Jennifer", " Melanie", " Angelika", " Jessica", " Jessika", "\r\nMichelle", " Anja", " Julia", " Monika", " Anke", " Juliane", " Nadine", " Anna", " Anne", " Karin", " Nicole", "\r\nAnnett", " Karolin", " Petra", " Antje", " Katharina", " Sabine", " Barbara", " Kathrin", " Katrin", " Sabrina", " \r\nBirgit", " Katja", " Sandra", " Brigitte", " Kerstin", " Sara", " Sarah", " Christin", " Klaudia", " Silke", " \r\nChristina", " Christine", " Kristin", " Simone", " Claudia", " Laura", " Sophia", " Sophie", " Daniela", " Lea");
 my @vorname_m = ("Dennis", " Jan", " Alexander", " Dieter", " Jens", " Andreas", " Dirk", " Jonas", " Benjamin", " Dominik", " J\u00f6rg", " Bernd", " Eric", " Erik", " J\u00fcrgen", " Christian", " Felix", " Kevin", " Daniel", " Florian", " Klaus", " David", " Frank", " Kristian", " Leon", " Mike", " Maik", " Steffen", " Lukas", " Niklas", " Sven", " Swen", " Marcel", " Patrick", " Thomas", " Marco", " Marko", " Paul", " Thorsten", " Torsten", " Mario", " Peter", " Tim", " Markus", " Philipp", " Phillipp", " Tobias", " Martin", " Ralf", " Ralph", " Tom", " Mathias", " Matthias", " Ren\u00e9", " Ulrich", " Max", " Robert", " Uwe", " Maximilian");
 my @location = ("Club-Haus", " Alter Bahnhof", " Alter Botanischer Garten", " Alter Markt", " Altstadt", " Kirche", " Antiquariat Lesart", " Aquarium", " Platz", " Bar", " Atelier", " Park", " Autohaus", "Cafe Bar", "Cinemax", "Galerie", "Hotel", "Museum", "Pizzeria", "Restaurant");
 my @subst_m = ("Anruf", " Anzug", "Arm", "Arzt", " Ausweis", " Bahnhof", " Balkon", " Baum", " Berg", " Beruf", " Bildschirm", " Bus", " Computer", " Durst", " Drucker", " Eintrittskarte", " Einwohner", " Fahrschein", "Fernseher", " Finger", " Flughafen", " Flur", " Fr\u00fchling", " F\u00fcller", " Fu\u00df", " Fu\u00dfboden", " Garten", " Gast", " Geburtstag", " Hafen", " Hamburger", " Hut", " Hunger", " Kaffee", " Kakao", " Keller", " Kleiderhaken", " Koch", " Kuchen", " Kugelschreiber", " Kuchen", " Kunde", " Laden", "Locher", " L\u00f6ffel", " Markt", " Marktplatz", " Monitor", " Name", " Mann", " Oktober", " Opa", " Park", " Pass", " Passant", " Platz", " Projektor", " Pullover", " Radiergummi", " Regen", " Rock", " Schinken", " Schl\u00fcssel", " Schnaps", " Schnee", " Schrank", " September", " Sessel", " Sommer", " Star", " Strumpf", " Stuhl", " Supermarkt", " Tag", " Tee", " Teppich", " Test", " Tisch", " Tourist", " Urlaub", " Vater", " Wagen", " Wunsch", " Zeiger", " Zug", " Zuschauer");
 my @subst_f = ("Adresse", " Apfelsine", " Apotheke", " Bank", " Bankkarte", " Bedienung", " Beschreibung", " Bestellung", " Bibliothek", " Bluse", " Brille", " Br\u00fccke", " City", " Cola", " Decke", " Diskette", " Dolmetscherin", " Dose", " Dusche", " Eile", " Einladung", " Etage", " Fahrkarte", " Festung", " Fotografie", " Frage", " Funktion", " Gabel", " Garage", " Gardine", " Gasse", " Gitarre", " Gr\u00f6\u00dfe", " Hilfe", " Hose", " H\u00fctte", " Information", " Kasse", " Kassette", " Kirche", " Krawatte", " Kreditkarte", " Kreide", " K\u00fcche", " Kultur", " Lampe", " Landkarte", " Landschaft", " Mandarine", " Maschine", " Maus", " Milch", " Mutter", " M\u00fctze", " Nachricht", " Nacht", " Nase", " Natur", " Nummer", " Oma", " Oper", " Ordnung", " Pause", " Pflanze", " Pizza", " Polizistin", " Post", " Postkarte", " Pr\u00fcfung", " Reparatur", " Reservierung", " Sache", " Sahne", " Schule", " Sehensw\u00fcrdigkeit", " SMS", " Socke", " Sonne", " Stra\u00dfe", " Stra\u00dfenbahn", " Tasche", " Tasse", " Toilette", " Torte", " U-Bahn", " \u00dcberraschung", " \u00dcbung", " Uhr", " Umwelt", " Universit\u00e4t", " Verbindung", " Wand", " Wanderung", " Welt", " Werbung", " Werkstatt", " Wirtschaft", " Woche", " Wurst", " Zeitung");
 my @subst_n = (" Auto", " Bad", " Bein", " Bett", " Bier", " Bild", " Br\u00f6tchen", " Buch", " Caf\u00e9", " Einkaufszentrum", " Fahrrad", " Fest", " Flugzeug", " Foto", " Fr\u00e4ulein", " Fr\u00fchst\u00fcck", " Gef\u00fchl", " Gem\u00fcse", " Gesch\u00e4ft", " Glas", " Gleis", " Handy", " Haus", " Heft", " Hemd", " Hotel", " K\u00e4nnchen", " Internet", " Kind", " Kino", " Kleid", " Leben", " M\u00e4dchen", " Motorrad", " Museum", " Radio", " Regal", " Restaurant", " Schiff", " Schnitzel", " Sofa", " Spiel", " St\u00fcck", " Taxi", " Telefon", " Theater", " Ticket", " Tonbandger\u00e4t", " Warenhaus", " Wetter");

    sub generatePersona
    {

        glob @anrede;
        glob @nachname;
        glob @vorname_f;
        glob @vorname_m;
        glob @location;
        glob @subst_m;
        glob @subst_f;
        glob @subst_n;

        my $strout = "";
        my $genderout = @anrede[int(rand(scalar(@anrede)))];
        $strout .= $genderout;

        if ($genderout eq "Herr") {
            $strout .= @vorname_m[int(rand(scalar(@vorname_m)))];
        } else {
            $strout .= @vorname_f[int(rand(scalar(@vorname_f)))];
        }

        $strout .= @nachname[int(rand(scalar(@nachname)))];
        $strout .= ", ist momentan in ";
        $strout .= @location[int(rand(scalar(@location)))];

        my $kindernr = rand(3);
        if ($kindernr eq! 0) {
            $strout .= " mit seine " . $kindernr . " kinder";
        }

        $strout .= " weil seine ( ";
        $strout .= @subst_m[int(rand(scalar(@subst_m)))] . " / ";
        $strout .= @subst_f[int(rand(scalar(@subst_f)))] . " / ";
        $strout .= @subst_n[int(rand(scalar(@subst_n)))];

        $strout .= " ) ... ";
        return $strout;
    }

    sub loopPersona
    {
        my $loop = shift(@_);
        my $strloop = "";
        for (my $i = 0; $i <= $loop; $i++){
            $strloop .=  generatePersona(). "\n";
        }
        return $strloop;
    }

    my $loop = 15;
    my $stroutlist = loopPersona( $loop );
    print $stroutlist;





# https://docs.python.org/2/library/glob.html
# http://tizag.com/perlT/perlarrays.php
# http://perldoc.perl.org/functions/rand.html
# https://www.tutorialspoint.com/perl/perl_arrays.htm
# http://www.perl101.org/arrays.html
# http://perlmeme.org/howtos/perlfunc/rand_function.html
# http://www.perlmeme.org/tutorials/arrays.html
# http://perldoc.perl.org/functions/glob.html
# https://perlmaven.com/subroutines-and-functions-in-perl
# http://www.perlmeme.org/tutorials/arrays.html
# http://perlmeme.org/howtos/perlfunc/rand_function.html
# https://tjhsst.edu/~dhyatt/perl/ex5.html
# https://alvinalexander.com/perl/edu/articles/pl010003.shtml
# https://de.perlmaven.com/scalar-found-where-operator-expected
# https://perlmaven.com/scalar-found-where-operator-expected
# https://perlmaven.com/subroutines-and-functions-in-perl
# https://alvinalexander.com/perl/perl-random-number-integer-rand-function
# https://alvinalexander.com/perl/edu/articles/pl010003.shtml
# https://tjhsst.edu/~dhyatt/perl/ex5.html
# https://perldoc.perl.org/functions/length.html
# http://www.perl101.org/subroutines.html
# https://perlmaven.com/string-operators
# https://perldoc.perl.org/perlsub.html
# https://de.wikibooks.org/wiki/Perl-Programmierung:_Subroutinen