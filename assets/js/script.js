/**
 * assets/js/script.js
 * Comprehensive Client-Side Interactivity for EduPulse Portal
 * Includes: Navigation, Form Validations, Password Strength Meter,
 * Show/Hide Password, Dashboard Modals, Table Search, and Toast Alerts.
 */

document.addEventListener('DOMContentLoaded', () => {
    initNavigation();
    initAuthTabs();
    initPasswordFeatures();
    initFormValidations();
    initDashboardInteractions();
    initContactForm();
});

/* ==========================================================================
   1. NAVIGATION & MOBILE MENU
   ========================================================================== */
function initNavigation() {
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const navMenu = document.getElementById('navMenu');

    if (mobileBtn && navMenu) {
        mobileBtn.addEventListener('click', () => {
            const isOpen = navMenu.classList.toggle('open');
            mobileBtn.setAttribute('aria-expanded', isOpen);
        });

        // Close menu on link click
        navMenu.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('open');
                mobileBtn.setAttribute('aria-expanded', 'false');
            });
        });
    }
}

/* ==========================================================================
   2. AUTHENTICATION TABS (LOGIN & REGISTER)
   ========================================================================== */
function initAuthTabs() {
    const tabButtons = document.querySelectorAll('.auth-tab-btn');
    const formPanes = document.querySelectorAll('.auth-form-pane');

    if (tabButtons.length > 0) {
        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetTab = btn.getAttribute('data-tab');

                tabButtons.forEach(b => b.classList.remove('active'));
                formPanes.forEach(pane => pane.classList.remove('active'));

                btn.classList.add('active');
                const targetPane = document.getElementById(`${targetTab}Pane`);
                if (targetPane) {
                    targetPane.classList.add('active');
                }
            });
        });
    }
}

/* ==========================================================================
   3. PASSWORD SHOW/HIDE & REAL-TIME STRENGTH METER
   ========================================================================== */
function initPasswordFeatures() {
    // 3.1 Password Visibility Toggle
    const toggleBtns = document.querySelectorAll('.toggle-password-btn');
    toggleBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetInputId = btn.getAttribute('data-target');
            const targetInput = document.getElementById(targetInputId);
            if (!targetInput) return;

            const isPassword = targetInput.getAttribute('type') === 'password';
            targetInput.setAttribute('type', isPassword ? 'text' : 'password');

            // Toggle SVG icon
            btn.innerHTML = isPassword
                ? `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>`
                : `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>`;
        });
    });

    // 3.2 Real-time Password Strength Calculation
    const regPasswordInput = document.getElementById('regPassword');
    const strengthFill = document.getElementById('strengthFill');
    const strengthText = document.getElementById('strengthText');

    if (regPasswordInput && strengthFill && strengthText) {
        regPasswordInput.addEventListener('input', () => {
            const val = regPasswordInput.value;
            const score = calculatePasswordStrength(val);

            // Update meter styling and labels
            let width = '0%';
            let color = '#e2e8f0';
            let label = 'None';

            if (val.length === 0) {
                width = '0%';
                label = 'None';
            } else if (score <= 1) {
                width = '25%';
                color = '#ef4444'; // Red
                label = 'Weak';
            } else if (score === 2) {
                width = '50%';
                color = '#f59e0b'; // Amber
                label = 'Fair';
            } else if (score === 3) {
                width = '75%';
                color = '#3b82f6'; // Blue
                label = 'Good';
            } else if (score >= 4) {
                width = '100%';
                color = '#10b981'; // Emerald
                label = 'Strong';
            }

            strengthFill.style.width = width;
            strengthFill.style.backgroundColor = color;
            strengthText.textContent = label;
            strengthText.style.color = color;
        });
    }
}

function calculatePasswordStrength(password) {
    let score = 0;
    if (!password) return 0;
    if (password.length >= 8) score++;
    if (/[a-z]/.test(password) && /[A-Z]/.test(password)) score++;
    if (/\d/.test(password)) score++;
    if (/[^A-Za-z0-9]/.test(password)) score++;
    return score;
}

/* ==========================================================================
   4. AUTH REAL-TIME VALIDATION & SUBMISSION
   ========================================================================== */
