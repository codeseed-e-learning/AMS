<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <form action="submit-leave-request.php" method="POST" class="bg-white p-4 rounded shadow w-100" style="max-width: 400px;">
        <h2 class="text-center text-primary mb-4">Leave Application</h2>
        
        <!-- Date Field -->
        <div class="mb-3">
            <label for="leave-date" class="form-label">Leave Date:</label>
            <input type="date" id="leave-date" name="leave_date" required class="form-control">
        </div>
        
        <!-- Reason Field -->
        <div class="mb-3">
            <label for="leave-reason" class="form-label">Reason for Leave:</label>
            <textarea id="leave-reason" name="leave_reason" rows="4" required class="form-control"></textarea>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Submit Application</button>
    </form>
</div>
