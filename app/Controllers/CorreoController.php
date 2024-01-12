<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CorreoController extends BaseController
{

    public function sendEmail()
    {
        $nombre = $this->request->getPost('name');
        $mail = $this->request->getPost('email');
        $phone = $this->request->getPost('telefono');
        $messageBody = $this->request->getPost('message');

        if ($this->isOnly()) {
            $destino = "rodrigoarielgajardo@gmail.com";
            $subject = "Solicitud de informacion";

            $email = \Config\Services::email();
            $email->initialize(new \Config\Email());


            $email->setTo($destino);
            $email->setFrom($mail, $nombre);
            $email->setSubject($subject);
            $email->setMessage($messageBody);

            if ($email->send()) {
                return redirect()->to('/servicios')->with('excelente', 'Email enviado')->withInput();
            } else {
                echo "Error al enviar el correo: " . $email->printDebugger();
                log_message('error', 'Error al enviar el correo: ' . $email->printDebugger());
                // Puedes utilizar log_message para registrar el error en los registros de CodeIgniter
            }
        } else {
            return redirect()->to('/home')->with('error', 'Error de conexión con internet')->withInput();
        }
    }


    public function isOnly($site = "https://youtube.com")
    {
        if (@fopen($site, "r"))
            return true;
        else
            return false;
    }

}
