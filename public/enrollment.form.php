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
    echo json_encode(["success" => false, "message" => "Invalid request data"]);
    exit;
}

function get($key, $default = '') {
    global $data;
    return isset($data[$key]) ? htmlspecialchars(trim($data[$key]), ENT_QUOTES, 'UTF-8') : $default;
}

$parent1_fullname = get('parent1_fullname');
$parent1_occupation = get('parent1_occupation');
$parent1_relationship = get('parent1_relationship');
$parent1_address = get('parent1_address');
$parent1_city = get('parent1_city');
$parent1_postal = get('parent1_postal');
$parent1_phone = get('parent1_phone');
$parent1_email = get('parent1_email');

$parent2_fullname = get('parent2_fullname');
$parent2_occupation = get('parent2_occupation');
$parent2_relationship = get('parent2_relationship');
$parent2_address = get('parent2_address');
$parent2_city = get('parent2_city');
$parent2_postal = get('parent2_postal');
$parent2_phone = get('parent2_phone');
$parent2_email = get('parent2_email');

$dayhome_name = get('dayhome_name', 'Not specified');
$preferred_contact = isset($data['preferred_contact']) ? $data['preferred_contact'] : [];

if (empty($parent1_fullname) || empty($parent1_phone) || empty($parent1_email)) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Parent/Guardian 1 information is required"]);
    exit;
}
$adminEmailList = [
    "admin@heritagefdha.com"
];

$parent2HTML = "";
if (!empty($parent2_fullname)) {
    $parent2HTML = "
    <div style='background:#f9f5ff;border:1px solid #e3dcfa;border-radius:8px;padding:20px;margin-top:25px;'>
        <h3 style='margin:0 0 15px 0;color:#512DA8;font-size:17px;'>👪 Parent/Guardian 2</h3>
        <table width='100%' style='font-size:15px;'>
            <tr><td style='padding:4px 0;width:40%;color:#555;'><strong>Full Name</strong></td><td>{$parent2_fullname}</td></tr>
            <tr><td style='padding:4px 0;color:#555;'><strong>Occupation</strong></td><td>{$parent2_occupation}</td></tr>
            <tr><td style='padding:4px 0;color:#555;'><strong>Relationship to Child</strong></td><td>{$parent2_relationship}</td></tr>
            <tr><td style='padding:4px 0;color:#555;'><strong>Address</strong></td><td>{$parent2_address}, {$parent2_city}, {$parent2_postal}</td></tr>
            <tr><td style='padding:4px 0;color:#555;'><strong>Phone</strong></td><td>{$parent2_phone}</td></tr>
            <tr><td style='padding:4px 0;color:#555;'><strong>Email</strong></td><td>{$parent2_email}</td></tr>
        </table>
    </div>";
}

$contactMethods = is_array($preferred_contact) ? implode(', ', $preferred_contact) : $preferred_contact;
$contactDisplay = $contactMethods ?: 'Not specified';

$message = "
<html>
<head>
    <meta charset='UTF-8'>
    <title>New Enrollment Request - Heritage Day Home Agency</title>
</head>
<body style='background:#f8f9fa;font-family:Segoe UI,Arial,sans-serif;color:#333;margin:0;padding:40px 0;'>
    <div style='max-width:640px;margin:auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.1);'>
        
        <!-- Header -->
        <div style='background:linear-gradient(135deg,#2e7d32,#1b5e20);color:white;text-align:center;padding:30px 20px;'>
            <h1 style='margin:0;font-size:24px;'>🌱 New Enrollment Request</h1>
            <p style='margin:8px 0 0;font-size:16px;opacity:0.95;'>Heritage Day Home Agency</p>
        </div>

        <!-- Selected Day Home -->
        <div style='background:#e8f5e9;border:1px solid #c8e6c9;border-radius:8px;padding:20px;margin:20px 30px 0;text-align:center;'>
             <h3 style='margin:0 0 10px 0;color:#2e7d32;font-size:18px;'>Selected Day Home</h3>
            <p style='margin:0;font-size:16px;color:#333;'>{$dayhome_name}</p>
        </div>

        <!-- Body -->
        <div style='padding:35px 30px;line-height:1.6;'>
            <p style='font-size:16px;color:#222;'>
                A new family has submitted an enrollment request through the website.
            </p>

            <!-- Parent 1 -->
            <div style='background:#f5f8f5;border:1px solid #c8e6c9;border-radius:8px;padding:20px;margin-top:25px;'>
                <h3 style='margin:0 0 15px 0;color:#2e7d32;font-size:17px;'>👪 Parent/Guardian 1</h3>
                <table width='100%' style='font-size:15px;'>
                    <tr><td style='padding:4px 0;width:40%;color:#555;'><strong>Full Name</strong></td><td>{$parent1_fullname}</td></tr>
                    <tr><td style='padding:4px 0;color:#555;'><strong>Occupation</strong></td><td>{$parent1_occupation}</td></tr>
                    <tr><td style='padding:4px 0;color:#555;'><strong>Relationship to Child</strong></td><td>{$parent1_relationship}</td></tr>
                    <tr><td style='padding:4px 0;color:#555;'><strong>Address</strong></td><td>{$parent1_address}, {$parent1_city}, {$parent1_postal}</td></tr>
                    <tr><td style='padding:4px 0;color:#555;'><strong>Phone Number</strong></td><td>{$parent1_phone}</td></tr>
                    <tr><td style='padding:4px 0;color:#555;'><strong>Email Address</strong></td><td>{$parent1_email}</td></tr>
                </table>
            </div>

            {$parent2HTML}

            <!-- Preferred Contact -->
            <div style='margin-top:30px;padding:18px;background:#fff8e1;border-left:5px solid #ffb300;border-radius:4px;'>
                <strong style='color:#e65100;'>Preferred Method of Communication:</strong><br>
                <span style='font-size:16px;color:#333;'>{$contactDisplay}</span>
            </div>

            <div style='margin-top:35px;padding-top:20px;border-top:2px dashed #ddd;text-align:center;color:#777;font-size:14px;'>
                <p><strong>Submitted on:</strong> " . date('l, F j, Y \a\t g:i A') . "</p>
            </div>
        </div>

        <!-- Footer -->
        <div style='background:#1b5e20;color:#c8e6c9;text-align:center;padding:25px;font-size:13px;'>
            <p style='margin:5px 0;'><strong>Heritage Day Home Agency</strong><br>
            Nolan Hill, Calgary, Alberta</p>
            <p style='margin:10px 0 0;'>
                <a href='mailto:admin@heritagedayhome.com' style='color:#a5d6a7;text-decoration:none;'>admin@heritagedayhome.com</a> • 
                <a href='tel:+15877036085' style='color:#a5d6a7;text-decoration:none;'>+1 587-703-6085</a>
            </p>
            <p style='margin-top:15px;font-size:12px;opacity:0.8;'>
                © 2025 Heritage Day Home Agency. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Heritage Day Home Website <no-reply@heritagedayhome.com>\r\n";
$headers .= "Reply-To: {$parent1_email}\r\n";

$subject = "🌱 New Enrollment Request – {$parent1_fullname} for {$dayhome_name}";

$mailSuccess = true;
foreach ($adminEmailList as $adminEmail) {
    $sent = mail(trim($adminEmail), $subject, $message, $headers);
    if (!$sent) {
        $mailSuccess = false;
    }
}

if ($mailSuccess) {
    echo json_encode([
        "success" => true,
        "message" => "Thank you! Your enrollment request has been submitted successfully."
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "There was a problem sending your request. Please try again or contact us directly."
    ]);
}
?>