# 📘 API Guide: Chapter

This documentation is auto-generated for the **chapters** table.

### 🚀 Endpoints
| Action | Method | Endpoint | Auth |
| :--- | :--- | :--- | :--- |
| List All | `GET` | `/chapters` | Bearer |
| View One | `GET` | `/chapters/{id}` | Bearer |
| Create | `POST` | `/chapters` | Bearer |
| Update | `PUT` | `/chapters/{id}` | Bearer |
| Delete | `DELETE` | `/chapters/{id}` | Bearer |

### 📋 Database Schema
| Column | Type | Description |
| :--- | :--- | :--- |
| `id` | *bigint* | Field from database |
| `course_id` | *bigint* | Field from database |
| `name` | *varchar* | Field from database |
| `order` | *int* | Field from database |
| `created_at` | *timestamp* | Field from database |
| `updated_at` | *timestamp* | Field from database |
