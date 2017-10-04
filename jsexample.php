<html>
<head>
<script>
function greeter(name, age) {
 
var message = name + " says howdy!! He is " + age + " years old";
 
return function greet() {
 
alert(message);
 
};
 
}
 
// Generate the closure
 
var JamesGreeter = greeter("James", 23);
 
// Use the closure
 
JamesGreeter();




function submitClick(){
	alert('submitClick');
}
function outerbutton(){
	alert('outerbutton');
}
function outerbutton(){
	alert('outerbutton');
}
function outerbutton(){
	alert('outerbutton');
}
function maindiv(){
	alert('main div');
}
function bodyclk(){
	alert('body click');
}
function insidediv(){
	alert('inside DIV');
}
function insidebutton(){
	alert('inside BUTTOn');
}

function a(x) {    // <-- function
  console.log('....from a...');
  function b(y) { // <-- inner function
    console.log('---from b---');
	return x + y; // <-- use variables from outer scope
  }
  return b;       // <-- you can even return a function.
}
console.log(a(3)(4));
</script>
</head>
<body onclick='bodyclk();return false;'>
<div onclick='maindiv();return false;'>
Main DIV.
<div onclick='insidediv();return false;'>inside div <button onclick='insidebutton();return false;'>Inside Button</button></div>
<button onclick='outerbutton();return false;'>Outer Button</button>
<input type='submit' value='submit' onclick='submitClick();return false;' />
</div>
</body>
</html>
