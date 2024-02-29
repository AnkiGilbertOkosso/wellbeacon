
# WellBeacon - Personal Health Dashboard

WellBeacon is a personal health dashboard web application built with Laravel. It allows individuals to track and manage various health metrics, receive personalized recommendations, and gain insights into their health and well-being.

## Features

- **User Authentication**: Secure user authentication system to register, login, and manage user accounts.
- **Health Metrics Tracking**: Users can input and track various health metrics such as exercise, sleep, nutrition, etc.
- **Personalized Recommendations**: Users receive personalized recommendations based on their health metrics and goals.
- **Data Visualization**: Interactive data visualizations and charts to help users understand trends in their health data.
- **Responsive Design**: Mobile-friendly interface for seamless user experience across devices.

## Technologies Used

- Laravel: PHP web framework for building robust web applications.
- MySQL: Relational database management system for storing user data.
- Bootstrap: Frontend framework for responsive and mobile-first web development.

## Setup Instructions

1. Clone the repository: `git clone https://github.com/AnkiGilbertOkosso/wellbeacon.git`
2. Navigate to the project directory: `cd wellbeacon`
3. Install dependencies: `composer install`
4. Create a copy of the `.env.example` file and rename it to `.env`
5. Generate application key: `php artisan key:generate`
6. Configure your database connection details in the `.env` file
7. Run database migrations: `php artisan migrate`
8. Serve the application: `php artisan serve`

## Contributing

Contributions are welcome! If you'd like to contribute to WellBeacon, please follow these steps:

1. Fork the repository on GitHub.
2. Clone your forked repository to your local machine.
3. Create a new branch for your feature or bug fix: `git checkout -b feature-name`
4. Make your changes and commit them with descriptive commit messages.
5. Push your changes to your forked repository.
6. Submit a pull request to the main repository's `main` branch.

