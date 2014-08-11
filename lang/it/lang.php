<?php

return [
    'app' => [
        'name' => 'October CMS',
        'motto' => 'Getting back to basics',
    ],
    'locale' => [
        'en' => 'Inglese',
        'nl' => 'Olandese',
        'ja' => 'Giapponese',
        'se' => 'Svedese',
        'tr' => 'Turco',
        'br' => 'Portoghese (Brasile)',
        'de' => 'Tedesco',
        'ru' => 'Russo',
        'fr' => 'Francese',
        'it' => 'Italiano',
    ],
    'directory' => [
        'create_fail' => "Impossibile creare la cartella: :name",
    ],
    'file' => [
        'create_fail' => "Impossibile creare il file: :name",
    ],
    'system' => [
        'name' => 'Sistema',
        'menu_label' => 'Sistema',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Varie',
            'logs' => 'Log',
            'mail' => 'Mail',
            'shop' => 'Negozio',
            'team' => 'Team',
            'users' => 'Utenti',
            'system' => 'Sistema',
            'social' => 'Social',
            'events' => 'Eventi',
            'customers' => 'Clienti',
            'my_settings' => 'Impostazioni personali',
        ],
    ],
    'plugin' => [
        'unnamed' => 'Plugin senza nome',
        'name' => [
            'label' => 'Nome del plugin',
            'help' => 'Nominare il plugin con il suo codice. Ad esempio, RainLab.Blog',
        ],
    ],
    'plugins' => [
        'manage' => 'Gestisci plugin',
        'enable_or_disable' => 'Abilita o disabilita',
        'enable_or_disable_title' => 'Abilita o disabilita plugin',
        'remove' => 'Rimuovi',
        'refresh' => 'Aggiorna',
        'disabled_label' => 'Disabilitato',
        'disabled_help' => 'I plugin disabilitati sono ignorati dall\'applicazione.',
        'selected_amount' => 'Plugin selezionati: :amount',
        'remove_success' => "Rimozione dei plugin dal sistema eseguita con successo.",
        'refresh_success' => "Aggiornamento dei plugin nel sistema eseguito con successo.",
        'disable_success' => "Disabilitazione dei plugin eseguita con successo.",
        'enable_success' => "Abilitazione dei plugin eseguita con successo.",
        'unknown_plugin' => "Il plugin è stato rimosso con successo dal file system.",
    ],
    'project' => [
        'name' => 'Progetto',
        'owner_label' => 'Proprietario',
        'attach' => 'Colleca progetto',
        'detach' => 'Scollega progetto',
        'none' => 'Nessuno',
        'id' => [
            'label' => 'ID del progetto',
            'help' => 'Come trovare l\'ID del tuo progetto',
            'missing' => 'Inserisci un ID di progetto da utilizzare.',
        ],
        'detach_confirm' => 'Sei sicuro di voler scollegare questo progetto?',
        'unbind_success' => 'Il progetto è stato scollegato con successo.',
    ],
    'settings' => [
        'menu_label' => 'Impostazioni',
        'missing_model' => 'La pagine delle impostazioni non ha nessun modello associato.',
        'update_success' => 'Le impostazioni per :name sono state aggiornate con successo.',
        'return' => 'Ritorna alle impostazioni di sistema',
        'search' => 'Cerca'
    ],
    'mail' => [
        'menu_label' => 'Configurazione e-mail',
        'menu_description' => 'Gestisci la configurazione delle e-mail.',
        'general' => 'Generale',
        'method' => 'Metodo di invio',
        'sender_name' => 'Nome del mittente',
        'sender_email' => 'Indirizzo e-mail del mittente',
        'smtp' => 'SMTP',
        'smtp_address' => 'Indirizzo SMTP',
        'smtp_authorization' => 'Il server SMTP richiede l\'autenticazione',
        'smtp_authorization_comment' => 'Seleziona se il tuo server SMTP richieste l\'autenticazione.',
        'smtp_username' => 'Username',
        'smtp_password' => 'Password',
        'smtp_port' => 'Porta SMTP',
        'smtp_ssl' => 'Connessione SSL richiesta',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Percorso Sendmail',
        'sendmail_path_comment' => 'Inserisci il percorso al servizio sendmail.',
    ],
    'mail_templates' => [
        'menu_label' => 'Modelli di e-mail',
        'menu_description' => 'Modifica i modelli di e-mail inviati agli utenti ed amministratori, gestisci il layout delle e-mail.',
        'new_template' => 'Nuovo modello',
        'new_layout' => 'Nuovo layout',
        'template' => 'Modello',
        'templates' => 'Modelli',
        'menu_layouts_label' => 'Layouts delle e-mail',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'name' => 'Nome',
        'name_comment' => 'Nome univoco utilizzato come riferimento a questo modello.',
        'code' => 'Codice',
        'code_comment' => 'Codice univoco utilizzato come riferimento a questo modello',
        'subject' => 'Oggetto',
        'subject_comment' => 'Oggetto del messaggio di posta',
        'description' => 'Descrizione',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Testo',
        'test_send' => 'Invia un messaggio di prova',
        'test_success' => 'Il messaggio di prova è stato inviato con successo.',
        'return' => 'Ritorna all\'elenco dei modelli',
    ],
    'install' => [
        'project_label' => 'Collega al progetto',
        'plugin_label' => 'Installa plugin',
        'missing_plugin_name' => 'Specifica il nome del plugin da installare.',
        'install_completing' => 'Sto terminando il processo di installazione',
        'install_success' => 'Il plugin è stato installato con successo.',
    ],
    'updates' => [
        'title' => 'Gestisci aggiornamenti',
        'name' => 'Aggiornamento del software',
        'menu_label' => 'Aggiornamenti',
        'menu_description' => 'Aggiorna il sistema, gestisci ed installa plugin e temi.',
        'check_label' => 'Verifica gli aggiornamenti',
        'retry_label' => 'Riprova',
        'plugin_name' => 'Nome',
        'plugin_description' => 'Descrizione',
        'plugin_version' => 'Versione',
        'plugin_author' => 'Autore',
        'core_build' => 'Build corrent',
        'core_build_old' => 'Build corrente :build',
        'core_build_new' => 'Build :build',
        'core_build_new_help' => 'Una nuova build è disponibile.',
        'core_downloading' => 'Scaricamento dei file in corso',
        'core_extracting' => 'Estrazione dei file in corso',
        'plugin_downloading' => 'Scaricamento plugin: :name',
        'plugin_extracting' => 'Estrazione plugin: :name',
        'plugin_version_none' => 'Nuovo plugin',
        'plugin_version_old' => 'Versione corrente: :version',
        'plugin_version_new' => 'Nuova versione: :version',
        'theme_label' => 'Tema',
        'theme_new_install' => 'Installa nuovo tema.',
        'theme_downloading' => 'Scaricamento tema: :name',
        'theme_extracting' => 'Estrazione tema: :name',
        'update_label' => 'Aggiorna il software',
        'update_completing' => 'Completamento del processo di aggiornamento',
        'update_loading' => 'Caricamento degli aggiornamenti disponibili...',
        'update_success' => 'L\'aggiornamento è stato eseguito con successo.',
        'update_failed_label' => 'Aggiornamento fallito',
        'force_label' => 'Forza aggiornamento',
        'found' => [
            'label' => 'Trovati nuovi aggiornamenti!',
            'help' => 'Clicca Aggiorna il software per iniziare il processo di aggiornamento.',
        ],
        'none' => [
            'label' => 'Nessun aggiornamento',
            'help' => 'Nessun aggiornamento trovato.',
        ],
    ],
    'server' => [
        'connect_error' => 'Errore nella connessione al server.',
        'response_not_found' => 'Il server degli aggiornamento non è stato trovato.',
        'response_invalid' => 'Il server ha fornito una risposta non valida.',
        'response_empty' => 'Il server ha fornito una risposta vuota.',
        'file_error' => 'Il server non è riuscito a consegnare il pacchetto.',
        'file_corrupt' => 'Il file è corrotto.',
    ],
    'behavior' => [
        'missing_property' => 'La classe :class deve definire la proprietà $:property utilizzata dalla funzione :behavior.',
    ],
    'config' => [
        'not_found' => 'Il file di configurazione :file definito per :location non è stato trovato.',
        'required' => "La configurazione utilizzata in :location deve fornire un valore ':property'.",
    ],
    'zip' => [
        'extract_failed' => "Estrazione del file sistema ':file' non riuscita.",
    ],
    'event_log' => [
        'hint' => 'Questo registro visualizza un elenco dei potenziali errori occorsi nell\'applicazione, come eccezioni e informazioni di debug.',
        'menu_label' => 'Registro eventi',
        'menu_description' => 'VIsualizza i messaggi del registro di sistema con i relativi orari di registrazione e dettagli.',
        'empty_link' => 'Svuota il registro eventi',
        'empty_loading' => 'Svuotamento del registro eventi...',
        'empty_success' => 'Il registro eventi è stato svuotato con successo.',
        'return_link' => 'Ritorna al registro eventi',
        'id' => 'ID',
        'id_label' => 'ID evento',
        'created_at' => 'Data e ora',
        'message' => 'Messaggio',
        'level' => 'Livello',
    ],
    'request_log' => [
        'hint' => 'Questo registro visualizza un elenco delle richieste del browser che possono richiedere attenzione. Ad esempio, se un visitatore apre una pagina del CMS che non può essere trovata, viene creato un record con il codice di errore 404.',
        'menu_label' => 'Registro richieste',
        'menu_description' => 'Visualizza richieste errate o reindirizzate, come Pagina non trovata (404).',
        'empty_link' => 'Svuota il registro richieste',
        'empty_loading' => 'Svuotamento del registro richieste...',
        'empty_success' => 'Il registro richieste è stato svuotato con successo.',
        'return_link' => 'Ritorna al registro richieste',
        'id' => 'ID',
        'id_label' => 'ID Registro',
        'count' => 'Contatore',
        'referer' => 'Provenienza',
        'url' => 'URL',
        'status_code' => 'Stato',
    ],
    'permissions' => [
        'manage_system_settings' => 'Gestisci impostazioni di sistema',
        'manage_software_updates' => 'Gestisci gli aggiornamenti',
        'manage_mail_templates' => 'Gestisci i modelli e-mail',
        'manage_other_administrators' => 'Gestisci altri amministratori',
        'view_the_dashboard' => 'Visualizza la dashboard
        '
    ]
];
