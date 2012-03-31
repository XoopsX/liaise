<?php

// Versione Italiana : Sandro Carniel (www.opzione.com)

// Nome del modulo
define("_MI_LIAISE_NAME","Liaise");

// Una breve descrizione del modulo
define("_MI_LIAISE_DESC","Generatore moduli di contatto");

// admin/menu.php
define("_MI_LIAISE_ADMENU1","Elenco Moduli di Contatto");
define("_MI_LIAISE_ADMENU2","Crea un Nuovo Modulo");

//	preferenze
define("_MI_LIAISE_TEXT_WIDTH","Larghezza di Default dei box di testo");
define("_MI_LIAISE_TEXT_MAX","Larghezza Massima di Default dei box di testo");
define("_MI_LIAISE_TAREA_ROWS","Celle di Default delle aree di testo");
define("_MI_LIAISE_TAREA_COLS","Colonne di Default delle aree di testo");

######### versione 1.1  addizioni #########
//	preferenze
define("_MI_LIAISE_MAIL_CHARSET","Codifica testo per l'invio della mail");

//  descrizioni	template
define("_MI_LIAISE_TMPL_MAIN_DESC","Pagina Principale di Liaise");
define("_MI_LIAISE_TMPL_ERROR_DESC","Pagina da visualizzare in caso di errori");

######### versione 1.2 addizioni #########
//  descrizioni	template
define("_MI_LIAISE_TMPL_FORM_DESC","Template per moduli");

//	preferenze
define("_MI_LIAISE_MOREINFO","Invia ulteriori informazioni assieme ad i dati modulo inviati");
define("_MI_LIAISE_MOREINFO_USER","Nome Utente ed indirizzo per la pagina info utente");
define("_MI_LIAISE_MOREINFO_IP","Indirizzo IP del mittente");
define("_MI_LIAISE_MOREINFO_AGENT","User agent del mittente (browser info)");
define("_MI_LIAISE_MOREINFO_FORM","Indirizzo del Modulo di Contatto");
define("_MI_LIAISE_MAIL_CHARSET_DESC","Lascia vuoto per "._CHARSET);
define("_MI_LIAISE_PREFIX","Testo anteposto ai campi obbligatori");
define("_MI_LIAISE_SUFFIX","Testo suffisso ai campi obbligatori");
define("_MI_LIAISE_INTRO","Testo introduttivo alla pagina principale");
define("_MI_LIAISE_GLOBAL","Testo da visualizzare in ogni pagina");

// admin/menu.php
define("_MI_LIAISE_ADMENU3","Crea elementi per il Modulo");

######### versione 1.21 addizioni #########
// valori di default delle preferenze
define("_MI_LIAISE_INTRO_DEFAULT","Contattaci liberamente con questo modulo:");
define("_MI_LIAISE_GLOBAL_DEFAULT","[b]* Obbligatorio[/b]");

######### versione 1.23 addizioni #########
define("_MI_LIAISE_UPLOADDIR","Percorso Fisico di destinazione dei files caricati SENZA slash finale");
define("_MI_LIAISE_UPLOADDIR_DESC","Tutti i files caricati risiederanno qui quando un modulo sarà inviato come messaggio privato");

?>