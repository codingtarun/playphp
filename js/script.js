

/**
 * Strict mode : 
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
 */