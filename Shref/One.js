/**
 * Created by findl on 2016-01-12.
 */
var x = prompt("Enter a Value","0");
var y = prompt("Enter a Value", "0");
var z = prompt("Enter a Value","0");
var num1 = parseInt(x);
var num2 = parseInt(y);
var num3 = parseInt(z);


var sum = num1 + num2 +num3;

if (sum % 2 == 0) {
    console.log("the result is even")
}
else {
    console.log("the result is odd")
}