<?

// $NS=array('8.8.8.8');
// $dns_NS_array=dns_get_record("www.google.com", DNS_ALL, $NS);
// print_r($dns_NS_array);

// $NS=array('10.0.1.4');
// $dns_NS_array=dns_get_record("private.yoichiozaki.com", DNS_ALL, $NS);
// print_r($dns_NS_array);

// $NS=array('8.8.8.8');
// $dns_NS_array=dns_get_record("www.yoichiozaki.com", DNS_ALL, $NS);
// print_r($dns_NS_array);

require_once 'Net/DNS2.php';

$resolver = new Net_DNS2_Resolver( array('nameservers' => array('10.0.1.4')) );
$resp = $resolver->query("private.yoichiozaki.com.", 'A');
print_r($resp);
echo $resp->answer[0]->address;

$resolver = new Net_DNS2_Resolver( array('nameservers' => array('8.8.8.8')) );
$resp = $resolver->query("www.yoichiozaki.com.", 'A');
print_r($resp);
echo $resp->answer[0]->address;
