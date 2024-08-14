# Laravel 11 Blog Application

## Overview
This project is a simple blog application built using Laravel 11 and MySQL database. The application leverages Bootstrap 5.3 for a responsive and modern user interface. The primary focus of this project is to implement CRUD (Create, Read, Update, Delete) functionality for a single table, 'posts', in the database.

## Technologies Used
- **Backend Framework:** Laravel 11
- **Database:** MySQL
- **Frontend Framework:** Bootstrap 5.3
- **Programming Languages:** PHP, HTML, CSS, JavaScript
- **Version Control:** Git

## Features
1. **Create Posts:** Users can create new blog posts.
2. **Read Posts:** Users can view all blog posts and individual post details.
3. **Update Posts:** Users can edit existing blog posts.
4. **Delete Posts:** Users can delete blog posts.

## Table Structure

**Table Name: posts**
| Column Name | Data Type | Description |
|-------------|------------|-------------|
| id          | INT        | Primary key, auto-incremented |
| title       | VARCHAR    | Title of the blog post |
| content     | TEXT       | Content of the blog post |
| author      | VARCHAR    | Content of the blog post |
| image       | object      |
| created_at  | TIMESTAMP  | Timestamp of when the post was created |
| updated_at  | TIMESTAMP  | Timestamp of the last update to the post |


**Table Name: users**
| Column Name | Data Type | Description |
|-------------|------------|-------------|
| id          | INT        | Primary key, auto-incremented |
| username    | VARCHAR    | Title of the blog post |
| email       | TEXT       | Content of the blog post |
| password    | VARCHAR    | Content of the blog post |
| created_at  | TIMESTAMP  | Timestamp of when the post was created |
| updated_at  | TIMESTAMP  | Timestamp of the last update to the post |


**Table Name: category**
| Column Name | Data Type | Description |
|-------------|------------|-------------|
| id          | INT        | Primary key, auto-incremented |
| name        | VARCHAR    | Title of the blog post |
| slug        | TEXT       | Content of the blog post |
| description | VARCHAR    | Content of the blog post |
| created_at  | TIMESTAMP  | Timestamp of when the post was created |
| updated_at  | TIMESTAMP  | Timestamp of the last update to the post |

## CRUD Functionality for Posts and Users

1. **Create:**
   - Route: `POST /posts`
   - Description: Adds a new blog post to the 'posts' table.
   - Form Fields: Title, Content

2. **Read:**
   - Route: `GET /posts`
   - Description: Displays all blog posts.
   - Route: `GET /posts/{id}`
   - Description: Displays a specific blog post by ID.

3. **Update:**
   - Route: `PUT /posts/{id}`
   - Description: Updates an existing blog post.
   - Form Fields: Title, Content

4. **Delete:**
   - Route: `DELETE /posts/{id}`
   - Description: Deletes a blog post by ID.


1. **Create:**
   - Route: `POST /users`
   - Description: Adds a new blog post to the 'posts' table.
   - Form Fields: Title, Content

2. **Read:**
   - Route: `GET /users`
   - Description: Displays all blog posts.
   - Route: `GET /users/{id}`
   - Description: Displays a specific blog post by ID.

3. **Update:**
   - Route: `PUT /users/{id}`
   - Description: Updates an existing blog post.
   - Form Fields: Title, Content

4. **Delete:**
   - Route: `DELETE /users/{id}`
   - Description: Deletes a blog post by ID.

## Admin site
**Serve Admin**
   - Route: 'GET /admin/dashboard'
   - Description: Serve the admin dashboard here

## Frontend Design
The frontend of the application is designed using Talwindcss to ensure a responsive and aesthetically pleasing user interface. Forms, tables, and buttons are styled using Bootstrap classes.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Harpindar1/blog_app.git
   cd blog_app
   composer install
   npm run build
   php artisan serve
