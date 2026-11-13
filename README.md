# Music Album Catalogue

## Project Description

Music Album Catalogue is a Laravel web application that allows users to manage a collection of music albums.

Users can view, add, edit, delete, search, and filter albums by genre. The application also supports pagination.

## Technologies Used

- PHP
- Laravel
- MySQL
- Blade
- Eloquent ORM
- HTML

## Database

Database name: `music_albums_db`

Table name: `albums`

### Table Columns

| Column | Data Type | Description |
|---|---|---|
| id | BIGINT | Primary key |
| title | VARCHAR(150) | Album title |
| artist | VARCHAR(100) | Artist name |
| genre | VARCHAR(50) | Music genre |
| release_year | INTEGER | Album release year |
| track_count | INTEGER | Number of tracks |
| duration_minutes | INTEGER | Album duration |
| created_at | TIMESTAMP | Creation date |
| updated_at | TIMESTAMP | Last update date |

## Features

- Display all albums.
- Add new albums.
- Edit existing albums.
- Delete albums with confirmation.
- Search albums by title or artist.
- Filter albums by genre.
- Combine search and genre filtering.
- Paginate results (10 albums per page).
- Validate submitted data.

## Installation and Setup

### 1. Clone the repository

```bash
git clone https://github.com/annapartladze/laravel_midterm.git
cd laravel_midterm
```

### 2. Install dependencies

```bash
composer install
```

### 3. Create the environment file

```bash
cp .env.example .env
```

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Configure the database

Create a MySQL database:

```sql
CREATE DATABASE music_albums_db;
```

Update the database settings in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=music_albums_db
DB_USERNAME=root
DB_PASSWORD=
```

Configure the local session and cache drivers:

```env
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Seed the database

```bash
php artisan db:seed --class=AlbumSeeder
```

### 8. Start the development server

```bash
php artisan serve
```

Open the application at:

http://127.0.0.1:8000

## Author

Anna Partladze