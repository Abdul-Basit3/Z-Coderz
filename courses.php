<?php
$page_title = 'Courses';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-content">

    <!-- Page Body -->
    <div class="page-body">

        <div class="card">
            <div class="card-header">
                <h2>Courses</h2>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Course
                </a>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Computer Science</td>
                            <td>Study of computers and programming.</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this course?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Information Technology</td>
                            <td>Focus on IT systems and infrastructure.</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this course?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Software Engineering</td>
                            <td>Software development and design.</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this course?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Data Science</td>
                            <td>Data analysis and machine learning.</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this course?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Cyber Security</td>
                            <td>Security of systems and networks.</td>
                            <td><span class="badge badge-active">Active</span></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this course?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Networking</td>
                            <td>Computer networks and communication.</td>
                            <td><span class="badge badge-inactive">Inactive</span></td>
                            <td>
                                <a href="#" class="btn-edit">Edit</a>
                                <a href="#" class="btn-delete" onclick="return confirm('Delete this course?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.page-body -->

<?php include 'includes/footer.php'; ?>
