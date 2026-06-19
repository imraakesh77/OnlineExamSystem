Online Examination System

Technologies:
- PHP
- MySQL
- HTML
- CSS

Features:
- Student Login
- Admin Panel
- Add Questions
- Online Exam
- Result Generation

Database:
Import online_exam.sql in phpMyAdmin



DISCRIPTION ABOUT THE IMAGES UPLOADED

login.png

Login Page

This page allows registered users to securely access the Online Exam System.
Users enter their email and password credentials.
Based on the user role, the system redirects users to Admin Dashboard or Student Dashboard.
Authentication is performed using user details stored in the database.


--------------------------------------------------

registration.png

Student Registration Page

This page allows new students to create an account in the Online Exam System.
Students enter their name, email address, and password.
The registration details are stored securely in the database.
After successful registration, students can login and attend the online exam.


--------------------------------------------------

admin_dashboard.png

Admin Dashboard

This is the main control panel for the administrator.
Admin can manage the Online Exam System from this dashboard.

Admin features:
- Add new questions
- Manage existing questions
- View student leaderboard/results
- Logout from the system


--------------------------------------------------

add_question.png

Add Question Page

This page allows the admin to add new exam questions.

Admin can enter:
- Question
- Four answer options
- Correct answer

After submitting, the question details are saved into the database and become available for students during the exam.


--------------------------------------------------

upadate_questions.png

Manage Questions Page

This page displays all available questions stored in the system.

Admin can:
- View questions and correct answers
- Edit existing questions
- Delete unwanted questions

This feature helps the admin update and maintain exam questions easily.


--------------------------------------------------

student_dashboard.png

Student Dashboard

This dashboard is displayed after successful student login.

Student features:
- Start the online exam
- View exam result
- Logout from account


--------------------------------------------------

exam_view.png

Online Exam Page

This page displays exam questions with multiple-choice options.

Students can:
- Read questions
- Select answers using radio buttons
- Submit the exam

The submitted answers are evaluated automatically by the system.


--------------------------------------------------

result_student_dashboard.png

Student Result Page

This page displays the student's exam performance after submission.

Features:
- Shows obtained marks
- Displays total score
- Result is calculated automatically based on correct answers


--------------------------------------------------

result(LeaderBoard)_admin_view.png

Admin Leaderboard / Student Results Page

This page allows the admin to view student exam results.

Admin can see:
- Student rank
- Student name
- Exam score
- Submission date and time

It helps the admin monitor student performance.


--------------------------------------------------

users_database_table.png

Users Database Table

This page shows the database table containing registered user information.

Stored details:
- User ID
- Student/Admin name
- Email address
- Encrypted password
- User role

This table is used for login authentication and role-based access control.
