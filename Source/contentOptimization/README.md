# Content Optimization

## How to use

### Server-side settings

 1. Install an Apache(Lampp is also fine) or Nginx server on the machine.(install it somewhere that doesn't require root permission)
 2. Add the following in the .htaccess of your server:

     <IfModule mod_headers.c>
     Header set Access-Control-Allow-Origin "*"
     </IfModule>
 
 3. Take a look at __sql\_trials.php__ under the __code__ directory.
 4. Change the database credentials accordingly in all the files inside __code__ and in __php__.
 5. Set your database up according to the __sql\_schema.txt__ file.


### Client-side settings

 1. Paste either the __recommended.js__ or __recommended.min.js__ into the footer of every page on which optimization is to be implemented.
 2. Add the following submit button to a suitable location on your pages:

    "<form action = "<your server>/contentOptimization/code/php/contentoptimiser.php" method="POST" value="">
    <input type="hidden" id="vid1" name="visitor_id" value="mac" />
    <input type="submit" value="View Recommended Pages" /> 
    </form>"
 3. Click on this button to view recommended pages.