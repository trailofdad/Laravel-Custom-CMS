/**
 * Created by findl on 2016-01-12.
 */
var oNum = prompt("Order Number","0");
var dLength = prompt("Length of Desk","0");
var dWidth = prompt("Width of Desk","0");
var wood = prompt("Wood Selection(mahogany, oak, pine)","0");
var draw = prompt("Number of Drawers","0");
var dNum = parseInt(draw);

if (parseInt(dLength) * parseInt(dWidth) > 750)
{
    areaCost = 50
}
else
{
    areaCost = 0
}

if (wood == "mahogany") {wCost=150}
if (wood == "oak") { wCost=125}
if (wood == "pine") {wCost=0}

var totCost;
totCost = (200 + (dNum * 30) + areaCost + wCost);
