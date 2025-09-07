# PHP Projects

### A repository of PHP code I've written as part of the Codecademy PHP course.

## Study topics list

- The difference between static and dynamic web pages.

- To interpolate strings in PHP, use the ```$``` symbol.

### Ways to do string interpolation in PHP:

- Add the variable, preceded by ```$```, directly into the string.
- Place brackets around the variable name (leaving the ```$``` outside the brackets) when the string variable needs to be directly adjacent to another character: for example, when you want to add a suffix.
        
### The difference between assignment by reference and assignment by value

- Creating a variable ```b``` and assigning it another variable ```a``` means that ```b``` is an independent entity with a different memory location to ```a```. It only has the same value in common with ```a```. ```b``` will not change if the value of ```a``` is changed.
- Creating a reference 'c' and assigning it 'a' using the reference assignment operator '=&' means that 'c' should refer to the exact same memory location as 'a'. This means that 'c' will change when 'a' is changed.

### Order of operations (PEMDAS)
1. Parentheses
2. Exponents
3. Multiplication
4. Division
5. Addition
6. Subtraction

- Using ```&``` to pass by reference
- PHP's equivalent to C#'s ```ref``` keyword is the ```&``` operator prepended to the variable, for example: ```&$variable```.
