<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_title = isset($page_title) ? $page_title : ($current_page === 'index.php' ? 'Dashboard' : ucwords(str_replace(['.php', '_'], ['', ' '], $current_page)));
$is_student_form_page = $current_page === 'add_student.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebatech Student Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="page-header">
        <div class="header-brand">
            <div class="logo">
                <span><i class="fa-solid fa-n"></i></span>
                <span>Nebatech</span>
            </div>
        </div>

        <div class="topbar">
            <div class="topbar-left">
                <?php if ($is_student_form_page): ?>
                    <a href="students.php" class="back-link" title="Back to students">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                <?php else: ?>
                    <button class="hamburger" type="button"><i class="fas fa-bars"></i></button>
                <?php endif; ?>
                <span class="topbar-title"><?= htmlspecialchars($page_title) ?></span>
            </div>

            <div class="topbar-right">
                <div class="avatar"><i class="fas fa-user"></i></div>
                <span>Admin</span>
                <i class="fas fa-chevron-down" style="font-size:11px;"></i>
            </div>
        </div>
    </header>

    <div class="wrapper">
