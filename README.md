# Campus Assignment Tracker

A simple Laravel API project for practising assignment CRUD. The dashboard at `/`
uses the same API you can test in Postman.

The backend follows the patterns in the
[Laravel API course](https://github.com/hezha-xoshnaw/laravel-api-course-2026-2027):

| Course concept | Project example |
| --- | --- |
| API routes and controllers | `routes/api.php`, `AssignmentController` |
| Form Request validation | `StoreAssignmentRequest`, `UpdateAssignmentRequest` |
| Resource responses | `AssignmentResource` |
| Migrations, models, and seeders | Assignments table, `Assignment`, `AssignmentSeeder` |
| Eloquent create and read | `create`, `refresh`, `get`, route model binding |
| Week 4 update and delete | `update`, `delete`, explicit PATCH and DELETE routes |

Assignments have extra fields for this project. The Blade dashboard and JavaScript
are additions to the backend lessons. This classroom example uses shared sample
data and public routes, as in the course. Login and ownership are later topics.

## First-time setup

Requirements: PHP 8.3 or newer, Composer, and PHP's SQLite extensions.

```sh
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
php artisan migrate
php artisan db:seed
php artisan serve
```

The example environment uses SQLite. If your existing `.env` uses MySQL, configure
and start that database before migrating. Generate the application key only during
initial setup. Seeding adds sample assignments; repeating it adds another set.

Open `http://127.0.0.1:8000`. For later sessions, run `php artisan serve` again.
The dashboard uses online Tailwind and Google Fonts assets, so its styling needs
internet access. The API works without NPM or a frontend build.

## API and Postman

Send `Accept: application/json`. For POST and PATCH, also send
`Content-Type: application/json` and select raw JSON in Postman.

| Method | Path | Expected response |
| --- | --- | --- |
| GET | `/api/assignments` | 200, assignments ordered by due date, then ID |
| GET | `/api/assignments?status=pending` | 200, matching assignments |
| GET | `/api/assignments/{id}` | 200, one assignment; 404 if missing |
| POST | `/api/assignments` | 201, created assignment; 422 for invalid input |
| PATCH | `/api/assignments/{id}` | 200, updated assignment; 422 for invalid input |
| DELETE | `/api/assignments/{id}` | 204, empty response body |

Use the actual ID returned by POST. PUT is not registered, matching the Week 4
lesson. A missing or nonnumeric record ID returns 404.

Example POST (replace the date with today or a future date):

```json
{
    "title": "Database Lab",
    "course_code": "DB201",
    "due_date": "2026-11-20"
}
```

- Required on creation: title (up to 255 characters), course code (up to 20), and due date.
- Omitted priority defaults to `medium`; omitted status defaults to `pending`.
- Supplied priority and status cannot be null or empty.
- Priorities: `low`, `medium`, `high`.
- Statuses: `pending`, `in_progress`, `submitted`, `graded`.
- Description is optional, up to 5,000 characters. Grade is optional: null or a whole number from 0 to 100.
- PATCH changes only supplied, validated fields; `{}` leaves the record unchanged.
- Creating a new assignment requires today or a future due date. Updating permits historical dates for overdue records. Dates use the application timezone, currently UTC.
- Course codes appear uppercase in responses.

The dashboard provides creation, filtering, status/grade updates, and deletion.
Use PATCH in Postman to edit other fields. Cancelling the grade prompt cancels
the update. Changing to an ungraded status through the dashboard clears the grade.

Import `Campus_Assignment_Tracker_API.postman_collection.json`. Run the create
request before show, update, and delete; it saves the returned `assignment_id`.
The collection supplies a future date automatically. Change `base_url` if your
server uses another port.

## Checks

```sh
php artisan route:list --path=api
php artisan test
```

Practice the course sequence: POST, copy the ID, GET, PATCH, GET, DELETE, then
GET again and expect 404. Also try invalid input and expect 422 with no data change.
