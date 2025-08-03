# 🏥 Medical Clinic Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-red.svg" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.2%2B-blue.svg" alt="PHP Version">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
  <img src="https://img.shields.io/badge/Status-Active%20Development-brightgreen.svg" alt="Status">
</p>

A comprehensive and modern medical clinic management system built with Laravel and modular architecture, offering complete solutions for appointment scheduling, doctor and patient management, and financial transactions.

---

## 📚 Technical Documentation

### 📖 Comprehensive Documentation

Detailed technical documentation is available in the `Documentation.html` file, including:

* 🏗️ **System Architecture**: Full architecture diagrams
* 🔄 **Data Flow**: Flowcharts and data lifecycle
* 📊 **Database**: ERD diagrams and schema structure
* 🔌 **API Documentation**: Complete API reference
* 🧪 **Testing Guide**: Unit and feature testing instructions

---

### 🔄 Documentation Maintenance

#### 📈 Generate Diagrams

```bash
./update_documentation.sh
./build_mermaid_diagrams.sh     # High-quality PNG
./build_mermaid_diagrams_svg.sh # Scalable SVG
./build_diagrams.sh             # PlantUML PNG
./build_puml_diagrams_svg.sh    # PlantUML SVG
./optimize_png_images.sh        # Optimize PNGs
```

#### 🖼️ Diagram Quality

* High-resolution PNGs (3x scale, 100% quality)
* Scalable SVGs with infinite zoom
* Smart compression with pngquant
* Automatic updates with code changes

---

### 🛠️ Development Tools

* **Laravel Telescope**: Advanced debugging and insights
* **Laravel Debug Bar**: Real-time debug toolbar
* **PHPUnit**: Unit testing framework
* **Laravel Pint**: Code style fixer

---

## 📋 Table of Contents

