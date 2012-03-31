<?php

// Versione Italiana : Sandro Carniel (www.opzione.com)

define("_AM_SAVE","Salva");
define("_AM_COPIED","%s Copia");
define("_AM_DBUPDATED","Database Aggiornato con Successo!");
define("_AM_ELE_CREATE","Crea elemento per il Modulo");
define("_AM_ELE_EDIT","Modifica elemento per il Modulo: %s");

define("_AM_ELE_CAPTION","Titolo");
define("_AM_ELE_DEFAULT","Valore di Default");
define("_AM_ELE_DETAIL","Dettaglio");
define("_AM_ELE_REQ","Obbligatorio");
define("_AM_ELE_ORDER","Ordine");
define("_AM_ELE_DISPLAY","Attivato");

define("_AM_ELE_TEXT","Box di Testo");
define("_AM_ELE_TEXT_DESC","{UNAME} stamperà il nome Utente;<br />{EMAIL} stamperà email Utente");
define("_AM_ELE_TAREA","Area del Testo");
define("_AM_ELE_SELECT","Selezioni");
define("_AM_ELE_CHECK","Caselle di controllo");
define("_AM_ELE_RADIO","Bottoni di Scelta");
define("_AM_ELE_YN","Simplice bottone per scelta si/no");

define("_AM_ELE_SIZE","Formato");
define("_AM_ELE_MAX_LENGTH","Lunghezza massima");
define("_AM_ELE_ROWS","Celle");
define("_AM_ELE_COLS","Colonne");
define("_AM_ELE_OPT","Opzioni");
define("_AM_ELE_OPT_DESC","Attiva caselle di controllo per selezionare valori di default");
define("_AM_ELE_OPT_DESC1","<br />Soltanto il primo bottone è attivo se la selezione multipla non è permessa");
define("_AM_ELE_OPT_DESC2","Seleziona il valore di default con i bottoni di scelta");
define("_AM_ELE_ADD_OPT","Aggiungi %s opzioni");
define("_AM_ELE_ADD_OPT_SUBMIT","Aggiungi");
define("_AM_ELE_SELECTED","Selezionato");
define("_AM_ELE_CHECKED","Attivato");
define("_AM_ELE_MULTIPLE","Attiva selezione multipla");

define("_AM_ELE_CONFIRM_DELETE","Sei sicuro di voler cancellare questo elemento del Modulo?");

######### versione 1.1 #########
define("_AM_ELE_OTHER", 'Per una opzione "Altro", metti {ALTRO|*numero*} in una delle caselle di testo. Esempio {ALTRO|30} genera una casella di testo con una larghezza dei 30 caratteri.');

######### versione 1.2 addizioni #########
define("_AM_FORM_LISTING", "Elenco Moduli di Contatto");
define("_AM_FORM_ORDER","Mostra Ordine");
define("_AM_FORM_ORDER_DESC","0 = nasconde questo Modulo");
define("_AM_FORM_TITLE", "Titolo Modulo");
define("_AM_FORM_PERM", "Grouppi a cui è permesso usare questo Modulo");
define("_AM_FORM_SENDTO", "Invia a");
define("_AM_FORM_SENDTO_ADMIN", "Email Amministratore Sito");
define("_AM_FORM_SEND_METHOD", "Metodi di invio");
define("_AM_FORM_SEND_METHOD_DESC", "Le informazioni non possono essere trasmesse con messaggi privati quando il modulo è trasmesso "._AM_FORM_SENDTO_ADMIN." o trasmesso da utenti anonimi");
define("_AM_FORM_SEND_METHOD_MAIL", "Email");
define("_AM_FORM_SEND_METHOD_PM", "Messaggio Privato");
define("_AM_FORM_DELIMETER", "Delimita caselle di controllo e pulsanti di scelta");
define("_AM_FORM_DELIMETER_SPACE", "Spazio Vuoto");
define("_AM_FORM_DELIMETER_BR", "A capo");
define("_AM_FORM_SUBMIT_TEXT", "Testo bottone di Invio");
define("_AM_FORM_DESC", "Descrizione Modulo");
define("_AM_FORM_DESC_DESC", "Il Testo sarà visualizzato nella pagina principale se più di un modulo è in elenco");
define("_AM_FORM_INTRO", "Introduzione al Modulo");
define("_AM_FORM_INTRO_DESC", "Testo visualizzato nel solo Modulo");
define("_AM_FORM_WHERETO", "Indirizzo a cui andare quando il modulo è stato inviato");
define("_AM_FORM_WHERETO_DESC", "Lascia vuoto per la home page di questo sito; {SITE_URL} stamperà ".XOOPS_URL);

