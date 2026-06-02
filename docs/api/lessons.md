# 📘 API Guide: Lessons

This documentation is auto-generated for the **lessons** table.

### 🚀 Endpoints
| Action | Method | Endpoint | Auth |
| :--- | :--- | :--- | :--- |
| List All | `GET` | `/lessons` | Bearer |
| View One | `GET` | `/lessons/{id}` | Bearer |
| Create | `POST` | `/lessons` | Bearer |
| Update | `PUT` | `/lessons/{id}` | Bearer |
| Delete | `DELETE` | `/lessons/{id}` | Bearer |

### 📋 Database Schema
| Column | Type | Description |
| :--- | :--- | :--- |
| `id` | *bigint* | Field from database |
| `chapter_id` | *bigint* | Field from database |
| `title` | *varchar* | Field from database |
| `video_path` | *varchar* | Field from database |
| `is_free` | *tinyint* | Field from database |
| `info` | *text* | Field from database |
| `order` | *int* | Field from database |
| `created_at` | *timestamp* | Field from database |
| `updated_at` | *timestamp* | Field from database |
