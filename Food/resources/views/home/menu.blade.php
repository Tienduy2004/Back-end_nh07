<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link href="{{ asset('/css/menu.css') }}" rel="stylesheet">
    <link rel="short icon" href="image/short_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!--Navigation Bar-->

    <nav>

        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="image/logo.png">
            </a>
        </div>

        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'current' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'current' : '' }}">About</a></li>
            <li><a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'current' : '' }}">Menu</a></li>
            <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'current' : '' }}">Gallery</a></li>
            <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'current' : '' }}">Blog</a></li>
        </ul>

        <div class="login">
            <a href="{{ route('login') }}">Login</a>
        </div>

    </nav>





    <!--Banner-->

    <div class="banner_bg">
        <h1>Our<span>Menu</span></h1>
    </div>



    <!--Menu-->

    <div class="menu">

        <div class="menu_box anim">

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_1.jpg">
                </div>

                <div class="menu_text">

                    <h2>Buger</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_2.jpg">
                </div>

                <div class="menu_text">

                    <h2>Drink</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_3.png">
                </div>

                <div class="menu_text">

                    <h2>Pizza</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_4.jpg">
                </div>

                <div class="menu_text">

                    <h2>Onion Ring</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_5.webp">
                </div>

                <div class="menu_text">

                    <h2>Biryani</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_6.jpg">
                </div>

                <div class="menu_text">

                    <h2>Potato Chips</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_7.webp">
                </div>

                <div class="menu_text">

                    <h2>Lasagna</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_8.jpg">
                </div>

                <div class="menu_text">

                    <h2>Ice-Cream</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_9.jpg">
                </div>

                <div class="menu_text">

                    <h2>Chocolate</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_10.jpg">
                </div>

                <div class="menu_text">

                    <h2>Pasta</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_11.jpg">
                </div>

                <div class="menu_text">

                    <h2>Starbucks</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>
            
            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_12.jpg">
                </div>

                <div class="menu_text">

                    <h2>Hot Dog</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_13.jpg">
                </div>

                <div class="menu_text">

                    <h2>Sandwich</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_14.jpg">
                </div>

                <div class="menu_text">

                    <h2>Muffin</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_15.jpg">
                </div>

                <div class="menu_text">

                    <h2>Sausage</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_16.jpg">
                </div>

                <div class="menu_text">

                    <h2>Cake</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_17.jpg">
                </div>

                <div class="menu_text">

                    <h2>Burrito</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_18.webp">
                </div>

                <div class="menu_text">

                    <h2>Bacon</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_19.jpg">
                </div>

                <div class="menu_text">

                    <h2>Donuts</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_20.jpg">
                </div>

                <div class="menu_text">

                    <h2>Noodle</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_21.jpg">
                </div>

                <div class="menu_text">

                    <h2>Pancake</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_22.jpg">
                </div>

                <div class="menu_text">

                    <h2>Pretzel</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_23.jpg">
                </div>

                <div class="menu_text">

                    <h2>Taco</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_24.jpg">
                </div>

                <div class="menu_text">

                    <h2>Kottu</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Enim, animi nesciunt magni molestiae
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$100.00<sub><del>$120.00</del></sub></p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Order Now</a>

                </div>

            </div>

        </div>

    </div>




    <!--Footer-->

    <footer>

        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>USA</p>
                <p>India</p>
                <p>Japan</p>
                <p>Italy</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                <p>Gallery</p>
                <p>Blog</p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>+94 12 3456 789</p>
                <p>+94 25 5568 456</p>
                <p>johndeo123@gmail.com</p>
                <p>foodshop123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Services</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> WT Master Code</span></p>

    </footer>
    
</body>
</html>