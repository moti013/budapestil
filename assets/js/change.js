/*--------------------------פונקצייה לשערי המרה API-----------------------------------*/
var x = document.getElementById('root1')
var y = document.getElementById('root2')
var request = new XMLHttpRequest()
request.open('GET', 'https://api.exchangeratesapi.io/latest', true)
request.onload = function () {
    // Begin accessing JSON data here
    var data = JSON.parse(this.response)
    var ils = data.rates.ILS
    x.value = ils
    var huf = data.rates.HUF
    y.value = huf
}
request.send()

/*---------------------------מחשבון המרה---------------------------------------------*/
function lengthConverter(b, e) {
    e = parseFloat(e);
    var d = document.getElementById("inputils");
    var c = document.getElementById("inputeuro");
    var a = document.getElementById("inputforint");
    if (b == "inputils") {
        c.value = (e * (1/x.value)).toFixed(4);
        a.value = (e * (y.value/x.value)).toFixed(4)
    }
    if (b == "inputeuro") {
        d.value = (e * x.value).toFixed(4);
        a.value = (e * y.value).toFixed(4)
    }
    if (b == "inputforint") {
        d.value = (e * (x.value/y.value)).toFixed(4);
        c.value = (e * (1 / y.value)).toFixed(4)
    }
}