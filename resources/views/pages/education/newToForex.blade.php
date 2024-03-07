<x-header />

<body>
    <x-octa-menu />
    {{-- <x-exness-menu /> --}}
    {{-- <x-menu /> --}}
    <!--ticker tape-->
    @include('templates.tickerTape')


    <!-- Forex Education  section start  -->
    <div class="container-fluid">
        <div class="row text-right">
            <div class="col-md-12 depositWithdrawalSection align-self-right">
                <h1 class="ml-auto">New to Forex ?</h1>
            </div>
        </div>
    </div>
    <!-- Forex Education section end  -->

    <!--Module content start-->
    <div class="container-fluid">
        <div class="row p-2">
            <!--board Card start-->
            <div class="col-md-3 boardCard">
                <div class="boardCard-header">
                    <h4>What is Forex ?</h4>
                </div>
                <div class="lessonsList">
                    <ul>
                        <li class="p-2">
                            <a href="#topic-1" onclick="showTopic('topic-1', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -1</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-2" onclick="showTopic('topic-2', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -2</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-3" onclick="showTopic('topic-3', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -3</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-4" onclick="showTopic('topic-4', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -4</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-5" onclick="showTopic('topic-5', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -5</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-6" onclick="showTopic('topic-6', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -6</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-7" onclick="showTopic('topic-7', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -7</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-8" onclick="showTopic('topic-8', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -8</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-9" onclick="showTopic('topic-9', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -9</a>
                        </li>
                        <li class="p-2">
                            <a href="#topic-10" onclick="showTopic('topic-10', this)"> <i
                                    class="fa-regular fa-chevron-right mx-2"></i> Lesson -10</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--board Card end-->

            <!--content box start -->
            <div class="col-md-9 content-box">
                <!--topic-1 start-->
                <div class="section active" id="topic-1">
                    <div class="row">
                        <h2 class="text-capitalize">What is Forex</h2>
                        <p>
                            Forex is the world's largest currency market place, where foreign currencies are bought and
                            sold. In the forex market you can sell one country's currency and buy another country's
                            currency. This currency market has been open for trading since 1994. Its trade can reach $6
                            trillion a day. In forex trading, one buys the currency of a country at a low price and
                            sells it
                            again when the price of that currency rises. The difference between the purchase price and
                            the
                            sale price is the profit. Forex trading has become a very popular business day by day
                            because
                            here you can get more returns than what you invest, which can reach 100% profit in one day
                            gap.
                            Forex on the other hand is a risky business. You need to have a good understanding of the
                            trading methods of this market place. Stay with us to increase knowledge about forex.
                        </p>
                    </div>
                    <div class="row">
                        <h2 class="text-capitalize">Pip in Forex</h2>
                        <div class="col-md-8">
                            <p>
                                Pip in the forex market is an important factor that a trader must know for his
                                profit and
                                loss calculations. Let's find out now what is Pip? Every single change or movement
                                in a
                                currency pair to the fourth digit after the decimal point is called a pip. We
                                usually say
                                200 pip move in forex market today. That means 200 pips change in forex market
                                today. Note
                                the figure below, the fourth digit after the decimal point is the pip
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="Assets/images/candlestics/pipImage.webp" alt="Forex pip">
                        </div>
                    </div>
                    <div class="row">
                        <p>
                            Let's make this clear with another example. Suppose today at 3 pm you open a buy trade on
                            the EUR/USD pair at 1.0900. Open your trading platform at 6 pm and see that your current
                            price is 1.0950 which means that from 3 pm to 6 pm today the EUR/USD pair has changed a
                            total of 50 pips.
                        </p>
                        <p>
                            Market Movement EUR/USD: Previous price was 1.1350 Current price is 1.1450. Then 1450 - 1350
                            = 100 pips movement in the market.
                        </p>
                    </div>
                </div>
                <!--topic-1 end-->

                <!--topic-2 start-->
                <div class="section" id="topic-2">
                    <div class="row">
                        <h2 class="text-capitalize">Exchange rates on Forex</h2>
                        <p>
                            The price of any asset in a financial market fluctuates constantly. A currency pair trades
                            at a price quote of the exchange rate for the base currency to the quoted currency. Such a
                            price quote is marked by a point in a technical chart. Any point is automatically connected
                            to a previous assets quote. This is the principle of how forex charts are plotted online
                            for a particular trading instrument
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            The screen of a trading platform presents two values of an asset’s quote. The lower
                            value is called the bid price, the upper one is the ask price. Speaking about the chart
                            of the EUR/USD pair, the bid value is the price at which the euro is sold and a certain
                            amount of bucks are bought. Conversely, the ask value is the price to buy the euro and
                            sell some US dollars.
                        </p>
                    </div>
                    <div class="row">
                        <img class="img-fluid" src="Assets/images/candlestics/rates.webp" alt="Forex Markets Rates">
                    </div>
                </div>
                <!--topic-2 end-->

                <!--topic-3 start-->
                <div class="section" id="topic-3">
                    <div class="row">
                        <h2 class="text-capitalize">Lot and Volume in Forex</h2>
                        <p>
                            Earlier in Forex there was only a way to trade through a certain amount. This fixed amount
                            is known as lot. To put it more simply, the unit or amount of currency pair you decide to
                            buy/sell for Forex trading is called a lot. If we look back a little, before retail forex
                            brokers started, it was not possible for us forex trading enthusiasts to trade even if we
                            wanted to, and the main reason was that we could take the minimum amount of funds we had to
                            accept entries. No or we didn't have that amount of funds. With all the changes, forex
                            brokers have reduced this amount so that you can start trading with $5 today.
                        </p>
                        <p>
                            Lot is easy. But when you go as units you will find it complicated. So we won't go as Unite.
                            In forex market we can make profit per pips movement. That is, if the price goes from 1.1650
                            to 1.1660, we will have a profit or loss of 10 pips. Through lots or lots or volume we will
                            determine how much profit or loss we will have for each pips going in our favor or against
                            us.
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <strong> We have divided Forex brokers into four categories for convenience.</strong>
                        <ul>
                            <li>Standard Lot Broker</li>
                            <li> Mini Lot Broker</li>
                            <li> Micro Lot Broker</li>
                            <li> Nano Lot Broker</li>
                        </ul>
                        </p>
                        <p>
                            <strong> At a glance the structure of the lot is not seen</strong>
                        <table style="width:40%;" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name of the lot </th>
                                    <th>The number of units </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Standard</td>
                                    <td>100000</td>
                                </tr>
                                <tr>
                                    <td>Mini </td>
                                    <td>10000</td>
                                </tr>
                                <tr>
                                    <td>Micro </td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td>Nano </td>
                                    <td>100</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            <strong> Now let see how to calculate the lot.</strong>
                        <ul>
                            <li>Standard Lot Broker 1 lot= $10 per pips</li>
                            <li>Mini Lot Broker 1 lot = $1 per pips</li>
                            <li>Micro Lot Broker 1 lot = $0.1 per pips</li>
                            <li>Nano Lot Broker 1lot = $0.01 per pips</li>
                        </ul>
                        </p>
                        <p>
                            That means if you open a trade with 1 lot in a standard lot broker and 10 pips go in your
                            favor, your profit is 10*10=$100, but the corresponding loss is $100.
                            This is how everyone calculate lots.
                        </p>
                    </div>
                </div>
                <!--topic-3 end-->

                <!--topic-4 start-->
                <div class="section" id="topic-4">
                    <div class="row">
                        <h2 class="text-capitalize">How does forex work</h2>
                        <p>
                            Forex, a global financial arena interconnected by a ubiquitous communication network, hosts
                            a diverse array of participants, including major banks, investment funds, and individual
                            traders impacting exchange rates. While smaller firms and retail traders may lack the
                            financial clout for independent market entry, they can engage through intermediaries like
                            brokerage firms or dealing centers.
                        </p>
                        <p>
                            Individuals are drawn to Forex trading due to its accessibility as a potential income
                            source. To substantiate this, FOREX235 offers varied trading accounts, each specifying a
                            unique starting deposit and service package. Forex caters to those willing to invest even
                            modest amounts. While a solitary retail trader may not single-handedly sway market
                            sentiment, the collective impact of numerous private traders stands as a formidable force,
                            influencing the exchange rates of assets alongside larger market players. The
                            democratization of market participation underscores the dynamic nature of Forex as a
                            financial ecosystem.
                        </p>

                    </div>
                    <div class="row">
                        <h2 class="text-capitalize">What assets are traded</h2>
                        <p>
                            The heartbeat of Forex lies in its trading instruments — the currency pairs. Among them,
                            major pairs stand tall, pairing the US dollar with actively traded currencies like the euro,
                            Japanese yen, Swiss franc, and pound sterling, distinguished by symbols like EUR/USD,
                            USD/JPY, USD/CHF, and GBP/USD. Notably, cross currency pairs exclude the US dollar, allowing
                            any currency to engage in mutual exchange. Despite trailing major pairs in popularity, they
                            hold a significant market share. Enter the exotic currency pairs, comprised of thinly traded
                            and illiquid currencies, constituting at least 10% of all Forex transactions.
                        </p>
                        <p>
                            FOREX 235 extends a comprehensive list of tradable currency pairs, easily accessible on
                            their
                            dedicated webpage. Furthermore, each forex instrument is seamlessly available for Contract
                            for Difference (CFD) trading, ensuring a versatile and advantageous trading experience. This
                            rich array of options underscores Forex's dynamic landscape, accommodating traders with
                            varied preferences and risk appetites
                        </p>

                    </div>

                </div>
                <!--topic-4 end-->

                <!--topic-5 start-->
                <div class="section" id="topic-5">
                    <div class="row">
                        <h2 class="text-capitalize">How does forex work</h2>
                        <p>
                            Forex, a global financial arena interconnected by a ubiquitous communication network, hosts
                            a diverse array of participants, including major banks, investment funds, and individual
                            traders impacting exchange rates. While smaller firms and retail traders may lack the
                            financial clout for independent market entry, they can engage through intermediaries like
                            brokerage firms or dealing centers.
                        </p>
                        <p>
                            Individuals are drawn to Forex trading due to its accessibility as a potential income
                            source. To substantiate this, FOREX235 offers varied trading accounts, each specifying a
                            unique starting deposit and service package. Forex caters to those willing to invest even
                            modest amounts. While a solitary retail trader may not single-handedly sway market
                            sentiment, the collective impact of numerous private traders stands as a formidable force,
                            influencing the exchange rates of assets alongside larger market players. The
                            democratization of market participation underscores the dynamic nature of Forex as a
                            financial ecosystem.
                        </p>

                    </div>
                    <div class="row">
                        <h2 class="text-capitalize">Money management in Forex</h2>
                        <p>
                            Money management is the lifeblood of the forex market. Because, only your strong money
                            management can protect you from any big loss. In one word it can be said that exactly how
                            you can safely use the main balance of your forex trade in which process and how much you
                            keep in hand for trade, how much you will voluntarily lose if the trade is negative and how
                            much profit you will make if you profit, this is money management. Money management is
                            incredibly important for a successful and risk-free trader.
                        </p>
                        <p>
                            <strong> All the benefits that can be gained by following money management:</strong>
                        <ul>
                            <li>Money Management will manage your trading capital in a proper way.</li>
                            <li> Mathematical formulas will give the formula for generating time-based returns of your
                                capital</li>
                            <li> Will generate risk free profit and loss ratio of your trade.</li>
                            <li> Helps in creating proper and improper trading.</li>
                            <li> Will generate safe return formula of your capital.</li>
                            <li> Will save you from account firing.</li>
                            <li> Long and Short time will help to trade in different concepts.</li>
                            <li> Will confirm when you trade this formula.</li>
                            <li> Your Forex Ultimate Goal will give you the right management of what could be.</li>
                            <li> Will help in stability like long live in the market.</li>
                        </ul>
                        </p>

                    </div>

                </div>
                <!--topic-5 end-->

                <!--topic-6 start-->
                <div class="section" id="topic-6">
                    <div class="row">
                        <h2 class="text-capitalize">Effective techniques of money management</h2>
                        <p>
                            Money management helps minimize your trading losses, maximize your profits and increase your
                            trading account capital. Many newcomers to the market tend to neglect money management in
                            forex trading, as a result of which new traders are exposed to losses as soon as they enter
                            the market. Many lose their trading account balance in a very short time due to trading
                            without understanding. Therefore, there is no alternative to money management to survive in
                            the forex market. So let's know those money management techniques.
                        </p>
                    </div>
                    <div class="row">
                        <h4 class="text-primary text-capitalize">Know the risk of each trade:</h4>
                        <p>
                            Know the risk of each trade before trading. The maximum number of dollars you can lose per
                            trade is called the risk per trade. Many traders recommend taking 2 to 3 percent risk per
                            trade. This will save your trading account from going to zero.
                        </p>

                        <h4 class="text-primary text-capitalize">Always use stop loss:</h4>
                        <p>
                            Most traders feel very negative when they hear stop loss. Actually stop loss is a way by
                            which you can keep your trading account safe from any unwanted loss of your trading. Stop
                            loss should be used at right place as per analysis rather than stop loss based on guesswork.
                        </p>

                        <h4 class="text-primary text-capitalize">Risk Reward Ration:</h4>
                        <p>
                            Always trade according to risk reward ratio. The risk reward ratio should be at least 1:2 or
                            1:3. If you take risk $200 per trade you need to profit $400 or $600.
                        </p>

                        <h4 class="text-primary text-capitalize">Proper use of leverage:</h4>
                        <p>
                            There is no substitute for leverage to earn more with less investment. Although many brokers
                            offer higher leverage, but too much leverage can be detrimental to your account. Not using
                            proper leverage can affect money management plans.
                        </p>

                        <h4 class="text-primary text-capitalize">Proper use of leverage:</h4>
                        <p>
                            There is no substitute for leverage to earn more with less investment. Although many brokers
                            offer higher leverage, but too much leverage can be detrimental to your account. Not using
                            proper leverage can affect money management plans.
                        </p>

                        <h4 class="text-primary text-capitalize">Trades should not be taken based on emotions:</h4>
                        <p>
                            The biggest problem for new traders is emotion. New traders constantly lose by trading only
                            on emotions. Repeated stop loss moves are not holding profit trades but holding loss trades
                            for months. Not wanting to accept loss. Breaking money management rules suddenly, over
                            trading etc. and many other things are done under the influence of emotions. If you have
                            confidence in your analysis, let the market prove that your analysis was correct.
                        </p>
                    </div>


                </div>
                <!--topic-6 end-->

                <!--topic-7 start-->
                <div class="section" id="topic-7">
                    <div class="row">
                        <h2 class="text-capitalize">Best trading session in forex market</h2>
                        <p>
                            We all know that forex market is open 5 days 24 hours a week from Monday to Friday. It is
                            very important to know when and what time we will trade within these 24 hours. Because many
                            times it is seen that the movement of the market increases too much and sometimes we see
                            that the market is stagnant at the same place. If we trade during market movement we can
                            make good profit. And when there is no market movement, there is a high chance of loss when
                            trading.
                            So it is important to know when to trade and where not to trade.
                        </p>
                    </div>

                    <div class="row">
                        <strong>The Forex market is divided into several sessions.</strong>
                        <p>
                        <ol class="px-4">
                            <li>Sydney Session</li>
                            <li>Tokyo Session</li>
                            <li>London Session</li>
                            <li>New York Session</li>
                        </ol>
                        </p>
                        <p>
                            In these four sessions the market movement is substantial. And in these four sessions, the
                            market is heavily traded. So from these four sessions we have to choose the ideal session
                            and we have to trade in those times. So let us know when those sessions start and when they
                            end.
                        </p>
                    </div>
                    <div class="row">
                        <h4 class="text-primary text-capitalize">1. Sydney Session:</h4>
                        <p>
                            First up is the Sydney session. The Sydney session starts GMT at 9 PM and ends GMT at 6 AM
                            when the AUD currency is heavily traded and other currencies are also traded.
                        </p>

                        <h4 class="text-primary text-capitalize">2. Tokyo Session:</h4>
                        <p>
                            Second is the Tokyo or Asia session. The Tokyo or Asia session starts GMT at 12 AM and ends
                            GMT at 8 AM. Then the JPY trades more with other JPY cross currencies traded. And there are
                            many news and releases during that time, so the market movement is very high
                        </p>

                        <h4 class="text-primary text-capitalize">3. London Session:</h4>
                        <p>
                            The London session is a very important session, and it is said that the most powerful
                            session in the forex market is the London session. The London session starts GMT at 7 AM and
                            ends GMT at 4 pm. A lot of transactions take place during this time and various news are
                            released during this time. So we can make good profit if we trade at this time because the
                            market movement is very high at that time.
                        </p>

                        <h4 class="text-primary text-capitalize">4. New York Session:</h4>
                        <p>
                            The last session is the New York session. This is another very powerful session. You know
                            that America is the most powerful country in the world and their economic status is the most
                            traded in this session. Market movement is most noticeable in this session. This session
                            starts GMT at 12pm and ends GMT at 9pm. All pairs with USD are heavily traded in the New
                            York session.
                        </p>
                        <p>
                            Most interestingly, the London session overlaps the New York session at 12pm GMT. So, if you
                            trade at this time, you have a higher chance of making a profit. This is an ideal time to
                            trade.
                        </p>
                    </div>
                </div>
                <!--topic-7 end-->

                <!--topic-8 start-->
                <div class="section" id="topic-8">
                    <div class="row">
                        <h2 class="text-capitalize">What are the types of movements in the forex market?</h2>
                        <p>
                            There are two types of movements in the forex market. One is bullish movement and the other
                            is bearish movement.
                        </p>
                    </div>

                    <div class="row">
                        <h4 class="text-primary text-capitalize">1. Bullish movement:</h4>
                        <div class="col-md-8">
                            <p>
                                Simply put, bullish movement is an upward trend in the forex market, which we call an
                                uptrend. Then the dominance of buyers can be observed in the market. In a bullish
                                market, buyers open trades below the price and book profits until the end of the
                                uptrend, i.e. when the market reverses.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="Assets/images/candlestics/bullishMarket.webp" alt="Bullish Momentum">
                        </div>
                    </div>

                    <div class="row">
                        <h4 class="text-primary text-capitalize">2. Bearish movement:</h4>
                        <div class="col-md-8">
                            <p>
                                Simply put, bearish movement is the downward trend in the forex market, which we call a
                                downtrend. Then the dominance of sellers in the market can be seen. In a bearish market,
                                sellers open trades on the upside and book profits until the end of the downtrend market
                                reversal.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="Assets/images/candlestics/bearishMarket.webp" alt="Bearish Momentum">
                        </div>
                    </div>
                </div>
                <!--topic-8 end-->

                <!--topic-9 start-->
                <div class="section" id="topic-9">
                    <div class="row">
                        <h2 class="text-capitalize">How To Read Charts In Forex:</h2>
                        <p>
                            Let's look at the three most popular types of forex charts: line chart, bar chart, and
                            candlestick
                            chart.
                        </p>
                    </div>
                    <!--Line chart-->
                    <div class="row">
                        <h4 class="text-primary text-capitalize">1. Line Chart:</h4>
                        <div class="col-md-8">
                            <p>
                                It is the most basic of all forex charts. The line chart is the simplest in forex,
                                connecting closing prices over time with a line. It's straightforward, showing how a
                                currency's value changes. While it lacks details like opening and low prices, it
                                effectively tracks closing prices. This simplicity makes it easy for traders to grasp
                                the currency's overall trend within a specific timeframe, aiding in decision-making
                                based on accurate closing price data.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="Assets/images/candlestics/lineChart.webp" alt="Forex Line Chart">
                        </div>
                    </div>
                    <!--bar chart-->
                    <div class="row">
                        <h4 class="text-primary text-capitalize">2. Bar Chart:</h4>
                        <div class="col-md-8">
                            <p>
                                The bar chart in forex goes beyond the line chart, displaying not just closing prices
                                but also opening, high, and low prices for a period. It consists of vertical bars with a
                                left dash for opening and a right dash for closing. The height of the bar represents the
                                currency's trading range (low to high). Commonly known as OHLC charts (Open, High, Low,
                                Close), they offer a comprehensive snapshot of a currency's performance, aiding traders
                                in analyzing price movements and making informed decisions.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="Assets/images/candlestics/barChart.webp" alt="Forex Bar Chart">
                        </div>
                    </div>
                    <!--candleStick chart-->
                    <div class="row">
                        <h4 class="text-primary text-capitalize">3. Candlestick Chart:</h4>
                        <div class="col-md-8">
                            <p>
                                Candlestick charts, beloved by Forex traders, are like bar charts but visually more
                                appealing. They focus on the opening and closing prices of a trading period, using
                                candlesticks to represent a currency pair's performance. Unlike the line chart, they
                                detail the opening, high, low, and closing prices. Each candlestick's height indicates
                                the period's high-low range, and its width represents the difference between opening and
                                closing prices. These charts provide a clear and aesthetic way for traders to analyze
                                market movements, aiding in decision-making by capturing essential price information.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="Assets/images/candlestics/candleStickChart.webp"
                                alt="Forex Candlestick Chart">
                        </div>
                    </div>
                </div>
                <!--topic-9 end-->

                <!--topic-10 start-->
                <div class="section" id="topic-10">
                    <div class="row">
                        <h2 class="text-capitalize">Conclusion</h2>
                        <p>
                            Entering the Forex market isn't akin to a casual gamble; it demands dedicated effort and
                            continual self-improvement. Contrary to a quick-money mindset, success in currency trading
                            necessitates diligence. View the global market as a potential income source, committing to
                            learning, practicing, and assimilating successful strategies. Trading isn't a game of
                            chance; it's a discipline requiring consistent effort. Approach it with a mindset geared
                            towards continuous learning, training, and the application of proven methodologies.
                            Transforming the Forex market into a reliable income stream mandates commitment, education,
                            and strategic refinement. Success doesn't come effortlessly, but with dedication, one can
                            navigate the complexities of currency trading and build a sustainable source of income.
                        </p>
                    </div>
                </div>
                <!--topic-10 end-->

            </div>
            <!--content box end -->
        </div>
    </div>
    <!--Module content end-->


    <!--- midfooer shortcut link start --->
    <div class="shortcut-links theme-bg">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Find us on</span></h5>
                    <a href="https://www.facebook.com/forex235t" target="_blank">
                        <i class="icons fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-square-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa-brands fa-youtube"></i>
                    </a>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Our Markets</span></h5>
                    <ul>
                        <li><a href="{% url 'forex-market' %}">Forex</a></li>
                        <li><a href="{% url 'commodities-market' %}">Commodities</a></li>
                        <li><a href="{% url 'cfd-market' %}">CFD</a></li>
                        <li><a href="{% url 'crypto-market' %}">Crypto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-white mb-3"> <span class="border-bottom">Trading Platforms</span></h5>
                    <ul>
                        <li><a href="https://web.forex235.com/" target="_blank">Web Platform</a></li>
                        <li><a href="{% url 'mt4-platform' %}" target="_blank">MT4</a></li>
                        <li><a href="{% url 'mt5-platform' %}" target="_blank">MT5</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--- midfooer shortcut link end --->

    <!-- footer start -->
    @include('templates.pagefooter')
    <!-- footer end -->

    <!-- modal start -->
    <section>
        @include('templates.modal.loginmodal')
        @include('templates.modal.registermodal')
    </section>
    <!-- modal end -->

    <x-footer />