function initFormValidations() {
    // 4.1 Login Form Handler
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = document.getElementById('loginEmail');
            const passInput = document.getElementById('loginPassword');
            const roleSelect = document.getElementById('loginRole');

            let isValid = true;

            if (!validateEmail(emailInput.value)) {
                setInputError(emailInput, 'Please enter a valid academic email address.');
                isValid = false;
            } else {
                clearInputError(emailInput);
            }

            if (!passInput.value || passInput.value.length < 6) {
                setInputError(passInput, 'Password must be at least 6 characters.');
                isValid = false;
            } else {
                clearInputError(passInput);
            }

            if (isValid) {
                showToast(`Authenticating as ${roleSelect.value}... Redirecting!`, 'success');
                setTimeout(() => {
                    window.location.href = 'dashboard.php';
                }, 1200);
            }
        });
    }

    // 4.2 Register Form Handler
    const regForm = document.getElementById('registerForm');
    if (regForm) {
        regForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const nameInput = document.getElementById('regName');
            const emailInput = document.getElementById('regEmail');
            const passInput = document.getElementById('regPassword');
            const confirmInput = document.getElementById('regConfirmPassword');

            let isValid = true;

            if (!nameInput.value.trim()) {
                setInputError(nameInput, 'Full name is required.');
                isValid = false;
            } else {
                clearInputError(nameInput);
            }

            if (!validateEmail(emailInput.value)) {
                setInputError(emailInput, 'Valid college email required.');
                isValid = false;
            } else {
                clearInputError(emailInput);
            }

            if (calculatePasswordStrength(passInput.value) < 2) {
                setInputError(passInput, 'Password is too weak. Include upper/lower and numbers.');
                isValid = false;
            } else {
                clearInputError(passInput);
            }

            if (passInput.value !== confirmInput.value) {
                setInputError(confirmInput, 'Passwords do not match.');
                isValid = false;
            } else {
                clearInputError(confirmInput);
            }

            if (isValid) {
                showToast('Registration successful! Redirecting to Dashboard...', 'success');
                setTimeout(() => {
                    window.location.href = 'dashboard.php';
                }, 1400);
            }
        });
    }
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

function setInputError(input, message) {
    input.classList.add('is-invalid');
    const feedback = input.closest('.form-group').querySelector('.error-feedback');
    if (feedback) {
        feedback.textContent = message;
        feedback.style.display = 'block';
    }
}

function clearInputError(input) {
    input.classList.remove('is-invalid');
    const feedback = input.closest('.form-group').querySelector('.error-feedback');
    if (feedback) {
        feedback.textContent = '';
        feedback.style.display = 'none';
    }
}

/* ==========================================================================
   5. DASHBOARD INTERACTIONS (SIDEBAR, MODALS, SEARCH)
   ========================================================================== */
function initDashboardInteractions() {
    // 5.1 Sidebar Collapse Toggle
    const sidebar = document.getElementById('dashboardSidebar');
    const sidebarToggle = document.getElementById('sidebarToggleBtn');

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    }

    // 5.2 User Profile Dropdown Toggle
    const profileTrigger = document.getElementById('profileTrigger');
    const profileDropdown = document.getElementById('profileDropdown');

    if (profileTrigger && profileDropdown) {
        profileTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdown.classList.toggle('show');
        });

        document.addEventListener('click', () => {
            profileDropdown.classList.remove('show');
        });
    }

    // 5.3 Live Table Search
    const tableSearchInput = document.getElementById('tableSearchInput');
    const dataTable = document.getElementById('studentDataTable');

    if (tableSearchInput && dataTable) {
        tableSearchInput.addEventListener('keyup', () => {
            const query = tableSearchInput.value.toLowerCase();
            const rows = dataTable.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(query) ? '' : 'none';
            });
        });
    }

    // 5.4 Status Filter Dropdown
    const statusFilter = document.getElementById('statusFilter');
    if (statusFilter && dataTable) {
        statusFilter.addEventListener('change', () => {
            const selectedStatus = statusFilter.value.toLowerCase();
            const rows = dataTable.querySelectorAll('tbody tr');

            rows.forEach(row => {
                if (selectedStatus === 'all') {
                    row.style.display = '';
                    return;
                }
                const badge = row.querySelector('.badge');
                if (badge && badge.textContent.toLowerCase().includes(selectedStatus)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }

    // 5.5 Modal Popups Controller
    initModalControls();
}

function initModalControls() {
    const studentModal = document.getElementById('studentModal');
    const modalTitle = document.getElementById('modalTitle');
    const studentForm = document.getElementById('studentForm');

    // Open Add Student Modal
    const openAddBtn = document.getElementById('openAddStudentBtn');
    if (openAddBtn && studentModal) {
        openAddBtn.addEventListener('click', () => {
            modalTitle.textContent = 'Add New Student Record';
            if (studentForm) studentForm.reset();
            openModal(studentModal);
        });
    }

    // Open Edit on Table Buttons
    document.querySelectorAll('.btn-edit-student').forEach(btn => {
        btn.addEventListener('click', () => {
            const row = btn.closest('tr');
            if (!row) return;

            const name = row.getAttribute('data-name') || '';
            const email = row.getAttribute('data-email') || '';
            const course = row.getAttribute('data-course') || '';
            const status = row.getAttribute('data-status') || 'Active';

            modalTitle.textContent = `Edit Record: ${name}`;
            
            // Populate form fields
            const nameField = document.getElementById('modalStudentName');
            const emailField = document.getElementById('modalStudentEmail');
            const courseField = document.getElementById('modalStudentCourse');
            const statusField = document.getElementById('modalStudentStatus');

            if (nameField) nameField.value = name;
            if (emailField) emailField.value = email;
            if (courseField) courseField.value = course;
            if (statusField) statusField.value = status;

            openModal(studentModal);
        });
    });

    // Delete Button Confirmation & Animation
    document.querySelectorAll('.btn-delete-student').forEach(btn => {
        btn.addEventListener('click', () => {
            const row = btn.closest('tr');
            const name = row ? (row.getAttribute('data-name') || 'Student') : 'Record';

            if (confirm(`Are you sure you want to delete ${name}'s record?`)) {
                if (row) {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '0';
                    row.style.transform = 'translateX(20px)';
                    setTimeout(() => {
                        row.remove();
                        showToast(`Record for ${name} removed.`, 'info');
                    }, 300);
                }
            }
        });
    });

    // Close Modals
    document.querySelectorAll('[data-close-modal]').forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            const modal = closeBtn.closest('.modal-overlay');
            if (modal) closeModal(modal);
        });
    });

    // Close on outside overlay click
    document.querySelectorAll('.modal-overlay').forEach(overlay => {
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                closeModal(overlay);
            }
        });
    });

    // Handle Modal Form Submit
    if (studentForm) {
        studentForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('modalStudentName').value;
            closeModal(studentModal);
            showToast(`Record for ${name} saved successfully!`, 'success');
        });
    }
}

