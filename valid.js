function validation(){
var id = document.forms["myForm"]["prod_id"].value;
var name = document.forms["myForm"]["prod_name"].value;
var cost = document.forms["myForm"]["prod_cost"].value;
var qnt = document.forms["myForm"]["prod_qnt"].value;

if( (id.length == 0) || (id.length > 6) || isNaN(id) ) {
alert("The id field should contain the number with 6 digits! ");
return false;
}

if( name == "") {
alert("The name field must not be empty");
return false;
}

if( isNaN(cost) || (cost.length == 0) || (cost < 0) ) {
alert("Price must be a positive number! Two decimals are allowed.");
return false;
}

if(cost.indexOf(".") == -1) cost += ".00";
var dec = cost.substring(fieldValue.indexOf('.')+1, fieldValue.length);
if(dec > 2){
alert("Price may contain no more than two decimals!");
}

if( !isInt(qnt) || isNaN(qnt) || (qnt<0) ){
alert("Quantity must be a positive integer!");
return false;
}

}

function isInt(n) {
   return n % 1 === 0;
}