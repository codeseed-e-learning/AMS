<?php 


class DB {
    public $hostname = 'localhost';
    public $username = 'root';
    public $password = '';
    public $db = 'ams';
    private $connection;

    private $firstname;
    private $lastname;
    private $email;
    private $mobile;
    private $gender;
    private $division;
    private $department;
    private $rollnumber;

    public function __construct()
    {
        // Create the database connection
        $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->db);

        if (!$this->connection) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        // Initialize form data
        $this->firstname = $_POST['firstname'] ?? '';
        $this->lastname = $_POST['lastname'] ?? '';
        $this->email = $_POST['email'] ?? '';
        $this->mobile = $_POST['mobile'] ?? '';
        $this->gender = $_POST['gender'] ?? '';
        $this->division = $_POST['division'] ?? '';
        $this->department = $_POST['department'] ?? '';
        $this->rollnumber = $_POST['rollnumber'] ?? '';
    }

    public function register()
    {
        // Validate inputs
        if (empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->mobile)) {
            die("All fields are required.");
        }

        // Sanitize inputs to prevent SQL injection
        $firstname = mysqli_real_escape_string($this->connection, $this->firstname);
        $lastname = mysqli_real_escape_string($this->connection, $this->lastname);
        $email = mysqli_real_escape_string($this->connection, $this->email);
        $mobile = mysqli_real_escape_string($this->connection, $this->mobile);
        $gender = mysqli_real_escape_string($this->connection, $this->gender);
        $division = mysqli_real_escape_string($this->connection, $this->division);
        $department = mysqli_real_escape_string($this->connection, $this->department);
        $rollnumber = mysqli_real_escape_string($this->connection, $this->rollnumber);

        // Insert query
        $sql = "INSERT INTO students (firstname, lastname, department, division, roll_number, mobile_number, gender, email_id, create_at)
                VALUES ('$firstname', '$lastname', '$department', '$division', '$rollnumber', '$mobile', '$gender', '$email', NOW())";
        // echo $sql;       
        // return;
        // Execute the query
        $register = mysqli_query($this->connection, $sql);

        if ($register) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($this->connection);
        }
    }
    public function login($username , $password){
        $sql = "SELECT * FROM students WHERE email_id='$username' and password='$password'";
        // echo $sql;
        // return;
        $executeQuery = mysqli_query($this->connection, $sql);

        if(mysqli_num_rows($executeQuery) > 0){
            return true;
        } else {
            return false;
        }
    }
    public function __destruct()
    {
        // Close the database connection
        if ($this->connection) {
            mysqli_close($this->connection);
        }
    }
}

$obj = new DB();

// $obj->register();
// $obj->login("");