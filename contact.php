<?php
// contact.php - Functional Contact Form UI with Client-Side Validation
$page_title = "Contact Campus Support | EduPulse College Portal";
$current_page = "contact";

// Include Modular Header
require_once __DIR__ . '/includes/header.php';
?>

<section class="contact-section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3.5rem;">
            <span class="section-tag">Get In Touch</span>
            <h1 class="section-title">Campus Support & Inquiry Desk</h1>
            <p class="section-subtitle">
                Have questions regarding admissions, course transfers, portal logins, or administrative verification? Our support team is here to assist.
            </p>
        </div>

        <div class="contact-grid">
            <!-- 1. Contact Information Cards -->
            <div class="contact-info-cards">
                <div class="contact-info-card">
                    <div class="contact-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="contact-card-text">
                        <h4>Campus Office Location</h4>
                        <p>Academic Block 4, Suite 102<br>University Boulevard, College Campus</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="contact-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div class="contact-card-text">
                        <h4>Helpline & Tele-Support</h4>
                        <p>General Desk: +1 (800) 555-0199<br>Registrar: +1 (800) 555-0144</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="contact-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="contact-card-text">
                        <h4>Direct Email Inquiries</h4>
                        <p>admissions@college.edu<br>it-support@edupulse.college.edu</p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="contact-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 14 14"></polyline>
                        </svg>
                    </div>
                    <div class="contact-card-text">
                        <h4>Office Working Hours</h4>
                        <p>Monday – Friday: 08:30 AM – 05:30 PM<br>Saturday (Help Desk): 09:00 AM – 01:00 PM</p>
                    </div>
                </div>
            </div>

            <!-- 2. Functional Contact Form with Client-Side Validation -->
            <div class="contact-form-card">
                <div id="contactFormStatus"></div>

                <form id="contactForm" novalidate>
                    <div class="form-row">
                        <!-- Full Name Field -->
                        <div class="form-group">
                            <label class="form-label" for="contactName">Your Full Name *</label>
                            <div class="input-with-icon">
                                <span class="input-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </span>
                                <input type="text" id="contactName" class="form-control" placeholder="e.g. Alex Morgan" required>
                            </div>
                            <div class="error-feedback"></div>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            <label class="form-label" for="contactEmail">Email Address *</label>
                            <div class="input-with-icon">
                                <span class="input-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </span>
                                <input type="email" id="contactEmail" class="form-control" placeholder="alex@college.edu" required>
                            </div>
                            <div class="error-feedback"></div>
                        </div>
                    </div>

                    <!-- Subject / Inquiry Topic -->
                    <div class="form-group">
                        <label class="form-label" for="contactSubject">Inquiry Department / Subject</label>
                        <div class="input-with-icon">
                            <span class="input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                            </span>
                            <select id="contactSubject" class="form-control">
                                <option value="Admissions & Enrollment">Admissions & Enrollment Questions</option>
                                <option value="Academic Records & Transcripts">Academic Records & Transcripts</option>
                                <option value="Technical Portal Support">Technical Portal & Account Login Support</option>
                                <option value="Fee Payments & Scholarships">Fee Payments & Scholarships</option>
                                <option value="General Campus Inquiry">General Campus Inquiry</option>
                            </select>
                        </div>
                        <div class="error-feedback"></div>
                    </div>

                    <!-- Message Body -->
                    <div class="form-group">
                        <label class="form-label" for="contactMessage">Detailed Message *</label>
                        <textarea id="contactMessage" rows="5" class="form-control no-icon" placeholder="Please describe your query or support request in detail..." required></textarea>
                        <div class="error-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.85rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        Submit Support Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
// Include Modular Footer
require_once __DIR__ . '/includes/footer.php';
?>
