<?php defined('BASEPATH') OR exit('No direct script access allowed');

// $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'smtpout.secureserver.net', 
//     'smtp_port' => 465,
//     'smtp_user' => 'vaibhavi.more@maclareen.com',
//     'smtp_pass' => 'Maclareen@2023',
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'html', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '4', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => TRUE,
//     'priority' => 1 
// );



// $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'ssl://smtp.googlemail.com', 
//     'smtp_port' => 465,
//     'smtp_user' => 'maclareentech@gmail.com',
//     'smtp_pass' => 'M2S7@99$#',
//     'mailtype' => 'html', //plaintext 'text' mails or 'html'
//     'charset' => 'utf-8',
//     'newline' => '\r\n',
// );



$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.googlemail.com', 
    'smtp_port' => 465,
    'smtp_crypto' => 'ssl',
    'smtp_timeout' => "400",
    // 'smtp_user' => 'maclareendata@gmail.com',
    // 'smtp_pass' => 'vlackdoijrplkhzz',   // less secure password    spsoiptxvkhcundd
     'smtp_user' => 'maclareendigital@gmail.com',
    'smtp_pass' => 'spsoiptxvkhcundd', // less secure password 
    'validate' => true,
    'charset' => 'utf-8',
    'mailtype' => "html",
    'crlf' => "\r\n",
    'newline' => "\r\n"

);


// $config['protocol']='smtp';
// $config['smtp_host']='smtp.googlemail.com';
// $config['smtp_port']=587;
// $config['smtp_crypto']='tls';
// $config['smtp_timeout']=30;
// $config['smtp_user']='maclareentech@gmail.com';
// $config['smtp_pass']='M2S7@99$#';
// $config['charset']='utf-8';
// $config['newline']="\r\n";







