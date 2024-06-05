<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json; charset=utf-8');
// استيراد الملف conn2.php
require_once "../config/conn.php";

// فحص وجود البيانات في الرابط
if (!empty($_GET['patient_id']) && !empty($_GET['Ecg']) && !empty($_GET['SpO2']) && !empty($_GET['Temperature']) && !empty($_GET['Bpm'])) {
    // القراءة وتخزين البيانات من الرابط
    $patient_id = $_GET['patient_id'];
    $Ecg = $_GET['Ecg'];
    $SpO2 = $_GET['SpO2'];
    $Temperature = $_GET['Temperature'];
    $Bpm = $_GET['Bpm'];

    // استعداد الاستعلام
    $sql = "INSERT INTO analysis (patient_id, Ecg, SpO2, Temperature, Bpm) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        // ربط البارامترات
        $stmt->bind_param("iiiii", $patient_id, $Ecg, $SpO2, $Temperature, $Bpm);

        // تنفيذ الاستعلام
        if ($stmt->execute()) {
            http_response_code(201); // تم إنشاء المورد بنجاح
            echo json_encode(array("message" => "Analysis data sent successfully."));
        } else {
            http_response_code(500); // خطأ داخلي في الخادم
            echo json_encode(array("message" => "Unable to send analysis data."));
        }
    }
} else {
    http_response_code(400); // طلب غير صحيح
    echo json_encode(array("message" => "Incomplete data. Please provide all required fields."));
}
?>
