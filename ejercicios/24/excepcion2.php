<?php
class emailException extends Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = 'Error en la línea ' . $this->getLine() . ' del fichero ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> no es una dirección válida de correo';
        return $errorMsg;
    }
}
class ageException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error en la línea ' . $this->getLine() . ' del fichero ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> no es una edad válida';
        return $errorMsg;
    }
}

$email = "someone@example...com";
$age = "-5";

try {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        throw new emailException($email);
    }

    if ($age < 0) {
        throw new ageException($age);
    }
} catch (emailException $e) {
    echo $e->errorMessage();
} catch (ageException $e) {
    echo $e->errorMessage();
    //se puede incluir un cath por defecto
} catch (Throwable $e) {
    echo $e;
}
//solo nos saldra el error del email