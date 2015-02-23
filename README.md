# Schlagzeilen-Generator
Beim Schlagzeilen-Generator handelt es sich um eine kleine, in PHP geschriebene Web-Anwendung, die anhand vorgegebener Wörter zufällig Schlagzeilen generiert. Zusätzlich ist es möglich, sich eine Liste aller bereits erzeugten Schlagzeilen anzeigen zu lassen.

## Installation
1. git clone https://github.com/r3wald/schlagzeilen
2. cd schlagzeilen
3. composer install
4. php -S 0.0.0.0:12345 -t htdocs/
5. xdg-open http://localhost:12345/

## Anmerkungen
* Unter Umständen muss Composer vorher installiert werden, siehe http://getcomposer.org/ .
* Die PHP-Version muss mindestens 5.4.0 betragen. 

## Aufgaben
1. Es gibt einen Fehler: Sporadisch ist das Wort an der dritten Stelle nicht ausgefüllt, zum Beispiel "Verrückter Psycho- landet im Bus". Bitte korrigieren!
2. Jede erzeugte Schlagzeile soll unter einer zufälligen URL zugänglich sein, so dass man sie jederzeit wieder abrufen kann. "Neu anklicken", Schlagzeile und Link werden angezeigt.
3. Die Anwendung gibt öfter Schlagzeilen aus, die grammatikalisch nicht korrekt sind, zum Beispiel "Irrer Bomben-Brille landet im Riesenparty". Wo liegt der Fehler? Wie kann er behoben werden? Wie würden Sie vorgehen? Bitte (zumindest ansatzweise) umsetzen.

