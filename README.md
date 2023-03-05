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