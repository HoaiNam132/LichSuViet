<?php
    include "header.php";
    ?>
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            text-align: center;
        }

        .khoi {
            font-size: 29px;
            font-weight: bold;
            color: #144d8e;
            background-color: rgb(249, 249, 249); /* Corrected background color property */
            border: 2px solid #144d8e;
            border-radius: 10px;
            width: 200px;
            padding: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .khoi:hover {
            background-color: #144d8e;
            color: white;
        }

        @media only screen and (max-width: 600px) {
            .khoi {
                font-size: 20px; /* Adjust the font size for smaller screens */
                width: 50%; /* Make the button take up 80% of the screen width */
            }
        }
    </style>
</head>

<body>
 
<p></p> 
    <a href="thongbao.html" class="khoi">Lớp 10</a><p></p>
    <a href="thongbao.html" class="khoi">Lớp 11</a><p></p>
    <a href="tailieulop12.php?id=<?php echo $id ?>" class="khoi">Lớp 12</a><p></p>

</body>

</html>
