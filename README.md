# Router
Router it's an easy PHP route provider

# Usage
1. Import and edit the .htaccess, you have to edit the document root
    ```
    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ /index.php?route=$1 [L,QSA]
    ```
2. Import the router singleton class 
    ```
    require_once 'inc/Router.php';
    ```
3. Setup your custom routes with a path and a callback (use : for the variables)
    ```
    Router::route('/users', function() {
      echo 'Hi! :)';
    });
    
    Router::route('/user/:id', function($id) {
      echo 'The id is '.$id;
    });
    ```
4. Have fun :)
