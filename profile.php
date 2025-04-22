<section id="profile" class="content-section">
    <h2 class="section-title"><i class="fas fa-user"></i> Profile Management</h2>
    
    <?php
    // Get user data from database
    $user = [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'phone' => '1234567890',
        'address' => '123 Main St, City',
        'dob' => '1995-05-15',
        'major' => 'cs'
    ];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process form submission
        $name = sanitizeInput($_POST['name']);
        $email = sanitizeInput($_POST['email']);
        $phone = sanitizeInput($_POST['phone']);
        $address = sanitizeInput($_POST['address']);
        $dob = sanitizeInput($_POST['dob']);
        $major = sanitizeInput($_POST['major']);
        
        // Update database (pseudo-code)
        // $stmt = $conn->prepare("UPDATE users SET name=?, email=?, ... WHERE id=?");
        // $stmt->execute([$name, $email, ..., $_SESSION['user_id']]);
        
        displayAlert('success', 'Profile updated successfully!');
        
        // Refresh user data
        $user = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'dob' => $dob,
            'major' => $major
        ];
    }
    ?>
    
    <form id="profileForm" method="POST">
        <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($user['name']); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo htmlspecialchars($user['phone']); ?>">
        </div>
        
        <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <textarea id="address" name="address" class="form-control" rows="3"><?php echo htmlspecialchars($user['address']); ?></textarea>
        </div>
        
        <div class="form-group">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $user['dob']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="major" class="form-label">Major</label>
            <select id="major" name="major" class="form-control" required>
                <option value="">Select your branch</option>
                <option value="cs" <?php echo $user['major'] == 'cs' ? 'selected' : ''; ?>>Computer Science & Engineering</option>
                <option value="eng" <?php echo $user['major'] == 'eng' ? 'selected' : ''; ?>>Artificial Intelligence</option>
                <option value="bus" <?php echo $user['major'] == 'bus' ? 'selected' : ''; ?>>Artificial Intelligence & Data Science</option>
                <option value="art" <?php echo $user['major'] == 'art' ? 'selected' : ''; ?>>Electronics & Telecommunication</option>
                <option value="sci" <?php echo $user['major'] == 'sci' ? 'selected' : ''; ?>>Electrical Engineering</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-block">Update Profile</button>
    </form>
</section> 