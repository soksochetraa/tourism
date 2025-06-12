# Tourism API

A RESTful API for an Tourism built with Laravel.

## Features

- Full CRUD operations for users, products, categories, and orders  
- Authentication using Laravel Sanctum  
- Role-based authorization (admin/user)  
- Robust validation and error handling  
- Comprehensive API documentation  
- Database migrations and seeders   

## Requirements

- PHP 8.1 or higher  
- Composer  
- MySQL or DBeaver  

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/soksochetraa/tourism.git
   cd tourism
    ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Copy the `.env` file:**

   ```bash
   cp .env.example .env
   ```

4. **Generate the Laravel application key:**

   ```bash
   php artisan key:generate
   ```

5. **Configure your database in `.env`:**

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tourism
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Install JWT Auth package:**

   ```bash
   composer require tymon/jwt-auth
   ```

7. **Publish the JWT configuration:**

   ```bash
   php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
   ```

8. **Generate the JWT secret key:**

   ```bash
   php artisan jwt:secret
   ```

   This command will add a `JWT_SECRET=...` entry to your `.env` file.

9. **Run database migrations and seeders:**

   ```bash
   php artisan migrate --seed
   ```

10. **Start the development server:**

    ```bash
    php -S 127.0.0.1:8888 -t public
    ```
## API Documentation

The API is available at:
`http://127.0.0.1:8888`

### Authentication Endpoints

| Method | Endpoint      | Description                                         |
| ------ | ------------- | --------------------------------------------------- |
| POST   | /register     | Register a new user                                 |
| POST   | /login        | Log in an existing user                             |

**Example Requests :**

**POST : http://127.0.0.1:8888/register**
```
{
    "name": "User",
    "email": "user@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}
```
**POST : http://127.0.0.1:8888/register**
```
{
    "name": "Admin",
    "email": "admin@example.com",
    "role": "admin",
    "password": "password123",
    "password_confirmation": "password123"
}
```
**POST : http://127.0.0.1:8888/login**
```
{
    "email": "user@example.com",
    "password": "password123"
}
```
### Destination Endpoints

| Method | Endpoint                       | Description                        |
| ------ | ------------------------------ | ---------------------------------- |
| GET    | /destinations                  | List all destinations              |
| GET    | /destinations/{id}             | Get a specific destination by ID   |
| GET    | /destinations/name/{name}      | Get a specific destination by name |
| POST   | /destinations                  | Create any destination (admin)     |
| PATCH  | /destinations/{id}             | Update any destination (admin)     |
| DELETE | /destinations/{id}             | Delete any destination (admin)     |

**Example Requests :**

**POST : http://127.0.0.1:8888/destinations**
```
{
    "name": "Angkor Wat",
    "location": "Siem Reap",
    "description": "Ancient temple complex"
}
```
**PATCH : http://127.0.0.1:8888/destinations/{id}**
```
{
    "name": "Angkor Wat",
    "location": "Siem Reap"
}
```
### Events Endpoints

| Method | Endpoint                       | Description                        |
| ------ | ------------------------------ | ---------------------------------- |
| GET    | /events                        | List all events                    |
| GET    | /events/{id}                   | Get a specific events by ID        |
| GET    | /events/name/{name}            | Get a specific events by name      |
| POST   | /events                        | Create any events (admin)          |
| PATCH  | /events/{id}                   | Update any events (admin)          |
| DELETE | /events/{id}                   | Delete any events (admin)          |

**Example Requests :**

**POST : http://127.0.0.1:8888/events**
```
{
    "name": "Khmer New Year II",
    "description": "Traditional Cambodian New Year festival celebrated in April.",
    "location": "Siem Reap",
    "start_date": "2025-04-13 00:00:00",
    "end_date": "2025-04-15 00:00:00"
}
```
**PATCH : http://127.0.0.1:8888/events/{id}**
```
{
    "name": "Khmer New Year II",
    "description": "Traditional Cambodian New Year festival celebrated in April."
}
```

### Events Destination Endpoints ( Pivot Table )

| Method | Endpoint                       | Description                                  |
| ------ | ------------------------------ | -------------------------------------------- |
| GET    | /eventdestination                        | List all events destination        |
| GET    | /eventdestination/{id}                   | Get a specific events destination by ID        |
| GET    | /eventdestination/event/{name}           | Get a specific events destination by name      |
| POST   | /eventdestination                        | Create any events destination (admin)          |
| PATCH  | /eventdestination/{id}                   | Update any events destination (admin)          |
| DELETE | /eventdestination/{id}                   | Delete any events destination (admin)          |

