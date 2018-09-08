<?php

class server
{
    public function __construct()
    {

    }

    public static function authenticate($header_params)
    {
        if($header_params->user_name =='jc91715'&&$header_params->password=='jc91715') return true;

        else throw new SoapFault('Wrong user/pass',401);
    }
    public function getStudentName($id_array)
    {
        return 'jc91715';
    }
}

$params = array('uri'=>'soap/server.php');
$server = new SoapServer(null,$params);
$server->setClass('server');
$server->handle();
