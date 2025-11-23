<?php
    include 'components/includes/header.php';
    
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <!-- Login Form -->
                <div class="card shadow-lg" id="loginForm">
                    <div class="card-header text-white text-center" style="background-color: #beb4adff;">
                        <h3 class="mb-0">Login</h3>
                    </div>
                    <div class="card-body p-4">
                        <form methid="post" action="">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
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
                        <h3 class="mb-0">☕ Register</h3>
                    </div>
                    <div class="card-body p-4">
                        <form methid="post" action="">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Create a password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm your password" required>
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
</main>

<?php
    include 'components/includes/footer.php';
?>