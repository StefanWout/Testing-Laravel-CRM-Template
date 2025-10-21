# Duralux CRM Dashboard - Laravel Application

A Laravel-powered CRM admin dashboard built with the Duralux template. This project uses Laravel's Blade templating system with separated layouts, partials, and pages for easy maintenance and scalability.

## 🚀 Features

- **Modular Blade Structure**: Separated navigation, header, footer, and customizer components
- **Single Page Layout**: All components combined into one cohesive dashboard view
- **Laravel 12**: Built on the latest Laravel framework
- **Reusable Components**: Easy to maintain and extend
- **Clean Routes**: Organized route structure for all dashboard sections

## 📁 Project Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php          # Master layout
│   ├── partials/
│   │   ├── navigation.blade.php   # Sidebar navigation
│   │   ├── header.blade.php       # Top header bar
│   │   ├── footer.blade.php       # Footer section
│   │   └── customizer.blade.php   # Theme customizer
│   └── pages/
│       └── dashboard.blade.php    # Dashboard content
```

## 🛠️ Setup Instructions

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm

### Installation

1. **Clone the repository** (if not already done)
   ```bash
   cd "C:\Users\stefa\Projects\Testing Laravel"
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Copy Duralux template assets**
   - See `ASSETS_README.md` for detailed instructions
   - Copy all CSS, JS, images, and vendor files to `public/assets/`

6. **Build frontend assets**
   ```bash
   npm run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

8. **Visit your application**
   - Open http://localhost:8000 in your browser

## 🎨 Customization

### Adding New Pages
1. Create a new blade file in `resources/views/pages/`
2. Extend the layout: `@extends('layouts.app')`
3. Add your content in the `@section('content')` block
4. Register the route in `routes/web.php`

### Modifying Navigation
Edit `resources/views/partials/navigation.blade.php` to add/remove menu items.

### Updating Header
Edit `resources/views/partials/header.blade.php` to customize the top bar.

### Changing Styles
- Template styles: `public/assets/css/`
- Laravel styles: `resources/css/app.css`

## 🔧 Available Routes

- `/` - Dashboard (CRM)
- `/analytics` - Analytics Dashboard
- `/reports/sales` - Sales Report
- `/reports/leads` - Leads Report
- `/reports/project` - Project Report
- `/reports/timesheets` - Timesheets Report
- `/apps/chat` - Chat Application
- `/apps/email` - Email Application
- `/apps/tasks` - Tasks
- `/apps/notes` - Notes
- `/apps/storage` - Storage
- `/apps/calendar` - Calendar

## 📝 Notes

- All routes currently point to the same dashboard view for simplicity
- Authentication routes can be added using Laravel Breeze or Jetstream
- Database configuration is in `.env` file

## 🔗 Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Blade Templates](https://laravel.com/docs/blade)
- [Laravel Routing](https://laravel.com/docs/routing)

## 📄 License

This project is built on Laravel, which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
