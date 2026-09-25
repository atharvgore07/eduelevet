<?php
// dashboard.php - Project-Specific System (Student & Academic Management Portal)
$page_title = "Admin Dashboard | EduPulse Campus Management System";
$current_page = "dashboard";

// Sample Initial PHP Dataset for Demonstration
$students = [
    [
        "id" => "STU-1082",
        "name" => "Aarav Sharma",
        "email" => "aarav.sharma@college.edu",
        "course" => "B.Tech Computer Science",
        "semester" => "6th Sem",
        "gpa" => "3.92",
        "status" => "Active",
        "badge_class" => "badge-active"
    ],
    [
        "id" => "STU-1083",
        "name" => "Sophia Chen",
        "email" => "sophia.chen@college.edu",
        "course" => "B.S. Artificial Intelligence",
        "semester" => "4th Sem",
        "gpa" => "3.85",
        "status" => "Active",
        "badge_class" => "badge-active"
    ],
    [
        "id" => "STU-1084",
        "name" => "Marcus Reynolds",
        "email" => "marcus.r@college.edu",
        "course" => "B.Sc Information Tech",
        "semester" => "2nd Sem",
        "gpa" => "3.40",
        "status" => "Pending",
        "badge_class" => "badge-pending"
    ],
    [
        "id" => "STU-1085",
        "name" => "Elena Rostova",
        "email" => "elena.rostova@college.edu",
        "course" => "M.Tech Data Science",
        "semester" => "2nd Sem",
        "gpa" => "3.98",
        "status" => "Active",
        "badge_class" => "badge-active"
    ],
    [
        "id" => "STU-1086",
        "name" => "David Miller",
        "email" => "david.m@college.edu",
        "course" => "B.Tech Electronics",
        "semester" => "8th Sem",
        "gpa" => "3.71",
        "status" => "Graduated",
        "badge_class" => "badge-graduated"
    ],
    [
        "id" => "STU-1087",
        "name" => "Priya Nair",
        "email" => "priya.nair@college.edu",
        "course" => "B.S. Cybersecurity",
        "semester" => "4th Sem",
        "gpa" => "3.64",
        "status" => "Inactive",
        "badge_class" => "badge-inactive"
    ]
];

// Include Modular Header
require_once __DIR__ . '/includes/header.php';
?>

