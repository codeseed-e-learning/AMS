<?php
include './common/app.php';
$connection = mysqli_connect("localhost", "root", "", "ams");

$sql = "SELECT * FROM students INNER JOIN leave_applications ON students.student_id = leave_applications.applicant_id";
?>
<table class="table table-bordered container mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = mysqli_query($connection, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
            // print_r($data);
            ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['firstname'] ?></td>
                <td><?php echo $data['lastname'] ?></td>
                <td><?php echo $data['application_date'] ?></td>
            </tr>

            <?php
        }
        ?>
    </tbody>
</table>