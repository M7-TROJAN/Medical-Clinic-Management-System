# 🏥 نظام إدارة العيادات الطبية
## Medical Clinic Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-red.svg" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.2%2B-blue.svg" alt="PHP Version">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
  <img src="https://img.shields.io/badge/Status-Active%20Development-brightgreen.svg" alt="Status">
</p>

نظام متكامل وحديث لإدارة العيادات الطبية مبني بتقنية Laravel مع نظام الوحدات النمطية، يوفر حلولاً شاملة لحجز المواعيد وإدارة الأطباء والمرضى والمدفوعات.

**A comprehensive and modern medical clinic management system built with Laravel using modular architecture, providing complete solutions for appointment booking, doctor and patient management, and payments.**

## 📚 الوثائق التقنية | Technical Documentation

### 📖 الوثائق الشاملة | Comprehensive Documentation
يحتوي المشروع على وثائق تقنية شاملة ومفصلة متاحة في ملف `Documentation.html`، تشمل:

**The project contains comprehensive technical documentation available in `Documentation.html`, including:**

- 🏗️ **هيكل النظام**: مخططات معمارية مفصلة
- 🔄 **تدفق البيانات**: رسوم بيانية لمسار البيانات
- 📊 **قاعدة البيانات**: مخططات ERD و Schema
- 🔌 **واجهات برمجة التطبيقات**: توثيق API شامل
- 🧪 **الاختبارات**: دليل الاختبارات والتحقق

### 🔄 تحديث الوثائق | Documentation Updates

#### 📈 إنشاء المخططات البيانية | Generate Diagrams
```bash
# تحديث جميع المخططات والوثائق
./update_documentation.sh

# إنشاء مخططات Mermaid
./build_mermaid_diagrams.sh     # PNG عالي الدقة
./build_mermaid_diagrams_svg.sh # صيغة SVG متجهية

# إنشاء مخططات PlantUML
./build_diagrams.sh            # PNG
./build_puml_diagrams_svg.sh   # SVG

# تحسين صور PNG
./optimize_png_images.sh
```

#### 🖼️ جودة المخططات | Diagram Quality
- **📷 PNG عالي الدقة**: مقياس 3x وجودة 100%
- **🎨 SVG متجهي**: رسوم قابلة للتكبير بلا حدود
- **⚡ تحسين الحجم**: ضغط ذكي باستخدام pngquant
- **🔄 تحديث تلقائي**: تحديث الوثائق مع كل تغيير

### 🛠️ أدوات التطوير | Development Tools
- **🔍 Laravel Telescope**: مراقبة وتشخيص متقدم
- **📊 Debug Bar**: شريط تشخيص مفصل
- **🧪 PHPUnit**: اختبارات وحدة شاملة
- **🎯 Laravel Pint**: تنسيق كود تلقائي

## 📋 جدول المحتويات | Table of Contents

