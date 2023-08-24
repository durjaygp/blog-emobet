@extends('frontEnd.master')
@section('title','Arbitrage calculator')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Arbitrage calculator</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Arbitage calculator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container">
        <div class="col-lg-8">
            <div class="card shadow mb-12">
                <div class="card-header">
                    <strong class="card-title">Arbitrage Calculator</strong>

                </div>
                <div class="btn-group" role="group" aria-label="Basic example" align="Right">
                    <button autofocus type="button" class="btn mb-2 btn-secondary" onclick="two_way()">2-way</button>
                    <button type="button" class="btn mb-2 btn-secondary" onclick="three_way()">3-way</button>

                </div>



                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="simpleinput">stake</label>
                                <input type="text" id="stake" class="form-control">
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="simpleinput">Bet odd 1</label>
                                <input type="text" id="odd1" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="simpleinput">Bet odd 2</label>
                                <input type="text" id="odd2" class="form-control">
                            </div>
                            <div class="form-group mb-2" id='odd3' style="display: none;">
                                <label for="simpleinput">Bet odd 3</label>
                                <input type="text" id="odd_3" class="form-control">
                            </div>


                        </div> <!-- /.col -->
                        <div class="col-md-6">

                            <div class="form-group mb-2">
                                <label for="example-readonly">Stake 1</label>
                                <input type="text" id="stake1" class="form-control" readonly="" value="stake 1">
                            </div>
                            <div class="form-group mb-2">
                                <label for="example-readonly">Stake 2</label>
                                <input type="text" id="stake2" class="form-control" readonly="" value="stake 1">
                            </div>



                            <div class="form-group mb-2" id='stake3'style="display: none;">
                                <label for="example-readonly">Stake 3</label>
                                <input type="text" class="form-control"id="stake_3" class="form-control" readonly="" value="stake 3">
                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group mb-2">
                                <label for="example-readonly">Payout</label>
                                <input type="text" id="payout" class="form-control" readonly="" value="stake 1">
                            </div>
                            <div class="form-group mb-2">
                                <label for="example-readonly">Profit <span id="profit_per">(%)</span></label>
                                <input type="text" class="form-control"id="profit" class="form-control" readonly="" value="stake 1">
                            </div>

                        </div>
                        <button type="button" class="btn mb-2 btn-primary btn-lg btn-block" onclick="calculate()" id="two_calculate">CALCULATE</button>

                        <button type="button" class="btn mb-2 btn-primary btn-lg btn-block" onclick="three_calculate()" style="display: none;" id="three_calculate">CALCULATE</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">

            function three_way() {
                document.getElementById('odd3').style.display="block";
                document.getElementById('stake3').style.display="block";
                document.getElementById('three_calculate').style.display="block";
                document.getElementById('two_calculate').style.display="none";
            }
            function two_way() {
                document.getElementById('odd3').style.display="none";
                document.getElementById('stake3').style.display="none";
                document.getElementById('three_calculate').style.display="none";
                document.getElementById('two_calculate').style.display="block";
            }
            function calculate() {





                var odd2= document.getElementById('odd2').value;
                var stake = document.getElementById('stake').value;
                var odd1=document.getElementById('odd1').value;
                var odd3=document.getElementById('odd_3').value;


                var arb1=(1/odd1)*100;
                var arb2=(1/odd2)*100;
                var arb3=(1/odd3)*100;


//       if (document.getElementById('stake3').style.display='none') {

                var mab=arb1 + arb2;


                var profit=stake/mab*100;
                var prof=profit-stake;
                var profp=prof/stake*100;
                var stake1= (stake*arb1)/mab;
                var stake2=(stake*arb2)/mab;
                var stake3=(stake*arb3)/mab;

                var round_stake1=stake1.toFixed(2);
                var round_profit= profit.toFixed(2);
                var round_prof= prof.toFixed(2);
                var round_profp= profp.toFixed(2);
                var round_stake2= stake2.toFixed(2);
                var round_stake3= stake3.toFixed(2);
                document.getElementById('payout').value=round_profit;
                document.getElementById('profit').value=round_prof +'('+round_profp +'%)';

                document.getElementById('stake2').value=round_stake2;
                document.getElementById('stake1').value=round_stake1;








            }


            function three_calculate() {

                var odd2= document.getElementById('odd2').value;
                var stake = document.getElementById('stake').value;
                var odd1=document.getElementById('odd1').value;
                var odd3=document.getElementById('odd_3').value;


                var arb1=(1/odd1)*100;
                var arb2=(1/odd2)*100;
                var arb3=(1/odd3)*100;

                var mab=arb1 + arb2 + arb3;


                var profit=stake/mab*100;
                var prof=profit-stake;
                var profp=prof/stake*100;
                var stake1= (stake*arb1)/mab;
                var stake2=(stake*arb2)/mab;
                var stake3=(stake*arb3)/mab;

                var round_stake1=stake1.toFixed(2);
                var round_profit= profit.toFixed(2);
                var round_prof= prof.toFixed(2);
                var round_profp= profp.toFixed(2);
                var round_stake2= stake2.toFixed(2);
                var round_stake3= stake3.toFixed(2);
                document.getElementById('payout').value=round_profit;
                document.getElementById('profit').value=round_prof +'('+round_profp +'%)';

                document.getElementById('stake2').value=round_stake2;
                document.getElementById('stake1').value=round_stake1;

                document.getElementById('stake_3').value=round_stake3;
                // body...
            }















        </script>
        <!-- Services End -->


        <!-- Testimonial Start -->

        <!-- Testimonial End -->

        <main id="primary" class="bpt-main">
            <div class="bpt-container">
                <?xml encoding="utf-8" ?><div class="wp-block-group alignfull blnb-hero-section"><div class="wp-block-group__inner-container">
                        <div class="wp-block-columns">
                            <div class="wp-block-column">
                                <div class="wp-block-group blnb-hero-section__text blnb-hero-section__text--center"><div class="wp-block-group__inner-container">
                                        <h1>Arbitrage Betting</h1>



                                        <p>Heard that arbitrage betting is an effective way to make money and want to learn more about the process? You&rsquo;ve come to the right place!</p>



                                        <p>We&rsquo;ve created the ultimate guide to arbitrage betting to answer all your questions in one place. Our guide covers everything from how arbitrage betting works and finding arbitrage betting opportunities to calculating arbitrage profit and everything else you can think of. Let&rsquo;s get started.</p>
                                    </div></div>
                            </div>
                        </div>
                    </div></div><div class="wp-block-group blnb-small-content"><div class="wp-block-group__inner-container">
                        <h2 id="whatisarbitragebetting">What Is Arbitrage Betting?</h2>



                        <p>Arbitrage betting &ndash; also known as arbs betting, surebets, miraclebets and surewins &ndash; is a technique in which you place bets with different online betting companies to cover all the outcomes of a sporting event to guarantee yourself profit.</p>



                        <p>An arb arises when betting companies take an alternative view on the outcomes of a particular sporting event, meaning that they offer different odds to reflect the probabilities. Should you find a situation where bookies disagree by a large enough variance, you could lock in profit regardless of which outcome win.</p>



                        <div class="wp-block-group blnb-tooltip"><div class="wp-block-group__inner-container">
                                <p>Because of how bookmakers set their prices, you are guaranteed to lose money if you bet on each outcome within an event at the same bookmaker. For example, backing the favourite to win, underdog to win and the draw in a football match would ensure the bookie rubs their hands with glee as they take your money.</p>
                            </div></div>



                        <p>This is because the betting company includes an overround in their pricing which gives them an edge as it replaces the true odds of each outcome with their own odds. It&rsquo;s a complex subject, but you can learn everything you need to know by reading our guide to probabilities,
                            and overrounds</a>.</p>



                        <p>However, comparing the odds for the same sporting event from different betting companies can present an opportunity because the bookies have an alternative view, or may have made an error. This doesn&rsquo;t mean that a favourite with one bookie becomes the underdog at another, more that there will be a slight difference in the odds that are on offer.</p>







                        <h2 id="howtofindarbitragebets">How to Find Arbitrage Bets</h2>



                        <p>Now that you know how arbitrage betting works, let&rsquo;s walk you through an example to explain how to find arbitrage betting opportunities.</p>



                        <div class="wp-block-group blnb-tooltip blnb-tooltip__info blnb-tooltip__no-icon"><div class="wp-block-group__inner-container">
                                <p>For example, Bet365 could price a Floyd Mayweather Jr win at decimal odds of 1.48 (67.6% implied probability) whereas 888sport could think he&rsquo;s even more likely to win and offer odds of 1.36 (73.5% implied probability).</p>



                                <p>As a result, the price on his opponent would also change between the two bookmakers and mean that backing the underdog could see a range between 2.75 (36.4% probability) and 3.25 (30.8% probability). </p>



                                <p>If the numbers add up correctly, you could find that backing Mayweather with  Bet365  and his opponent with 888sport could automatically put you into the green no matter who won the bout. </p>
                            </div></div>



                        <p>As shown in this <a href="/boxing/">boxing</a> example, generally there is only a slight difference between the prices set by bookmakers. This means that you need to bet a lot of money to make arbing worthwhile, as arbitrage bets typically range between 1% and 10% profit.</p>



                        <p>This could mean that a &pound;1,000 stake would return as little as &pound;10 and as much as &pound;100, which may not be worth the vast amounts of time taken to identify the surebet in the first place.</p>



                        <p>Although the likes of online bookies and odds comparison sites have helped the punter identify arbitrage opportunities, it also means that the bookmakers themselves can use them to spot pricing mistakes or identify if their odds are drastically different. This means that the opp</p>



                        <h3>How to Identify Arbitrage Betting Opportunities</h3>



                        <p>Software and bots can help you identify arbitrage opportunities. However, we&rsquo;re going to look at how to find arbitrage bets using a manual process, which is relatively simple yet time consuming. The process is as follows:</p>



                        <div class="wp-block-group blnb-step-by-step-list-pattern"><div class="wp-block-group__inner-container">
                                <div class="wp-block-group blnb-step-by-step-list-pattern__wrapper"><div class="wp-block-group__inner-container">
                                        <div class="wp-block-blgh-native-blocks-blgh-card blnb-card"><div class="blnb-card__wrapper">
                                                <h6>Step 1</h6>



                                                <p>Using an odds comparison site such as oddnational, find a sporting event which offers two outcomes.</p>
                                            </div></div>



                                        <div class="wp-block-blgh-native-blocks-blgh-card blnb-card"><div class="blnb-card__wrapper">
                                                <h6>Step 2</h6>



                                                <p>Find the highest odds available for each outcome from two different bookmakers.</p>
                                            </div></div>



                                        <div class="wp-block-blgh-native-blocks-blgh-card blnb-card"><div class="blnb-card__wrapper">
                                                <h6>Step 3</h6>



                                                <p>Calculate whether the odds represent an arbitrage betting opportunity.</p>
                                            </div></div>



                                        <div class="wp-block-blgh-native-blocks-blgh-card blnb-card"><div class="blnb-card__wrapper">
                                                <h6>Step 4</h6>



                                                <p>If so, calculate the individual stakes you need to bet with at each bookmaker.</p>
                                            </div></div>



                                        <div class="wp-block-blgh-native-blocks-blgh-card blnb-card"><div class="blnb-card__wrapper">
                                                <h6>Step 5</h6>



                                                <p>Place each of the bets.</p>
                                            </div></div>



                                        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>



                                        <h2 id="adetailedexampleofarbitragebetting">A Detailed Example of Arbitrage Betting</h2>



                                        <p>To explain this process further, let&rsquo;s look at a detailed example of a surebet based on the step-by-step approach above.</p>



                                        <p>Let&rsquo;s say we visit oddnational and take an interest in a tennis match between Rafael Nadal (1.18 highest with Boylesports) and Kyle Edmund (7.00 highest with 888sport). Why did this match grab our interest? Well, let us share the below table which gives an indication of the odds you&rsquo;re looking for to potentially identify a surebet.</p>



                                        <div class="wp-block-blgh-native-blocks-table"><div class="wp-block-blgh-native-blocks-table__inner"><table><thead><tr><th class="has-text-align-center" data-align="center">Outcome 1</th><th class="has-text-align-center" data-align="center">Outcome 2</th></tr></thead><tbody><tr><td class="has-text-align-center" data-align="center">1.1</td><td class="has-text-align-center" data-align="center">11.0</td></tr><tr><td class="has-text-align-center" data-align="center">1.2</td><td class="has-text-align-center" data-align="center">6.0</td></tr><tr><td class="has-text-align-center" data-align="center">1.3</td><td class="has-text-align-center" data-align="center">4.33</td></tr><tr><td class="has-text-align-center" data-align="center">1.4</td><td class="has-text-align-center" data-align="center">3.5</td></tr><tr><td class="has-text-align-center" data-align="center">1.5</td><td class="has-text-align-center" data-align="center">3.0</td></tr><tr><td class="has-text-align-center" data-align="center">1.6</td><td class="has-text-align-center" data-align="center">2.67</td></tr><tr><td class="has-text-align-center" data-align="center">1.7</td><td class="has-text-align-center" data-align="center">2.43</td></tr><tr><td class="has-text-align-center" data-align="center">1.8</td><td class="has-text-align-center" data-align="center">2.25</td></tr><tr><td class="has-text-align-center" data-align="center">1.9</td><td class="has-text-align-center" data-align="center">2.11</td></tr><tr><td class="has-text-align-center" data-align="center">2.0</td><td class="has-text-align-center" data-align="center">2.0</td></tr></tbody></table></div></div>
                                    </div></div>



                                <p>After noticing that 1.18 and 7.00 looked like a potential arbitrage bet by looking at 1.20 and 6.00 above, the next step is to calculate whether the odds represent a surebet. Luckily, there are plenty of online calculators available which do all the hard work for you. However, we can look at the actual calculations to see how things work behind the calculator.</p>



                                <h3>Have You Found a Surebet?</h3>



                                <p>Firstly, if not using an online arbitrage bets calculator, you need to work out the arbitrage percentage which identifies whether you have a surebet. As mentioned above, with an individual bookmaker, the total percentage of all outcomes in a sporting bet will add up to greater than 100% due to the overround.</p>



                                <p>Therefore, we are looking for opportunities where all outcomes from different bookies add up to less than 100% as this suggest that the bookies have different opinions on the outcomes. To calculate the arbitrage percentage, you can use the following formula:</p>



                                <div class="wp-block-group blnb-tooltip blnb-tooltip__info blnb-tooltip__no-icon"><div class="wp-block-group__inner-container">
                                        <p><strong>Arbitrage % = ((1 / decimal odds for outcome A) x 100) + ((1 / decimal odds for outcome B) x 100)</strong></p>



                                        <p>Rafael Nadal win: (1 / 1.18) x 100 = 84.746% </p>



                                        <p>Kyle Edmund win: (1 / 7.00) x 100 = 14.286%</p>



                                        <p>84.75% + 14.29% = <strong>99.032%</strong> (less than 100%, therefore an arbitrage bet) </p>
                                    </div></div>



                                <h3>Calculate Your Profit From Arbitrage Betting</h3>



                                <p>Having found a surebet, we then need to calculate the profit we will receive based on the amount of money we are willing to invest. If, for example, you are wanting to place &pound;500 stake on the tennis surebet above, you would calculate the profit using the following formula:</p>



                                <div class="wp-block-group blnb-tooltip blnb-tooltip__info blnb-tooltip__no-icon"><div class="wp-block-group__inner-container">
                                        <p><strong>Profit = (Investment / Arbitrage %) &ndash; Investment</strong> </p>



                                        <p>(&pound;500 / 99.032%) &ndash; &pound;500 = <strong>&pound;4.89</strong> profit (from &pound;500 stake)</p>
                                    </div></div>



                                <h3>Arbitrage Profit Formula</h3>



                                <p>The next step is to calculate how your investment needs to be broken down in terms of stakes across both bets. This is so that you are returning the same profit regardless of which outcome wins.</p>



                                <p>The idea is to return the same profit regardless of whether the first or second outcome is successful, so it is critical to use the correct stakes &ndash; if not, you could find that one outcome is more profitable than the other or that you actually lose money if one outcome wins. To calculate the individual stakes:</p>



                                <div class="wp-block-group blnb-tooltip blnb-tooltip__info blnb-tooltip__no-icon"><div class="wp-block-group__inner-container">
                                        <p><strong>Individual bets = (Investment x Individual Arbitrage %) / Total Arbitrage %</strong></p>



                                        <p>Rafael Nadal stake = (&pound;500 x 84.746%) / 99.032% = <strong>&pound;427.87</strong></p>



                                        <p>Kyle Edmund stake = (&pound;500 x 14.286%) / 99.032% = <strong>&pound;72.13</strong></p>



                                        <p>&pound;427.87 + &pound;72.13 = &pound;500 total stake </p>
                                    </div></div>



                                <p>You therefore know that to make &pound;4.89 profit from &pound;500 (0.968% profit) you need to place a bet of &pound;427.87 on Rafael Nadal to win at odds of 1.18 and &pound;72.13 on Kyle Edmund to win at odds of 77.00. As you can see, this is quite a lot of work for less than &pound;5.00 profit, but as mentioned, arbitrage betting calculators can take a lot of the manual work away from this process.</p>



                                <h3>Calculating Your Stake For Outcome B</h3>



                                <p>As an aside, it is also worthwhile knowing how to calculate the stake for outcome B if you know how much you plan to bet on outcome A.</p>



                                <p>Rather than the above approach where we split the total stake (&pound;500) into two bets to guarantee the same profit, we can work out how much to place on outcome B if we have bet &pound;500 just on outcome A.</p>



                                <p>This can be done using the following formula:</p>



                                <div class="wp-block-group blnb-tooltip blnb-tooltip__info blnb-tooltip__no-icon"><div class="wp-block-group__inner-container">
                                        <p><strong>Stake for outcome B = Stake for outcome A x (Odds for outcome A / Odds for outcome B)</strong></p>



                                        <p>&pound;500 x (1.18 / 7.00) = <strong>&pound;84.29 stake for outcome B</strong> </p>
                                    </div></div>



                                <p>To work out total profit, you would then use the above figures in the following calculations:</p>



                                <div class="wp-block-group blnb-tooltip blnb-tooltip__info blnb-tooltip__no-icon"><div class="wp-block-group__inner-container">
                                        <p><strong>Profit if outcome A wins: (stake for outcome A x odds for outcome A) &ndash; (total investment)</strong></p>



                                        <p>If Nadal wins: (&pound;500 x 1.18) &ndash; (&pound;500 + &pound;84.29) = <strong>&pound;5.71</strong></p>



                                        <p><strong>Profit if outcome B wins: (stake for outcome B x odds for outcome B) &ndash; (total investment)</strong></p>



                                        <p>If Edmund wins: (&pound;84.29 x 7.00) &ndash; (&pound;84.29 + &pound;500) = <strong>&pound;5.74</strong> </p>
                                    </div></div>



                                <p>So, by investing &pound;584.29 in this match, you would make a profit of &pound;5.71 if Nadal wins or &pound;5.74 if Edmund wins.</p>






                                <h2 id="placingarbbetsviabettingexchangesshops">Placing Arb Bets Via Betting Exchanges &amp; Shops</h2>



                                <p>As described above, we&rsquo;ve talked about finding surebets by looking at online bookmakers and odds comparison sites to identify the best prices for each outcome in a sporting event. This isn&rsquo;t the only arbing opportunity though &ndash; it is also possible to do this via betting exchanges and in betting shops.</p>



                                <p>For instance, you could use the likes of <a href="https://tracking.sbo.net/redirect/spreadex-sports" target="_blank" rel="noreferrer noopener">Spreadex</a> to back and lay a bet to create a guaranteed profit &ndash; along similar lines to trading in the financial markets &ndash; although an extra considerations is that you need to factor in the commission for using the service.</p>



                                <p>Similarly, there is also the practice of &lsquo;sharbing&rsquo; where you can create an arbitrage opportunity by using an online bookie for one outcome and a betting shop for the second as shops are usually slower to respond to price changes than online bookies.</p>
                            </div>
                        </div>





                    </div>
                </div>
            </div><!-- .bpt-container -->
        </main>
    </div>


@endsection
