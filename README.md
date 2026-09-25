# eduelevet - College Academic & Student Management System (EduPulse)

A modern, clean, fully responsive, and modular college project frontend boilerplate built using **HTML5, CSS3, ES6 JavaScript, and PHP**.

---

## 📁 Project Directory Structure

```text
college-system-portal/
│
├── includes/
│   ├── header.php          # Modular top header, navigation & dynamic time greeting
│   └── footer.php          # Modular footer with dynamic copyright year & quick links
│
├── assets/
│   ├── css/
│   │   └── style.css       # Complete modern design system (cards, glassmorphism, table, modals)
│   └── js/
│       └── script.js       # Client validation, password meter, modals, search & toasts
│
├── index.php               # Landing Page (Hero, Features Grid, About, Stats)
├── dashboard.php           # Academic Management Dashboard (Sidebar, 4 Stats, Data Table, Modal)
├── auth.php                # Combined Login & Registration (Glassmorphism, Strength Meter)
├── contact.php             # Functional Contact Form with Client-Side Validation
└── README.md               # Documentation and Run Instructions
```

---

## 🚀 How to Run the Project

### Option 1: PHP Built-in Server (Fastest)
If you have PHP installed in your terminal or environment:
```bash
# Navigate to the project directory
cd college-system-portal

# Start the built-in development server
php -S localhost:8000
```
Open your browser and visit: `http://localhost:8000`

---

### Option 2: Using XAMPP / WAMP / Laragon
1. Copy the `college-system-portal` folder into your local web server root:
   - **XAMPP**: `C:\xampp\htdocs\college-system-portal`
   - **WampServer**: `C:\wamp64\www\college-system-portal`
   - **Laragon**: `C:\laragon\www\college-system-portal`
2. Start the **Apache** service from the XAMPP / WAMP control panel.
3. Open your browser and navigate to:
   ```text
   http://localhost/college-system-portal/
   ```

---

## 🌟 Key Features Implemented

### 1. Landing Page (`index.php`)
- **Dynamic Server-Side Greeting**: Morning, Afternoon, Evening greeting generated dynamically in PHP based on server time (`date('H')`).
- **Modern Hero Section**: High-converting CTA buttons, live stats counter badges, and dashboard preview mockup.
- **Features & Services Grid**: 4 modular service cards with hover lift transitions and gradient accent icons.
- **About Section**: Highlighting institutional performance, security features, and academic support.

### 2. Management Dashboard (`dashboard.php`)
- **Sticky Top Bar**: Real-time search filter for instant table searching, notification bell, and user avatar dropdown menu.
- **Collapsible Sidebar**: Left navigation with smooth collapse/expand animation and active page highlight.
- **4 Stat Cards with Trend Badges**: Total Students (`+8.4%`), Active Courses, Pending Approvals, and Attendance Rate (`94.6%`).
- **Responsive Data Table**: Rendered with PHP data arrays, status badges (Active, Pending, Inactive, Graduated), and action buttons.
- **Interactive Modals**: Add and Edit student records with smooth backdrop blur.

### 3. Authentication System (`auth.php`)
- **Centered Glassmorphism Card**: Translucent backdrop filter with border glow.
- **Role Selection Dropdown**: Seamless switching between Student, Faculty, and Admin accounts.
- **Show/Hide Password Toggle**: Instant toggle between text and masked password with SVG icon swap.
- **Real-Time Password Strength Meter**: Dynamic color-coded bar (Weak, Fair, Good, Strong) based on character diversity.
- **Real-Time Client Validation**: Academic email syntax and password matching.

### 4. Contact & Support (`contact.php`)
- **Functional Contact Form UI**: Client-side JavaScript validation (Name, Academic Email, Subject, Message).
- **Campus Desk Information Cards**: Address, telephone support lines, email channels, and operating office hours.
