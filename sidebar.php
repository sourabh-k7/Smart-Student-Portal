<div class="sidebar-nav">
    <ul>
        <li><a href="?section=dashboard" class="<?php echo $section == 'dashboard' ? 'active' : ''; ?>">
            <i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="?section=profile" class="<?php echo $section == 'profile' ? 'active' : ''; ?>">
            <i class="fas fa-user-circle"></i> My Profile</a></li>
        <li><a href="?section=documents" class="<?php echo $section == 'documents' ? 'active' : ''; ?>">
            <i class="fas fa-file-download"></i> Document Requests</a></li>
        <li><a href="?section=courses" class="<?php echo $section == 'courses' ? 'active' : ''; ?>">
            <i class="fas fa-book-open"></i> My Courses</a></li>
        <li><a href="?section=grades" class="<?php echo $section == 'grades' ? 'active' : ''; ?>">
            <i class="fas fa-chart-bar"></i> Grades</a></li>
        <li><a href="?section=payments" class="<?php echo $section == 'payments' ? 'active' : ''; ?>">
            <i class="fas fa-credit-card"></i> Payments</a></li>
        <li><a href="?section=settings" class="<?php echo $section == 'settings' ? 'active' : ''; ?>">
            <i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div> 