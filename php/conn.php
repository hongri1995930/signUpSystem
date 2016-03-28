<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
       <?php
            $conn=mysql_connect("127.0.0.1","root","apple");
            mysql_query("set names 'UTF_8'");
            mysql_select_db("international",$conn);
        ?> 
    </body>
</html>