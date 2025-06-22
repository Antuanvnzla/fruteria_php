 <?php
    header("Expires: Sun, 28 Jul 2024 06:02:34 GMT");
    header("Cache-Control: no-cache");
    header("Connection: keep-alive");  
    header("Accept: */*");  
    header("Content-Type: text/html; charset=utf-8");
    header("Content-Language: de-DE");  
    header("Content-Length: 10000"); 
    header("User-Agent: Mozilla/5.0 (platform; rv:geckoversion) Gecko/geckotrail Firefox/firefoxversion");  
    header("HTTP/1.0 404 Not Found"); 
    header( "refresh:10;url=http://www.google.cat" );
?>
 <!DOCTYPE html>
    <html lang="ca">
        <body>
            <p>Llistat de capçaleres HTTP</p>
         
            <?php
                print_r(headers_list());
            ?>
        </body>
    </html>