function openModal(modal) {
    if (!modal) return;
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeModal(modal) {
    if (!modal) return;
    modal.classList.remove('active');
    document.body.style.overflow = '';
}

/* ==========================================================================
   6. CONTACT FORM VALIDATION (PROMPT 1)
   ========================================================================== */
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    if (!contactForm) return;

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const nameInput = document.getElementById('contactName');
        const emailInput = document.getElementById('contactEmail');
        const subjectInput = document.getElementById('contactSubject');
        const messageInput = document.getElementById('contactMessage');

        let isValid = true;

        if (!nameInput.value.trim()) {
            setInputError(nameInput, 'Please provide your full name.');
            isValid = false;
        } else {
            clearInputError(nameInput);
        }

        if (!validateEmail(emailInput.value)) {
            setInputError(emailInput, 'Please provide a valid email address.');
            isValid = false;
        } else {
            clearInputError(emailInput);
        }

        if (subjectInput && !subjectInput.value.trim()) {
            setInputError(subjectInput, 'Please select or enter an inquiry topic.');
            isValid = false;
        } else if (subjectInput) {
            clearInputError(subjectInput);
        }

        if (!messageInput.value.trim() || messageInput.value.trim().length < 10) {
            setInputError(messageInput, 'Message must be at least 10 characters long.');
            isValid = false;
        } else {
            clearInputError(messageInput);
        }

        if (isValid) {
            // Show success message
            const statusAlert = document.getElementById('contactFormStatus');
            if (statusAlert) {
                statusAlert.innerHTML = `
                    <div class="alert alert-success">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <span>Thank you! Your message has been routed to the college desk. We'll reply within 24 hours.</span>
                    </div>
                `;
            }
            showToast('Message sent successfully!', 'success');
            contactForm.reset();
        }
    });
}

/* ==========================================================================
   7. TOAST NOTIFICATION UTILITY
   ========================================================================== */
function showToast(message, type = 'success') {
    const toast = document.getElementById('toastNotification');
    const toastMsg = document.getElementById('toastMsg');
    const toastIcon = document.getElementById('toastIcon');

    if (!toast || !toastMsg) return;

    toastMsg.textContent = message;

    // Icon setup
    if (type === 'success') {
        toastIcon.innerHTML = `<svg width="20" height="20" color="#10b981" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>`;
    } else if (type === 'info') {
        toastIcon.innerHTML = `<svg width="20" height="20" color="#3b82f6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>`;
    } else {
        toastIcon.innerHTML = `<svg width="20" height="20" color="#ef4444" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>`;
    }

    toast.classList.add('show');

    setTimeout(() => {
        closeToast();
    }, 3500);
}

function closeToast() {
    const toast = document.getElementById('toastNotification');
    if (toast) {
        toast.classList.remove('show');
    }
}
