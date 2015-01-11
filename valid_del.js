function validation(){
var id = document.forms["myForm"]["prod_id"].value;


if( (id.length == 0) || (id.length > 6) || isNaN(id) ) {
alert("The id field should contain the number with 6 digits! ");
return false;
}

}