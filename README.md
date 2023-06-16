# Poverty Analisyst

hayo whatsapp guys kali ini kita sedang membangun projek pemetaan kemiskinan semoga bisa membantu kita kita yang perlu dibantu

Fitur :
login,regist,add account,forgot account with myth/auth

## Cara Instalasi

- clone repository pada device dengan cara

``` bash
git clone https://github.com/pacong12/poverty_analyst
```

- Rename file `.env copy` menjadi `.env`
- Lakukan update pada composer dengan `composer update`
- Lakukan migrasi pada database dengan `php spark migrate`
- Ubah file `Auth.php` dalam folder `vendor/myth/auth/src/Config/`

    ```php
        'login'           => 'Myth\Auth\Views\login',
        'register'        => 'Myth\Auth\Views\register',
        'forgot'          => 'Myth\Auth\Views\forgot',
        'reset'           => 'Myth\Auth\Views\reset',
        'emailForgot'     => 'Myth\Auth\Views\emails\forgot',
        'emailActivation' => 'Myth\Auth\Views\emails\activation',
    ```
    
    menjadi 

    ```php
        'login'           => 'App\Views\auth\login',
        'register'        => 'App\Views\auth\register',
        'forgot'          => 'App\Views\auth\forgot',
    ```
    
- Jalankan program dengan perintah `php spark serve`
