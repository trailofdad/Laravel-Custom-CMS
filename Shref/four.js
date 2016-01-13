var x = prompt("Enter Usage of Water (Cubic Feet)","0");

    var num1 = parseInt(x);
    if (num1 < 1001 ) {
        totalCost = 15
    }
    if (num1 > 1000 && num1 < 2001) {
        totalCost = (.0175 * num1)
    }
    if (num1 > 2000 && num1 < 3001) {
        totalCost = (.02 * num1)
    }
    if (num1 < 90) {
        totalCost = 70}

console.log("Total charge is $"+totalCost.toFixed(2))