define("_AM_FORM_ACTION_EDITFORM", "Modifica settaggio Modulo");
define("_AM_FORM_ACTION_EDITELEMENT", "Modifica elementi Modulo");
define("_AM_FORM_ACTION_CLONE", "Clona questo Modulo");

define("_AM_FORM_NEW", "Crea un nuovo Modulo");
define("_AM_FORM_EDIT", "Modifica modulo: %s");
define("_AM_FORM_CONFIRM_DELETE", "Sei sicuro di voler cancellare questo Modulo e tutti gli Elementi?");

define("_AM_ID", "ID");
define("_AM_ACTION", "Azione");
define("_AM_RESET_ORDER", "Resetta Ordine");
define("_AM_SAVE_THEN_ELEMENTS", "Salva e poi modifica Elementi");
define("_AM_SAVE_THEN_FORM", "Salva e poi modifica settaggio Modulo");
define("_AM_NOTHING_SELECTED", "Nessuna selezione.");
define("_AM_GO_CREATE_FORM", "Devi prima creare un Modulo.");

define("_AM_ELEMENTS_OF_FORM", "Elementi modulo di %s");
define("_AM_ELE_APPLY_TO_FORM", "Applica al Modulo");
define("_AM_ELE_HTML", "Testo / HTML");

######### versione 1.23 addizioni #########
define("_AM_XOOPS_VERSION_WRONG", "La Versione di XOOPS non offre la compatibilità col sistema. Liaise potrebbe non lavorare correttamente.");
define("_AM_ELE_UPLOADFILE","Carica File");
define("_AM_ELE_UPLOADIMG","Carica Immagine");
define("_AM_ELE_UPLOADIMG_MAXWIDTH","Larghezza massima (pixel)");
define("_AM_ELE_UPLOADIMG_MAXHEIGHT","Altezza massima (pixel)");
define("_AM_ELE_UPLOAD_MAXSIZE","Dimensione massima (bytes)");
define("_AM_ELE_UPLOAD_MAXSIZE_DESC","1k = 1024 bytes");
define("_AM_ELE_UPLOAD_DESC_SIZE_NOLIMIT","0 = nessun limite");
define("_AM_ELE_UPLOAD_ALLOWED_EXT","Estensioni file permesse");
define("_AM_ELE_UPLOAD_ALLOWED_EXT_DESC","Separare i nomi con un |, case insensibile. esempio 'jpg|jpeg|gif|png|tif|tiff'");
define("_AM_ELE_UPLOAD_ALLOWED_MIME","Tipologia MIME consentiti");
define("_AM_ELE_UPLOAD_ALLOWED_MIME_DESC","Separa i tipi di MIME con un |, case insensibile. esempio 'image/jpeg|image/pjpeg|image/png|image/x-png|image/gif|image/tiff'");
define("_AM_ELE_UPLOAD_DESC_NOLIMIT","Lascia vuoto per non aver limitazioni (non raccommandato per motivi di sicurezza)");
define("_AM_ELE_UPLOAD_SAVEAS","Salva il file caricato in");
define("_AM_ELE_UPLOAD_SAVEAS_MAIL","Allegato E-mail");
define("_AM_ELE_UPLOAD_SAVEAS_FILE","Destinazione degli Uploads");

?>