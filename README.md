# Tanzania Wildlife Epic — Production Rebuild

A custom PHP/MySQL rebuild of Tanzania Wildlife Epic, preserving the live site's recognizable homepage/header/footer structure while standardizing package pages around the 7 Days Tanzania Luxury Safari information architecture.

## Requirements
- PHP 8.1+
- MySQL 5.7+/MariaDB 10.4+
- Apache with mod_rewrite (recommended)

## Quick setup
1. Upload the repository contents to your web root.
2. Create a MySQL database.
3. Copy `config.example.php` to `config.php` and enter database credentials.
4. Visit `/admin/setup.php` once to create tables and the first admin account.
5. Delete or rename `/admin/setup.php` after setup.

## Verified business details used
- Tanzania Wildlife Epic
- +255 747 304 628
- info@tanzaniawildlifeepic.com
- tanzaniawildlifeepic@gmail.com
- Kilimanjaro Region / Arusha Road, Tanzania

The build intentionally avoids fabricating reviews, awards, ratings, staff, certifications, wildlife guarantees, success rates, or unverified pricing. Unverified prices render as **Request a Quote**.
