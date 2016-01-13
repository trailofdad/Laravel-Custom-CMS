/**
 * Created by findl on 2016-01-12.
 */
var x = prompt("Enter Grade","0");

if (!isNaN(parseFloat(x)) && isFinite(x)){//put regex here to validate into here
        var num1 = parseInt(x);
        if (num1 < 60 ) {
            console.log("The Grade is F")
        }
        if (num1 > 60 && num1 < 70) {
            console.log ("The Grade is D")
        }
        if (num1 > 70 && num1 < 80) {
            console.log("The Grade is C")}

        if (num1 > 80 && num1 < 90) {
            console.log("The Grade is D")
        }
        if (num1 < 90) {
            console.log("The Grade is A")
        }
    } else {
    console.log("Invalid")
}

