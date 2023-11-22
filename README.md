# Book shop
## Web-site made using PHP, MySQL, JS(JQuery), HTML5 & CSS3
### Models, views, JS' & controllers
Models are used to get entity or entities from database. <br />
Controllers are used to control web-site by database with no direct access to database itself. <br />
Views are just visual pages or UIs. <br />
JS' are used to send requests from **views** to **controllers** and get responses from them.

### Authorization and Registration
authorization.php & registration.php are **views** where user is authorizing or registrating. <br />
authorization.php **view** uses users.php **model** to check if user put valid and existing values(login, password). <br />
If user is valid the session starts and sets user_id and role_id keys which will be used for features' access. <br />
registration.php **view** uses register.php **controller** to create new user in database with "user" role. <br />
If user've just created new account by registrating it he automatically gets authorized in this account and gets redirected to index.php **view**(also known as "Home page"). <br />
**ALL** the pages except for **authorization.php**, **registration.php** and **not-accessable.php** are using auth.php **controller** which checks if user is authorized. <br />
**ONLY** authorized user has access to the web-site. <br />

### Roles
User gets redirected to the not-accessable.php **view** if he doesn't have enough permission to access any feature he wants to use. <br />
There're 3 roles:
- user;
- moderator;
- administrator.

**User** can watch through catalog and apply filters. <br />
**Moderator** has access to user features and permission to edit and create new books using database. <br />
**Administrator** has access to moderator features and permission to delete books from database. <br />

### Filtration
Catalog gets filtered by inputs from GET request: index.php **view** has inputs on top which on submit redirects user to the same page with parameters from GET request. Then these parameters are going to the books.php **model** where they're getting extracted from GET request and being sorted(if parameter is empty or -1 it doesn't go to final SQL-query). <br />
If there're no used parameters catalog is loading as usual. <br />
If there're parameters that exist in database(such as author or genre) the books.php **model** creates a SQL-query with these parameters and responses with an array of filtered books. <br />
If there's a parameter that **DOES NOT** exist in the database the books.php **model** doesn't count it as valid parameter and skips it. 
