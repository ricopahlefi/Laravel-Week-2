<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Disini Jual Kopi.</title>
    <link href="{{url('public')}}/img/favicon.png" rel="shortcut icon"/>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
    <link rel="stylesheet" href="{{url('public')}}/css/fullview.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div id="shopping">
                <i class="fas fa-cart-plus"><sup id="items-added"></sup></i>
            </div>
            <div class="images">
                <h2>Grinder Latina</h2>
                <div class="slider"><img id="big-image" src="{{url('public')}}/img/1.jpg" alt=""></div>
                <div id="img-slider" class="img-slider">
                    <div class="imgs"><img id="Nomos1" src="{{url('public')}}/img/1.jpg" alt=""></div>
                    <div class="imgs"><img id="Nomos2" src="{{url('public')}}/img/1.jpg" alt=""></div>
                    <div class="imgs"><img id="Nomos3" src="{{url('public')}}/img/1.jpg" alt=""></div>
                </div>
            </div>
            <div class="infos">
                <h1>Grinder Latina</h1>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">
                    <h3>$30.3</h3>
                    <h3>$46.5</h3>
                </div>
                <div id="info-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum qui ipsa minima! Obcaecati animi quidem quam. Minima itaque, unde obcaecati asperiores veniam culpa, repellendus cupiditate modi, cumque ipsam sit neque enim excepturi molestias beatae, quidem quis laboriosam iste fuga porro maiores exercitationem aperiam velit. Ipsa itaque odio animi nostrum nulla?</p>
                </div>
                <div class="quantity">
                    <h3>QUANTITY</h3>
                <input type="number" name="items" id="counter" min="1" value="1">
            </div>
                <div class="buttons">
                    <form>
                        <button formaction="{{url('/')}}">BACK</button>
                        <button formaction="{{url('/')}}"><i class="fas fa-shopping-cart"></i> BUY NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('public')}}/js/fullview.js"></script>
</body>
</html> 