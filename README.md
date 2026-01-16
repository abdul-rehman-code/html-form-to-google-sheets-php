# HTML Form to Google Sheets (PHP)

A PHP project that takes user data from an HTML form and saves it directly to a Google Sheet using the **Google Sheets API** and a secure **service account**. This is useful for contact forms, surveys, or other form projects without needing a database. :contentReference[oaicite:1]{index=1}

---

## 📌 Features

- Save form submissions to Google Sheets  
- Uses **Google Sheets API** with **service account**  
- Simple form handling with PHP  
- No database needed

---

## 📦 Files in This Repo

| File | Description |
|------|-------------|
| `index.php` | Main HTML form |
| `process.php` | Handles form submit and sends data to Google Sheets |
| `credentials.json` | Google service account credentials |
| `composer.json` | Dependencies required for Google API |
| `composer.lock` | Locked versions of packages |

---

## 🚀 Setup Instructions

### 1. Create Google Service Account
1. Go to Google Cloud Console  
2. Enable **Google Sheets API**  
3. Create a **Service Account**  
4. Download `credentials.json`  
5. Share your Google Sheet with the service account email

---

### 2. Install Dependencies

Run this in your project directory:

```bash
composer install
Uses **Google Sheets API** with **service account**  - Simple form handling with PHP  - No database needed



---## 📦 Files in This Repo



| File | Description |

|------|-------------|

| `index.php` | Main HTML form |

| `process.php` | Handles form submit and sends data to Google Sheets |

| `credentials.json` | Google service account credentials |

| `composer.json` | Dependencies required for Google API |

| `composer.lock` | Locked versions of packages |



---## 🚀 Setup Instructions### 1. Create Google Service Account1. Go to Google Cloud Console  2. Enable **Google Sheets API**  3. Create a **Service Account**  4. Download `credentials.json`  5. Share your Google Sheet with the service account email



---### 2. Install Dependencies



Run this in your project directory:```bash

composer install

(This will install the Google Client API dependencies)

3. Configure Project

Replace the credentials.json in the project with your own

Update your Google Sheet ID in the PHP code

4. Run Locally or on Server

Upload to your web server and open index.php in the browser.

Fill the form and submit — the data should appear in your Google Sheet.

🧪 How It Works

User fills the HTML form

process.php receives form data

PHP uses Google API to save row into the sheet

Each submission becomes a new row
