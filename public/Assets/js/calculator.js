
//value decrease button
function decValue() {
    let lotSizeInput = document.querySelector('#lotSize');
    let lotSize = parseFloat(lotSizeInput.value);

    if (!isNaN(lotSize)) {
        lotSize -= 0.01;
        lotSizeInput.value = lotSize.toFixed(2);
    }
}

//value increase button
function incValue() {

    let lotSizeInput = document.querySelector('#lotSize');
    let lotSize = parseFloat(lotSizeInput.value);

    if (!isNaN(lotSize)) {
        lotSize += 0.01;
        lotSizeInput.value = lotSize.toFixed(2);
    }
}


//margin calculator function
function calculateMargin() {

    /* required variables
        symbolType
        live bid price
        leverage       
        contractSize       
        lot size
    */
  
    let symbolType = document.querySelector('#symbolList').value;
    let livePrice = '1.08646';
    let leverage = document.querySelector('#leverageList').value;
    let lotSize = document.querySelector('#lotSize').value;
   

    let bidPriceString = livePrice.toString();
    //find the decimal point
    let decimalIndex = bidPriceString.indexOf('.');

    //function to make the contractSize/Unit 
    function countZero() {
        // Check if there is a decimal point
        if (decimalIndex !== -1) {
            // Count the number of digits after the decimal point
            let digitsAfterDecimal = bidPriceString.length - decimalIndex - 1;
            let zeroVar = '0'.repeat(digitsAfterDecimal);
            return zeroVar;
        }
    }
    let contractSize = 1 + countZero();
    

    /*
        formula to calculate margin
        contract Size*lot Size*live price/leverage
    */
    let margin = contractSize * lotSize * livePrice / leverage
    let result = margin.toFixed(2);
    console.log('Live price :' + livePrice);
    console.log('contract Size :' + contractSize);
    //console.log('current bid price :'+currentBidPrice);
    console.log('Margin :' + result);

//assign calculation result
 document.querySelector('#resultSymbol').innerHTML=symbolType;
 document.querySelector('#resultPrice').innerHTML=livePrice;
 document.querySelector('#resultleverage').innerHTML=leverage;
 document.querySelector('#resultLotSize').innerHTML=lotSize;
 document.querySelector('#resultMargin').innerHTML='$ '+result;

    // Hide #mycontainer
    document.getElementById("mycontainer").style.display = "none";
    // Show #resultContainer
    document.getElementById("resultContainer").style.display = "block";

}

//profit calculator function
function calculateProfit(){
       /* required variables
        symbolType
        live bid price
        live ask price
        contractSize       
        lot size
    */

        let symbolType = document.querySelector('#symbolList').value;
        let currencyType = document.querySelector('#currencyList').value;
        let lotSize = document.querySelector('#lotSize').value;
        let openPrice = document.querySelector('#openPrice').value;
        let closePrice = document.querySelector('#closePrice').value;
        let tradeDirection = document.querySelector('input[name="buySell"]:checked').value;

        console.log(symbolType);
        console.log(currencyType);
        console.log(lotSize);
        console.log(openPrice);
        console.log(closePrice);
        console.log(tradeDirection);   


           //function to make the contractSize/Unit 
           let openPriceString = openPrice.toString();
           //find the decimal point
           let decimalIndex = openPriceString.indexOf('.');
    function countZero() {
        // Check if there is a decimal point
        if (decimalIndex !== -1) {
            // Count the number of digits after the decimal point
            let digitsAfterDecimal = openPriceString.length - decimalIndex - 1;
            let zeroVar = '0'.repeat(digitsAfterDecimal);
            return zeroVar;
        }
    }
    let contractSize = 1 + countZero();

    // fromula to calculate profit (Close Price - Open Price) x Lot x Contract Size +/- Swap.
if(tradeDirection == 'buy'){
    let tradePrice = closePrice-openPrice;
    let profit = tradePrice*lotSize*contractSize;
    let result = profit.toFixed(2);

    // console.log('Profit/Loss '+contractSize);
    console.log('Profit/Loss '+result);

    document.querySelector('#resultInstrument').innerHTML=symbolType;
    document.querySelector('#resultLotSize').innerHTML=lotSize;
    document.querySelector('#resultOpenPrice').innerHTML=openPrice;
    document.querySelector('#resultClosePrice').innerHTML=closePrice;
    document.querySelector('#resultDirection').innerHTML=tradeDirection;
    document.querySelector('#resultProfit').innerHTML='$ '+result;
}else{
    let tradePrice = openPrice-closePrice;
    let profit = tradePrice*lotSize*contractSize;
    let result = profit.toFixed(2);

    // console.log('Profit/Loss '+contractSize);
    console.log('Profit/Loss '+result);

    document.querySelector('#resultInstrument').innerHTML=symbolType;
    document.querySelector('#resultLotSize').innerHTML=lotSize;
    document.querySelector('#resultOpenPrice').innerHTML=openPrice;
    document.querySelector('#resultClosePrice').innerHTML=closePrice;
    document.querySelector('#resultDirection').innerHTML=tradeDirection;
    document.querySelector('#resultProfit').innerHTML='$ '+result;
}
    
   
     // Hide #mycontainer
     document.getElementById("mycontainer").style.display = "none";
     // Show #resultContainer
     document.getElementById("resultContainer").style.display = "block";
}