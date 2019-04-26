<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<H1>Employee Managment System</H1>
<p>Uses employee database (REST API) </p>

<p>
------------
    <br>
Table Admin:
    <br>
------------
    <br>
AID(P-K)
    <br>
USER_NAME
    <br>
PASSWORD
    <br>
------------
<br>
----------------
    <br>
Table Employee:
    <br>
----------------
    <br>
EID(P-K)
    <br>
FIRSTNAME
    <br>
LASTNAME
    <br>
CNIC
    <br>
PHONE
    <br>
EMAIL
    <br>
HOMEADDRESS
    <br>
DEPARTMENT
    <br>
DESIGNATION
    <br>
STARTDATE
    <br>
WORKSTATUS
    <br>
---------------
<br>
---------------
<br>
Table Leave
    <br>
---------------
<br>
LID(P-K)
    <br>
EID(F-K)
    <br>
STARTLEAVEDATE
    <br>
ENDLEAVEDATE
    <br>
REASON
    <br>
PRIORITY
    <br>
STATUS
    <br>
---------------
    <br>
</p>

<p>To get user data => http://127.0.0.1:8000/getData</p>
<p>To get leave data => http://127.0.0.1:8000/getLeave</p>
<p>To get leave status data => http://127.0.0.1:8000/employeeLeaveStatus/{id}</p>
<p>To change leave status data => http://127.0.0.1:8000/LeaveStatusChange/{id}/{status}</p>

