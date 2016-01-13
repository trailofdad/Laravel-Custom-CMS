/**
 * Created by findl on 2016-01-12.
 */
var x = prompt("What is your marital status(Single or Married)","0");
var y = prompt("What is your income", "0");

var income = parseInt(y);

if (x == "single"){
    if (income < 8000 ) { taxOwed = (income *.1)}
        if (income > 8000 && income <32000){
            taxOwed = (income *.15)+800
        }
    if (income > 32000){
        taxOwed = (income *.25)+4400
    }

    }

else {
    if (income < 16000 ) { taxOwed = (income *.1)}
    if (income > 16000 && income <64000){
        taxOwed = (income *.15)+1600
    }
    if (income > 64000){
        taxOwed = (income *.25)+8800
    }

}