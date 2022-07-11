<?php
/* Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. */

$db = [
    [
        "titolo" => [
            "tag" => "h2",
            "testo" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?"
        ],
        "paragrafi" => [
            "La recente <a href='https://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=it&mode=lst&dir=&occ=first&part=1&cid=276332'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
            "Per presentare una richiesta di rimozione, compila questo <a href='https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637931439750492442-340336343&hl=it&rd=1'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
            "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
            "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
        ]
    ],
    [
        "titolo" => [
            "tag" => "h2",
            "testo" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?"
        ],
        "paragrafi" => [
            "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
            "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
            "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://safety.google/'>Centro Google per la sicurezza online</a>.",
            "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
        ]
    ],
    [
        "titolo" => [
            "tag" => "h2",
            "testo" => "Perché il mio account è associato a un paese?"
        ],
        "paragrafi" => [
            "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:",
            "<ol><li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:<ol><li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li><li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li></ol></li><li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li></ol>",
            "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.",
        ]
    ],
    [
        "titolo" => [
            "tag" => "h3",
            "testo" => "Stabilire il paese associato al tuo account"
        ],
        "paragrafi" => [
            "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.",
            "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.",
            "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href='https://support.google.com/accounts/troubleshooter/10082950?al=Italia&visit_id=637931447114078984-617713975&p=country_association&rd=2'>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato.",
        ]
    ],
    [
        "titolo" => [
            "tag" => "h2",
            "testo" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?"
        ],
        "paragrafi" => [
            "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='https://support.google.com/websearch/answer/9109?hl=it'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637931447114078984-617713975&hl=it&rd=1'>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='https://support.google.com/websearch/troubleshooter/3111061?hl=it'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.",
        ]
    ],
    [
        "titolo" => [
            "tag" => "h2",
            "testo" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?"
        ],
        "paragrafi" => [
            "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='https://policies.google.com/privacy/key-terms#toc-terms-referrer-url'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='https://support.google.com/websearch/answer/173733'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.",
        ]
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="682665_favicon_google_logo_new_icon.ico" rel="icon" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' crossorigin='anonymous' />
    <link rel="stylesheet" href="style.css">
    <title>Google FAQ</title>
</head>

<body>
    <header>
        <div class="p-3 d-flex align-items-center justify-content-between">
            <div>
                <a href="#"><img src="googlelogo_clr_74x24px.svg" alt=""></a>
                <a class="privacy-link" href="#">Privacy e termini</a>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="pe-3">
                    <a href="#"><img class="menu" src="217-512-1437306148.png" alt=""></a>
                </div>
                <div>
                    <a href="#"><img class="avatar" src="avatar-1-768x768-4279587104.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="d-flex ps-3">
            <h6>
                <a class="text-muted text-decoration-none me-3" href="">Introduzione</a>
            </h6>
            <h6>
                <a class="text-muted text-decoration-none me-3" href="">Norme sulla privacy</a>
            </h6>
            <h6>
                <a class="text-muted text-decoration-none me-3" href="">Termini di servizio</a>
            </h6>
            <h6>
                <a class="text-muted text-decoration-none me-3" href="">Tecnologie</a>
            </h6>
            <h6>
                <a class="text-muted text-decoration-none" href="">Domande frequenti</a>
            </h6>
        </div>
        <div>
            <hr>
        </div>
    </header>
    <div class="container mt-5 ">

        <div class="row">
            <div class="col-12">
                <?php
                foreach ($db as $domanda) {
                    echo "<div class='domanda'>";
                    echo "<" . $domanda["titolo"]["tag"] . ">" . $domanda["titolo"]["testo"] . "</" . $domanda["titolo"]["tag"] . ">";
                    foreach ($domanda["paragrafi"] as $paragrafo) {
                        echo "<p>" . $paragrafo . "</p>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between">
                <a href="#" class="text-muted text-decoration-none">Google • Tutto su Google • Privacy • Termini</a>
                <div>
                    <label for="i3"><i class="fa-solid fa-globe"></i></label>
                    <select>
                        <option value="af">Afrikaans</option>
                        <option value="id">Bahasa Indonesia</option>
                        <option value="ms">Bahasa Melayu</option>
                        <option value="ca">Català</option>
                        <option value="cs">Čeština</option>
                        <option value="da">Dansk</option>
                        <option value="de">Deutsch</option>
                        <option value="et">Eesti</option>
                        <option value="en">English</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="es">Español</option>
                        <option value="es-419">Español (Latinoamérica)</option>
                        <option value="eu">Euskara</option>
                        <option value="fil">Filipino</option>
                        <option value="fr">Français</option>
                        <option value="fr-CA">Français (Canada)</option>
                        <option value="gl">Galego</option>
                        <option value="hr">Hrvatski</option>
                        <option value="zu">Isizulu</option>
                        <option value="is">Íslenska</option>
                        <option selected="" value="it">Italiano</option>
                        <option value="sw">Kiswahili</option>
                        <option value="lv">Latviešu</option>
                        <option value="lt">Lietuvių</option>
                        <option value="hu">Magyar</option>
                        <option value="nl">Nederlands</option>
                        <option value="no">Norsk</option>
                        <option value="pl">Polski</option>
                        <option value="pt-BR">Português (Brasil)</option>
                        <option value="pt-PT">Português (Portugal)</option>
                        <option value="ro">Română</option>
                        <option value="sk">Slovenčina</option>
                        <option value="sl">Slovenščina</option>
                        <option value="sr-Latn">Srpski</option>
                        <option value="fi">Suomi</option>
                        <option value="sv">Svenska</option>
                        <option value="vi">Tiếng Việt</option>
                        <option value="tr">Türkçe</option>
                        <option value="el">Ελληνικά</option>
                        <option value="bg">Български</option>
                        <option value="ru">Русский</option>
                        <option value="sr">Српски</option>
                        <option value="uk">Українська</option>
                        <option value="iw">&#x202B;עברית&#x202C;</option>
                        <option value="ur">&#x202B;اردو&#x202C;</option>
                        <option value="ar">&#x202B;العربية&#x202C;</option>
                        <option value="fa">&#x202B;فارسی&#x202C;</option>
                        <option value="am">አማርኛ</option>
                        <option value="mr">मराठी</option>
                        <option value="hi">हिन्दी</option>
                        <option value="bn">বাংলা</option>
                        <option value="gu">ગુજરાતી</option>
                        <option value="ta">தமிழ்</option>
                        <option value="te">తెలుగు</option>
                        <option value="kn">ಕನ್ನಡ</option>
                        <option value="ml">മലയാളം</option>
                        <option value="th">ไทย</option>
                        <option value="ko">한국어</option>
                        <option value="zh-HK">中文 (香港)</option>
                        <option value="zh-CN">中文（简体中文）</option>
                        <option value="zh-TW">中文（繁體中文）</option>
                        <option value="ja">日本語</option>
                    </select>
                </div>
            </div>
        </div>

</body>

</html>