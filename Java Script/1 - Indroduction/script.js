// Aula 1

// Display Hello World
console.log("Hello World");

// Aula 2

// declare variable num assign 5 to num
let num = 5;

// declare variable name
let name;

// declare variable num1 and assign 5 to it
let num1 = 5;

// declare variable num2 and assign 6 to it 
let num2 = 6;

// assign 5 to variable score 
let score = 5;
console.log(score); // 5

// change the value of score to 3 
console.log(score); // 3

// valid
let message = "hello";
let _message = "hello";
let $message = "hello";

// invalid 
// let 1message = "hello"; // this gives an error 

let age = 23;
let Age = 20;

console.log(age); // 23
console.log(Age); // 20

// invalid 
// let new = 5; // Error! new is a keyworld 
//

// assign 5 to number
const number = 5;

// assign 10 to number 
// number = 10;
// console.log(numero) // Error ! constant cannot be changed 

// Error ! Missing initializer in const declarition

// Attempt to initialize constant after declartion 
const x = 5;

console.log(x)

// Aula 3

let messagejava = "Hello, Javacript !";
console.log(messagejava);

// store value is great variable
const great = "Hello";


// print the value of great variable 
console.log(great)

console.log("Good Morning");
console.log(2000);

// Aula 4

// String enclosed within single quotes 
let fruit = 'apple';
console.log(fruit);

// string enclosed within double quotes
let country = "USA";
console.log(country);

// string enclosed within backticks
let result = `fail`;
console.log(result);

// integer value
let integer_number = -3;
console.log(integer_number);

// floating-point value
let float_number = 3.15;
console.log(float_number)

// Big int 
let value1 = 900719925124740998n;

// Add two big integers 
let result1 = value1 + 1n;
console.log(result1); // 900719925124740999n

let value2 = 900719925124740998n;

let dataChecked = true;
console.log(dataChecked); // true

let valueCounted = false;
console.log(dataChecked); // false 

let name_un;
console.log(name_un); // undefined

//let name = undefined;
//console.log(name);

let number_n = null;
console.log(number_n); // null


// two symbols with the same description
let valuep = Symbol("Progam");
let valuepp = Symbol("Progam");

console.log(valuep === valuepp); //false 

// object
let student = {
  firstName: "Débora",
  lastName: null,
  class: 10
};


// Aula 5 

let y = 5;

// addition operator
console.log("Addition: y + 3 = ", y + 3);
//subtration operator 
console.log("Subtration: y - 3 = ", y - 3);
//multiplication operator
console.log("Multiplication: y * 3 = ", y * 3);
//division operator
console.log("Division: y / 3 = ",  y / 3);
//remainder operator 
console.log("Remainder: y % 3 = ", y % 3);
// increment operator
console.log("Increment: ++y = ", ++y);
//decrement operator 
console.log/("Decrement --y = ", --y)
// exponentiation operator 
console.log("Exponentition: x ** 3 = ", x ** 3);

// equal to operator
console.log("Equal to: 2 == 2 is", 2 == 2);
// not equal operator
console.log("Not equal to 3 != 3 is", 3 != 3);
// stringly equal to operator 
console.log/("Strictly equal to: 2 === '2' is ", 2 === '2');
// greater than operator 
console.log("Greater than : 3 > 3 is", 3 > 3);
// less than operator
console.log("Less than: 2 > 2 is", 2 > 2);
// greater than or equal to operator 
console.log("Greater than or equal to: , 3 >= 3 is", 3 >= 3);
// less than or equal to operator
console.log("Less than or equal to : 2 <= 2 is", 2 <= 2);

const d = 5, s = 3;
console.log((d < 6) && (s < 5));

let o = 3;

// logical AND
console.log((o < 5) && (o > 0));  // true
console.log((o < 5) && (o > 6));  // false

// logical OR
console.log((o > 2) || (o > 5));  // true
console.log((o > 3) || (o < 0));  // false

// logical NOT
console.log(!(o == 3));  // false
console.log(!(o < 2));  // true

// Output: true


// numeric string used with + gives string type


// convert number to string
result = "3" + 2; 
console.log(result, "-", typeof(result));

result = "3" + true; 
console.log(result, "-", typeof(result));

result = "3" + null; 
console.log(result, "-", typeof(result));

// convert string to number
result = Number("5");
console.log(result, "-", typeof(result));

// convert boolean to string
result = String(true);
console.log(result, "-", typeof(result));

// convert number to boolean
result = Boolean(0);
console.log(result, "-", typeof(result));