<div class="dashboard-wrapper">
    <!-- 1. Left Collapsible Sidebar -->
    <aside class="dashboard-sidebar" id="dashboardSidebar">
        <!-- Sidebar Header with Current User & Collapse Trigger -->
        <div class="sidebar-header">
            <div class="sidebar-user">
                <div class="avatar-circle">AD</div>
                <div class="user-meta">
                    <h4>Prof. Anderson</h4>
                    <span>Dean / Dept Admin</span>
                </div>
            </div>
            <div class="sidebar-actions-group">
                <button class="sidebar-toggle-btn" id="sidebarToggleBtn" title="Collapse / Expand Sidebar">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="sidebar-close-mobile-btn" id="closeSidebarMobileBtn" aria-label="Close sidebar drawer" title="Close Drawer">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Sidebar Navigation Links -->
        <nav class="sidebar-nav">
            <div class="sidebar-category">Core Management</div>
            <div class="sidebar-menu">
                <a href="dashboard.php" class="sidebar-link active">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    <span class="nav-text">Student Directory</span>
                </a>
                <a href="#courses" class="sidebar-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    <span class="nav-text">Course Rosters</span>
                </a>
                <a href="#attendance" class="sidebar-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    <span class="nav-text">Attendance Log</span>
                </a>
                <a href="#grades" class="sidebar-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <span class="nav-text">Exam & CGPA</span>
                </a>
            </div>

            <div class="sidebar-category" style="margin-top: 1.5rem;">Administration</div>
            <div class="sidebar-menu">
                <a href="#requests" class="sidebar-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span class="nav-text">Pending Approvals</span>
                </a>
                <a href="contact.php" class="sidebar-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    <span class="nav-text">Help Desk Inquiries</span>
                </a>
                <a href="auth.php" class="sidebar-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <span class="nav-text">Sign Out</span>
                </a>
            </div>
        </nav>
    </aside>
    <!-- Off-Canvas Sidebar Mobile Backdrop -->
    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

    <!-- 2. Main Dashboard Area -->
    <main class="dashboard-main">
        <!-- Sticky Top Dashboard Action Bar -->
        <div class="dashboard-topbar">
            <!-- Mobile Sidebar Drawer Trigger Button -->
            <button class="mobile-sidebar-toggle-btn" id="mobileSidebarToggle" aria-label="Open navigation sidebar" title="Menu">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
                <span class="mobile-sidebar-toggle-text">Menu</span>
            </button>

            <!-- Search Bar -->
            <div class="search-box">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" id="tableSearchInput" placeholder="Quick search student name, ID, or course...">
            </div>

            <!-- Right Profile & Notification Controls -->
            <div class="topbar-right">
                <div class="notification-bell" title="System Notifications">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="notification-count">4</span>
                </div>

                <!-- User Dropdown Menu -->
                <div class="user-profile-menu">
                    <div class="profile-trigger" id="profileTrigger">
                        <div class="avatar-circle" style="width:32px; height:32px; font-size:0.75rem;">AD</div>
                        <span style="font-size: 0.85rem; font-weight:600; color:var(--text-primary);">Dr. Anderson</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>

                    <div class="profile-dropdown" id="profileDropdown">
                        <div style="padding: 0.5rem 1rem; border-bottom: 1px solid var(--border-color);">
                            <p style="font-size: 0.82rem; font-weight: 700; color: var(--text-primary);">Administrator</p>
                            <p style="font-size: 0.72rem; color: var(--text-muted);">admin.anderson@college.edu</p>
                        </div>
                        <a href="#profile" class="dropdown-item">My Profile Settings</a>
                        <a href="#preferences" class="dropdown-item">Academic Preferences</a>
                        <div class="dropdown-divider"></div>
                        <a href="auth.php" class="dropdown-item" style="color: var(--danger);">Log Out</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content Body -->
        <div class="dashboard-content">
            <!-- Header Row with Title & Quick Action CTA -->
            <div class="dashboard-title-row">
                <div>
                    <h2 class="section-title" style="font-size: 1.75rem; margin-bottom: 0.25rem;">Academic Overview</h2>
                    <p style="font-size: 0.88rem; color: var(--text-secondary);">Manage campus enrollments, verify student credentials, and review department activities.</p>
                </div>
                <button class="btn btn-primary" id="openAddStudentBtn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    Add New Student
                </button>
            </div>

            <!-- 4 Stat Cards with Custom Icons (Prompt 2 Deliverable) -->
            <div class="stats-grid">
                <!-- Card 1: Total Users/Students -->
                <div class="stat-card">
                    <div class="stat-info">
                        <span>Total Students</span>
                        <h3>12,548</h3>
                        <span class="trend-badge up">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            +8.4% vs last term
                        </span>
                    </div>
                    <div class="stat-icon card-blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                </div>

                <!-- Card 2: Active Requests / Courses -->
                <div class="stat-card">
                    <div class="stat-info">
                        <span>Active Courses</span>
                        <h3>142</h3>
                        <span class="trend-badge up">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            18 Departments
                        </span>
                    </div>
                    <div class="stat-icon card-purple">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    </div>
                </div>

                <!-- Card 3: Pending Approvals -->
                <div class="stat-card">
                    <div class="stat-info">
                        <span>Pending Approvals</span>
                        <h3>38</h3>
                        <span class="trend-badge down">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                            Requires Review
                        </span>
                    </div>
                    <div class="stat-icon card-amber">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    </div>
                </div>

                <!-- Card 4: Attendance & Analytics -->
                <div class="stat-card">
                    <div class="stat-info">
                        <span>Attendance Rate</span>
                        <h3>94.6%</h3>
                        <span class="trend-badge up">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            Optimal Status
                        </span>
                    </div>
                    <div class="stat-icon card-emerald">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                </div>
            </div>

            <!-- Responsive Data Table Card (Prompt 2 Deliverable) -->
            <div class="table-card">
                <div class="table-header">
                    <div>
                        <h3 style="font-family: var(--font-heading); font-size: 1.15rem; font-weight:700;">Registered Student Records</h3>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">Real-time database records with action controls</p>
                    </div>
                    <div class="table-filter-wrap">
                        <label for="statusFilter" style="font-size: 0.82rem; font-weight:600; color:var(--text-secondary);">Filter Status:</label>
                        <select class="filter-select" id="statusFilter">
                            <option value="all">All Records</option>
                            <option value="active">Active</option>
                            <option value="pending">Pending</option>
                            <option value="inactive">Inactive</option>
                            <option value="graduated">Graduated</option>
                        </select>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="custom-table" id="studentDataTable">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Details</th>
                                <th>Degree & Program</th>
                                <th>Semester</th>
                                <th>CGPA</th>
                                <th>Status</th>
                                <th style="text-align: right;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $stu): ?>
                            <tr data-name="<?php echo htmlspecialchars($stu['name']); ?>"
                                data-id="<?php echo htmlspecialchars($stu['id']); ?>"
                                data-email="<?php echo htmlspecialchars($stu['email']); ?>"
                                data-course="<?php echo htmlspecialchars($stu['course']); ?>"
                                data-status="<?php echo htmlspecialchars($stu['status']); ?>">
                                <td>
                                    <strong style="color: var(--primary); font-family: monospace; font-size: 0.88rem;">
                                        <?php echo htmlspecialchars($stu['id']); ?>
                                    </strong>
                                </td>
                                <td>
                                    <div class="user-cell">
                                        <div class="user-avatar-sm">
                                            <?php echo strtoupper(substr($stu['name'], 0, 2)); ?>
                                        </div>
                                        <div class="user-details">
                                            <h5><?php echo htmlspecialchars($stu['name']); ?></h5>
                                            <span><?php echo htmlspecialchars($stu['email']); ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo htmlspecialchars($stu['course']); ?></td>
                                <td><?php echo htmlspecialchars($stu['semester']); ?></td>
                                <td><strong><?php echo htmlspecialchars($stu['gpa']); ?></strong></td>
                                <td>
                                    <span class="badge <?php echo htmlspecialchars($stu['badge_class']); ?>">
                                        <?php echo htmlspecialchars($stu['status']); ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="action-buttons" style="justify-content: flex-end;">
                                        <!-- View Button -->
                                        <button class="btn-icon-action btn-edit-student" title="Edit Student Record">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                        </button>
                                        <!-- Delete Button -->
                                        <button class="btn-icon-action delete btn-delete-student" title="Delete Record">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- 3. Modal Popup for Adding / Editing Student Data (Prompt 2 Deliverable) -->
