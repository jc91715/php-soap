<?php
/**
 * Created by PhpStorm.
 * User: jc91715
 * Date: 2018/9/8
 * Time: 9:42
 */

class client
{
    private $instance;

    public function __construct()
    {
        $params = array('location'=>'http://soap.work/server.php','uri'=>'soap.work/server.php','trace'=>true);
        $this->instance = new SoapClient(null,$params);
        //authenticate 验证
        $auth_params = new stdClass();
        $auth_params->user_name = 'jc91715';
        $auth_params->password = 'jc91715';
        $head_params = new SoapVar($auth_params,SOAP_ENC_OBJECT);
        $header = new SoapHeader('codev','authenticate',$head_params,false);
        $this->instance->__setSoapHeaders(array($header));

    }

    public function getName($id_array)
    {
        return $this->instance->__soapCall('getStudentName',$id_array);
    }
}

$client = new client();