- [✨ المميزات الرئيسية](#-المميزات-الرئيسية)
- [🏗️ هيكل المشروع](#️-هيكل-المشروع)
- [⚙️ المتطلبات التقنية](#️-المتطلبات-التقنية)
- [🚀 التثبيت والإعداد](#-التثبيت-والإعداد)
- [👤 تسجيل الدخول](#-تسجيل-الدخول)
- [🔧 الميزات المتقدمة](#-الميزات-المتقدمة)
- [📚 الوثائق التقنية](#-الوثائق-التقنية)
- [🔮 المستقبل التطويري](#-المستقبل-التطويري)
- [🤝 المساهمة](#-المساهمة)
- [📄 الترخيص](#-الترخيص)

## ✨ المميزات الرئيسية | Key Features

### 🩺 الإدارة الطبية | Medical Management
- **📅 نظام حجز المواعيد المتقدم**: حجز وإلغاء المواعيد مع التحقق من توفر الأوقات
- **👨‍⚕️ إدارة الأطباء**: تسجيل الأطباء وتخصصاتهم وجداولهم الزمنية
- **🏥 إدارة التخصصات الطبية**: تصنيف وإدارة التخصصات المختلفة
- **👥 إدارة المرضى**: تسجيل وإدارة بيانات المرضى والسجلات الطبية

### 💳 النظام المالي | Financial System
- **💰 المدفوعات الإلكترونية**: دعم الدفع عبر Stripe
- **🧾 إدارة الفواتير**: نظام فوترة متكامل
- **📊 التقارير المالية**: تقارير تفصيلية عن الإيرادات

### 🔐 الأمان والصلاحيات | Security & Permissions
- **🛡️ نظام الأدوار والصلاحيات**: إدارة متقدمة للأذونات
- **🔒 المصادقة الآمنة**: نظام مصادقة قوي مع Laravel Sanctum
- **📱 جلسات آمنة**: إدارة الجلسات مع حماية CSRF

### 🎨 واجهة المستخدم | User Interface
- **📱 تصميم متجاوب**: واجهة تدعم جميع الأجهزة
- **🌍 متعدد اللغات**: دعم العربية والإنجليزية
- **🎯 لوحة تحكم تفاعلية**: واجهة سهلة الاستخدام مع Chart.js
- **🔔 نظام الإشعارات**: إشعارات فورية للمواعيد والتحديثات

## 🏗️ هيكل المشروع | Project Architecture

يعتمد المشروع على نظام الوحدات النمطية (Modular Architecture) في Laravel مع `nwidart/laravel-modules`، مما يضمن قابلية التوسع والصيانة.

**The project is built using Laravel's modular architecture with `nwidart/laravel-modules`, ensuring scalability and maintainability.**

### 🔧 الوحدات الأساسية | Core Modules:
- **🔐 Auth**: نظام المصادقة المتقدم وإدارة الجلسات
- **👤 Users**: إدارة المستخدمين والأدوار والصلاحيات مع Spatie Permission
- **📊 Dashboard**: لوحة التحكم الرئيسية مع إحصائيات تفاعلية

### 🏥 وحدات الأعمال الطبية | Medical Business Modules:
- **📅 Appointments**: إدارة شاملة للمواعيد والحجوزات
- **👨‍⚕️ Doctors**: إدارة بيانات الأطباء وجداولهم الزمنية
- **👥 Patients**: إدارة بيانات المرضى وسجلاتهم الطبية
- **🏥 Specialties**: إدارة التخصصات الطبية والفئات

### 🔗 وحدات الواجهة والتفاعل | Interface & Interaction Modules:
- **💳 Payments**: نظام المدفوعات مع تكامل Stripe
- **📞 Contacts**: نظام التواصل والاستفسارات

### 🛠️ التقنيات المستخدمة | Technologies Used:
```
Backend:
├── Laravel 12.x (PHP Framework)
├── MySQL/MariaDB (Database)
├── Laravel Sanctum (Authentication)
├── Laravel Telescope (Debugging)
├── Spatie Permission (Roles & Permissions)
└── Stripe (Payment Processing)

Frontend:
├── Tailwind CSS 4.x (Styling)
├── Vite (Build Tool)
├── Chart.js (Data Visualization)
├── jQuery & Select2 (Enhanced UI)
└── Alpine.js (JavaScript Framework)
```

## ⚙️ المتطلبات التقنية | Technical Requirements

### 🖥️ متطلبات الخادم | Server Requirements:
- **PHP**: >= 8.2 (مع الإضافات المطلوبة)
- **قاعدة البيانات**: MySQL 8.0+ أو MariaDB 10.6+
- **Composer**: أحدث إصدار لإدارة حزم PHP
- **Node.js**: >= 18.x مع npm أو yarn
- **Redis**: (اختياري) للتخزين المؤقت والجلسات

### 📦 الحزم والمكتبات الأساسية | Core Packages:
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

### 🔧 إضافات PHP المطلوبة | Required PHP Extensions:
- BCMath
- Ctype
- cURL
- DOM
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PCRE
- PDO
- Tokenizer
- XML

## 🚀 التثبيت والإعداد | Installation & Setup

### 📥 الخطوة 1: استنساخ المشروع | Clone Repository
```bash
git clone https://github.com/your-username/clinic.git
cd clinic
```

### 🐘 الخطوة 2: تثبيت اعتماديات PHP | Install PHP Dependencies
```bash
composer install --optimize-autoloader
```

### ⚙️ الخطوة 3: إعداد البيئة | Environment Setup
```bash
# نسخ ملف الإعدادات
cp .env.example .env

# إنشاء مفتاح التطبيق
php artisan key:generate

# إنشاء رابط التخزين
php artisan storage:link
```

### 🗄️ الخطوة 4: إعداد قاعدة البيانات | Database Setup
```bash
# إنشاء قاعدة البيانات وتشغيل التهجيرات
php artisan migrate --seed

# تنشيط الوحدات النمطية
php artisan module:enable --all

# نشر أصول الوحدات
php artisan module:publish
```

### 🎨 الخطوة 5: إعداد الواجهة الأمامية | Frontend Setup
```bash
# تثبيت حزم Node.js
npm install

# بناء أصول الإنتاج
npm run build

# أو للتطوير مع المراقبة
npm run dev
```

### 🔧 الخطوة 6: إعدادات إضافية | Additional Configuration
```bash
# تنظيف وتحسين الكاش
php artisan config:cache
php artisan route:cache
php artisan view:cache

# إعداد المهام المجدولة (اختياري)
php artisan schedule:work
```

### 🌐 الخطوة 7: تشغيل الخادم | Start Server
```bash
# تشغيل خادم التطوير
php artisan serve

# أو باستخدام Sail (Docker)
./vendor/bin/sail up
```

### 🔍 التحقق من التثبيت | Verify Installation
- افتح المتصفح وانتقل إلى: `http://localhost:8000`
- تحقق من لوحة التحكم: `http://localhost:8000/admin`
- راجع Telescope للمراقبة: `http://localhost:8000/telescope`

## 👤 تسجيل الدخول | Login Credentials

بعد إتمام عملية التثبيت، يمكنك استخدام البيانات التالية لتسجيل الدخول:

**After completing the installation, you can use the following credentials to log in:**

### 🔑 حسابات افتراضية | Default Accounts:

| النوع / Role | البريد الإلكتروني / Email | كلمة المرور / Password | الصلاحيات / Permissions |
|-------------|---------------------------|------------------------|--------------------------|
| 👑 **مدير النظام / Admin** | `admin@clinic.local` | `password` | جميع الصلاحيات / Full Access |
| 👨‍⚕️ **طبيب / Doctor** | `doctor@clinic.local` | `password` | إدارة المواعيد والمرضى |
| 👤 **مريض / Patient** | `patient@clinic.local` | `password` | حجز المواعيد والملف الشخصي |

### 🛡️ أمان الحسابات | Account Security:
⚠️ **تحذير أمني**: تأكد من تغيير كلمات المرور الافتراضية في بيئة الإنتاج!

**Security Warning**: Make sure to change default passwords in production environment!

## 🔧 الميزات المتقدمة | Advanced Features

### 📊 التحليلات والتقارير | Analytics & Reports
- **📈 لوحة تحكم تفاعلية**: إحصائيات في الوقت الفعلي مع Chart.js
- **📋 تقارير مالية**: تقارير تفصيلية عن الإيرادات والمدفوعات
- **📅 تقارير المواعيد**: تحليل أنماط الحجز والإلغاء
- **👥 إحصائيات المرضى**: تتبع نمو قاعدة المرضى

### 🔔 نظام الإشعارات المتقدم | Advanced Notification System
- **📧 إشعارات البريد الإلكتروني**: تأكيدات المواعيد وتذكيرات
- **📱 إشعارات المتصفح**: تنبيهات فورية داخل التطبيق
- **⏰ تذكيرات المواعيد**: إشعارات تلقائية قبل الموعد
- **🔄 تحديثات الحالة**: إشعارات تغيير حالة الموعد

### 🔍 البحث المتقدم | Advanced Search
- **🏥 البحث عن الأطباء**: حسب التخصص والمنطقة والتقييم
- **📅 البحث في المواعيد**: فلترة متقدمة بالتاريخ والحالة
- **👤 البحث في المرضى**: بحث سريع ودقيق
- **📊 فلاتر ذكية**: نظام فلترة متعدد المعايير

### 🌍 الدعم متعدد اللغات | Multi-language Support
- **🔤 العربية والإنجليزية**: واجهة كاملة بكلا اللغتين
- **📱 واجهة متجاوبة**: تصميم يدعم الكتابة من اليمين لليسار (RTL)
- **🔄 تبديل اللغة**: تغيير فوري للغة دون إعادة تحميل
- **📝 محتوى محلي**: نصوص مترجمة ومحسنة ثقافياً

### ⚡ الأداء والتحسين | Performance & Optimization
- **🚀 تخزين مؤقت ذكي**: Redis لتحسين الأداء
- **📦 ضغط الأصول**: تحسين CSS/JS مع Vite
- **🔄 تحميل تدريجي**: Lazy loading للمحتوى
- **📊 مراقبة الأداء**: Laravel Telescope للتشخيص

### 🔒 الأمان المتقدم | Advanced Security
- **🛡️ حماية CSRF**: حماية من هجمات تزوير الطلبات
- **🔐 تشفير البيانات**: تشفير البيانات الحساسة
- **📝 سجل العمليات**: تتبع جميع العمليات الحساسة
- **⏱️ إدارة الجلسات**: انتهاء صلاحية آمن للجلسات

## 🔮 المستقبل التطويري | Future Development

### 🚀 المميزات المخطط إضافتها | Planned Features

#### 📱 التطبيقات المحمولة | Mobile Applications
- **🍎 تطبيق iOS**: تطبيق أصلي لنظام iOS مع Swift
- **🤖 تطبيق Android**: تطبيق أصلي لنظام Android مع Kotlin
- **⚡ Flutter**: تطبيق متعدد المنصات
- **📲 PWA**: تطبيق ويب تدريجي للوصول السريع

#### 🌐 الاستشارات الرقمية | Digital Consultations
- **📹 استشارات فيديو**: اجتماعات مرئية مع الأطباء
- **💬 محادثات نصية**: دردشة مباشرة مع الفريق الطبي
- **📋 استشارات سريعة**: نظام أسئلة وأجوبة سريع
- **🔄 متابعة العلاج**: تتبع تطور الحالة الصحية

#### 💊 الوصفات الإلكترونية | Electronic Prescriptions
- **📝 كتابة الوصفات**: نظام رقمي لكتابة الوصفات
- **🏪 ربط الصيدليات**: تكامل مع الصيدليات المحلية
- **📊 تتبع الأدوية**: مراقبة استخدام الأدوية
- **⚠️ تحذيرات التفاعل**: تنبيهات تفاعل الأدوية

#### 🏥 التكامل مع الأنظمة الطبية | Medical Systems Integration
- **🏦 أنظمة التأمين**: تكامل مع شركات التأمين
- **⚕️ DICOM**: دعم ملفات الأشعة الطبية
- **📋 HL7**: تبادل البيانات الطبية
- **🔬 نتائج المختبر**: ربط مع المختبرات الطبية

### 🔧 التحسينات التقنية | Technical Enhancements

#### ⚡ الأداء والقابلية للتوسع | Performance & Scalability
- **☁️ الحوسبة السحابية**: نشر على AWS/Azure
- **🔄 Load Balancing**: توزيع الأحمال
- **📊 تحليلات متقدمة**: Big Data وAI
- **🚀 GraphQL**: واجهات برمجة محسنة

#### 🤖 الذكاء الاصطناعي | Artificial Intelligence
- **📅 جدولة ذكية**: تحسين المواعيد بالAI
- **📊 تحليل تنبؤي**: توقع الأنماط والاتجاهات
- **🩺 مساعد تشخيصي**: دعم القرارات الطبية
- **💬 روبوت محادثة**: مساعد ذكي للمرضى

### 📈 خارطة الطريق | Roadmap

| المرحلة | الفترة الزمنية | المميزات الرئيسية |
|---------|----------------|-------------------|
| **المرحلة 1** | Q1 2025 | 📱 تطبيق PWA، 📹 استشارات فيديو |
| **المرحلة 2** | Q2 2025 | 💊 وصفات إلكترونية، 🏦 تكامل التأمين |
| **المرحلة 3** | Q3 2025 | 📱 تطبيقات محمولة، 🤖 AI مساعد |
| **المرحلة 4** | Q4 2025 | ☁️ حلول سحابية، 📊 تحليلات متقدمة |

## 🤝 المساهمة | Contributing

نرحب بمساهماتكم في تطوير وتحسين نظام إدارة العيادات الطبية!

**We welcome your contributions to improve the Medical Clinic Management System!**

### 🚀 كيفية المساهمة | How to Contribute

1. **🍴 Fork**: قم بعمل Fork للمشروع
2. **🌿 إنشاء فرع**: `git checkout -b feature/amazing-feature`
3. **💾 حفظ التغييرات**: `git commit -m 'Add amazing feature'`
4. **📤 رفع التغييرات**: `git push origin feature/amazing-feature`
5. **🔄 طلب دمج**: إنشاء Pull Request

### 📋 معايير المساهمة | Contribution Guidelines

- ✅ اتباع معايير الكود المحددة (PSR-12)
- 🧪 إضافة اختبارات للمميزات الجديدة
- 📝 توثيق التغييرات والمميزات
- 🔍 التأكد من عدم كسر الاختبارات الموجودة

### 🐛 الإبلاغ عن المشاكل | Bug Reports

عند الإبلاغ عن مشكلة، يرجى تضمين:
- 📋 وصف مفصل للمشكلة
- 🔄 خطوات إعادة إنتاج المشكلة
- 🖥️ بيئة التشغيل (نظام التشغيل، إصدار PHP، إلخ)
- 📷 لقطات شاشة إن أمكن

## 🧪 الاختبارات | Testing

### 🔬 تشغيل الاختبارات | Running Tests

```bash
# تشغيل جميع الاختبارات
php artisan test

# تشغيل اختبارات وحدة محددة
php artisan test --testsuite=Feature

# تشغيل اختبار محدد
php artisan test tests/Feature/AppointmentTest.php

# تشغيل الاختبارات مع تقرير التغطية
php artisan test --coverage
```

### 📊 أنواع الاختبارات | Test Types

- **🔧 Unit Tests**: اختبارات الوحدات الفردية
- **🔗 Feature Tests**: اختبارات المميزات المتكاملة
- **🌐 Browser Tests**: اختبارات المتصفح مع Laravel Dusk
- **📡 API Tests**: اختبارات واجهات البرمجة

## 🔧 استكشاف الأخطاء | Troubleshooting

### ❗ المشاكل الشائعة | Common Issues

#### 🔑 مشاكل الصلاحيات | Permission Issues
```bash
# إصلاح صلاحيات المجلدات
chmod -R 755 storage
chmod -R 755 bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### 🗄️ مشاكل قاعدة البيانات | Database Issues
```bash
# إعادة تشغيل التهجيرات
php artisan migrate:fresh --seed

# تنظيف الكاش
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

#### 📦 مشاكل الحزم | Package Issues
```bash
# إعادة تثبيت الحزم
composer install --no-cache
npm ci
```

### 📞 الحصول على المساعدة | Getting Help

- 📧 **البريد الإلكتروني**: support@clinic-system.com
- 💬 **GitHub Issues**: للمشاكل التقنية
- 📖 **الوثائق**: راجع ملف Documentation.html
- 🌟 **المجتمع**: انضم إلى مجتمع المطورين

## 📄 الترخيص | License

هذا المشروع مرخص تحت رخصة MIT - راجع ملف [LICENSE](LICENSE) للتفاصيل.

**This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.**

### 🔓 ما يمكنك فعله | What You Can Do
- ✅ الاستخدام التجاري والشخصي
- ✅ التعديل والتطوير
- ✅ التوزيع والنشر
- ✅ الاستخدام الخاص

### ⚠️ المسؤوليات | Responsibilities
- 📝 الحفاظ على إشعار حقوق الطبع والنشر
- 📄 تضمين نسخة من الترخيص
- 🔒 المشروع يُقدم "كما هو" بدون ضمانات

---

<p align="center">
  <strong>🏥 نظام إدارة العيادات الطبية | Medical Clinic Management System</strong><br>
  💻 صُنع بـ Laravel مع ❤️ | Built with Laravel and ❤️<br>
  📅 2024-2025 | جميع الحقوق محفوظة | All Rights Reserved
</p>

<p align="center">
  <a href="#top">⬆️ العودة للأعلى | Back to Top</a>
</p>