* [✨ Key Features](#-key-features)
* [🏗️ Project Architecture](#-project-architecture)
* [⚙️ Technical Requirements](#️-technical-requirements)
* [🚀 Installation & Setup](#-installation--setup)
* [👤 Login Credentials](#-login-credentials)
* [🔧 Advanced Features](#-advanced-features)
* [📚 Technical Documentation](#-technical-documentation)
* [🔮 Future Roadmap](#-future-roadmap)
* [🤝 Contributing](#-contributing)
* [📄 License](#-license)

---

## ✨ Key Features

### 🩺 Medical Management

* **Appointment System**: Book, cancel, and manage availability
* **Doctor Management**: Profiles, specialties, and schedules
* **Specialties Management**: Organize medical departments
* **Patient Records**: Manage patient info and medical history

### 💳 Financial System

* **Stripe Integration**: Online payments
* **Invoicing**: Complete billing system
* **Revenue Reports**: Detailed income tracking

### 🔐 Security & Permissions

* **Role & Permission System**: Manage access using Spatie
* **Secure Authentication**: Laravel Sanctum
* **Session Protection**: CSRF and token-based security

### 🎨 User Interface

* **Responsive Design**: Supports all devices
* **Multi-language Support**: Arabic & English
* **Interactive Dashboard**: Built with Chart.js
* **Notification System**: Realtime alerts and reminders

---

## 🏗️ Project Architecture

Built using Laravel modular architecture via `nwidart/laravel-modules` for scalability and maintainability.

### 🔧 Core Modules

* **Auth**: Authentication and session handling
* **Users**: Role and permission management with Spatie
* **Dashboard**: Main admin dashboard with stats

### 🏥 Business Modules

* **Appointments**: Booking and schedule management
* **Doctors**: Manage doctors' info and availability
* **Patients**: Medical records and patient data
* **Specialties**: Medical specialty categorization

### 🔗 Interface Modules

* **Payments**: Stripe payment system
* **Contacts**: Inquiry and contact module

### 🛠️ Technologies Used

```text
Backend:
- Laravel 12.x
- MySQL / MariaDB
- Laravel Sanctum
- Laravel Telescope
- Spatie Permissions
- Stripe PHP SDK

Frontend:
- Tailwind CSS 4.x
- Vite
- Chart.js
- jQuery & Select2
- Alpine.js
```

---

## ⚙️ Technical Requirements

### 🖥️ Server Requirements

* **PHP**: >= 8.2 with required extensions
* **Database**: MySQL 8+ or MariaDB 10.6+
* **Composer**: Latest version
* **Node.js**: >= 18.x
* **Redis** (optional): For cache and sessions

### 📦 Core Packages

```json
{
  "php": "^8.2",
  "laravel/framework": "^12.0",
  "laravel/sanctum": "^4.1",
  "laravel/telescope": "^5.7",
  "nwidart/laravel-modules": "^12.0",
  "spatie/laravel-permission": "^6.17",
  "stripe/stripe-php": "^17.2"
}
```

### 🔧 Required PHP Extensions

BCMath, Ctype, cURL, DOM, Fileinfo, JSON, Mbstring, OpenSSL, PCRE, PDO, Tokenizer, XML

---

## 🚀 Installation & Setup

### Step 1: Clone Repository

```bash
git clone https://github.com/your-username/clinic.git
cd clinic
```

### Step 2: Install PHP Dependencies

```bash
composer install --optimize-autoloader
```

### Step 3: Environment Setup

```bash
cp .env.example .env
php artisan key:generate
php artisan storage:link
```

### Step 4: Database Setup

```bash
php artisan migrate --seed
php artisan module:enable --all
php artisan module:publish
```

### Step 5: Frontend Setup

```bash
npm install
npm run build  # For production
# or
npm run dev    # For development
```

### Step 6: Additional Configurations

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan schedule:work  # Optional
```

### Step 7: Start Server

```bash
php artisan serve
# or with Docker
./vendor/bin/sail up
```

### Verify Installation

* App: `http://localhost:8000`
* Admin Dashboard: `http://localhost:8000/admin`
* Telescope: `http://localhost:8000/telescope`

---

## 👤 Login Credentials

### Default Accounts

| Role    | Email                                               | Password | Permissions         |
| ------- | --------------------------------------------------- | -------- | ------------------- |
| Admin   | [admin@clinic.local](mailto:admin@clinic.local)     | password | Full Access         |
| Doctor  | [doctor@clinic.local](mailto:doctor@clinic.local)   | password | Manage appointments |
| Patient | [patient@clinic.local](mailto:patient@clinic.local) | password | Book appointments   |

⚠️ **Security Tip**: Change all default credentials in production!

---

## 🔧 Advanced Features

### 📊 Analytics & Reporting

* Realtime dashboard stats
* Revenue & payment reports
* Appointment trends
* Patient base tracking

### 🔔 Notification System

* Email confirmations and reminders
* In-browser notifications
* Appointment reminders
* Status updates

### 🔍 Advanced Search

* Search doctors by specialty, area, rating
* Filter appointments by date/status
* Fast and accurate patient search
* Multi-criteria filters

### 🌍 Multi-language Support

* Full RTL Arabic & English support
* Instant language switching
* Localized content

### ⚡ Performance & Optimization

* Redis caching
* Minified CSS/JS with Vite
* Lazy loading
* Performance monitoring via Telescope

### 🔒 Advanced Security

* CSRF protection
* Sensitive data encryption
* Action logs
* Session timeout handling

---

## 🔮 Future Roadmap

### 🚀 Planned Features

#### 📱 Mobile Applications

* Native iOS (Swift)
* Native Android (Kotlin)
* Flutter (Cross-platform)
* PWA for quick access

#### 🌐 Digital Consultations

* Video consultations
* Live chat with medical staff
* Quick Q\&A consultations
* Health condition follow-ups

#### 💊 ePrescriptions

* Prescription writing module
* Pharmacy integration
* Medication tracking
* Drug interaction warnings

#### 🏥 Medical System Integrations

* Insurance company integrations
* DICOM imaging support
* HL7 medical data exchange
* Lab result syncing

### 🔧 Technical Improvements

#### ⚡ Performance & Scalability

* Cloud deployment (AWS/Azure)
* Load balancing
* Big Data + AI analytics
* GraphQL support

#### 🤖 AI Features

* Smart scheduling
* Predictive analytics
* AI diagnosis assistant
* Patient chatbot

---

## 🤝 Contributing

We welcome contributions to improve this project!

### How to Contribute

1. 🍴 Fork the repo
2. 🌿 Create a feature branch:
   `git checkout -b feature/your-feature`
3. 💾 Commit your changes:
   `git commit -m 'Add your feature'`
4. 📤 Push to your branch:
   `git push origin feature/your-feature`
5. 🔄 Submit a Pull Request

### Contribution Guidelines

* Follow PSR-12 coding standards
* Add tests for new features
* Document your changes
* Ensure no breaking changes

### Bug Reporting

Please include:

* Problem description
* Steps to reproduce
* Environment details (OS, PHP version)
* Screenshots (if applicable)

---

## 🧪 Testing

### Run Tests

```bash
php artisan test
php artisan test --testsuite=Feature
php artisan test tests/Feature/AppointmentTest.php
php artisan test --coverage
```

### Test Types

* Unit Tests
* Feature Tests
* Browser Tests (Laravel Dusk)
* API Tests

---

## 🔧 Troubleshooting

### Common Issues

#### Permissions

```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### Database Issues

```bash
php artisan migrate:fresh --seed
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

#### Package Issues

```bash
composer install --no-cache
npm ci
```

### Getting Help

* 📧 Email: [support@clinic-system.com](mailto:support@clinic-system.com)
* 💬 GitHub Issues
* 📖 Read `Documentation.html`
* 🌟 Join the community

---

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for full details.

---

<p align="center">
  <strong>🏥 Medical Clinic Management System</strong><br>
  💻 Built with Laravel and ❤️<br>
  📅 2024–2025 | All Rights Reserved
</p>

<p align="center">
  <a href="#top">⬆️ Back to Top</a>
</p>
