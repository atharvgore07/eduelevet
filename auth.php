<?php
// auth.php - Combined Login & Registration System with Glassmorphism
$page_title = "Sign In & Register | EduPulse College Portal";
$current_page = "auth";

// Include Modular Header
require_once __DIR__ . '/includes/header.php';
?>

<div class="auth-page-wrapper">
    <!-- Centered Glassmorphism Authentication Card -->
    <div class="auth-glass-card">
        <!-- Interactive Tab Switcher -->
        <div class="auth-tabs" role="tablist">
            <button class="auth-tab-btn active" data-tab="login" role="tab" aria-selected="true" aria-controls="loginPane">
                Sign In
            </button>
            <button class="auth-tab-btn" data-tab="register" role="tab" aria-selected="false" aria-controls="registerPane">
                New Registration
            </button>
        </div>

        <!-- 1. LOGIN FORM PANE -->
        <div class="auth-form-pane active" id="loginPane" role="tabpanel">
            <div style="text-align: center; margin-bottom: 1.5rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight:700; color:var(--text-primary);">
                    Welcome Back
                </h2>
                <p style="font-size: 0.85rem; color: var(--text-secondary);">
                    Sign in to access your student or departmental dashboard.
                </p>
            </div>

            <!-- Pre-styled Status Alert Box (Dynamically used by script) -->
            <div id="loginAlertBox"></div>

            <form id="loginForm" novalidate>
                <!-- Role Selection Dropdown (Prompt 3 Deliverable) -->
                <div class="form-group">
                    <label class="form-label" for="loginRole">Account Role</label>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </span>
                        <select id="loginRole" class="form-control" required>
                            <option value="Student">Student Portal</option>
                            <option value="Teacher">Teacher / Faculty</option>
                            <option value="Admin">System Administrator</option>
                        </select>
                    </div>
                </div>

                <!-- Academic Email -->
                <div class="form-group">
                    <label class="form-label" for="loginEmail">College Email Address</label>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </span>
                        <input type="email" id="loginEmail" class="form-control" placeholder="name@college.edu" required autocomplete="username">
                    </div>
                    <div class="error-feedback"></div>
                </div>

                <!-- Password with Visibility Toggle (Prompt 3 Deliverable) -->
                <div class="form-group">
                    <div style="display: flex; justify-content: space-between; align-items:center;">
                        <label class="form-label" for="loginPassword">Password</label>
                        <a href="#forgot" style="font-size: 0.78rem; font-weight:600;">Forgot Password?</a>
                    </div>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </span>
                        <input type="password" id="loginPassword" class="form-control" placeholder="Enter your password" required autocomplete="current-password">
                        <button type="button" class="toggle-password-btn" data-target="loginPassword" aria-label="Toggle password visibility">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </button>
                    </div>
                    <div class="error-feedback"></div>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                    Sign In to Portal
                </button>
            </form>
        </div>

        <!-- 2. REGISTRATION FORM PANE -->
        <div class="auth-form-pane" id="registerPane" role="tabpanel">
            <div style="text-align: center; margin-bottom: 1.5rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight:700; color:var(--text-primary);">
                    Create Account
                </h2>
                <p style="font-size: 0.85rem; color: var(--text-secondary);">
                    Join EduPulse Campus Portal with your institutional ID.
                </p>
            </div>

            <form id="registerForm" novalidate>
                <!-- Full Name -->
                <div class="form-group">
                    <label class="form-label" for="regName">Full Legal Name</label>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </span>
                        <input type="text" id="regName" class="form-control" placeholder="e.g. John Doe" required>
                    </div>
                    <div class="error-feedback"></div>
                </div>

                <!-- Role Selection -->
                <div class="form-group">
                    <label class="form-label" for="regRole">Select Role</label>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        </span>
                        <select id="regRole" class="form-control" required>
                            <option value="Student">Student (Undergraduate / Postgrad)</option>
                            <option value="Teacher">Faculty / Academic Staff</option>
                            <option value="Admin">Department Administrator</option>
                        </select>
                    </div>
                </div>

                <!-- Academic Email -->
                <div class="form-group">
                    <label class="form-label" for="regEmail">College Email</label>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </span>
                        <input type="email" id="regEmail" class="form-control" placeholder="user@college.edu" required autocomplete="username">
                    </div>
                    <div class="error-feedback"></div>
                </div>

                <!-- Password with Strength Meter (Prompt 3 Deliverable) -->
                <div class="form-group">
                    <label class="form-label" for="regPassword">Create Secure Password</label>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        </span>
                        <input type="password" id="regPassword" class="form-control" placeholder="At least 8 characters" required autocomplete="new-password">
                        <button type="button" class="toggle-password-btn" data-target="regPassword" aria-label="Toggle password visibility">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </button>
                    </div>

                    <!-- Real-Time Password Strength Meter Bar -->
                    <div class="strength-meter-box">
                        <div class="strength-bar-bg">
                            <div class="strength-bar-fill" id="strengthFill"></div>
                        </div>
                        <div class="strength-label">
                            <span>Password Strength:</span>
                            <strong id="strengthText">None</strong>
                        </div>
                    </div>
                    <div class="error-feedback"></div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label class="form-label" for="regConfirmPassword">Confirm Password</label>
                    <div class="input-with-icon">
                        <span class="input-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </span>
                        <input type="password" id="regConfirmPassword" class="form-control" placeholder="Repeat your password" required autocomplete="new-password">
                    </div>
                    <div class="error-feedback"></div>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                    Complete Registration
                </button>
            </form>
        </div>
    </div>
</div>

<?php
// Include Modular Footer
require_once __DIR__ . '/includes/footer.php';
?>
