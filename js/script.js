"use strict";

/**
 *
 * Strict mode : Strict Mode in JavaScript is a way to opt into a stricter set of rules for your code.
 * It helps catch common mistakes and prevents potentially problematic language features,
 * making your code cleaner, more secure, and easier to debug.
 *
 * We can apply strict mode to the entire application as well as a particular function.
 *
 *
 *
 */

console.log("HELLO JAVASCRIPT");

/**
 *
 * Values : A piece of data.
 *
 * Variables : A place where we store values.
 *
 */

console.log(23 + 45 + 78);

// Declaring a variable :

let a = 33;

console.log(a);

/**
 *
 * Data types (Premitive data types)
 * 1. Number
 * 2. String
 * 3. Boolean
 * 4. Undefiend
 * 5. Symbol (ES2015)
 * 6. Bigint (ES2020)
 *
 * KEY POINTS
 *
 * ==> Javascript is a Dynamic types language i.e we don't need to specify the data type, it automatically detects the data types.
 * ==> We can assign different data types to a variable already storing an value of some other data types.
 * ==> Any value is either an Object or Premitive data types.
 *
 */

/**
 * Declaring variables :
 * 1. let(ES2015) : declaring mutable variable / variable can be empty / block scoped veriable / can be reassigned but not redeclared in same scope
 * 2. const : declaring immutable variable / variable can't be empty / block scoped variable /
 * 3. var : declaring mutable variable / variable can be empty / function scoped variable /
 */

/**
 *
 * Type Conversion(Explicit) : When we manually convert one data type to another data types.
 *
 *
 * Type Coercion (Implicit): When JS automatically convert one data type to another data types.
 *
 */

const numOne = "100";
console.log(99 + numOne); // type coercion i.e 99 is converting from 'int' to 'string' automatically
console.log(99 + Number(numOne)); // Types converion i.e manually converitg "100" string to int before adding , but origianl calue is not converted

console.log(Number("Tarun")); // trying converitn a non int value to int. It will return and error

/**
 *
 * Falsy Values : Values that are not false but will convert to false when converted to a Boolean value.
 *
 * Truthy Values : Values that are not falsy values are know as truthy values.
 *
 */

console.log(Boolean("TEXT")); // trthy
console.log(Boolean(0)); // falsy
console.log(Boolean(undefined)); // truthy
console.log(Boolean("")); // falsy

/**
 *
 * Equality Operators : '==' vs '==='
 *
 * '==' : Checks if values are equal.
 * '===' : Check if values and data types are also equal
 *
 */

console.log("100" == 100); // true
console.log("100" === 100); // false

/**
 *
 *  Boolean Logic : Uses TRUE or FALSE to perform operation.
 *
 * 1. AND :  If all condtions are true.
 * 2. OR : If any of the conditions is true.
 * 3. XOR : Inverted
 *
 */

/**
 *
 * Switch statement : Alternate way of implementing a complex if-else loop
 *
 */

const day = "Monday";

switch (day) {
  case "Monday":
    console.log("Its modnay");
    break;
  case "Tuesday":
    console.log("Its Tuesday");
    break;
  case "Wednusday":
    console.log("Its Wednusday");
    break;
  case "Thursday":
    console.log("Its Thursday");
    break;
  case "Friday":
    console.log("Its Friday");
    break;
  case "Saturday":
    console.log("Its Saturday");
    break;
  default:
    console.log("Its Sunday");
    break;
}

/**
 *
 * Statement : A big chunk of code which returns a result.
 *
 *
 * Expressions : A valid single line code that produces a value.
 *
 *
 */

/**
 *
 * Ternary Operator : condtion ? Case 1 : Case 2
 *
 */

/**
 *
 * Functions : A reuseable piece of code that perform an action.
 *
 *
 */

function logger() {
  // creating a function
  console.log("LOGGER FUNCTION");
}

logger(); // executing / invoking / calling / running a function

//  afunction recieving and returning a data

function cal(x, y) {
  return x + y;
}

console.log(cal(4, 5));

/**
 * Function declaration vs expression
 */
const sum = function (a, b) {
  return a + b;
};

console.log(sum(33, 43));

/**
 *
 * Arrow function : shorter syntax for writing functions.
 *
 */

const abc = (x, y) => x - y;

console.log(abc(34, 12));

/**
 *
 * DATA STRUCTURE VERY IMPORTANT FOR DSA
 *
 * Arrays : Ordered collection of same or different types of items.
 * Items can be primitives [number,string,boolean etc] or object or nested array.
 *
 */

const list = ["Tarun", "18th Feb", 1990, true, 2020]; // Define and store data to array. Lenght not defined

console.log(list);

const arrayOne = new Array(5); // Defines an empty array with lenght 5.

console.log(arrayOne);

const arrayTwo = new Array(false, true, 2, "3");

console.log(arrayTwo);

// Accessing the data

console.log(list[4]);

// Basic Array functions :

// PUSH : Adding an element at the end of array.
console.log(list.push(234)); // Adding a new element to the end of the list it returns the new length

console.log(list);

list[1] = "19th Feb"; // Replacing an existing value at any index

console.log(list);

// UNSHIFT : adding a new element to begining of the array

console.log(list.unshift("Varun"));

console.log(list);

// POP : remove last element of the array

console.log(list.pop()); // return the removed element

console.log(list);

// Shift : remove the first element and return the removed element

console.log(list.shift());

console.log(list);

// indexOf : return the index of the element

console.log(list.indexOf("Tarun")); // return index
console.log(list.indexOf("ABC")); // returns -1

// includes : check if element exists in array and return true / falase, uses strict equility for comparision

console.log(list.includes(1990));

console.log(list.includes(1200));
