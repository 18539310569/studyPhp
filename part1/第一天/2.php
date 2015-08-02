<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>PHP实例</title>
    </head>
    <body>
        <h2>PHP实例:在HTML中嵌入php的方式:</h2>
        <h3>第一种：标准风格：使用&lt;?php ... ?&gt; </h3>
        <h4>今天是：<?php echo date("Y-m-d"); ?></h4>
        
        <h3>第二种：长风格：使用&lt;script language="php"&gt; ... &lt;/script&gt; </h3>
        <h4>今天是：<script language="php"> echo date("Y-m-d"); </script></h4>
    
        <h3>第三种：短风格：使用&lt;? ... ?&gt; 需要开启：short_open_tag </h3>
        <h4>今天是：<? echo date("Y-m-d"); ?></h4>
        
        <h3>第四种：ASP风格：使用&lt;% ... %&gt; 需要开启：asp_tags </h3>
        <h4>今天是：<% echo date("Y-m-d"); %></h4>
    
    
    </body>
</html>