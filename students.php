<?php
$page_title = 'Students';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-content">

    <!-- Page Body -->
    <div class="page-body">

        <div class="card">
            <div class="card-header">
                <h2>Students</h2>
                <a href="add_student.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Student
                </a>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Admission Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ahmed</td>
                            <td>Ali</td>
                            <td>ahmed@example.com</td>
                            <td>0701234567</td>
                            <td>Computer Science</td>
                            <td>01/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="add_student.php?id=1" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this student?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sara</td>
                            <td>Mohamed</td>
                            <td>sara@example.com</td>
                            <td>0702345678</td>
                            <td>Information Technology</td>
                            <td>02/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="add_student.php?id=2" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this student?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Yassin</td>
                            <td>Omar</td>
                            <td>yassin@example.com</td>
                            <td>0703456789</td>
                            <td>Software Engineering</td>
                            <td>03/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="add_student.php?id=3" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this student?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mariam</td>
                            <td>Hassan</td>
                            <td>mariam@example.com</td>
                            <td>0704567890</td>
                            <td>Data Science</td>
                            <td>04/05/2024</td>
                            <td><span class="badge badge-inactive">Inactive</span></td>
                            <td>
                                <a href="add_student.php?id=4" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this student?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ibrahim</td>
                            <td>Saleh</td>
                            <td>ibrahim@example.com</td>
                            <td>0705678901</td>
                            <td>Cyber Security</td>
                            <td>05/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="add_student.php?id=5" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this student?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.page-body -->

<?php include 'includes/footer.php'; ?>
