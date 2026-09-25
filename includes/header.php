<?php
// includes/header.php - Modular Header Template
if (!isset($page_title)) {
    $page_title = "EduPulse | College Management & Academic Portal";
}
if (!isset($current_page)) {
    $current_page = basename($_SERVER['PHP_SELF'], ".php");
}

// Dynamic Server-Side Greeting Logic based on server time
$hour = (int)date('H');
if ($hour >= 5 && $hour < 12) {
    $server_greeting = "Good Morning";
    $greeting_icon = "🌅";
} elseif ($hour >= 12 && $hour < 17) {
    $server_greeting = "Good Afternoon";
    $greeting_icon = "☀️";
} elseif ($hour >= 17 && $hour < 21) {
    $server_greeting = "Good Evening";
    $greeting_icon = "🌇";
} else {
    $server_greeting = "Welcome / Good Night";
    $greeting_icon = "🌙";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="EduPulse - College Academic & Student Management System Portal. Modern, responsive, and secure.">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Google Fonts: Poppins & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?php echo htmlspecialchars($current_page); ?>-page">

    <!-- Top Notification Banner (Dynamic Greeting) -->
    <div class="top-announcement-bar">
        <div class="container announcement-inner">
            <span class="greeting-badge">
                <span class="greeting-icon"><?php echo $greeting_icon; ?></span>
                <strong><?php echo $server_greeting; ?>!</strong> Server Time: <?php echo date('h:i A (T)'); ?>
            </span>
            <div class="announcement-right">
                <span class="status-indicator"></span> 
                <span class="academic-year">Academic Term 2026-2027 • Portal Online</span>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="main-header" id="mainHeader">
        <div class="container nav-container">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-logo" id="brandLogo">
                <div class="logo-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>
                <div class="logo-text">
                    <span class="brand-name">Edu<span>Pulse</span></span>
                    <span class="brand-tag">College Portal</span>
                </div>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button class="mobile-toggle-btn" id="mobileMenuBtn" aria-label="Toggle navigation menu" aria-expanded="false">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <!-- Navigation Links -->
            <nav class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?php echo ($current_page === 'index') ? 'active' : ''; ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link <?php echo ($current_page === 'dashboard') ? 'active' : ''; ?>">
                            <span class="live-dot"></span> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link <?php echo ($current_page === 'contact') ? 'active' : ''; ?>">
                            Contact
                        </a>
                    </li>
                </ul>

                <!-- Action CTA in Navbar -->
                <div class="nav-actions">
                    <a href="auth.php" class="btn btn-outline-nav">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10 17 15 12 10 7"/>
                            <line x1="15" y1="12" x2="3" y2="12"/>
                        </svg>
                        Sign In / Register
                    </a>
                    <a href="dashboard.php" class="btn btn-primary-nav">
                        Portal Access
                    </a>
                </div>
            </nav>
        </div>
    </header>
