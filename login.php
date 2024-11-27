<?php include './common/app.php'; ?>

<div class="container mt-5">
    <!-- Card Container -->
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
            <h5>Login</h5>
        </div>
        <div class="card-body">
            <form action="server/login.php" method="post">
                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control" id="email" required />
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control" id="password" required />
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
