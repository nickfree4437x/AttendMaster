## 📘 AttendMaster - Student Attendance Management System

> 🚀 **AttendMaster** is a full-featured, responsive, and scalable **Student Attendance Management System** built using the **MERN Stack** (MongoDB, Express.js, React.js, Node.js). It offers a modern solution for managing student attendance for **Admins**, **Teachers**, and **Students**, with real-time tracking, analytics, and clean UI/UX.

---

### 📂 Table of Contents

* [✨ Features](#-features)
* [⚙️ Tech Stack](#️-tech-stack)
* [📸 Screenshots](#-screenshots)
* [📦 Installation](#-installation)
* [🗂 Folder Structure](#-folder-structure)
* [🛡️ Environment Variables](#️-environment-variables)
* [💡 Future Enhancements](#-future-enhancements)

---

### ✨ Features

#### 🔐 Admin Panel

* Manage Students & Teachers (Add, Edit, Delete)
* Bulk Upload via CSV
* Attendance Records with Filters, Pagination, Export
* View Attendance Statistics
* Notification Panel (Top Absent Students, Inactives)
* Dashboard Overview (Student, Teacher, Present/Absent Counts)

#### 🧑‍🏫 Teacher Panel

* Login & Authenticated Access
* View Assigned Subjects
* Mark Attendance for Assigned Classes
* View Recent Attendance Records
* Dashboard Summary of Students Taught & Classes Conducted

#### 🎓 Student Panel *(Coming Soon)*

* Login & View Personal Attendance Summary
* Download Attendance Reports

#### 💻 Other Features

* Responsive UI with Tailwind CSS
* Toast Notifications (using React-Toastify)
* Protected Routes & JWT Authentication
* Export Attendance to CSV
* Pagination, Search, Filters

---

### ⚙️ Tech Stack

| Layer              | Technology                      |
| ------------------ | ------------------------------- |
| **Frontend**       | React.js, Tailwind CSS, Axios   |
| **Backend**        | Node.js, Express.js             |
| **Database**       | MongoDB Atlas / Local           |
| **Authentication** | JWT (JSON Web Token)            |
| **Notifications**  | React-SweetAlert                |
| **Deployment**     | Render / Vercel / MongoDB Atlas |

---

### 📸 Screenshots

<img width="1892" height="838" alt="Screenshot (930)" src="https://github.com/user-attachments/assets/366d7854-c74d-490b-b25d-664cc6cc6ad7" />

---

### 📦 Installation

#### ✅ Prerequisites

* Node.js & npm
* MongoDB (Local or Atlas)
* Git

#### 📁 Clone the Repository

```bash
git clone https://github.com/nickfree4437x/AttendMaster.git
cd AttendMaster
```

#### 🔧 Setup Backend (Express.js)

```bash
cd backend
npm install
```

> Create a `.env` file inside `backend/` and add:

```
PORT=5000
MONGO_URI=your_mongodb_connection_string
JWT_SECRET=your_jwt_secret
```

```bash
npm start
```

#### 🌐 Setup Frontend (React)

```bash
cd ../frontend
npm install
npm start
```

The app will now run on:

* Frontend: `http://localhost:3000`
* Backend: `https://attendmaster.onrender.com`

---

### 🗂 Folder Structure

```
AttendMaster/
├── backend/                → Express server, routes, controllers, models
│   ├── routes/
│   ├── controllers/
│   ├── models/
│   ├── middleware/
│   └── config/
├── frontend/               → React app (Admin/Teacher dashboards)
│   ├── components/
│   ├── pages/
│   ├── services/
│   └── utils/
├── screenshots/            → UI screenshots for README
├── .env                    → Environment variables (not pushed)
└── README.md
```

### 🛡️ Environment Variables

**Backend `.env` example:**

```
PORT=5000
MONGO_URI=mongodb+srv://<username>:<password>@cluster.mongodb.net/attendmaster
JWT_SECRET=your_jwt_secret
```

---

### 💡 Future Enhancements

* 📲 Student Mobile App (React Native)
* 🧠 AI-based attendance prediction
* 📝 Leave request system
* 📧 Email alerts to parents
* 🔐 Role-based access control (RBAC)


### 🙋‍♂️ Developed By

**Vishal Kumar**
*MERN Stack Developer | Problem Solver | Tech Enthusiast*

