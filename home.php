<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Forex Trading</title>
    <style>
        /* CSS styles */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #000000;
            color: #333;
        }

        header {
    display: flex;
    align-items: center;
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
}

#header-logo {
    width: 50px; /* Adjust as needed */
    height: 50px; /* Adjust as needed */
    margin-left: 20px; /* Space from the left edge */
}




        nav a {
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 16px;
        }

        nav a:hover {
            background-color: #dddddd;
            color: black;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
            padding: 20px;
        }

        .left-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .ticker-tape-widget {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 200px;
        }

        .other-widgets {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .widget {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .widget-header {
            background-color: #333;
            color: white;
            padding: 10px;
            font-size: 18px;
            text-align: center;
        }

        .widget-content {
            padding: 10px;
            min-height: 200px;
            background-color: #eee;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;






            .forex-widget-row {
            display: flex;
            justify-content: center; /* Center the widgets if there's extra space */
            gap: 10px;
            padding: 20px;
        }

        .tradingview-widget-container {
            width: 180px; /* Narrow width to fit 10 widgets */
            height: 450px; /* Adjust height as needed */
        }



        }
    </style>
</head>
<body>
    <header>
        <img src="https://github.com/NishatVasker/forex_trading/blob/main/image-removebg-preview.png?raw=true" alt="Logo" id="header-logo" >
        <nav>
            <a href="home.php">Home</a>
            <a href="index.html">Market story</a>
            <a href="market_news.html">Market news</a>
            <a href="#contact">Contact</a>
            <a href="index.php"> login </a>
        </nav>
    </header>





<!-- TradingView Ticker Tape Widget -->

    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js">
    {
        "symbols": [
            {"proName": "FOREXCOM:SPXUSD", "title": "S&P 500"},
            {"proName": "FOREXCOM:NSXUSD", "title": "US 100"},
            {"proName": "FX_IDC:EURUSD", "title": "EUR to USD"},
            {"proName": "BITSTAMP:BTCUSD", "title": "Bitcoin"},
            {"proName": "BITSTAMP:ETHUSD", "title": "Ethereum"}
        ],
        "showSymbolLogo": true,
        "colorTheme": "dark",
        "isTransparent": false,
        "displayMode": "adaptive",
        "locale": "en"
    }
    </script>
</div>











<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
    {
    "symbols": [
      {
        "proName": "FOREXCOM:SPXUSD",
        "title": "S&P 500"
      },
      {
        "proName": "FOREXCOM:NSXUSD",
        "title": "US 100"
      },
      {
        "proName": "FX_IDC:EURUSD",
        "title": "EUR to USD"
      },
      {
        "proName": "BITSTAMP:BTCUSD",
        "title": "Bitcoin"
      },
      {
        "proName": "BITSTAMP:ETHUSD",
        "title": "Ethereum"
      },
      {
        "description": "british_pund",
        "proName": "FX:GBPUSD"
      }
    ],
    "colorTheme": "dark",
    "isTransparent": false,
    "showSymbolLogo": true,
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->





    <div class="main-content">
        <div class="left-column">
            <!-- Ticker Tape Widget -->
            <div class="ticker-tape-widget">
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                    {
                    "width": 770,
                    "height": 400,
                    "currencies": [
                      "EUR",
                      "USD",
                      "JPY",
                      "GBP",
                      "CHF",
                      "AUD",
                      "CAD",
                      "NZD",
                      "CNY",
                      "THB"
                    ],
                    "isTransparent": false,
                    "colorTheme": "dark",
                    "locale": "en"
                  }
                </script>
            </div>
            <!-- Additional widgets or content for the left column -->
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                {
                "width": 800,
                "height": 400,
                "defaultColumn": "overview",
                "defaultScreen": "general",
                "market": "forex",
                "showToolbar": true,
                "colorTheme": "dark",
                "locale": "en"
              }
            </script>


            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js">
    {
        "colorTheme": "dark",
        "dateRange": "1D",
        "showChart": true,
        "locale": "en",
        "largeChartUrl": "",
        "isTransparent": true,
        "showSymbolLogo": true,
        "showFloatingTooltip": false,
        "width": "1200",
        "height": "660",
        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
        "gridLineColor": "rgba(42, 46, 57, 0)",
        "scaleFontColor": "rgba(134, 137, 147, 1)",
        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
        "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
        "tabs": [
            {
                "title": "Indices",
                "symbols": [
                    {"s": "FX:EURUSD", "d": "EURUSD"},
                    /* Add more symbols here */
                ],
                "originalTitle": "Indices"
            },
            // Additional tabs for Futures, Bonds, Forex
        ]
    }
    </script>


<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
    {
    "colorTheme": "dark",
    "dateRange": "1D",
    "exchange": "US",
    "showChart": true,
    "locale": "en",
    "largeChartUrl": "",
    "isTransparent": true,
    "showSymbolLogo": false,
    "showFloatingTooltip": false,
    "width": "800",
    "height": "600",
    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
    "gridLineColor": "rgba(42, 46, 57, 0)",
    "scaleFontColor": "rgba(134, 137, 147, 1)",
    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
    "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
  }
    </script>






        </div>














        <div class="other-widgets">
            <div class="right-colum">
            <!-- Widgets for the right column -->

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
                {
                "symbols": [
                  [
                    "FX:EURUSD|1D"
                  ],
                  [
                    "FX:GBPUSD|1D"
                  ],
                  [
                    "OANDA:EURUSD|1D"
                  ],
                  [
                    "OANDA:GBPUSD|1D"
                  ],
                  [
                    "FX:USDJPY|1D"
                  ],
                  [
                    "FX:GBPJPY|1D"
                  ],
                  [
                    "FX:AUDUSD|1D"
                  ]
                ],
                "chartOnly": false,
                "width": 650,
                "height": 400,
                "locale": "en",
                "colorTheme": "dark",
                "autosize": true,
                "showVolume": false,
                "showMA": false,
                "hideDateRanges": false,
                "hideMarketStatus": false,
                "hideSymbolLogo": false,
                "scalePosition": "right",
                "scaleMode": "Normal",
                "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                "fontSize": "10",
                "noTimeScale": false,
                "valuesTracking": "1",
                "changeMode": "price-and-percent",
                "chartType": "area",
                "maLineColor": "#2962FF",
                "maLineWidth": 1,
                "maLength": 9,
                "lineWidth": 2,
                "lineType": 0,
                "dateRanges": [
                  "1d|1",
                  "1m|30",
                  "3m|60",
                  "12m|1D",
                  "60m|1W",
                  "all|1M"
                ]
              }
                </script>






<div class="other-widgets">
    <div class="right-colum"></div>

    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">
        {
            "width": 650,
            "height": 400,
            "currencies": [
                "EUR",
                "USD",
                "JPY",
                "GBP",
                "CHF",
                "AUD",
                "CAD",
                "NZD",
                "CNY",
                "TRY",
                "SEK",
                "NOK",
                "DKK",
                "ZAR",
                "HKD",
                "THB",
                "MYR"
            ],
            "isTransparent": true,
            "colorTheme": "dark",
            "locale": "en"
        }
        </script>



<div class="other-widgets">
    <div class="right-colum">


        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
            {
            "interval": "4h",
            "width": 325,
            "isTransparent": true,
            "height": 300,
            "symbol": "FX:EURUSD",
            "showIntervalTabs": true,
            "displayMode": "single",
            "locale": "en",
            "colorTheme": "dark"
          }
            </script>



    </div>
</div>


<div class="other-widgets">
    <div class="right-colum">


        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
            {
            "interval": "4h",
            "width": 325,
            "isTransparent": true,
            "height": 300,
            "symbol": "FX:GBPUSD",
            "showIntervalTabs": true,
            "displayMode": "single",
            "locale": "en",
            "colorTheme": "dark"
          }
            </script>



    </div>
</div>


<!-- TradingView Widget BEGIN -->
<div class="other-widgets">
    <div class="right-colum"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
    {
    "colorTheme": "dark",
    "isTransparent": false,
    "width": "650",
    "height": "610",
    "locale": "en",
    "importanceFilter": "0,1",
    "countryFilter": "us,eu,it,nz,ch,au,fr,jp,za,tr,ca,de,mx,es,gb"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->




<!--
            <div class="widget">
                <div class="widget-header">Widget Title</div>
                <div class="widget-content">
                    
                </div>
            </div>
            <!-- Repeat for other widgets -->
        </div>
    </div>

    
</body>
</html>
