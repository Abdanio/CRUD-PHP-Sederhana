# PHP CRUD Application

This is a simple PHP CRUD (Create, Read, Update, Delete) application that demonstrates basic database operations using PHP and MySQL.

## Project Structure

```
php-crud-app
├── src
│   ├── create.php       # Handles the creation of new records
│   ├── read.php         # Retrieves and displays records
│   ├── update.php       # Allows updating of existing records
│   ├── delete.php       # Handles deletion of records
│   └── db
│       └── connection.php # Establishes database connection
├── index.php            # Entry point for the application
├── composer.json        # Composer configuration file
└── README.md            # Project documentation
```

## Requirements

- PHP 7.0 or higher
- MySQL database
- Composer for dependency management

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/microsoft/vscode-remote-try-php.git
   ```

2. Navigate to the project directory:
   ```
   cd php-crud-app
   ```

3. Install dependencies using Composer:
   ```
   composer install
   ```

4. Configure the database connection:
   - Open `src/db/connection.php` and update the database credentials.

5. Create the necessary database and tables:
   - Use the provided SQL scripts (if any) or create tables manually based on the application requirements.

6. Run the application:
   - Start a local server and navigate to `index.php` to access the CRUD operations.

## Usage

- Use the navigation links in `index.php` to create, read, update, or delete records.
- Follow the prompts on each page to perform the desired operations.

## License

This project is open-source and available under the MIT License.