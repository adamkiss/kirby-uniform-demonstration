<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('mzur/kirby-uniform', [
    'templates' => [
        'uniform/log-json' => __DIR__.'/templates/log-json.php',
        'emails/uniform-default' => __DIR__.'/templates/emails/default.php',
        'emails/uniform-table' => __DIR__.'/templates/emails/table.php',
    ],
    'snippets' => [
        'uniform/errors' => __DIR__.'/snippets/errors.php',
    ],
    'translations' => [
        'cs' => [
            'uniform-filled-potty' => 'Pole, které má zůstat prázdné, bylo vyplněno. Pole prosím nevyplňujte a zkuste formulář odeslat znovu.',
            'uniform-calc-incorrect' => 'Doplňte prosím výsledek příkladu.',
            'uniform-email-subject' => 'Zpráva z webového formuláře',
            'uniform-email-error' => 'Při odesílání formuláře se vyskytla chyba',
            'uniform-email-copy' => 'Kopie:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Při zapisování do logu se vyskytla chyba.',
            'uniform-login-error' => 'Špatné uživatelské jméno nebo heslo.',
            'uniform-webhook-error' => 'Při volání webhooku se vyskytla chyba: ',
            'uniform-email-select-error' => 'Adresa příjemce je neplatná.',
            'uniform-upload-mkdir-fail' => 'Nepodařilo se vytvořit cílovou složku.',
            'uniform-upload-exists' => 'Soubor již existuje.',
            'uniform-upload-failed' => 'Soubor se nepodařilo nahrát.',
        ],
        'de' => [
            'uniform-filled-potty' => 'Es wurde das Feld ausgefüllt, das leer bleiben sollte. Falls Sie kein Spam-Bot sind, versuchen Sie es bitte erneut ohne das Feld auszufüllen.',
            'uniform-calc-incorrect' => 'Bitte lösen Sie die Rechenaufgabe.',
            'uniform-email-subject' => 'Nachricht über das Formular',
            'uniform-email-error' => 'Es ist ein Fehler beim Senden aufgetreten',
            'uniform-email-copy' => 'Kopie:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Beim Schreiben in die Log-Datei ist ein Fehler aufgetreten.',
            'uniform-login-error' => 'Benutzername oder Passwort falsch.',
            'uniform-webhook-error' => 'Beim Aufruf des Webhook ist ein Fehler aufgetreten: ',
            'uniform-email-select-error' => 'Ungültiger Empfänger.',
            'uniform-upload-mkdir-fail' => 'Zielverzeichnis konnte nicht erstellt werden.',
            'uniform-upload-exists' => 'Die Datei existiert bereits.',
            'uniform-upload-failed' => 'Die Datei konnte nicht hochgeladen werden.',
        ],
        'en' => [
            'uniform-filled-potty' => 'The form field that is supposed to be empty was filled. In case you are not a spam-bot, please try again leaving the field blank.',
            'uniform-calc-incorrect' => 'Please solve the arithmetic problem.',
            'uniform-email-subject' => 'Message from the web form',
            'uniform-email-error' => 'There was an error sending the form',
            'uniform-email-copy' => 'Copy:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'There was an error while writing to the logfile.',
            'uniform-login-error' => 'Wrong username or password.',
            'uniform-webhook-error' => 'There was an error calling the webhook: ',
            'uniform-email-select-error' => 'Invalid recipient.',
            'uniform-upload-mkdir-fail' => 'Could not create target directory.',
            'uniform-upload-exists' => 'The file already exists.',
            'uniform-upload-failed' => 'The file could not be uploaded.',
        ],
        'es' => [
             'uniform-filled-potty' => 'Se ha rellenado un campo del formulario que debería estar vacío. Si usted no es un spam bot, vuelva a intentarlo dejando el campo en blanco.',
            'uniform-calc-incorrect' => 'Por favor, resuelva el problema aritmético.',
            'uniform-email-subject' => 'Mensaje del formulario web',
            'uniform-email-error' => 'Se ha producido un error al enviar el formulario',
            'uniform-email-copy' => 'Copia:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Se ha producido un error al escribir en el archivo de registro.',
            'uniform-login-error' => 'El usuario o la contraseña no son correctos.',
            'uniform-webhook-error' => 'Se ha producido un error al llamar el webhook: ',
            'uniform-email-select-error' => 'Destinatario incorrecto.',
            // 'uniform-upload-mkdir-fail' => '',
            // 'uniform-upload-exists' => '',
            // 'uniform-upload-failed' => '',
        ],
        'fr' => [
            'uniform-filled-potty' => 'Le champ du formulaire supposé être vide a été renseigné. Dans le cas où vous ne seriez pas un robot spammeur, merci de ré-essayer en laissant ce champ vide.',
            'uniform-calc-incorrect' => 'Veuillez résoudre le problème arithmétique.',
            'uniform-email-subject' => 'Message de la part du site internet',
            'uniform-email-error' => 'Une erreur s’est produite lors de l’envoi du formulaire',
            'uniform-email-copy' => 'Copie :',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Une erreur s’est produite lors de l’écriture dans le fichier de log.',
            'uniform-login-error' => 'Identifiant ou mot de passe invalide.',
            'uniform-webhook-error' => 'Une erreur s’est produite lors de l’appel du webhook : ',
            'uniform-email-select-error' => 'Destinataire invalide.',
            'uniform-upload-mkdir-fail' => 'Le répertoire de destination n’a pu être créé.',
            'uniform-upload-exists' => 'Le fichier existe déjà.',
            'uniform-upload-failed' => 'Le fichier n’a pu être transféré.',
        ],
        'it' => [
            'uniform-filled-potty' => 'Il campo che doveva restare vuoto è stato compilato. Se non sei uno spam-bot, per favore riprova a inviare il modulo senza compilarlo.',
            'uniform-calc-incorrect' => 'Per favore, risolvi il problema aritmetico.',
            'uniform-email-subject' => 'Messaggio dal modulo web',
            'uniform-email-error' => 'Errore durante l\'invio del modulo',
            'uniform-email-copy' => 'Copia:',
            'uniform-calc-plus' => 'più',
            'uniform-log-error' => 'Errore nella scrittura del file di log.',
            'uniform-login-error' => 'Nome utente o password errati.',
            'uniform-webhook-error' => 'Errore durante la chiamata del webhook: ',
            'uniform-email-select-error' => 'Destinatario non valido.',
            'uniform-upload-mkdir-fail' => 'Impossibile creare la cartella di destinazione.',
            'uniform-upload-exists' => 'File già esistente.',
            'uniform-upload-failed' => 'Impossibile effettuare l\'upload del file.',
        ],
        'ja' => [
            'uniform-filled-potty' => '空のはずのフォームフィールドが入力されました。スパムボットではない場合は、フィールドを空欄にして再度お試しください。',
            'uniform-calc-incorrect' => '算数の問題を解いてください。',
            'uniform-email-subject' => 'ウェブフォームからのメッセージ',
            'uniform-email-error' => 'フォームを送信する際にエラーが発生しました。',
            'uniform-email-copy' => '了解しました：',
            'uniform-calc-plus' => 'プラス',
            'uniform-log-error' => 'ログファイルへの書き込み中にエラーが発生しました。',
            'uniform-login-error' => 'ユーザー名またはパスワードが間違っています。',
            'uniform-webhook-error' => 'webhookを呼び出すエラーがありました：',
            'uniform-email-select-error' => '無効な受信者です。',
            'uniform-upload-mkdir-fail' => 'ターゲットディレクトリを作成できませんでした。',
            'uniform-upload-exists' => 'ファイルはすでに存在しています。',
            'uniform-upload-failed' => 'ファイルをアップロードできませんでした。',
        ],
        'nl' => [
            'uniform-filled-potty' => 'Er is een veld ingevuld dat leeg moet blijven. Mocht u geen Spam-Bot zijn, probeer het opnieuw zonder dat veld in te vullen.',
            'uniform-calc-incorrect' => 'Los a.u.b. de rekenkundige opgave op.',
            'uniform-email-subject' => 'Bericht van het webformulier',
            'uniform-email-error' => 'Er is een fout opgetreden bij het verzenden van het formulier',
            'uniform-email-copy' => 'Kopie:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Er is een fout opgetreden bij het wegschrijven in het logbestand.',
            'uniform-login-error' => 'Ongeldige gebruikersnaam of wachtwoord.',
            'uniform-webhook-error' => 'Er is een fout opgetreden bij het aanroepen van de webhook: ',
            'uniform-email-select-error' => 'Ongeldige ontvanger.',
            'uniform-upload-mkdir-fail' => 'De map kon niet worden aangemaakt.',
            'uniform-upload-exists' => 'Het bestand bestaat al.',
            'uniform-upload-failed' => 'Het bestand kon niet worden geupload.',
        ],
        'pt_BR' => [
            'uniform-filled-potty' => 'O campo de formulário que deveria estar vazio foi preenchido. Caso você não seja um robô de SPAM, por favor tente novamente deixando o campo em branco.',
            'uniform-calc-incorrect' => 'Por favor resolva o problema aritmético.',
            'uniform-email-subject' => 'Mensagem do formulário online',
            'uniform-email-error' => 'Houve um erro ao enviar o formulário',
            'uniform-email-copy' => 'Cópia:',
            'uniform-calc-plus' => 'mais',
            'uniform-log-error' => 'Houve um erro ao escrever o arquivo de registro.',
            'uniform-login-error' => 'Usuário ou senha inválido.',
            'uniform-webhook-error' => 'Houve um erro ao chamar o webhook: ',
            'uniform-email-select-error' => 'Destinatário inválido.',
            'uniform-upload-mkdir-fail' => 'Não foi possível criar a pasta de destino.',
            'uniform-upload-exists' => 'O arquivo já existe.',
            'uniform-upload-failed' => 'O arquivo não pode ser enviado.',
        ],
        'pt_PT' => [
            'uniform-filled-potty' => 'O campo de formulário que deveria estar vazio foi preenchido. Caso você não seja um robô de SPAM, por favor tente novamente deixando o campo em branco.',
            'uniform-calc-incorrect' => 'Por favor resolva o problema aritmético.',
            'uniform-email-subject' => 'Mensagem do formulário online',
            'uniform-email-error' => 'Houve um erro ao enviar o formulário',
            'uniform-email-copy' => 'Cópia:',
            'uniform-calc-plus' => 'mais',
            'uniform-log-error' => 'Houve um erro ao escrever o ficheiro de registro.',
            'uniform-login-error' => 'Usuário ou senha inválido.',
            'uniform-webhook-error' => 'Houve um erro ao chamar o webhook: ',
            'uniform-email-select-error' => 'Destinatário inválido.',
            'uniform-upload-mkdir-fail' => 'Não foi possível criar a pasta de destino.',
            'uniform-upload-exists' => 'O ficheiro já existe.',
            'uniform-upload-failed' => 'O ficheiro não pode ser enviado.',
        ],
        'ro' => [
            'uniform-filled-potty' => 'Câmpul care trebuia să fie necompletat este completat. Dacă nu ești un robot de tip spam, încearcă din nou și lasă câmpul necompletat.',
            'uniform-calc-incorrect' => 'Te rog rezolvă problema de aritmetică.',
            'uniform-email-subject' => 'Mesaj din formularul web.',
            'uniform-email-error' => 'A apărut o eroare în momentul trimiterii formularului',
            'uniform-email-copy' => 'Copiează:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'A apărut o eroare în momentul completării fișierului de log-uri.',
            'uniform-login-error' => 'Numele de utilizator sau parola este greșită.',
            'uniform-webhook-error' => 'A apărut o eroare la apelarea webhook-ului: ',
            'uniform-email-select-error' => 'Destinatar nevalid.',
            'uniform-upload-mkdir-fail' => 'Nu s-a putut crea directorul țintă.',
            'uniform-upload-exists' => 'Acest fișier este deja încărcat.',
            'uniform-upload-failed' => 'Acest fișier nu s-a putut încărca.',
        ],
        'tr' => [
            'uniform-filled-potty' => 'Boş olması gereken form alanı dolduruldu. Spam bot değilseniz, lütfen alanı boş bırakarak tekrar deneyin.',
            'uniform-calc-incorrect' => 'Lütfen aritmetik problemini çözün.',
            'uniform-email-subject' => 'Web formundan gelen mesaj',
            'uniform-email-error' => 'Form gönderilirken bir hata oluştu',
            'uniform-email-copy' => 'Kopya:',
            'uniform-calc-plus' => 'artı',
            'uniform-log-error' => 'Günlük dosyasına yazarken bir hata oluştu.',
            'uniform-login-error' => 'Yanlış kullanıcı adı veya parola.',
            'uniform-webhook-error' => 'Webhook çağırılırken bir hata oluştu:',
            'uniform-email-select-error' => 'Geçersiz alıcı.',
            'uniform-upload-mkdir-fail' => 'Hedef dizin oluşturulamadı.',
            'uniform-upload-exists' => 'Dosya zaten var.',
            'uniform-upload-failed' => 'Dosya yüklenemedi.',
        ],
		'tr_TR' => [
            'uniform-filled-potty' => 'Boş olması gereken form alanı dolduruldu. Spam bot değilseniz, lütfen alanı boş bırakarak tekrar deneyin.',
            'uniform-calc-incorrect' => 'Lütfen aritmetik problemini çözün.',
            'uniform-email-subject' => 'Web formundan gelen mesaj',
            'uniform-email-error' => 'Form gönderilirken bir hata oluştu',
            'uniform-email-copy' => 'Kopya:',
            'uniform-calc-plus' => 'artı',
            'uniform-log-error' => 'Günlük dosyasına yazarken bir hata oluştu.',
            'uniform-login-error' => 'Yanlış kullanıcı adı veya parola.',
            'uniform-webhook-error' => 'Webhook çağırılırken bir hata oluştu:',
            'uniform-email-select-error' => 'Geçersiz alıcı.',
            'uniform-upload-mkdir-fail' => 'Hedef dizin oluşturulamadı.',
            'uniform-upload-exists' => 'Dosya zaten var.',
            'uniform-upload-failed' => 'Dosya yüklenemedi.',
        ],
    ],
]);