<div class="modal-overlay" id="studentModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-card">
        <div class="modal-header">
            <h3 id="modalTitle">Add New Student Record</h3>
            <button class="modal-close-btn" data-close-modal aria-label="Close dialog">&times;</button>
        </div>
        <form id="studentForm">
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="modalStudentName">Full Student Name</label>
                    <input type="text" id="modalStudentName" class="form-control no-icon" placeholder="e.g. John Doe" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="modalStudentEmail">College Email</label>
                    <input type="email" id="modalStudentEmail" class="form-control no-icon" placeholder="e.g. j.doe@college.edu" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="modalStudentCourse">Academic Course</label>
                        <select id="modalStudentCourse" class="form-control no-icon" required>
                            <option value="B.Tech Computer Science">B.Tech Computer Science</option>
                            <option value="B.S. Artificial Intelligence">B.S. Artificial Intelligence</option>
                            <option value="B.Sc Information Tech">B.Sc Information Tech</option>
                            <option value="M.Tech Data Science">M.Tech Data Science</option>
                            <option value="B.Tech Electronics">B.Tech Electronics</option>
                            <option value="B.S. Cybersecurity">B.S. Cybersecurity</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="modalStudentStatus">Enrollment Status</label>
                        <select id="modalStudentStatus" class="form-control no-icon">
                            <option value="Active">Active</option>
                            <option value="Pending">Pending</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Graduated">Graduated</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-close-modal>Cancel</button>
                <button type="submit" class="btn btn-primary">Save Student Record</button>
            </div>
        </form>
    </div>
</div>

<?php
// Include Modular Footer
require_once __DIR__ . '/includes/footer.php';
?>
