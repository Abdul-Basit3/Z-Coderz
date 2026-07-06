<?php
$is_edit = isset($_GET['id']);
$page_title = $is_edit ? 'Edit Student' : 'Add Student';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-content">

    <!-- Page Body -->
    <div class="page-body">

        <div class="form-card">
            <div class="form-section-title">Student Information</div>

            <form action="#" method="POST">

                <!-- Row 1: First Name, Last Name, DOB, Gender -->
                <div class="form-grid">
                    <div class="form-group">
                        <label>First Name <span class="required">*</span></label>
                        <input type="text" name="first_name" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name <span class="required">*</span></label>
                        <input type="text" name="last_name" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth <span class="required">*</span></label>
                        <input type="date" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label>Gender <span class="required">*</span></label>
                        <select name="gender" required>
                            <option value="" disabled selected>Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Row 2: Email, Phone, Course, Admission Date -->
                <div class="form-grid-2">
                    <div class="form-group">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number <span class="required">*</span></label>
                        <input type="tel" name="phone" placeholder="Enter phone number" required>
                    </div>
                    <div class="form-group">
                        <label>Course <span class="required">*</span></label>
                        <select name="course" required>
                            <option value="" disabled selected>Select course</option>
                            <option value="computer_science">Computer Science</option>
                            <option value="information_technology">Information Technology</option>
                            <option value="software_engineering">Software Engineering</option>
                            <option value="data_science">Data Science</option>
                            <option value="cyber_security">Cyber Security</option>
                            <option value="networking">Networking</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Admission Date <span class="required">*</span></label>
                        <input type="date" name="admission_date" required>
                    </div>
                </div>

                <!-- Address (full width) -->
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label>Address</label>
                        <textarea name="address" placeholder="Enter address"></textarea>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-grid" style="grid-template-columns: 1fr 3fr;">
                    <div class="form-group">
                        <label>Status <span class="required">*</span></label>
                        <select name="status" required>
                            <option value="" disabled selected>Select status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- Actions -->
                <div class="form-actions">
                    <button type="submit" class="btn btn-orange">
                        <i class="fas fa-save"></i> Save Student
                    </button>
                    <a href="students.php" class="btn btn-outline">Cancel</a>
                </div>

            </form>
        </div>

    </div><!-- /.page-body -->

<?php include 'includes/footer.php'; ?>
