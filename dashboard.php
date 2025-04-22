<section id="dashboard" class="content-section fade-in">
    <h2 class="section-title"><i class="fas fa-tachometer-alt"></i> Dashboard</h2>
    
    <?php
    // Get stats from database
    $activeCourses = 5; // Replace with actual DB query
    $pendingRequests = 2;
    $upcomingEvents = 3;
    $newMessages = 4;
    ?>
    
    <div class="dashboard-cards">
        <div class="card">
            <div class="card-icon"><i class="fas fa-book"></i></div>
            <h3 class="card-title">Active Courses</h3>
            <p class="card-value"><?php echo $activeCourses; ?></p>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-file-alt"></i></div>
            <h3 class="card-title">Pending Requests</h3>
            <p class="card-value"><?php echo $pendingRequests; ?></p>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-calendar-check"></i></div>
            <h3 class="card-title">Upcoming Events</h3>
            <p class="card-value"><?php echo $upcomingEvents; ?></p>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-envelope"></i></div>
            <h3 class="card-title">New Messages</h3>
            <p class="card-value"><?php echo $newMessages; ?></p>
        </div>
    </div>

    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i> Welcome back! Your last login was <?php echo date('F j, Y \a\t g:i A', strtotime('-1 day')); ?>.
    </div>

    <h3><i class="fas fa-bell"></i> Recent Notifications</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Notification</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo date('Y-m-d', strtotime('-2 days')); ?></td>
                    <td>Your transcript request has been approved</td>
                    <td><span class="badge badge-success">Completed</span></td>
                </tr>
                <tr>
                    <td><?php echo date('Y-m-d', strtotime('-1 day')); ?></td>
                    <td>New grade posted for Mathematics 101</td>
                    <td><span class="badge badge-primary">New</span></td>
                </tr>
                <tr>
                    <td><?php echo date('Y-m-d', strtotime('-3 days')); ?></td>
                    <td>Upcoming deadline for course registration</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</section> 