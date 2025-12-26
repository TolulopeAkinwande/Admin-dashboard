<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (!$data && !empty($_POST)) {
    $data = $_POST;
} elseif (!$data) {
    parse_str($input, $data);
}

if (!$data) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "No data received"]);
    exit;
}

function get($key, $default = '') {
    global $data;
    $value = $data[$key] ?? $default;
    return is_string($value) ? htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8') : $default;
}

$fullname     = get('fullname');
$phone        = get('phone');
$email        = get('email');
$address      = get('address');
$city         = get('city');
$background   = get('background', 'Not provided');

if (empty($fullname) || empty($phone) || empty($email) || empty($address)) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Please fill in all required fields"]);
    exit;
}

$adminEmailList = [
    "admin@heritagefdha.com"
];

$location = $address;
if (!empty($city)) {
    $location .= ", " . $city;
}

$message = "
<html>
<head>
    <meta charset='UTF-8'>
    <title>New Educator Registration - Heritage Day Home Agency</title>
</head>
<body style='margin:0;padding:0;background:#f5f7f5;font-family:Segoe UI,Arial,sans-serif;color:#333;'>
    <div style='max-width:640px;margin:40px auto;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.1);'>

        <!-- Header -->
        <div style='background:linear-gradient(135deg,#2e7d32,#1b5e20);color:#ffffff;text-align:center;padding:35px 20px;'>
            <h1 style='margin:0;font-size:26px;font-weight:600;letter-spacing:0.5px;'>
                New Educator Registration
            </h1>
            <p style='margin:10px 0 0;font-size:17px;opacity:0.95;'>
                Someone wants to become a Day Home Provider!
            </p>
        </div>

        <!-- Body -->
        <div style='padding:40px 35px;line-height:1.7;'>
            <p style='font-size:16px;color:#222;margin-bottom:30px;'>
                A new educator has submitted their registration through the website.
            </p>

            <!-- Personal Info Card -->
            <div style='background:#f8fff8;border:2px solid #c8e6c9;border-radius:10px;padding:25px;'>
                <h3 style='margin:0 0 20px;color:#1b5e20;font-size:19px;border-bottom:2px solid #a5d6a7;padding-bottom:8px;'>
                    Personal Information
                </h3>
                <table width='100%' style='font-size:16px;border-collapse:collapse;'>
                    <tr><td style='padding:8px 0;width:38%;color:#555;font-weight:600;'>Full Name</td><td>{$fullname}</td></tr>
                    <tr><td style='padding:8px 0;color:#555;font-weight:600;'>Phone Number</td><td>{$phone}</td></tr>
                    <tr><td style='padding:8px 0;color:#555;font-weight:600;'>Email Address</td><td><a href='mailto:{$email}' style='color:#2e7d32;'>{$email}</a></td></tr>
                    <tr><td style='padding:8px 0;color:#555;font-weight:600;'>Home Address</td><td>{$location}</td></tr>
                </table>
            </div>

            <!-- Background & Experience -->
            <div style='margin-top:30px;background:#fffde7;border-left:6px solid #ffb300;padding:20px;border-radius:0 8px 8px 0;'>
                <h3 style='margin:0 0 12px;color:#e65100;font-size:18px;'>
                    Background & Experience in Childcare
                </h3>
                <div style='font-size:15px;color:#333;background:#ffffff;padding:16px;border-radius:6px;white-space:pre-wrap;'>
                    " . nl2br($background) . "
                </div>
            </div>

            <!-- Submission Time -->
            <div style='margin-top:40px;padding:20px;background:#e8f5e8;text-align:center;border-radius:8px;font-size:15px;color:#1b5e20;'>
                <strong>Submitted on:</strong><br>
                " . date('l, F j, Y \a\t g:i A') . "
            </div>
        </div>

        <!-- Footer -->
        <div style='background:#1b5e20;color:#c8e6c9;text-align:center;padding:30px 20px;font-size:14px;'>
            <p style='margin:8px 0;font-size:16px;font-weight:600;color:#a5d6a7;'>
                Heritage Day Home Agency
            </p>
            <p style='margin:8px 0;'>
                Nolan Hill, Calgary, Alberta<br>
                <a href='tel:+15877036085' style='color:#c8e6c9;text-decoration:none;'>+1 587-703-6085</a> • 
                <a href='mailto:admin@heritagedayhome.com' style='color:#c8e6c9;text-decoration:none;'>admin@heritagedayhome.com</a>
            </p>
            <p style='margin-top:20px;font-size:12px;opacity:0.8;'>
                © 2025 Heritage Day Home Agency. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>";



// Email headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Heritage Day Home Website <no-reply@heritagedayhome.com>\r\n";
$headers .= "Reply-To: {$email}\r\n";

$subject = "New Educator Registration – {$fullname}";

$mailSuccess = true;
foreach ($adminEmailList as $adminEmail) {
    if (!mail(trim($adminEmail), $subject, $message, $headers)) {
        $mailSuccess = false;
    }
}

if ($mailSuccess) {
    echo json_encode([
        "success" => true,
        "message" => "Thank you, {$fullname}! Your educator registration has been submitted successfully. We'll contact you soon!"
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "Oops! Something went wrong. Please email us directly at admin@heritagedayhome.com"
    ]);
}
?>