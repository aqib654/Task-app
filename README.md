# Database Schema and Migrations for Leads and Contacts

## Overview
This Laravel project implements MySQL tables for managing leads and contacts, complete with database migrations, schema definitions, and seed data.

## Database Schema

### 1. `leads` Table
* `id`: Primary Key (`BIGINT`, Auto Increment)
* `name`: Lead's full name (`VARCHAR`)
* `email`: Unique email address (`VARCHAR`)
* `phone`: Contact phone number (`VARCHAR`, Nullable)
* `status`: Lead status (Default: 'new') (`VARCHAR`)
* `created_at`, `updated_at`: Timestamps

### 2. `contacts` Table
* `id`: Primary Key (`BIGINT`, Auto Increment)
* `name`: Contact's full name (`VARCHAR`)
* `email`: Unique email address (`VARCHAR`)
* `phone`: Contact phone number (`VARCHAR`, Nullable)
* `status`: Contact status (Default: 'active') (`VARCHAR`)
* `created_at`, `updated_at`: Timestamps

## How to Run
1. Clone the repository.
2. Run `composer install`.
3. Configure your `.env` file with database credentials.
4. Run `php artisan migrate:fresh --seed` to run migrations and seed sample data.


## Entity Relationship Diagram (ERD)

```text
+-------------------+       +-------------------+
|       users       |       |       leads       |
+-------------------+       +-------------------+
| id (PK)           | 1---* | id (PK)           |
| name              |       | user_id (FK)      |
| email             |       | name, email, etc. |
+-------------------+       +-------------------+
                                     |
                                     | 1---*
                             +-------------------+
                             |     contacts      |
                             +-------------------+
                             | id (PK)           |
                             | lead_id (FK)      |
                             | notes, etc.       |
                             +-------------------+

