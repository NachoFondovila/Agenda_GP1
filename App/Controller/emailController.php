<?php
    require_once ("View/viajeView.php");
    require_once ("Model/emailModel.php");

    //Librería PHPMailer

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    class emailController {

        private $viewCargaViaje;
        private $emailModel;

        public function __construct(){
            $this->viewCargaViaje = new viajeView();
            $this->emailModel = new emailModel();
        }

        public function enviarMailConfirmacion() {
            //Una vez cargado el viaje, se va a ejecutar esta funcion que va a tomar el mail del usuario que esté logueado 
            //y se va a mandar un correo con el mensaje que aparece debajo.

            //Hay que tomar el mail del usuario que esta registrado en el momento.
            //Se puede guardar el mail en el controller que controle el login del usuario.
            
            // session_start(); Me devuelve los datos que haya guardado en el momento del login 
            // $this->controllerUser->checkLogIn(); Se podria usar esta funcion para chequear que haya alguien logueado
            //Tomar el mail y reemplazarlo en la variable $email = $_SESSION['email']
            
            $email = $_POST['user_id'];  //Tomo el mail cuando agrega un viaje el usuario
            //Mensaje que va a mandar el mail de la aplicacion
            $mensaje = '<html> 
                <head>
                <title>Viaje Agendado</title>
                </head>
                <body>
                <p>Hemos registrado su viaje en la app.</p>
                </body>
                </html>';

            //Configuracion del mail de la aplicacion
            $email_user = "flyingapp1@gmail.com";
            $email_password = "metod2020";
            $the_subject = "Viaje Registrado";
            $address_to = $email;
            $from_name = "FlyingApp";
            $phpmailer = new PHPMailer();
            
            try{

                // ---------- datos de la cuenta de Gmail -------------------------------
                $phpmailer->Username = $email_user;
                $phpmailer->Password = $email_password; 
                //-----------------------------------------------------------------------
                // $phpmailer->SMTPDebug = 1;
                $phpmailer->SMTPSecure = 'ssl';
                $phpmailer->Host = "smtp.gmail.com"; // GMail
                $phpmailer->Port = 465;
                $phpmailer->IsSMTP(); // use SMTP
                $phpmailer->SMTPAuth = true;
                $phpmailer->setFrom($phpmailer->Username,$from_name);
                $phpmailer->AddAddress($address_to); // recipients email
                $phpmailer->Subject = $the_subject;	
                $phpmailer->Body .= $mensaje;
                $phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
                $phpmailer->CharSet = 'UTF-8';
                $phpmailer->IsHTML(true);
                $phpmailer->Send();
            }
            catch (phpmailerException $e) {
                echo $e->errorMessage();
              } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

        public function leerMail() { //Esta funcion va a leer los mails del Inbox.
            //Debajo se va explicado linea por linea a grandes rasgos, que hace dicha funcion.
            
            $hostname = "{imap.gmail.com:993/imap/ssl}INBOX";
            $username = "flyingapp1@gmail.com";
            $password = "metod2020"; 

            $inbox = imap_open($hostname, $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error()); //Abre el inbox del gmail

            //Configurado para leer todos los emails entrantes. Dejo la lista para poder filtrar que se va a leer

            /* ALL - return all messages matching the rest of the criteria
            ANSWERED - match messages with the \\ANSWERED flag set
            BCC "string" - match messages with "string" in the Bcc: field
            BEFORE "date" - match messages with Date: before "date"
            BODY "string" - match messages with "string" in the body of the message
            CC "string" - match messages with "string" in the Cc: field
            DELETED - match deleted messages
            FLAGGED - match messages with the \\FLAGGED (sometimes referred to as Important or Urgent) flag set
            FROM "string" - match messages with "string" in the From: field
            KEYWORD "string" - match messages with "string" as a keyword
            NEW - match new messages
            OLD - match old messages
            ON "date" - match messages with Date: matching "date"
            RECENT - match messages with the \\RECENT flag set
            SEEN - match messages that have been read (the \\SEEN flag is set)
            SINCE "date" - match messages with Date: after "date"
            SUBJECT "string" - match messages with "string" in the Subject:
            TEXT "string" - match messages with text "string"
            TO "string" - match messages with "string" in the To:
            UNANSWERED - match messages that have not been answered
            UNDELETED - match messages that are not deleted
            UNFLAGGED - match messages that are not flagged
            UNKEYWORD "string" - match messages that do not have the keyword "string"
            UNSEEN - match messages which have not been read yet*/

            $emails = imap_search($inbox,'ALL'); //Va a leer todos los mails del INBOX

            $output = '';

            rsort($emails); //Ordena los correos de mas nuevo a mas viejo

            foreach($emails as $mail) {

                //Por cada email se va a guardar el Asunto, Destinatario, Fecha, Email Remitente, Remitente y el Mensaje

                $headerInfo = imap_headerinfo($inbox,$mail);

                $overview = imap_fetch_overview($inbox,$mail,0);

                $message = imap_utf8(imap_fetchbody($inbox,$mail,2));

                $output .= imap_utf8(($overview[0]->seen ? 'Leyendo email recibido' : 'unread')).' <br> Asunto: 
                ';
                $output .= imap_utf8($headerInfo->subject).' <br> Destinatario: 
                ';
                $output .= imap_utf8($headerInfo->toaddress).' <br> Fecha: 
                ';
                $output .= imap_utf8($headerInfo->date).' <br> Email Remitente: 
                ';
                $output .= imap_utf8($headerInfo->reply_to[0]->mailbox).'@'.imap_utf8($headerInfo->reply_to[0]->host).' <br> Remitente:
                ';
                $output .= imap_utf8($headerInfo->reply_toaddress).' <br> Mensaje: 
                ';
                $output.= ' '.$message.'

                ';

                //En $emailRemitente voy a guardar el email del correo recibido
                $emailRemitente = imap_utf8($headerInfo->reply_to[0]->mailbox).'@'.imap_utf8($headerInfo->reply_to[0]->host);

                $user = $this->emailModel->getUser($emailRemitente); //Me va a retornar el usuario que coincida con el email del remitente

                if($user != null) {
                    echo "El vuelo fue creado correctamente en la agenda de $user"; //Se debe autocompletar el formulario con los datos obtenidos del email
                }

                $emailStructure = imap_fetchstructure($inbox,$mail);

                if(!isset($emailStructure->parts)) {
                $output .= imap_utf8(imap_body($inbox, $mail, FT_PEEK));
                } else {

                }
                echo $output;
                $output = '';
                echo "---------------------------------------------------------------------------";
                echo "<br>";
            }

            imap_expunge($inbox);
            imap_close($inbox);
        }
    }