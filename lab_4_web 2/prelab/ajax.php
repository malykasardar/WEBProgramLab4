<!DOCTYPE html>
<html>
    <head>
        <script>
            function loadXMLDoc()
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","text.txt", true);
                xmlhttp.send();
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("myBut").innerHTML=xmlhttp.responseText;
                    }
                }
            }
        </script>

    </head>
    <body>
        <img src="me.png" alt="me">
        <h2>Me<h2>
            <button id ="myBut" type="button" onclick="loadXMLDoc()">Like</button>
    </body>
</html>
