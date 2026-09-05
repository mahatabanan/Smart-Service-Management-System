# Smart Service Request and Management System

A web-based service request and management platform designed to connect **Customers**, **Managers**, and **Administrators** in a structured service management workflow.

The system allows customers to submit service requests, managers to review and assign workers, and administrators to manage users and service categories.

---

## 📌 Project Overview

The **Smart Service Request and Management System** provides a centralized platform for managing service requests from submission to completion.

The system supports three main user roles:

- 👨‍💼 **Admin**
- 👨‍🔧 **Manager**
- 👤 **Customer**

Customers can browse available service categories and submit requests. Managers can review customer requests, assign workers, and mark services as completed. Administrators can manage service categories and users.

---

## ✨ Features

### 👨‍💼 Admin Features

- Login and Logout
- User Registration
- Forgot and Change Password
- Profile View and Update
- Admin Dashboard
- Add, Update, and Delete Service Categories
- View Customers and Managers
- Delete Users
- Add Managers

### 👨‍🔧 Manager Features

- Login and Logout
- Registration created by Admin
- Forgot and Change Password
- Profile View and Update
- Manager Dashboard
- View Customer Service Requests
- Assign Workers to Service Requests
- Approve Service Requests
- Mark Services as Completed

### 👤 Customer Features

- Registration / Signup
- Login and Logout
- Forgot and Change Password
- Profile View and Update
- Customer Dashboard
- View Available Service Categories
- Submit Service Requests
- View Personal Service Request Status
- Edit or Cancel Requests where applicable

### 📋 Service Request Status

A customer service request can have the following statuses:

- Pending
- Approved
- Rejected
- Completed

---

## 🛠️ Available Service Categories

The project design includes service categories such as:

- 🧹 Cleaning
- 🔧 Repair
- ⚡ Electrical
- 🚰 Plumbing

---

## 🏗️ Project Structure

```text
Smart-Service-Management-System/
│
├── Controller/              # Application controllers
│
├── Model/                   # Data and database-related logic
│
├── View/                    # User interface pages
│
├── .gitattributes
├── index.php                # Application entry point
├── LICENSE
└── README.md
```

---

## 🔄 System Workflow

```text
Customer
   │
   ▼
Submit Service Request
   │
   ▼
Manager Reviews Request
   │
   ▼
Assign Worker / Approve Request
   │
   ▼
Service is Performed
   │
   ▼
Mark Service as Completed
```

---

## 📊 User Roles and Responsibilities

| Role | Responsibilities |
|------|------------------|
| Admin | Manage users, managers, service categories, and system administration |
| Manager | Review service requests, assign workers, approve requests, and mark services as completed |
| Customer | Register, browse services, submit requests, and track request status |

---

## 🖥️ Main System Pages

- Login Page
- Registration Page
- Admin Dashboard
- Manager Dashboard
- Customer Dashboard
- Service Category Management
- Service Request Management
- User Management
- Profile Management

---

## 👥 Project Members

| Student ID | Name |
|------------|------|
| 23-50807-1 | Tanvir Mahatab Anan |
| 23-50798-1 | Jannatun Nesa Jerin |

---

## 🎓 Academic Information

**Department:** Computer Science  
**Course:** Web Technologies  
**Section:** E  
**Semester:** Fall 2025-26  

---

## 📄 License

This project is licensed under the **MIT License**.

See the [LICENSE](LICENSE) file for more details.

---

## 🚀 Future Improvements

Potential future enhancements include:

- Email or notification system
- Online service payment integration
- Worker management module
- Service request history and analytics
- Advanced search and filtering
- Mobile-responsive UI improvements
- Role-based access control enhancements

---

⭐ If you find this project useful, consider giving the repository a star!
