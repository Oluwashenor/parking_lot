<?php
require_once __DIR__ . "/../database/database.php";

class API
{

    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function updateSlot($slot, $state)
    {
        // Escape the variables to prevent SQL injection (assuming you are using mysqli)
        $escapedSlot = $this->db->conn->real_escape_string($slot);
        $escapedState = $this->db->conn->real_escape_string($state);

        // Check if a record with the given slot value already exists
        $checkSql = "SELECT * FROM spaces WHERE slot = '$escapedSlot'";
        $checkResult = $this->db->conn->query($checkSql);

        if ($checkResult && $checkResult->num_rows > 0) {
            // A record with the given slot value already exists, so do not insert
            $sql = "UPDATE spaces SET state='$state' WHERE slot=$slot";
            $result = $this->db->conn->query($sql);
            if ($result === true) {
                echo json_encode("space Updated successfully");
            } else {
                echo "Error: " . $sql . "<br>" . $this->db->conn->error;
            }
            $this->db->closeConnection();
        } else {
            $sql = "INSERT INTO spaces (slot,state) VALUES ('$slot', '$state')";
            $result = $this->db->conn->query($sql);
            if ($result === true) {
                echo json_encode("Data Saved Successfully");
            } else {
                echo "Error: " . $sql . "<br>" . $this->db->conn->error;
            }
            $this->db->closeConnection();
        }
    }
}
