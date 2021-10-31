
# MKT Laravel Test

Repositori ini adalah bagian dari proses rekrutmen PT. MEDIA KREATIF TEKNOLOGI untuk posisi Web Developer. Pada Test ini diuji pemahaman mengenai Framework Laravel.

<br>

## Tech Stack

- PHP (Laravel)
- MySQL

<br>
  
## Installation


```bash
  git clone git@github.com:ahmadnurfadilah/mkt-test.git
  cd mkt-test
  composer install
  cp .env.example .env
```
**jangan lupa untuk menyesuaikan file .env**

<br>

## Setup Database & Seeder
Lewati langkah ini apabila sudah terdapat database pada PC kamu

```bash
  php artisan migrate --seed
```
    
<br>

## Usage

Jalankan perintah

```bash
  php artisan serve
```

Akses [localhost:8080](http://localhost:8000) pada browser/postman

<br>

### Authentication:
- Authorization : Basic Auth
    - Username : admin
    - Password : 12345678
- API Header :
    - Key : TEST-API
    - Value : abcdzxcvbn

<br>

### Available Route
1. Import data dari tabel **raw** ke tabel **rapot**
    > http://localhost/mkt/api/siswa/import (POST)
2. List Siswa
    > http://localhost/mkt/api/siswa/list (GET)
    Optional parameter: kota, kelas
3. List Siswa (Per Kota, Per Kelas)
    > http://localhost/mkt/api/siswa/kota (GET)

<br>

---

<br>

##### Regards

**[Ahmad Nurfadilah](https://ahmadnf.xyz)** (**[@ahmadnf.xyz](https://www.instagram.com/ahmadnf.xyz)** \)\
_Full-Stack Web Developer_
