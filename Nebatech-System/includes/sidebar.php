<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<aside class="sidebar">
    <nav class="sidebar-nav">
        <a href="index.php" class="nav-item <?= $current_page === 'index.php' ? 'active' : '' ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
        <a href="students.php" class="nav-item <?= ($current_page === 'students.php' || $current_page === 'add_student.php') ? 'active' : '' ?>">
            <i class="fas fa-user-graduate"></i>
            <span>Students</span>
        </a>
        <a href="courses.php" class="nav-item <?= $current_page === 'courses.php' ? 'active' : '' ?>">
            <i class="fas fa-book-open"></i>
            <span>Courses</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-chart-column"></i>
            <span>Reports</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-cog"></i>
            <span>Settings</span>
        </a>
    </nav>

    <div class="sidebar-logout">
        <a href="#" class="nav-item logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
