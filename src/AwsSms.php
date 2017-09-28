<?php
/*
 * @copyright   2017 Push and Motion. All rights reserved
 * @author      PAM
 *
 * @link        https://pushandmotion.com
 *
 */

namespace AwsSms;
use Aws\Sns\SnsClient;

class Sms
{
    private $username;
    private $password;
    private $needSecure;
    private $client;
    public function __construct($username, $password, $needSecure = true)
    {
        $this->username   = $username;
        $this->password   = $password;
        $this->needSecure = $needSecure;


        $this->client = SnsClient::factory(array(
            'profile' => '<profile in your aws credentials file>',
            'region'  => '<region name>'
        ));

    }

    public function sendSms(){

    }



}