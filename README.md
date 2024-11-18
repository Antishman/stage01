
# Simple Web Server with Laravel

This project sets up a basic web server using Laravel with three routes that respond with static messages.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Running the Server](#running-the-server)
- [Testing the Routes](#testing-the-routes)
- [Expected Responses](#expected-responses)

## Requirements

- PHP (>= 7.3)
- Composer
- Laravel (This project uses Laravel 8 or later)

## Installation

1. **Clone the Repository**

   Clone this repository to your local machine:

   ```bash
   git clone https://github.com/antishman/stage01.git
   cd stage01
   ```

2. **Install Dependencies**

   Run the following command to install the required Laravel dependencies:

   ```bash
   composer install
   ```

3. **Set Up Environment**

   Copy the `.env.example` file to create your own `.env` file:

   ```bash
   cp .env.example .env
   ```

   Then, generate the application key:

   ```bash
   php artisan key:generate
   ```

## Running the Server

To run the Laravel development server, execute the following command:

```bash
php artisan serve
```

This will start the server at `http://localhost:8000`.

## Testing the Routes

You can test the routes using a web browser or a REST client like Postman. The following endpoints are available:

- **GET /name**: Returns your full name.
- **GET /hobby**: Returns your favorite hobby as a JSON object.
- **GET /dream**: Returns a motivational message about your dream or goal in life.

## Expected Responses

- **GET /name**
  - Response: `Anteneh`
  
- **GET /hobby**
  - Response: 
    ```json
    {
      "hobby": "meditation"
    }
    ```
  
- **GET /dream**
  - Response: `To feel whole, to be alive`

## License

This project is open-source and available under the [MIT License](LICENSE).
```

### Instructions to Modify

1. Replace `antishman` in the clone URL with your actual GitHub username or the appropriate repository link.
2. If you have additional setup steps or configurations, feel free to add them to the README.