## Information
projek ini masi banyak bug

## Installation

Clone projek ini dengan command

```bash
git clone https://github.com/ahmadsutrio/Sewa-Bus.git
```
dan jalankan command

```bash
composer install
```
jalankan perintah untuk menggenerate key dengan command

```bash
php artisan key:generate
```

ubah "env.example" menjadi .env

pastikan sudah mengimport file sql yang ada di folder db dengan nama "balenong"

pastikan DB_DATABASE di file .env sudah sesuai dengan nama database


## Usage

untuk menjalankan projek gunakan command

```bash
php artisan serve
```
atau

```bash
php artisan serve --port=8001
```
