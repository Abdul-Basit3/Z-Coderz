<?php
$page_title = 'Dashboard';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-content">

    <!-- Page Body -->
    <div class="page-body">

        <!-- Stat Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-number">25</div>
                    <div class="stat-label">Total Students</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-number">6</div>
                    <div class="stat-label">Courses</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Active Students</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-number">20</div>
                    <div class="stat-label">Inactive Students</div>
                </div>
            </div>
        </div>

        <!-- Recent Students Table -->
        <div class="card">
            <div class="card-header">
                <h2>Recent Students</h2>
                <a href="students.php" class="view-all">View All</a>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Admission Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ahmed</td>
                            <td>Ali</td>
                            <td>Computer Science</td>
                            <td>01/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sara</td>
                            <td>Mohamed</td>
                            <td>Information Technology</td>
                            <td>02/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Yassin</td>
                            <td>Omar</td>
                            <td>Software Engineering</td>
                            <td>03/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mariam</td>
                            <td>Hassan</td>
                            <td>Data Science</td>
                            <td>04/05/2024</td>
                            <td><span class="badge badge-inactive">Inactive</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ibrahim</td>
                            <td>Saleh</td>
                            <td>Cyber Security</td>
                            <td>05/05/2024</td>
                            <td><span class="badge badge-active">Active</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.page-body -->

<?php include 'includes/footer.php'; ?>
