<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<H1>Employee Managment System</H1>
<p>Uses employee database  </p>
------------
Table Admin:
------------
AID(P-K)
USER_NAME
PASSWORD
------------

----------------
Table Employee:
----------------
EID(P-K)
FIRSTNAME
LASTNAME
CNIC
PHONE
EMAIL
HOMEADDRESS
DEPARTMENT
DESIGNATION
STARTDATE
WORKSTATUS
---------------

---------------
Table Leave
---------------
LID(P-K)
EID(F-K)
STARTLEAVEDATE
ENDLEAVEDATE
REASON
PRIORITY
STATUS
---------------

