<!DOCTYPE html>
<html lang="en">

<head>
    <title>Python Basics - Module 1</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Python Basics - Module 1</span>
    </h1>
    <div class="col-md-12 d-flex align-items-stretch">
        <div class="project-wrap" style="color: black;">
            <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                <div class="w-100 mb-4 mb-md-0">
                    <h2>Input/Output</h2>
                    <p>Python provides several functions for reading input from the user and displaying output. The <code>input()</code> function is used to read input from the user, and the <code>print()</code> function is used to display output to the console.</p>
                    <pre><code># Read input from the user
name = input("Enter your name: ")

# Display output
print("Hello, " + name + "! Welcome to Python programming.")</code></pre>

                    <h2>Python Data Types</h2>
                    <p>Python supports various data types:</p>
                    <ul>
                        <li><strong>Integers:</strong> Whole numbers, e.g., 10, -5.</li>
                        <li><strong>Floats:</strong> Decimal numbers, e.g., 3.14, -0.001.</li>
                        <li><strong>Strings:</strong> Ordered sequence of characters, e.g., "Hello", 'Python'.</li>
                        <li><strong>Lists:</strong> Ordered collection of items, mutable, e.g., [1, 2, 3], ['apple', 'banana', 'cherry'].</li>
                        <li><strong>Dictionaries:</strong> Key-value pairs, unordered, e.g., {'name': 'John', 'age': 30}.</li>
                        <li><strong>Tuples:</strong> Ordered immutable collection, e.g., (1, 2, 3), ('a', 'b', 'c').</li>
                        <li><strong>Sets:</strong> Unordered collection of unique items, e.g., {1, 2, 3}, {'apple', 'banana', 'cherry'}.</li>
                        <li><strong>Booleans:</strong> True or False.</li>
                    </ul>
                    <p>Examples:</p>
                    <pre><code># Examples of data types
age = 30
height = 5.9
name = "Alice"
numbers = [1, 2, 3, 4, 5]
person = {"name": "Bob", "age": 25}
coordinates = (10, 20)
unique_numbers = {1, 2, 3}
is_adult = True</code></pre>

                    <h2>Variables</h2>
                    <p>Variables are used to store data values. Python has a dynamic typing system, which means you don't need to declare the type of a variable explicitly.</p>
                    <pre><code># Assign values to variables
x = 10
y = 20
total = x + y
print("Total: ", total)</code></pre>

                    <h2>Python Operators</h2>
                    <p>Python provides various operators for performing operations on variables and values. These include arithmetic, comparison, logical, assignment, and bitwise operators.</p>
                    <pre><code># Examples of operators
x = 10
y = 5
sum = x + y
difference = x - y
product = x * y
quotient = x / y
remainder = x % y
exponentiation = x ** y
floor_division = x // y</code></pre>

                    <h2>Control Flow</h2>
                    <p>Control flow statements, such as <code>if</code>, <code>else</code>, and <code>while</code>, are used to control the flow of execution in a Python program.</p>
                    <pre><code># Example of control flow
num = 10
if num % 2 == 0:
    print("Even number")
else:
    print("Odd number")</code></pre>

                    <h2>Functions</h2>
                    <p>Functions are reusable blocks of code that perform a specific task. They help in organizing code and making it more modular.</p>
                    <pre><code># Example of defining a function
def greet(name):
    print("Hello, " + name + "!")

# Call the function
greet("Alice")</code></pre>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
