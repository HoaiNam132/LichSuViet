<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Article Title</title>
    <style>
        .linkTN {
            display: inline-block;
            color: white;
            font-size: 16px;
            text-decoration: none;
            font-weight: bold;
            background-color: #004C99;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 7px;
        }

        article {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        iframe {
            width: 80%;
            height: 390px;
            border: none;
            border-radius: 8px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 3px;
        }

        p {
            text-align: justify;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        @media only screen and (max-width: 600px) {
            body {
                margin: 10px;
            }

            article {
                padding: 15px;
            }

            iframe {
                width: 100%;
                height: 300px;
            }

            .linkTN {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <article>
        <h1><b>KHÁNG CHIẾN CHỐNG PHÁP </b></h1>
        <img src="img/phap3.jpg" alt="Image 1">
        <p></p>
        <a href="nhandannambo1945.php?id=<?php echo $id?>" class="linkTN">Click vào làm trắc nghiệm chủ đề KC chống Pháp (1945) </a>
        <a href="" class="linkTN">Click vào làm trắc nghiệm chủ đề Kháng chiến chống Pháp</a>
    </article>

    <!-- <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer> -->
</body>

</html>
