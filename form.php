<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Up Form</title>

    <link rel="stylesheet" href="./CSS/form.css">
    <link rel="shortcut icon" href="./Images/shortcutIcon.png" type="img">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,
700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,200;1,300;1,400;1,500;1,600;1,700&
family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <header>
            <nav>
                <div class="header">
                    <div class="logo">
                        <a href="./index.html"><img src="./Images/logoBlack.png" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <ul type="none">
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="#">About</a></li>
                            <a href="#"><img class="icon" src="./Images/Avatar.png" alt="icon" height="35px"
                                    width="35px"></a>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section>
            <div class="container">
                <div class="form">
                    <div class="section-header">
                        <h3 class="title">Fill all the details</h3>
                    </div>
                    <form action="orderDetails.php">
                        <div class="details">
                            <div class="small-fields">
                                <div class="row">
                                    <label for="title">Logo Title</label>
                                    <input type="text" name="logo" id="logo" placeholder="Eg: Company Name" required>
                                </div>
                                <div class="row">
                                    <label for="type">Company Type</label>
                                    <input type="text" name="type" id="type" placeholder="Eg: Marketing Company"
                                        required>
                                </div>
                                <div class="row">
                                    <label for="slogan">Slogan</label>
                                    <input type="text" name="slogan" id="slogan" placeholder="Eg: Company Slogan"
                                        required>
                                </div>
                                <div class="row">
                                    <label for="color">Theme Colors</label>
                                    <input type="text" name="color" id="color"
                                        placeholder="Eg: Color name or color code" required>
                                </div>
                            </div>
                            <div class="input-field">
                                <label for="image">Reference Image</label>
                                <div class="ref-image"><input type="file" onchange="readURL(this)" accept="image/*"
                                        name="image" id="image" placeholder="Upload Image" required>
                                </div>
                            </div>
                            <div class="input-field">
                                <label for="message">Additional Details of Messages</label>
                                <!-- <input type="text" name="message" id="message" placeholder="" required> -->
                                <textarea name="message" id="message" cols="30" rows="15"></textarea>
                            </div>
                            <div class="small-fields">
                                <div class="row">
                                    <label for="slogan">Delivery Time</label>
                                    <input type="text" name="deliver" id="deliver" placeholder="" required>
                                </div>
                                <div class="row">
                                    <label for="color">Price</label>
                                    <input type="text" name="price" id="price" placeholder="" required>
                                </div>
                            </div>
                            <div class="button">
                                <a href="#" class="btn small">Select</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>