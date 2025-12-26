<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (!$data) {
  parse_str($input, $data);
}

if (!$data) {
  http_response_code(400);
  echo json_encode(["success" => false, "message" => "Invalid request"]);
  exit;
}

$name = htmlspecialchars(trim($data['name'] ?? ''));
$phone = htmlspecialchars(trim($data['phone'] ?? ''));
$rideTime = htmlspecialchars(trim($data['rideTime'] ?? ''));
$address = htmlspecialchars(trim($data['address'] ?? ''));

$passengerInfo = $data['passengerInfo'] ?? null;

if (!$name || !$phone || !$rideTime || !$address || !$passengerInfo) {
  http_response_code(400);
  echo json_encode(["success" => false, "message" => "All fields are required"]);
  exit;
}

$adults = htmlspecialchars($passengerInfo['adults'] ?? 0);
$children = htmlspecialchars($passengerInfo['children'] ?? 0);
$infants = htmlspecialchars($passengerInfo['infants'] ?? 0);

$adminEmailList = [
  "transport@rccgrpc.ca",
];

$passengerHTML = "
  <ul style='margin: 0; padding-left: 16px;'>
    <li><strong>Adults:</strong> {$adults}</li>
    <li><strong>Children:</strong> {$children}</li>
    <li><strong>Infants:</strong> {$infants}</li>
  </ul>
";

$messageToAdmin = "
<html>
<head><meta charset='UTF-8'></head>
<body style='background-color:#f7f8fa;font-family:Segoe UI,Arial,sans-serif;margin:0;padding:40px 0;color:#333;'>
  <div style='max-width:600px;background:#ffffff;margin:auto;border-radius:10px;box-shadow:0 6px 20px rgba(0,0,0,0.08);overflow:hidden;'>
    
    <!-- Header -->
    <div style='background:linear-gradient(135deg,#673AB7,#512DA8);color:#ffffff;text-align:center;padding:24px 20px;'>
      <h1 style='font-size:22px;margin:0;letter-spacing:0.5px; color:#ffffff;'>🚗 New Ride Request</h1>
    </div>

    <!-- Body -->
    <div style='padding:30px 25px;'>
      
      <div style='margin-bottom:20px;'>
        <span style='display:block;font-weight:600;font-size:14px;color:#777;margin-bottom:5px;text-transform:uppercase;letter-spacing:0.5px;'>Full Name</span>
        <div style='font-size:16px;color:#111;background:#f8f8ff;padding:10px 14px;border-radius:6px;border-left:4px solid #673AB7;'>{$name}</div>
      </div>

      <div style='margin-bottom:20px;'>
        <span style='display:block;font-weight:600;font-size:14px;color:#777;margin-bottom:5px;text-transform:uppercase;letter-spacing:0.5px;'>Phone Number</span>
        <div style='font-size:16px;color:#111;background:#f8f8ff;padding:10px 14px;border-radius:6px;border-left:4px solid #673AB7;'>{$phone}</div>
      </div>

      <div style='margin-bottom:20px;'>
        <span style='display:block;font-weight:600;font-size:14px;color:#777;margin-bottom:5px;text-transform:uppercase;letter-spacing:0.5px;'>Ride Time</span>
        <div style='font-size:16px;color:#111;background:#f8f8ff;padding:10px 14px;border-radius:6px;border-left:4px solid #673AB7;'>{$rideTime}</div>
      </div>

      <div style='margin-bottom:20px;'>
        <span style='display:block;font-weight:600;font-size:14px;color:#777;margin-bottom:5px;text-transform:uppercase;letter-spacing:0.5px;'>Pickup Address</span>
        <div style='font-size:16px;color:#111;background:#f8f8ff;padding:10px 14px;border-radius:6px;border-left:4px solid #673AB7;'>{$address}</div>
      </div>

      <!-- Passenger Info -->
      <div style='margin-top:24px;background:#f3f0ff;border-radius:8px;padding:16px 18px;border:1px solid #e3dcfa;'>
        <h3 style='margin:0 0 10px;font-size:16px;color:#512DA8;'>Passenger Information</h3>
        <div style='font-size:15px;color:#333;'>{$passengerHTML}</div>
      </div>
    </div>

    <!-- Footer -->
    <div style='text-align:center;font-size:12px;color:#aaa;padding:20px 0 10px;'>
      <p style='margin:4px 0;'>🚘 RCCG Ride Coordination | Automated Ride Request System</p>
      <p style='margin:4px 0;'>
        Need help? 
        <a href='mailto:transport@rccgrpc.ca' style='color:#673AB7;text-decoration:none;font-weight:600;'>Contact Transport Team</a>
      </p>
    </div>

  </div>
</body>
</html>
";

$headersToAdmin  = "MIME-Version: 1.0\r\n";
$headersToAdmin .= "Content-type: text/html; charset=UTF-8\r\n";
$headersToAdmin .= "From: Ride Request <no-reply@rccgrpc.ca>\r\n";

$mailSuccess = true;
foreach ($adminEmailList as $adminEmail) {
  $sent = mail($adminEmail, "🚗 New Ride Request from $name", $messageToAdmin, $headersToAdmin);
  if (!$sent) {
    $mailSuccess = false;
    break;
  }
}

if ($mailSuccess) {
  echo json_encode(["success" => true, "message" => "Ride request submitted successfully"]);
} else {
  http_response_code(500);
  echo json_encode(["success" => false, "message" => "Failed to send email"]);
}
