# demo_jwt_api_project
JWT authentication in Symfony 7.2 (API)
 1. API Register, Login And Logout (using lexik_jwt_authentication)
 2. Control Access
    register and login (any one can access these routes)
    profile page (access to user)
    dashboard  page (access to admin not to user)

# Installation:
 composer install

 .env variable are pushed in env.dev (change it according to your logins and passwords) 

# Start the server
 symfony server:start

# Default local web server
 http://127.0.0.1:8000 

# Routes
1. http://127.0.0.1:8000/api/register (POST) (By Default the role is user not admin)

HEADERS:
Content-Type: application/json

BODY:
{
  "email": "test@test.com",
  "password": "test123456"
}

RESPONSE:
{
  "message": "User registered successfully
}

2. http://127.0.0.1:8000/api/login (POST)
HEADERS:
Content-Type: application/json

BODY:
{
  "email": "test@test.com",
  "password": "test123456"
}

RESPONSE:
{
  "token": TOKEN_VALUE
}

3. http://127.0.0.1:8000/api/user/profile (GET)
HEADERS:
Content-Type: application/json
Authorization: Bearer TOKEN_VALUE

RESPONSE:
{
  "message": "Welcome, User!"
}

http://127.0.0.1:8000/api/admin/dashboard (GET)
HEADERS:
Content-Type: application/json
Authorization: Bearer TOKEN_VALUE

RESPONSE: 
Access Denied (403 Forbidden)
