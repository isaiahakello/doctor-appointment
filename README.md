Project Structure 1. Database Design:
◦ Design a relational database schema with tables for patients, doctors, appointments, etc.
◦ Create a .sql dump of your database schema. 2. Backend Development (Using Laravel):
◦ Set up a Laravel project.
◦ Create models for Patient, Doctor, Appointment, etc.
◦ Implement controllers for Reception, Doctor, and Dashboard functionalities.
◦ Implement routes for handling different actions. 3. Frontend Development:
◦ Use HTML, CSS, and optionally Bootstrap for the frontend.
◦ Create forms for adding/updating patient and doctor information.
◦ Display appointment details in a tabular format with pagination.
◦ Add actions (view, edit, delete) for each record. 4. Authentication:
◦ Implement user authentication for Reception and Doctor.
◦ Use Laravel's built-in authentication system. 5. API Development:
◦ Create API routes and controllers for retrieving booking data in JSON format.
◦ Implement API endpoints as specified in the instructions. 6. Dashboard/Report:
◦ Use a charting library to visualize appointment data.
◦ Create a report with filters for different parameters. 7. Testing:
◦ Write unit tests for critical components.
◦ Ensure that the application is user-friendly and handles edge cases gracefully.

Installation Instructions:
Prerequisites:
• Make sure you have PHP, Composer, and a database server (e.g., MySQL) installed.
Steps: 1. Clone the Repository:
bashCopy code
git clone https://github.com/your-username/doctor-appointment-system.git cd doctor-appointment-system 2. Install Dependencies:
bashCopy code
composer install 3. Copy Environment File:
bashCopy code
cp .env.example .env
Update the .env file with your database configuration. 4. Generate Application Key:
bashCopy code
php artisan key:generate 5. Run Migrations and Seed:
bashCopy code
php artisan migrate --seed 6. Serve the Application:
bashCopy code
php artisan serve
Access the application in your browser: http://localhost:8000
Database Dump:
Export your database to a .sql dump file using a tool like mysqldump:
bashCopy code
mysqldump -u your_username -p your_database_name > database_dump.sql
Test Login Credentials:
Receptionist:
• Username: receptionist@example.com
• Password: password
Doctor:
• Username: doctor@example.com
• Password: password
Project Structure:
• app/Http/Controllers:
◦ ReceptionController.php: Handles receptionist actions.
◦ DoctorController.php: Handles doctor actions.
◦ DashboardController.php: Manages dashboard and reporting.
• app/Models:
◦ Patient.php: Patient model.
◦ Doctor.php: Doctor model.
◦ Appointment.php: Appointment model.
• resources/views:
◦ Contains Blade views for reception, doctor, and dashboard actions.
• routes/web.php:
◦ Defines routes for different actions.
• public/css, public/js:
◦ Stores any additional CSS and JS files.
API Endpoints: 1. All Bookings:
◦ URL: /api/bookings/all
◦ Method: GET 2. Doctor's Bookings:
◦ URL: /api/doctor/{doctor_name}
◦ Method: GET 3. Patient's Bookings:
◦ URL: /api/bookings/patient/{patient_name}
◦ Method: GET
Tabular Format Display:
• Implement pagination, where each page shows 10 records by default.
• Allow users to choose the number of rows to display (e.g., 5, 20, 50, all).
• Display a pager at the bottom showing the current page number.
Record Actions:
• Implement view, edit, and delete actions for each record.
This is a basic example, and you may need to adapt it based on your specific requirements and use cases.
