<?php

$NS=array('8.8.8.8');
$dns_NS_array=dns_get_record("www.google.com", DNS_ANY, $NS);
print_r($dns_NS_array);

$NS=array('10.0.1.4');
$dns_NS_array=dns_get_record("private.yoichiozaki.com", DNS_ANY, $NS);
print_r($dns_NS_array);

$NS=array('8.8.8.8');
$dns_NS_array=dns_get_record("www.yoichiozaki.com", DNS_ANY, $NS);
print_r($dns_NS_array);
