<?php

// $NS=array('8.8.8.8');
// $dns_NS_array=dns_get_record("www.google.com", DNS_ALL, $NS);
// print_r($dns_NS_array);

// $NS=array('10.0.1.4');
// $dns_NS_array=dns_get_record("private.yoichiozaki.com", DNS_ALL, $NS);
// print_r($dns_NS_array);

// $NS=array('8.8.8.8');
// $dns_NS_array=dns_get_record("www.yoichiozaki.com", DNS_ALL, $NS);
// print_r($dns_NS_array);

// require_once 'Net/DNS2.php';

// $resolver = new Net_DNS2_Resolver( array('nameservers' => array('10.0.1.4')) );
// $resp = $resolver->query("private.yoichiozaki.com.", 'A');
// print_r($resp);
// echo $resp->answer[0]->address;

// $resolver = new Net_DNS2_Resolver( array('nameservers' => array('8.8.8.8')) );
// $resp = $resolver->query("www.yoichiozaki.com.", 'A');
// print_r($resp);
// echo $resp->answer[0]->address;

$host = 'private.yoichiozaki.com';
$dns = '10.0.1.4';
$ip = `nslookup $host $dns`; // the backticks execute the command in the shell
$ips = array();
if(preg_match_all('/Address: ((?:\d{1,3}\.){3}\d{1,3})/', $ip, $match) > 0){
    $ips = $match[1];
}
print_r($ips);


$host = 'www.yoichiozaki.com';
$dns = '8.8.8.8';
$ip = `nslookup $host $dns`; // the backticks execute the command in the shell
$ips = array();
if(preg_match_all('/Address: ((?:\d{1,3}\.){3}\d{1,3})/', $ip, $match) > 0){
    $ips = $match[1];
}
print_r($ips);
