<?php include './common/app.php'; ?>

<div class="container mt-5">
    <!-- Card Container -->
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
            <h5>Enter Your Details</h5>
        </div>
        <div class="card-body">
            <form action="server/register.php" method="post">
                <!-- Form Row 1 -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" name="firstname" placeholder="Enter your first name" class="form-control"
                            id="firstname" />
                    </div>
                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" placeholder="Enter your last name" class="form-control"
                            id="lastname" />
                    </div>
                </div>

                <!-- Form Row 2 -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Enter your email" class="form-control"
                            id="email" />
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" name="mobile" placeholder="Enter your mobile number" class="form-control"
                            id="mobile" />
                    </div>
                </div>

                <!-- Form Row 3 -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender" id="gender">
                            <option selected disabled>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image" />
                    </div>
                </div>

                <!-- Form Row 4 -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="division" class="form-label">Division</label>
                        <input type="text" name="division" placeholder="Enter division" class="form-control"
                            id="division" />
                    </div>
                    <div class="col-md-6">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" name="department" placeholder="Enter department" class="form-control"
                            id="department" />
                    </div>
                </div>

                <!-- Form Row 5 -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="rollnumber" class="form-label">Roll Number</label>
                        <input type="text" name="rollnumber" placeholder="Enter roll number" class="form-control"
                            id="rollnumber" />
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>