# 📘 API Guide: UserSubscribe

This documentation is auto-generated for the **user_subscribes** table.

### 🚀 Endpoints
| Action | Method | Endpoint | Auth |
| :--- | :--- | :--- | :--- |
| List All | `GET` | `/user-subscribes` | Bearer |
| View One | `GET` | `/user-subscribes/{id}` | Bearer |
| Create | `POST` | `/user-subscribes` | Bearer |
| Update | `PUT` | `/user-subscribes/{id}` | Bearer |
| Delete | `DELETE` | `/user-subscribes/{id}` | Bearer |

### 📋 Database Schema
| Column | Type | Description |
| :--- | :--- | :--- |
| `id` | *bigint* | Field from database |
| `user_id` | *bigint* | Field from database |
| `course_id` | *bigint* | Field from database |
| `payment_method` | *varchar* | Field from database |
| `receipt_image` | *varchar* | Field from database |
| `status` | *enum* | Field from database |
| `admin_note` | *text* | Field from database |
| `created_at` | *timestamp* | Field from database |
| `updated_at` | *timestamp* | Field from database |
