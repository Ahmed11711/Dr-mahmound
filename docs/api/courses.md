# 📘 API Guide: Courses

This documentation is auto-generated for the **courses** table.

### 🚀 Endpoints
| Action | Method | Endpoint | Auth |
| :--- | :--- | :--- | :--- |
| List All | `GET` | `/courses` | Bearer |
| View One | `GET` | `/courses/{id}` | Bearer |
| Create | `POST` | `/courses` | Bearer |
| Update | `PUT` | `/courses/{id}` | Bearer |
| Delete | `DELETE` | `/courses/{id}` | Bearer |

### 📋 Database Schema
| Column | Type | Description |
| :--- | :--- | :--- |
| `id` | *bigint* | Field from database |
| `title` | *varchar* | Field from database |
| `description` | *text* | Field from database |
| `image` | *varchar* | Field from database |
| `duration_hours` | *int* | Field from database |
| `price` | *decimal* | Field from database |
| `discount_price` | *decimal* | Field from database |
| `discount_start` | *timestamp* | Field from database |
| `discount_end` | *timestamp* | Field from database |
| `info` | *text* | Field from database |
| `file_path` | *varchar* | Field from database |
| `rating` | *decimal* | Field from database |
| `created_at` | *timestamp* | Field from database |
| `updated_at` | *timestamp* | Field from database |
