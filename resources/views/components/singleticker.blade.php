<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    {{-- <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
    "symbols": [
      { "proName": "FOREXCOM:SPXUSD", "title": "S&P 500" },
      { "proName": "FOREXCOM:NSXUSD", "title": "US 100" },
      { "proName": "FX:EURUSD", "title": "EUR/USD" },
      { "proName": "FX:GBPUSD", "title": "GBP/USD" },
      { "proName": "FX:USDJPY", "title": "USD/JPY" },
      { "proName": "FX:USDCHF", "title": "USD/CHF" },
      { "proName": "FX:AUDUSD", "title": "AUD/USD" },
      { "proName": "FX:USDCAD", "title": "USD/CAD" },

      { "proName": "FOREXCOM:XAUUSD", "title": "Gold" },
      { "proName": "FOREXCOM:XAGUSD", "title": "Silver" },

      { "proName": "BITSTAMP:BTCUSD", "title": "Bitcoin" },
      { "proName": "BITSTAMP:ETHUSD", "title": "Ethereum" },
      { "proName": "BINANCE:BNBUSDT", "title": "BNB" },
      { "proName": "BINANCE:XRPUSDT", "title": "XRP" },
      { "proName": "BINANCE:SOLUSDT", "title": "Solana" }
    ],
    "colorTheme": "light",
    "locale": "en",
    "showSymbolLogo": true,
    "displayMode": "adaptive"
  }
  </script> --}}

    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                "proName": "FX_IDC:EURUSD",
                "title": "EUR to USD"
            }, {
                "proName": "BITSTAMP:BTCUSD",
                "title": "Bitcoin"
            }, {
                "proName": "BITSTAMP:ETHUSD",
                "title": "Ethereum"
            }, {
                "proName": "FX:GBPUSD",
                "description": "GBP to USD"
            }, {
                "proName": "FX:USDJPY",
                "description": "USD to JPY"
            }, {
                "proName": "FX:AUDUSD",
                "description": "AUD to USD"
            }, {
                "proName": "OANDA:USDJPY",
                "description": "USD to JPY"
            }, {
                "proName": "OANDA:USDCAD",
                "description": "USD to CAD"
            }, {
                "proName": "FX:NZDUSD",
                "description": "NZD to USD"
            }, {
                "proName": "VELOCITY:GOLD",
                "description": "Gold"
            }],
            "showSymbolLogo": true,
            "isTransparent": false,
            "displayMode": "compact",
            "colorTheme": "light",
            "width": "100%",
            "height": 74,
            "utm_medium": "widget",
            "utm_campaign": "ticker-tape"
        }
    </script>
</div>
<!-- TradingView Widget END -->
