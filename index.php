<?php
// index.php - Main Landing Page Frontend
$page_title = "EduPulse | Next-Gen College Management System";
$current_page = "index";

// Include Modular Header
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero Section with Server Greeting & High-Impact CTA -->
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="sparkle">✨</span>
                <span>Smart Academic & Campus Architecture</span>
            </div>
            <h1 class="hero-title">
                Transforming Higher Education with <span class="gradient-text">Unified Intelligence.</span>
            </h1>
            <p class="hero-description">
                Experience a streamlined college management ecosystem. From intelligent student admissions and real-time grade processing to interactive faculty portals and course scheduling.
            </p>
            <div class="hero-buttons">
                <a href="dashboard.php" class="btn btn-primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    Explore Dashboard UI
                </a>
                <a href="auth.php" class="btn btn-secondary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg>
                    Student / Faculty Login
                </a>
            </div>

            <!-- Fast Metrics Row -->
            <div class="hero-stats-row">
                <div class="hero-stat-item">
                    <h3>12,500+</h3>
                    <p>Enrolled Students</p>
                </div>
                <div class="hero-stat-item">
                    <h3>340+</h3>
                    <p>Faculty Members</p>
                </div>
                <div class="hero-stat-item">
                    <h3>99.9%</h3>
                    <p>System Uptime</p>
                </div>
            </div>
        </div>

        <!-- Interactive Hero Mockup Card -->
        <div class="hero-visual">
            <div class="preview-card-wrap">
                <div class="preview-header">
                    <div class="window-dots">
                        <span class="dot-red"></span>
                        <span class="dot-yellow"></span>
                        <span class="dot-green"></span>
                    </div>
                    <span class="preview-title-badge">EduPulse Live Monitor v2.4</span>
                </div>
                <div class="preview-content">
                    <div class="mini-stat-card">
                        <div class="mini-stat-icon indigo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <div class="mini-stat-details">
                            <h5>Daily Attendance Recorded</h5>
                            <p>94.8% Active Today</p>
                        </div>
                    </div>

                    <div class="mini-stat-card">
                        <div class="mini-stat-icon emerald">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                        </div>
                        <div class="mini-stat-details">
                            <h5>Semester Exam Processing</h5>
                            <p>1,240 Transcripts Generated</p>
                        </div>
                    </div>

                    <div class="mini-stat-card">
                        <div class="mini-stat-icon cyan">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                        </div>
                        <div class="mini-stat-details">
                            <h5>Server Time Sync</h5>
                            <p><?php echo date('D, M j - h:i A'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating Badges -->
            <div class="floating-pill pill-1">
                <span class="status-indicator"></span>
                <span>Active Session: Spring 2026</span>
            </div>
            <div class="floating-pill pill-2">
                <svg width="18" height="18" color="#10b981" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                <span>Role-Based Access Guard</span>
            </div>
        </div>
    </div>
</section>

<!-- 2. Features / Services Grid -->
<section class="features-section" id="features">
    <div class="container text-center">
        <span class="section-tag">Modular Capabilities</span>
        <h2 class="section-title">Everything a Modern Campus Requires</h2>
        <p class="section-subtitle">
            Engineered with modern architecture to eliminate administrative bottlenecks and accelerate student success.
        </p>

        <div class="features-grid text-left">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                </div>
                <h3>Academic & Course Registry</h3>
                <p>
                    Manage curriculum structures, syllabus milestones, elective selections, and dynamic lecture scheduling with automated clash detection.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <h3>Automated Grading Engine</h3>
                <p>
                    Faculty can upload term assessments, calculate CGPA weights, generate verified digital transcripts, and export reports in PDF/Excel.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <polyline points="16 11 18 13 22 9"></polyline>
                    </svg>
                </div>
                <h3>Multi-Role Authentication</h3>
                <p>
                    Strict permission boundaries for Students, Teachers, and Department Admins. Equipped with session auditing and password hardening.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon-box">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h3>Real-Time Live Analytics</h3>
                <p>
                    Interactive charts, departmental fee reconciliations, active requests tracking, and real-time notifications for pending leaves and approvals.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. About Section -->
<section class="about-section" id="about">
    <div class="container about-grid">
        <div class="about-text">
            <span class="section-tag">Institutional Heritage</span>
            <h2 class="section-title">Built with Precision for Academic Excellence</h2>
            <p class="section-subtitle text-left" style="margin-left: 0;">
                EduPulse was conceived as an end-to-end management framework that replaces fragmented spreadsheets and legacy campus software with a fast, cohesive interface.
            </p>

            <ul class="about-checklist">
                <li>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <strong>High Security Standards:</strong> CSRF protections, sanitized inputs, and hashed credentials.
                </li>
                <li>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <strong>Instant Data Filtering:</strong> Filter thousands of student records seamlessly without page reloading.
                </li>
                <li>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    <strong>Mobile & Tablet Optimized:</strong> Full responsive fidelity across smartphones, iPads, and large 4K displays.
                </li>
            </ul>

            <a href="contact.php" class="btn btn-secondary">
                Connect with Campus IT Desk &rarr;
            </a>
        </div>

        <!-- Right Side Highlight Banner -->
        <div class="about-card-banner">
            <h3>Start Exploring Your Campus Portal</h3>
            <p>
                Ready to manage student enrollment, test out our interactive modal dialogs, or verify password strength meters? Experience the live dashboard now.
            </p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="dashboard.php" class="btn btn-secondary" style="background:#ffffff; color:var(--primary); font-weight:700;">
                    Launch Management Portal
                </a>
                <a href="auth.php" class="btn btn-outline-nav" style="background:transparent; color:#ffffff; border-color:rgba(255,255,255,0.4);">
                    Login Portal
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// Include Modular Footer
require_once __DIR__ . '/includes/footer.php';
?>
