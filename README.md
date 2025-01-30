# Public API - HNG12 Stage 0 Task

## Project Description

This is a simple public API built as part of the **HNG12 Backend Internship (Stage 0)**. The API returns basic information in JSON format, including:

- The email address I used to register on HNG12 Slack workspace
- The current date and time in **ISO 8601** format (UTC)
- A link to the GitHub repository containing the source code

##  Live API URL

```
https://hng12stage0-production.up.railway.app/
```

## 🛠 Setup Instructions

To run this project locally, follow these steps:

### 1️⃣ Clone the Repository

```sh
https://github.com/scribeNcode/hng12_stage0
cd your-repo
```

### 2️⃣ Install PHP (if not already installed)

Make sure PHP is installed on your system. You can check by running:

```sh
php -v
```

If PHP is not installed, download and install it from: [https://www.php.net/downloads](https://www.php.net/downloads)

### 3️⃣ Start a Local Server

Run the following command to start a local PHP server:

```sh
php -S localhost:8000
```

Now, you can access the API at:

```
http://localhost:8000/
```

##  API Documentation

### **Endpoint:**

- **GET /** → Returns a JSON response with email, current datetime, and GitHub repo link.

### **Response Format:**


```json
{
  "email": "deyeye99@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/scribeNcode/hng12_stage0"
}
```

### **Example Usage:**

You can test the API using:

- **Browser**: Open the live URL in a browser : https://hng12stage0-production.up.railway.app/.
- **Postman**: Send a GET request to the API URL.
- **Terminal (cURL):**
  ```sh
  curl -X GET https://hng12stage0-production.up.railway.app/
  ```
- **JavaScript Fetch Request:**
  ```javascript
  fetch("https://hng12stage0-production.up.railway.app/")
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error("Error:", error));
  ```



 check out PHP developers on HNG: [Hire PHP Developers](https://hng.tech/hire/php-developers)

---


