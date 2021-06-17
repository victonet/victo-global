<!DOCTYPE html>
<html lang="en">

<!-- 
    @Victo Technologies.
    @dated: 22-4-2021
    @Version 2
 -->
 
 <!-- Head -->
 <?php include $_SERVER["DOCUMENT_ROOT"] . "/global/static/includes/head.php"; ?>
 <head>
 <title>Contact us - Victo Global</title>
 </head>

 <style>
 
    .bg_1{
        background: #CBFFEE;
    }
    #contact{
        display: flex;
        height: auto;
        padding: 3rem 0;
        align-items:center;
        width: 90%;
        margin: auto;
        justify-content: center;
    }
    
    .col_1{
        text-align: center;
        margin-bottom: 3rem;
    }
    .col_1 h1{
        font-size: 2rem;
        margin-bottom: 10px;
    }
    .col_1 p{
        font-size: 20px;
        width: 60%;
        margin: auto;
    }

    /* Social Icons */
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

        /* Mail */
        .mail{
            display: block;
            margin-top: 20px;
            color: #000;
            text-underline-position: under;
            text-underline-offset: 3px;
            font-size: 20px;
            font-family: VictoCA-Medium;
        }


    .col_2{
        display: flex;
        justify-content: center;
        margin-top: 3rem;
    }
    /* Form */
    form h1{
        color: #000;
        font-size: 2rem;
        margin-bottom: 20px;
    }
    form{
        width: 500px;
        border: 2px #000 solid;
        padding: 40px;
        
    }

    input, textarea{
        width: 100%;
        outline: none;
        border: none;
        font-family: VictoCA-Medium;
        
    }

    input, textarea{
        padding: 10px 7px;
        border: none;
        background: none;
        border-bottom: 2px #000 solid;
        border-left: 2px #000 solid;
    }
    input{
        font-size: 18px;
        margin: 6px 0 20px 0;
        color: #000;
    }

    textarea{
        resize: vertical;
        width: 100%;
        font-size: 18px;
        margin-top: 6px;
        color: #000;
    }

    /* Placeholder Styling / Yes! copied from w3schools.com */
    ::placeholder {
        color: #000;
        opacity: .8; /* Firefox */
        z-index: -1;
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #000;
        z-index: -1;
    }
    
    ::-ms-input-placeholder { /* Microsoft Edge */
        color: #000;
        z-index: -1;
    }

    .submit_btn{
        background: none;
        color: #000;
        border: 2px #000 solid;
        padding: 10px 25px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 1.8rem;
        text-transform: uppercase;
        font-family: VictoCA-Medium;
        transition: .2s;
    }
    .submit_btn:hover{
        background: #000;
        color: #fff;
        transition: .2s;
    }

    #my-form-status{
        margin: 10px 0
    }

    @media screen and (max-width: 1024px) {
        
        .col_1 p{
            width: 100%;
        }
        /* Form */
        form{
            width: 100%;
        }
    }

 </style>

<body id="body--desktop">

    <!-- Header -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/global/static/includes/header.php"; ?>

    <main>

        <!-- Section - 1 / Contact -->
        <div class="bg_1">
            <section id="contact">
            
                <div class="section_wrapper">

                    <!-- Left Contents -->
                    <div class="col_1">
                        <h1>Contact us</h1>
                        <p>Victo is all about customer experience and customer support. We are all ears to hear you queries and doubts.</p>

                        <div class="social-icons">
                            <a href="https://twitter.com/victoapp" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/victoapp" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="mailto:admin@victo.in" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
                        </div>

                        <a href="mailto:admin@victo.in"  class="mail">admin@victo.in</a>

                    </div>

                    <!-- Right Content and Form -->
                    <div class="col_2">
                        <form id="my-form" action="https://formspree.io/f/mknkwwjk" method="POST">
                            <h1>Contact Form</h1>
                    
                            <input type="text" name="name" id="name" for="name" placeholder="Your Name" required><br>
                    
                            <input type="email" name="email" id="email" for="email" placeholder="Your Email" required><br>
                    
                            <textarea name="message" id="message" for="message" placeholder="Your Message" cols="30" rows="5" required></textarea><br>
                            <button type="submit" class="submit_btn">Send</button>
                            <p id="my-form-status"></p>
                        </form>
                    </div>
                </div>

            </section>
        </div>
        
    </main>

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/global/static/includes/footer.php"; ?>
    
</body>

<script>
    var form = document.getElementById("my-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        status.innerHTML = "Thanks for your submission!";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>

</html>