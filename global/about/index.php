<!DOCTYPE html>
<html lang="en">

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/global/static/includes/head.php"; ?>
    
    <head>
        <title>About us - Victo Global</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    </head>

    <style>

        main{
            background-color: rgba(127, 255, 212, 0.404);
        }
        #about-us{
            display: flex;
            width: 90%;
            height: 85vh;
            align-items: center;
            margin: auto;
            text-align: center;
            justify-content: center;
        }
        .about-us__wrapper h2{
            font-size: 40px;
        }
        .content-wrapper{
            width: 70%;
            margin: auto;
            margin-top: 20px;
        }
        .content-wrapper p{
            font-size: 18px;
            font-weight: 600;
        }
        .social-icons{
            border: 2px rgb(66, 66, 66) solid;
            border-radius: 25px;
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
        }
        .social-icons a{
            color: rgb(90, 90, 90);
            font-size: 25px;
            padding: 15px;
            font-family: VictoCA-Regular;
            transition: .3s;
        }
        .social-icons a:hover{
            color: #000;
            transition: .3s;
        }

        @media screen and (max-width: 1024px) {
            #about-us{
                height: auto;
                padding: 30px 0 30px 0;
            }
            .content-wrapper{
                width: 90%;
            }
        }
    </style>

<body>

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/global/static/includes/header.php"; ?>

    <main>

        <!-- Section 1 / About Us -->
        <section id="about-us">
            <div class="about-us__wrapper">
                <h2>About Us</h2>
                <div class="content-wrapper">
                    <p>
                    Victo is a technology company and the company works on a problem-solving platform. Where as we are developing fintech services to make payment easier and secure than before. The company was founded in 2020 as a social media platform and later changed to a technology company and providing direct public services.
                    </p><br>
                    <p>
                        Our company is working on new innovative technologies and using it for easier life. We developed futuristic web services, by providing cheap web development and services. VictoWeb has everything you need it for the web. VictoCyber is working on providing SSL services as soon as possible.
                    </p><br>
                    <p>
                        Victo will be always ready forward and anyone can contact Victo for queries.
                    </p><br>
                </div>
                <div class="social-icons">
                    <a href="https://twitter.com/victoapp" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/victoapp" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:admin@victo.in" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </section>

    </main>

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/global/static/includes/footer.php"; ?>
    
    
</body>
</html>