# Laravel Expense Tracker

A modern, professional expense tracking application built with Laravel 11, featuring a beautiful dashboard with real-time analytics and Chart.js visualizations.

![Expense Tracker](https://img.shields.io/badge/Laravel-11-red) ![MySQL](https://img.shields.io/badge/MySQL-8.0-blue) ![Docker](https://img.shields.io/badge/Docker-Compose-blue) ![Tailwind](https://img.shields.io/badge/Tailwind-CSS-38B2AC)

## 📋 About

The Laravel Expense Tracker is a comprehensive financial management tool that helps users track daily expenses, analyze spending patterns, and gain insights into their financial habits through interactive charts and a professional dashboard interface.

## ✨ Key Features

- **Expense Management**: Add, view, and categorize expenses with ease
- **Professional Dashboard**: Modern UI with summary cards and key metrics
- **Interactive Charts**: Real-time pie chart showing spending distribution by category
- **Category Analytics**: Automatic calculation of spending percentages and totals
- **Responsive Design**: Fully responsive layout built with Tailwind CSS
- **Form Validation**: Robust input validation with user-friendly error handling
- **Loading States**: Visual feedback during form submissions
- **Docker Ready**: Complete containerized environment for easy deployment

## 🛠 Tech Stack

- **Backend**: Laravel 11 (PHP 8.2+)
- **Database**: MySQL 8.0
- **Frontend**: Blade Templates, Tailwind CSS, Chart.js
- **Web Server**: Nginx
- **Containerization**: Docker & Docker Compose
- **Font**: Inter (Google Fonts)

## 🚀 Quick Start

### Prerequisites

- Docker and Docker Compose installed on your system
- Git for cloning the repository

### Installation

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd expense-tracker-docker
   ```

2. **Build and start the containers**
   ```bash
   docker-compose up -d --build
   ```

3. **Run database migrations**
   ```bash
   docker-compose exec app php artisan migrate
   ```

4. **Access the application**
   
   Open your browser and navigate to: `http://localhost`

   The expense tracker will be ready to use immediately!

## 📁 Project Structure

```
expense-tracker-docker/
├── app/
│   ├── Http/Controllers/
│   │   └── ExpenseController.php     # Main controller logic
│   └── Models/
│       └── Expense.php               # Eloquent model
├── database/
│   └── migrations/
│       └── 2024_02_24_000001_create_expenses_table.php
├── resources/
│   └── views/
│       └── expenses/
│           └── index.blade.php       # Main dashboard view
├── routes/
│   └── web.php                       # Application routes
├── docker-compose.yml                # Docker configuration
├── Dockerfile                        # Application container
└── nginx/
    └── default.conf                   # Nginx configuration
```

## 🎯 Usage

### Adding Expenses

1. Navigate to the expense tracker dashboard
2. Fill in the expense form with:
   - **Title**: Description of the expense
   - **Amount**: Monetary value (USD)
   - **Category**: Spending category (e.g., Food, Travel, Entertainment)
   - **Date**: When the expense occurred
3. Click "Add Expense" to save

### Viewing Analytics

- **Summary Cards**: View total spending, transaction count, and category count
- **Pie Chart**: Interactive visualization of spending by category
- **Expense Table**: Detailed list of all recent expenses with category badges

## 🔧 Configuration

### Environment Variables

The application uses the following key environment variables (configured in `.env`):

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=root
```

### Customization

- **Colors**: Modify the color palette in the Chart.js configuration
- **Categories**: Add default categories or implement category management
- **Currency**: Update currency symbols and formatting as needed

## 🐳 Docker Configuration

The application runs on three containers:

- **app**: Laravel application (PHP-FPM)
- **mysql**: MySQL 8.0 database
- **nginx**: Web server with PHP processing

### Container Ports

- **Nginx**: 80 (HTTP)
- **MySQL**: 3306 (Database)

## 📊 Database Schema

The `expenses` table includes:

| Column | Type | Description |
|--------|------|-------------|
| id | BIGINT | Primary key |
| title | STRING | Expense description |
| amount | DECIMAL(10,2) | Monetary value |
| category | STRING | Spending category |
| expense_date | DATE | Date of expense |
| created_at | TIMESTAMP | Creation time |
| updated_at | TIMESTAMP | Last update |

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🔗 Links

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/)
- [Chart.js](https://www.chartjs.org/)
- [Docker Documentation](https://docs.docker.com/)

---

**Built with ❤️ using Laravel 11**
