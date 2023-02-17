@extends('frontEnd.master')
@section('title', 'FAQ')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">FAQ's</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <style type="text/css">


        .faq-heading{
            border-bottom: #777;
            padding: 20px 60px;
        }
        .faq-container{
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        .hr-line{
            width: 60%;
            margin: auto;

        }
        /* Style the buttons that are used to open and close the faq-page body */
        .faq-page {
            /* background-color: #eee; */
            color: #444;
            cursor: pointer;
            padding: 30px 20px;
            width: 60%;
            border: none;
            outline: none;
            transition: 0.4s;
            margin: auto;
        }
        .faq-body{
            margin: auto;
            /* text-align: center; */
            width: 50%;
            padding: auto;

        }
        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active,
        .faq-page:hover {
            background-color: #F9F9F9;
        }
        /* Style the faq-page panel. Note: hidden by default */
        .faq-body {
            padding: 0 18px;
            background-color: white;
            display: none;
            overflow: hidden;
        }
        .faq-page:after {
            content: '\02795';
            /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            color: #777;
            float: right;
            margin-left: 5px;
        }
        .active:after {
            content: "\2796";
            /* Unicode character for "minus" sign (-) */
        }
    </style>

    <div class="container">
        <main>
            <h1 class="faq-heading">Arbitrage Betting FAQs</h1>
            <section class="faq-container">
                <div class="faq-one">
                    <!-- faq question -->
                    <h1 class="faq-page">Is Arbitrage Betting Legal?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>There is no legal document with the gaming law that inhibits arbing or any related activity. The absence of such guidelines does not criminalise the activity. Therefore, until the day such legislation comes to effect, arbing is legal. However, bookmakers can prohibit its use on their platforms, which is still within their mandate.</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-two">
                    <!-- faq question -->
                    <h1 class="faq-page"> How to Recognise Sure Bets Opportunities?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>The most convenient way to not the odds valuation on markets is using an odds comparison site. It gives you an overview of the odds value among the listed bookmakers. Using the sure bet formula, find the total odds calculation that exceeds 100%. That is a sure bet opportunity. Join our whatsapp community for sure bet opportunities</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-three">
                    <!-- faq question -->
                    <h1 class="faq-page"> How Much Profit Can You Make via Arbing?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>It depends on the odds value of the outcome. However, most arbing opportunities give the gambler a 2-5% profit range. The number of stakes you make influences the take-home amount. Summing all these marginal profits can give you good returns. However, arbing doesn’t guarantee profits; it increases the chances of getting returns.</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-four">
                    <!-- faq question -->
                    <h1 class="faq-page"> Why Bookmakers Do Not Like Arbers?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>Betting always favours bookmakers. The more the number of outcomes in one market, the more the bookie benefits. However, arbing helps gamblers increase their chances of winning, which effectively reduced bookmakers’ earnings. It makes them dislike arbers and even blocks them from using their platform.</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-five">
                    <!-- faq question -->
                    <h1 class="faq-page">  How Much Money Do I Need to Get Started?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>The actual amount is a derivative of the number of accounts you have and the minimum amount per account. However, ensure you have a good amount in the account to benefit from the opportunity when it arises. The more you wager on a potential arber, the more profitable it becomes.</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-six">
                    <!-- faq question -->
                    <h1 class="faq-page">  What Is an Arbitrage Bet?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>It is when a bettor places simultaneous stakes on the same market but on different bookmakers. It involves placing bets on all possible outcomes of the same bets but on different bookmakers. The aim is to get returns on at least one market, which translates to a sure bet.</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-seven">
                    <!-- faq question -->
                    <h1 class="faq-page">  What Sports Can I Bet On?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>Sportsbook games are the best to arber on. They have many markets on which you can wager and get significant returns. Top of the list is tennis, basketball, football and select e-sport games. Of these sports, select markets with two outcomes as they increase the chances of winning.</p>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="faq-eight">
                    <!-- faq question -->
                    <h1 class="faq-page"> Does Arbing Take a Lot of Time and Effort?</h1>
                    <!-- faq answer -->
                    <div class="faq-body">
                        <p>Doing it manually takes time since it needs understanding the concept, looking for arbing opportunities and trying them out. However, there are odds comparison platforms like Oddspedia with the arbing software that helps in calculations. It also has arbing markets which bettors can try out.</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script type="text/javascript">

        var faq = document.getElementsByClassName("faq-page");
        var i;
        for (i = 0; i < faq.length; i++) {
            faq[i].addEventListener("click", function () {
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");
                /* Toggle between hiding and showing the active panel */
                var body = this.nextElementSibling;
                if (body.style.display === "block") {
                    body.style.display = "none";
                } else {
                    body.style.display = "block";
                }
            });
        }
    </script>
    @endsection
