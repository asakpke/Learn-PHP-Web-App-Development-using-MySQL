# السلام علیکم ورحمتہ اللہ وبرکاتہ
Hi  
دوستو  

# Class Intro (*brief*): 
* Our Digital Product:
* Domain Knowledge
* Database Design
* CRUD Operation

# Course Intro (*brief*): Learn PHP Web App Development using MySQL
![](https://i.pinimg.com/originals/59/86/e6/5986e6c412706db74e73e2c01934f937.png)
* Course style 
	* Direct/fast
	* No Basics
* Have you checked basics (or advanced) resources from last class? 
	* Programming on phone course
	* My Paid Course: HTML
	* FWD Live Sessions
	* PHP Urdu Book 
	* W3Schools
		* HTML
		* CSS
		* JS
		* PHP
		* SQL
	* DigiSkills
* Course Fee!
	* Don't worry :slightly_smiling_face:
	* Pay as you like!
	> Account Holder: Aamir Shahzad  
	> Account No: 52010100479581  
	> Bank Name: Meezan Bank  
	> City: Attock City  
	> Branch Code: 5201  
	> IBAN No: PK97MEZN0052010100479581  

# Instructor Intro (*brief*): Aamir Shahzad
* DCS, IDCS, IADCS, MCS
* Programming, Linux & Open Source
* RoshanTech
* Attock City
* [eSite.pk](http://esite.pk/)

# How to access XAMPP Server from Another PC
* Access from LAN IP
* How to download repo with code https://github.com/asakpke/Learn-PHP-Web-App-Development-using-MySQL

# Class
* Our Digital Product
	* Social Media Post Sharing Project
* Domain Knowledge
	* How social media works
	* Posts, comments, sharing, etc
* Database Design, in PhpMyAdmin, or other software
	* Create Database: social
	* Create Table: user with fields 
		* id
		* name 
			* maybe first name
			* last name
		* email
		* password
		* etc but it's enough for now
* Database CRUD Operation in PHP
	1. *C*reate Record
	2. *R*ead Record
	3. *U*pdate Record
	4. *D*elete Record
* Our Existing Knowledge?

## Our Existing Knowledge
* echo/print/other function, what's function?
* both can have ()

## Assumed Knowledge
* Variable
* Comments, //, /* Multi lines ... */
* if/elseif/else/switch statements
* loops for/while/do...while/foreach

## New Knowledge
* print_r()
* var_dump()
* die statement/function

## 0. Connect with the Database
* mysqli_connect(), return obj or false
### 0.php
```php
<?php
$connection = mysqli_connect(
	'localhost', // servername/IP, it's comment
	'root', // username
	'', // password
	'social' // Database name, notice no ","
);
```

## 1. CRUD Operation: Create Record
* mysqli_query(), return result or false

```sql
INSERT INTO tableName (columnName, columnName, ...) 
VALUES (value, value, ...)
```

### 1.php
```php
<?php
require '0.php';

mysqli_query(
	$connection,
	'INSERT INTO users (name, email, password) VALUES ("Aamir Shahzad", "Aamir@eSite.pk", "Hmmm, Why I told you?")'
);
```
## 2. CRUD Operation: Read Record
* mysqli_fetch_assoc()

```sql
SELECT columnName, columnName, ... 
FROM tableName
```

### 2.php
```php
<?php
$result = mysqli_query(
	$connection,
	'SELECT * FROM users'
);

while ($row = mysqli_fetch_assoc($result)) {
	print_r($row);
}
```

### Homework
* mysqli_fetch_row()
* mysqli_fetch_array()
* mysqli_fetch_column()

## 3. CRUD Operation: Update Record

```sql
UPDATE tableName
SET columnName = value, columnName = value, ...
WHERE Conditions
```

### 3.php
```php
<?php
mysqli_query(
	$connection,
	'UPDATE users SET name = "Sheikh Aamir Shahzad", email = "aamir@example.com" WHERE id = 1'
);
```

## 4. CRUD Operation: Delete Record

```sql
DELETE FROM tableName 
WHERE Conditions
```

### 4.php
```php
mysqli_query(
	$connection,
	'DELETE FROM users WHERE id = 1'
);
```

## Skipped Functions
* mysqli_close($connection), optional on file ending
* mysqli_connect_error()
	```php
	if (!$connection) {
		die('<h1>Could not connect with the database due to the following error:</h1>' . mysqli_connect_error());
	}
	```
* mysqli_error()
	```php
	echo '<h1>Error in executing query:</h1>' . mysqli_error($connection);
	```

# Ending