
![Logo](https://www.linkpicture.com/q/Screenshot-2023-03-03-152617.png)


Lampurl is a free tools used to shorten link and url.

Visit site http://lampurl.herokuapp.com/app



## Tech Stack

**Framework:** Laravel 9

**PHP version:** PHP ^8.0.2

**MYSQL, NodeJS**


## Environment Variables

To run this project, you will need to set the following environment variables to your .env file

`APP_URL` eg. http://localhost:8000 (include the port)

`DB_DATABASE` 

## Run Locally

Clone the project

```bash
  git clone https://github.com/yrombacatan/lampurl.git
```

Go to the project directory

```bash
  cd lampurl
```

Install dependencies

```bash
  composer install
```

Generate app key

```bash
  php artisan key:generate
```

Run migration (make sure to set database in .env)

```bash
  php artisan migrate
```

Run script

```bash
  php artisan serve
```

Run Testcase (2 should passed and  1 should fail)

```bash
  php artisan test --testsuite=Feature
```