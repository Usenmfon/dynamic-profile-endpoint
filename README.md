# 🐱 Pure PHP API Endpoint — Cat Facts + User Info

![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)
![License](https://img.shields.io/badge/license-MIT-green)
![API Status](https://img.shields.io/badge/API-online-success)
![Cat Facts](https://img.shields.io/badge/CatFacts-Live_API-orange)

A simple **pure PHP REST API** (no frameworks) that returns a user profile along with a random cat fact from the [Cat Facts API](https://catfact.ninja/fact).  
Built entirely with **vanilla PHP**, using native features such as routing, cURL, and JSON encoding.

---

## 🚀 Features

- ✅ **Pure PHP** — No frameworks or dependencies required  
- 🧭 **Simple Routing** — Lightweight router via `index.php`  
- 🧑‍💻 **User Info** — Static email, name, and backend stack  
- 🕓 **Timestamps** — UTC time in ISO 8601 format  
- 🐾 **Random Cat Facts** — Dynamic facts from `https://catfact.ninja/fact`  
- 🌍 **CORS Enabled** — Browser and external access supported  

---

## 🧩 Project Structure

project/
│
└── index.php # Router entry point
│
└── me.php # Endpoint logic (fetches cat fact + returns JSON)

## ⚙️ Setup Instructions

### 1. Clone this repository
```bash
git clone https://github.com/Usenmfon/dynamic-profile-endpoint.git
cd dynamic-profile-endpoint
```


### 2. Run project
```bash
php -S localhost:8000
```

### 3. Access the API endpoint

Open your browser or use Postman/cURL:

GET request:

http://localhost:8000/me

### 4. Sample response

```bash
{
  "status": "success",
  "user": {
    "email": "youremail@example.com",
    "name": "Your Full Name",
    "stack": "PHP, MySQL, and REST APIs"
  },
  "timestamp": "2025-10-16T09:40:03+00:00",
  "fact": "Cats sleep for 70% of their lives."
}
```
