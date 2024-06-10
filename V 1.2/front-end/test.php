<?php

// بيانات البريد الإلكتروني المرسل
$yourEmail = "web.mastersksa@gmail.com";

// بيانات الرسالة
$recipientEmail = "web.mastersksa@gmail.com";
$subject = "موضوع الرسالة";
$message = "محتوى الرسالة";

// بيانات API Key وUser ID من حساب EmailJS الخاص بك
$emailjs_api_key = "48To8lJN2JjU9iRPmjN37";
$emailjs_user_id = "QcgsOVExIv2V3Hys7";

// تكوين الرسالة
$data = array(
    "service_id" => "service_g9gypr8",
    "template_id" => "template_jmx850o",
    "user_id" => $emailjs_user_id,
    "template_params" => array(
        "to_email" => $recipientEmail,
        "subject" => $subject,
        "message_html" => $message,
        "from_email" => $yourEmail
    )
);

// إرسال الطلب إلى EmailJS API
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.emailjs.com/api/v1.0/email/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: Bearer " . $emailjs_api_key
    )
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "خطأ: " . $err;
} else {
    echo "تم إرسال البريد الإلكتروني بنجاح!";
}

?>
