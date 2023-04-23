<?php
require_once("config-students.php");

if (isset($_POST["patient_name"])) {

    $sql = "SELECT * FROM form4 WHERE patient_id = " . $_POST["patient_id"];
    $smtmselect = $db->prepare($sql);
    $result = $smtmselect->execute();

    if ($result) {
        $values = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        if (count($values) > 0) {
            $stmt = $db->prepare("UPDATE form4 SET 
                patient_name = ?,
                patient_gender = ?,
                creation_date = ?,
                update_date = ?,
                medical_diagnosis = ?,
                place_of_fall = ?,
                fall_date = ?,
                fall_time = ?,
                last_fall_risk_score = ?,
                injury_status = ?,
                injury_severity = ?,
                fall_cause = ?,
                pre_fall_precautions = ?,
                pre_fall_general_condition = ?,
                post_fall_general_condition = ?
            WHERE patient_id = ?");

            $stmt->execute([
                $_POST["patient_name"],
                $_POST["patient_gender"],
                $_POST["creation_date"],
                $_POST["update_date"],
                $_POST["medical_diagnosis"],
                $_POST["place_of_fall"],
                $_POST["fall_date"],
                $_POST["fall_time"],
                $_POST["last_fall_risk_score"],
                $_POST["injury_status"],
                $_POST["injury_severity"],
                $_POST["fall_cause"],
                $_POST["pre_fall_precautions"],
                $_POST["pre_fall_general_condition"],
                $_POST["post_fall_general_condition"],
                $_POST["patient_id"]
            ]);

            echo "Successfully updated.";
        }
        else {
            $stmt = $db->prepare("INSERT INTO form4 (
                patient_name,
                patient_id,
                patient_gender,
                creation_date,
                update_date,
                medical_diagnosis,
                place_of_fall,
                fall_date,
                fall_time,
                last_fall_risk_score,
                injury_status,
                injury_severity,
                fall_cause,
                pre_fall_precautions,
                pre_fall_general_condition,
                post_fall_general_condition
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->execute([
                $_POST["patient_name"],
                $_POST["patient_id"],
                $_POST["patient_gender"],
                $_POST["creation_date"],
                $_POST["update_date"],
                $_POST["medical_diagnosis"],
                $_POST["place_of_fall"],
                $_POST["fall_date"],
                $_POST["fall_time"],
                $_POST["last_fall_risk_score"],
                $_POST["injury_status"],
                $_POST["injury_severity"],
                $_POST["fall_cause"],
                $_POST["pre_fall_precautions"],
                $_POST["pre_fall_general_condition"],
                $_POST["post_fall_general_condition"]
            ]);

            echo "Successfully inserted.";
        }
    }
    else {
        echo "Error.";
    }
}
else {
    echo "Error.";
}
?>