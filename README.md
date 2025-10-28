# formation-github

## Web API - Timezone Information

This is a PHP 8.3+ web API built following **Clean Code** principles and **Domain-Driven Design (DDD)** architecture. The API provides an endpoint to retrieve the current time in various countries.

### Architecture

The project follows DDD layered architecture:

- **Domain Layer** (`src/Domain/`): Core business logic
  - Entities: `TimeInfo`
  - Value Objects: `Country`
  - Repository Interfaces: `TimeRepositoryInterface`

- **Application Layer** (`src/Application/`): Use cases
  - `GetCurrentTimeForCountry`: Main use case

- **Infrastructure Layer** (`src/Infrastructure/`): Technical implementations
  - `TimeRepository`: Implements timezone logic

- **Presentation Layer** (`src/Presentation/`): API endpoints
  - Controllers: API endpoints with Route attributes
  - Routing: Custom routing system with PHP 8+ attributes

### Installation

```bash
composer install
```

### Running the API

Start the PHP built-in server:

```bash
cd public
php -S localhost:8000
```

### API Endpoint

**GET** `/api/data`

Returns the current time in France.

**Example Response:**
```json
{
  "message": "France => 11:09"
}
```

### Supported Countries

- France
- USA
- Japan
- Australia
- Brazil
- UK
- Germany
- India
- China
- Canada

### Features

- PHP 8.3+ with modern features (readonly classes, attributes)
- Clean Code principles
- Domain-Driven Design architecture
- PSR-4 autoloading
- Custom routing system with attributes
- Timezone support via PHP DateTimeZone