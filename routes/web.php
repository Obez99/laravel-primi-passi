<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $homeData = [
        "title" => "Home",
        "text" => "Hello World",
        "contentList" => ["HTML", "CSS", "JS", "PHP", "SQL"]
    ];

    return view('home', $homeData);
});

Route::get('/html', function () {
    $data = [
        "title" => "HTML",
        "desc" => "In informatica l'HyperText Markup Language (traduzione letterale: linguaggio a marcatori per ipertesti), comunemente noto con l'acronimo HTML, 
                    è un linguaggio di markup. Nato per la formattazione e impaginazione di documenti ipertestuali disponibili nel web 1.0, oggi è utilizzato principalmente per 
                    il disaccoppiamento della struttura logica di una pagina web (definita appunto dal markup) e la sua rappresentazione, gestita tramite gli stili CSS per adattarsi 
                    alle nuove esigenze di comunicazione e pubblicazione all'interno di Internet.
                    L'HTML è un linguaggio di pubblico dominio, la cui sintassi è stabilita dal World Wide Web Consortium (W3C). È derivato dall'SGML, 
                    un metalinguaggio finalizzato alla definizione di linguaggi utilizzabili per la stesura di documenti destinati alla trasmissione in formato elettronico. 
                    La versione attuale, la quinta, è stata rilasciata dal W3C nell'ottobre 2014. Il motivo principale che ha spinto il W3C e i suoi membri a sviluppare HTML5 
                    è stata la necessità di fornire direttamente le funzionalità che in precedenza erano fruibili tramite estensioni proprietarie all'esterno dei browser, 
                    come Adobe Flash e simili. Un secondo obiettivo che gli sviluppatori si erano prefissati era quello di garantire una maggiore compatibilità tra i diversi browser, 
                    indipendentemente dalla piattaforma software utilizzata, e principalmente mirata all'espansione dei dispositivi mobili."
    ];
    return view('html', $data);
});


Route::get('/css', function () {
    $data = [
        "title" => "CSS",
        "desc" => "Il CSS (sigla di Cascading Style Sheets, in italiano fogli di stile a cascata), in informatica, è un linguaggio usato per definire la formattazione 
        di documenti HTML, XHTML e XML, ad esempio i siti web e relative pagine web. Le regole per comporre il CSS sono contenute in un insieme di direttive (Recommendations) 
        emanate a partire dal 1996 dal W3C. L'introduzione del CSS si è resa necessaria per separare i contenuti delle pagine HTML dalla loro formattazione o layout 
        e permettere una programmazione più chiara e facile da utilizzare, sia per gli autori delle pagine stesse sia per gli utenti, garantendo contemporaneamente anche 
        il riutilizzo di codice ed una sua più facile manutenzione."
    ];
    return view('css', $data);
});


Route::get('/js', function () {
    $data = [
        "title" => "JS",
        "desc" => "In informatica JavaScript è un linguaggio di programmazione orientato agli oggetti e agli eventi, comunemente utilizzato nella programmazione Web 
                    lato client (esteso poi anche al lato server) per la creazione, in siti web e applicazioni web, di effetti dinamici interattivi tramite funzioni di script invocate 
                    da eventi innescati a loro volta in vari modi dall'utente sulla pagina web in uso (mouse, tastiera, caricamento della pagina ecc...).
                    Originariamente sviluppato da Brendan Eich della Netscape Communications con il nome di Mochan e successivamente di LiveScript, in seguito è stato rinominato 
                    'JavaScript' ed è stato formalizzato con una sintassi più vicina a quella del linguaggio Java di Sun Microsystems (che nel 2010 è stata acquistata da Oracle). 
                    Standardizzato per la prima volta il 1997 dalla ECMA con il nome ECMAScript, l'ultimo standard, di giugno 2021, è ECMA-262 Edition 12 ed è anche uno standard ISO 
                    (ISO/IEC 16262)."
    ];
    return view('js', $data);
});


Route::get('/php', function () {
    $data = [
        "title" => "PHP",
        "desc" => "PHP (acronimo ricorsivo di 'PHP: Hypertext Preprocessor', preprocessore di ipertesti; originariamente acronimo di 'Personal Home Page') è 
        un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero 
        distribuito sotto la PHP License. Attualmente è principalmente utilizzato per sviluppare applicazioni web lato server, ma può essere 
        usato anche per scrivere script a riga di comando o applicazioni stand-alone con interfaccia grafica. Un esempio di software scritto in PHP 
        è MediaWiki, su cui si basano i progetti wiki della Wikimedia Foundation come Wikipedia."
    ];
    return view('php', $data);
});


Route::get('/sql', function () {
    $data = [
        "title" => "SQL",
        "listHeader" => "In informatica, SQL (Structured Query Language) (/skjuːˈɛl/ 'S-Q-L') è un linguaggio standardizzato per database basati sul modello relazionale (RDBMS), progettato per le seguenti operazioni:",
        "list" => [
            "creare e modificare schemi di database (DDL = Data Definition Language);",
            "inserire, modificare e gestire dati memorizzati (DML = Data Manipulation Language);",
            "interrogare i dati memorizzati (DQL = Data Query Language);",
            "creare e gestire strumenti di controllo e accesso ai dati (DCL = Data Control Language)."
        ],
        "listFooter" => "A dispetto del nome, non si tratta perciò di un semplice linguaggio di interrogazione: alcuni suoi sottoinsiemi, infatti, permettono di creare, gestire e amministrare database."
    ];
    return view('sql', $data);
});
