<?php
// اتصال بقاعدة البيانات
require_once "../config/conn2.php";

// التحقق من وصول البيانات بصيغة JSON
$data = json_decode(file_get_contents("php://input"));

// فحص وجود البيانات
if (!empty($data->patient_id) && !empty($data->Ecg) && !empty($data->SpO2) && !empty($data->Temperature) && !empty($data->Bpm)) {
    // استعداد الاستعلام
    $sql = "INSERT INTO analysis (patient_id, Ecg, SpO2, Temperature, Bpm) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $pdo->prepare($sql)) {
        // ربط البارامترات
        $stmt->bind_param("iiiii", $data->patient_id, $data->Ecg, $data->SpO2, $data->Temperature, $data->Bpm);

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