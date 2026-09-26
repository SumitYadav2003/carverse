# Carverse

A car information website I built with PHP and MySQL during my BSc Computer Science (2021–2024). Visitors can browse cars by category, compare models, read blogs, and book test drives or services. An admin panel manages car listings, users and enquiries.

It's kept here as it was built, as a record of my earlier work. My current project that grew out of it is [carverse-check](https://github.com/SumitYadav2003/carverse-check).

## Features

**Visitors**
- Register, log in, update their account
- Browse cars by category: SUVs, sedans, electric, new launches and used cars
- Compare models side by side
- Search car listings added by the admin
- Book a test drive or a service appointment
- Leave a review or send a message through the contact form
- Read blog posts

**Admin panel** (`admin_login.php`)
- Add, edit and delete car listings with three images each
- Manage user and admin accounts
- View contact messages, reviews, test-drive and service bookings

## Tech

PHP 8, MySQL/MariaDB, HTML, CSS, JavaScript. It runs locally on XAMPP (Apache + MariaDB + phpMyAdmin), using PDO and mysqli for the database.

## Run it locally (Windows)

1. Install [XAMPP](https://www.apachefriends.org/download.html) and keep the install folder as `C:\xampp`.
2. Open the XAMPP Control Panel and start **Apache** and **MySQL**.
3. Copy the `projects` folder into `C:\xampp\htdocs`, so that `C:\xampp\htdocs\projects\Mainpage.php` exists.
4. Open http://localhost/phpmyadmin → **Import** → choose `carverse_database.sql` → **Import**. This creates the `project` database.
5. Open http://localhost/projects/page.html

Admin login: `admin` / `admin123` (set in `carverse_database.sql`).

## What changed in 2026

- **Media compressed** from about 6.4 GB to about 216 MB so the project can be shared and stored on GitHub. Unused files were left out, images were resized to web size, and videos were re-encoded as MP4 at 720p. File names are unchanged.
- **The intro video was replaced with a still image.** It was a one-hour, 5.4 GB file.
- **31 broken image paths fixed.** Some pages pointed at `C:\xampp\htdocs\projects\...` instead of relative paths.
- **`carverse_database.sql` was rebuilt from the code.** The original database export was lost, so the tables were recreated from the queries the PHP files run. Car listings need to be re-added from the admin panel.

## Known limitations

This is student work from before I knew better, left as it was:

- `cnt.php`, `rev.php` and `serapt.php` build SQL by inserting form input directly into the query, which allows SQL injection. The other pages use prepared statements.
- Passwords are hashed with SHA-1, which is no longer considered secure. Modern PHP uses `password_hash()`.
- Many car pages are near-copies of each other rather than one template filled from the database.
- The database connects as `root` with no password, which is XAMPP's local default.

Don't deploy it on a public server as it is.

## Credits

Car photos and videos were collected from the web for a non-commercial university project and belong to their original owners.