**Example Requests :**

**POST : http://127.0.0.1:8888/eventdestination**
```
{
    "event_id": 1,
    "destination_id": 6
}
```
**PATCH : http://127.0.0.1:8888/eventdestination/{id}**
```
{
    "event_id": 1
}
```

### Province Endpoints

| Method | Endpoint                       | Description                                  |
| ------ | ------------------------------ | -------------------------------------------- |
| GET    | /provinces                        | List all province        |
| GET    | /provinces/{id}                   | Get a specific province by ID        |
| GET    | /provinces/name/{name}            | Get a specific province by name      |
| POST   | /provinces                        | Create any province (admin)          |
| PATCH  | /provinces/{id}                   | Update any province (admin)          |
| DELETE | /provinces/{id}                   | Delete any province (admin)          |

**Example Requests :**

**POST : http://127.0.0.1:8888/provinces**
```
{
    "name": "Phnom Penh",
    "description": "Cambodia's Capital City",
    "region": "Cambodia"
}
```
**PATCH : http://127.0.0.1:8888/provinces/{id}**
```
{
    "name": "Phnom Penh",
    "description": "Cambodia's Capital"
}
```
### Province Destination Endpoints ( Pivot Table )

| Method | Endpoint                       | Description                                  |
| ------ | ------------------------------ | -------------------------------------------- |
| GET    | /provincedestination                        | List all province        |
| GET    | /provincedestination/{id}                   | Get a specific province by ID        |
| GET    | /provincedestination/province/{name}        | Get a specific province by name      |
| POST   | /provincedestination                        | Create any province (admin)          |
| PATCH  | /provincedestination/{id}                   | Update any province (admin)          |
| DELETE | /provincedestination/{id}                   | Delete any province (admin)          |

**Example Requests :**

**POST : http://127.0.0.1:8888/provincedestination**
```
{
    "province_id": 23,
    "destination_id": 1
}
```
**PATCH : http://127.0.0.1:8888/provincedestination/{id}**
```
{
    "province_id": 23
}
```
### Restaurant Endpoints 

| Method | Endpoint                       | Description                                  |
| ------ | ------------------------------ | -------------------------------------------- |
| GET    | /restaurants                        | List all restaurant        |
| GET    | /restaurants/{id}                   | Get a specific restaurant by ID        |
| GET    | /restaurants/name/{name}            | Get a specific restaurant by name      |
| POST   | /restaurants                        | Create any restaurant (admin)          |
| PATCH  | /restaurants/{id}                   | Update any restaurant (admin)          |
| DELETE | /restaurants/{id}                   | Delete any restaurant (admin)          |

**Example Requests :**

**POST : http://127.0.0.1:8888/restaurants**
```
{
    "name": "The Khmer Kitchen",
    "address": "123 Sisowath Quay, Phnom Penh",
    "phone": "+8551234567",
    "email": "restaunrant@example.com",
    "website": null,
    "description": "Good taste!",
    "opening_hours": "6:00 - 19:00"
}
```
**PATCH : http://127.0.0.1:8888/restaurants/{id}**
```
{
    "name": "The Khmer Kitchen II"
}
```
### Province Restaurant Endpoints ( Pivot Table )

| Method | Endpoint                       | Description                                  |
| ------ | ------------------------------ | -------------------------------------------- |
| GET    | /provincerestaurant                        | List all restaurant        |
| GET    | /provincerestaurant/{id}                   | Get a specific restaurant by ID        |
| GET    | /provincerestaurant/restaurant/{name}      | Get a specific restaurant by name      |
| POST   | /provincerestaurant                        | Create any restaurant (admin)          |
| PATCH  | /provincerestaurant/{id}                   | Update any restaurant (admin)          |
| DELETE | /provincerestaurant/{id}                   | Delete any restaurant (admin)          |

**Example Requests :**

**POST : http://127.0.0.1:8888/provincerestaurant**
```
{
    "province_id": 13,
    "restaurant_id": 12
}
```
**PATCH : http://127.0.0.1:8888/provincerestaurant/{id}**
```
{
    "province_id": 13
}
```

## Default Users

After seeding the database, the following users are available:

**Admin**

* Email: `admin@example.com`
* Password: `password123`

**Regular User**

* Email: `user@example.com`
* Password: `password123`

## Testing

To run the tests:

```bash
php -S 127.0.0.1:8888 -t public
```

## License

This project is open-source software licensed under the [MIT license](LICENSE).
