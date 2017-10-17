### Документация к сервису регистрации для беспилотного космического корабля

Форма отсылает запрос о регистрации нового сотрудника корабля в следущем формате:

```
Method: POST
URI: http://my.spaceship.com/api/user/register/?email={email}&password={password}&name={name}&phone={phone}&domain={domain}
// Headers: 
Host: my.spaceship.com
Content-Type: text/html;charset=utf-8
```
