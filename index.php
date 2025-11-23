<?php
session_start();
include 'components/includes/header.php';
?>

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <!-- Circle Logo -->
            <div class="text-center mb-2">
                <img src="public/images/coffeLOGO.jpg" 
                     class="rounded-circle shadow"
                     style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #fff;"
                     alt="Logo">
            </div>

            <!-- Display Error/Success Messages -->
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php 
                        echo $_SESSION['error']; 
                        unset($_SESSION['error']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            
            <!-- Login Form -->
            <div class="card shadow-lg" id="loginForm">
                <div class="card-header text-white text-center" style="background-color: #42352cff;">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="components/Database/login.php">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="remember_me">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn text-white w-100 mb-3" style="background-color: #6F4E37;">Login</button>
                        <div class="text-center">
                            <small>Don't have an account? <a href="#" class="text-decoration-none" style="color: #6F4E37;" onclick="toggleForms(); return false;">Register here</a></small>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Register Form -->
            <div class="card shadow-lg d-none" id="registerForm">
                <div class="card-header text-white text-center" style="background-color: #6F4E37;">
                    <h3 class="mb-0">Register</h3>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="components/Database/register.php">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Create a password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password" required>
                        </div>
                        <button type="submit" class="btn text-white w-100 mb-3" style="background-color: #6F4E37;">Register</button>
                        <div class="text-center">
                            <small>Already have an account? <a href="#" class="text-decoration-none" style="color: #6F4E37;" onclick="toggleForms(); return false;">Login here</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'components/includes/footer.php';
?>