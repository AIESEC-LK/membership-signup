<?php

include("configs.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$preferred_contact = $_POST['preferred_contact'];
$university = $_POST['university'];
$employment_status = $_POST['employment_status'];
$motivation = $_POST['motivation'];
$referral = $_POST['referral'];
$privacy_agreed = $_POST['privacy_agreed'];

$home_lc_ids = array(
    "7667" => "222",    // CC
    "7668" => "872",    // CN
    "7669" => "1340",   // CS
    "7671" => "2204",   // Kandy
    "7670" => "221",    // USJ
    "7672" => "2175",   // Ruhuna
    "7673" => "2188"    // SLIIT
);

$memberLead["academic_level_id"] = 21796;
$memberLead["alignment_id"] = intval($university);
$memberLead["backgrounds"] = [];
$memberLead["country_code"] = "94";
$memberLead["date_of_birth"] = $dob;
$memberLead["email"] = $email;
$memberLead["employment_status_id"] = intval($employment_status);
$memberLead["home_lc_id"] = intval($home_lc_ids[$university]);
$memberLead["lead_name"] = $first_name . " " . $last_name;
$memberLead["phone"] = $phone;
$memberLead["preferred_mode_of_contact_id"] = intval($preferred_contact);
$memberLead["motivation_reason_id"] = intval($motivation);
$memberLead["referral_type_id"] = intval($referral);

$json["operationName"] = "MemberLeadCreate";
$json["query"] = 'mutation MemberLeadCreate($memberLead: MemberLeadInput) { memberLeadCreate(member_lead: $memberLead) {    id    __typename  }}';
$json["variables"]["memberLead"] = $memberLead;

$json_payload = json_encode($json);

$captcha = $_POST['g-recaptcha-response'];
$privatekey = $config["gcaptcha_private_key"];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => $config["gcaptcha_private_key"],
    'response' => $captcha,
    'remoteip' => $_SERVER['REMOTE_ADDR']
);

$curlConfig = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $data
);

$ch = curl_init();
curl_setopt_array($ch, $curlConfig);
$response = curl_exec($ch);
curl_close($ch);

$jsonResponse = json_decode($response);

if ($jsonResponse->success === true) {
    //die(json_encode("Captcha invalid."));
}
else {
    $output = json_encode(array('errors' => [array('message' => 'Invalid Captcha')]));
    die($output);
}

$endpoint = 'https://gis-api.aiesec.org/graphql';

$api_call = curl_init($endpoint);
curl_setopt($api_call, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($api_call, CURLOPT_POSTFIELDS, $json_payload);
curl_setopt($api_call, CURLOPT_HTTPHEADER, array(
    "Host: gis-api.aiesec.org",
    "Content-Type: application/json",
    "Content-Length: " . strlen($json_payload),
    "Authorization: " . $config["auth_token"]
    ),
);

$result = curl_exec($api_call);
curl_close($api_call);