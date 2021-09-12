## Laravel_8_PHP

Projeto com fins didáticos

## Packages

*Sanctum

## Run project
php artisan serve

## Routes

# LOGIN
var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify({
  "email": "markusmak@gmail.com",
  "password": "123123123"
});

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

# REGISTER
fetch("http://127.0.0.1:8000/api/login", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));


var myHeaders = new Headers();
myHeaders.append("Accept", "application/json");
myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify({
  "name": "Markus Lima",
  "email": "markus@gmail.com",
  "password": "123123123",
  "confirm_password": "123123123"
});

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("http://127.0.0.1:8000/api/register", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));


# LOGOUT
var myHeaders = new Headers();
myHeaders.append("Authorization", "Bearer 14|YMMugRVgjrqXb79JWAUEua0sWSV9xUFji6kKO0cj");
myHeaders.append("Cookie", "XSRF-TOKEN=eyJpdiI6IiswQVQ1OGRnTUwxWXkwVVBGU1l5aVE9PSIsInZhbHVlIjoiWm1MWWorK3lUMWZqS0V6cGIzd0ZsMzIwQVJDSVpsMFY3SmxiUURvVzJ6VGh2WTlLSXVWNjZsallYZzd2Vi85bDFMbis0clU5UE1pcDZlakZSTm9ZUDVNS0xyYVRlY3RhdkovVUQwU2tlRlhjTWZ6Um56ZEltU1AwYWdJNEQ4WUYiLCJtYWMiOiIwMjliMzhhOTI3NGU2YzFmNTFhZmM2MzgyZTI1MmY3NmM1MzQ1YmRjN2QxM2UxMjc0MWIwYjczOWE3NDhjNDFhIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlhRWmpRNnVEenRNY0tWeUg3a0RVVmc9PSIsInZhbHVlIjoiU2NCK3ZIUzNFWkM0UmNkSHhTNnNLdncvU0xGZFFFcndjUFBmTFYzdldoMklsTXprVXAzWnVuYjg2MWpDMDk2MEREbVNhUnphYWwydGRwYnJUUnRQYkEzR3NuS3REem1IUWNvZ1ZVQ3pmZms2Ui9DSklrZ3BLb1RVSWtQWlF0cXgiLCJtYWMiOiI4NTU2Mzc3NDZiYmZlZGRkM2Q2NTE0NmMzYjk4YzBlY2Y2MDMzMzdiMzU5NmE0MTJiODk1ZTk2NjBmMGI2M2UwIiwidGFnIjoiIn0%3D");

var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow'
};

fetch("http://127.0.0.1:8000/api/user_logout", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));

# INFORMAÇÔES DE USER

var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");
myHeaders.append("Accept", "application/json");
myHeaders.append("Authorization", "Bearer 12|7bD9RVfbQzDZTz988G661QCGIhHfJfKDYCXHfzWJ");
myHeaders.append("Cookie", "XSRF-TOKEN=eyJpdiI6IiswQVQ1OGRnTUwxWXkwVVBGU1l5aVE9PSIsInZhbHVlIjoiWm1MWWorK3lUMWZqS0V6cGIzd0ZsMzIwQVJDSVpsMFY3SmxiUURvVzJ6VGh2WTlLSXVWNjZsallYZzd2Vi85bDFMbis0clU5UE1pcDZlakZSTm9ZUDVNS0xyYVRlY3RhdkovVUQwU2tlRlhjTWZ6Um56ZEltU1AwYWdJNEQ4WUYiLCJtYWMiOiIwMjliMzhhOTI3NGU2YzFmNTFhZmM2MzgyZTI1MmY3NmM1MzQ1YmRjN2QxM2UxMjc0MWIwYjczOWE3NDhjNDFhIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlhRWmpRNnVEenRNY0tWeUg3a0RVVmc9PSIsInZhbHVlIjoiU2NCK3ZIUzNFWkM0UmNkSHhTNnNLdncvU0xGZFFFcndjUFBmTFYzdldoMklsTXprVXAzWnVuYjg2MWpDMDk2MEREbVNhUnphYWwydGRwYnJUUnRQYkEzR3NuS3REem1IUWNvZ1ZVQ3pmZms2Ui9DSklrZ3BLb1RVSWtQWlF0cXgiLCJtYWMiOiI4NTU2Mzc3NDZiYmZlZGRkM2Q2NTE0NmMzYjk4YzBlY2Y2MDMzMzdiMzU5NmE0MTJiODk1ZTk2NjBmMGI2M2UwIiwidGFnIjoiIn0%3D");

var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow'
};

fetch("http://127.0.0.1:8000/api/user", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));



## ETAPAS

# Rotas de Authenticação concluidas
# Próxima etapa relacionamento nos models