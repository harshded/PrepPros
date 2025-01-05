-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2024 at 08:58 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preppros`
--

-- --------------------------------------------------------

--
-- Table structure for table `aptitude_test`
--

DROP TABLE IF EXISTS `aptitude_test`;
CREATE TABLE IF NOT EXISTS `aptitude_test` (
  `question_id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `opt1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `opt2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `opt3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `opt4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `correct_ans` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aptitude_test`
--

INSERT INTO `aptitude_test` (`question_id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `correct_ans`) VALUES
(1, 'What is the value of (4 * 6) + (8 ÷ 2)?', '20', '30', '28', '24', '28'),
(2, 'If 3x + 5 = 20, what is the value of x?', '5', '6', '7', '8', '5'),
(3, 'What is 81^(1/2)?', '8', '9', '10', '11', '9'),
(4, 'A train travels 120 miles in 2 hours. What is its speed in miles per hour?', '5', '60', '70', '80', '60'),
(5, 'Choose the correct synonym for \'Eloquent\'.', 'Poignant', 'Fluent', 'Reserved', 'Taciturn', 'Fluent'),
(6, 'What is the antonym for \'Obsolete\'?', 'Contemporary', 'Outdated', 'Extinct', 'Current', 'Current'),
(7, 'Which sentence is grammatically correct?', 'He doesn\'t have no money.', 'He doesn\'t have no money.', 'They are singing a song.', 'We have already ate dinner.', 'They are singing a song.'),
(8, 'Choose the correctly spelled word.', 'Accomodate', 'Acommodate', 'Accommodate', 'Acomodate', 'Accommodate'),
(9, 'If all cats are mammals and some mammals are dogs, can we conclude that all cats are dogs?', 'Yes', 'No', 'Maybe', 'Sometimes', 'No'),
(10, 'If A implies B, and B implies C, what can be inferred?', 'A implies C', 'C implies A', 'A is independent of B and C', 'A contradicts C', 'A implies C'),
(11, 'If John is taller than Mike, and Mike is taller than Bob, who is the shortest?', 'John', 'Mike', 'Bob', 'Not enough information', 'Bob'),
(12, 'If no birds can fly and Tweety is a bird, what can be concluded?', 'Tweety can fly', 'Tweety cannot fly', 'Tweety is a fish', 'Some birds can fly', 'Tweety cannot fly'),
(15, 'Solve for x: 2x - 5 = 11', '8', '9', '10', '11', '8'),
(16, 'What is the synonym for \'Voracious\'?', 'Hungry', 'Tired', 'Happy', 'Sad', 'Hungry'),
(17, 'Identify the correctly punctuated sentence.', 'She loves to read, but she hates math.', 'He is going to the store but, he forgot his wallet.', 'They went to the beach, and they played volleyball.', 'I like pizza, however I prefer pasta.', 'She loves to read, but she hates math.'),
(18, 'What is the missing number in the sequence: 3, 6, 12, ?, 48', '18', '24', '30', '36', '24'),
(19, 'If all squares are rectangles, and all rectangles have four sides, what can be concluded?', 'All squares have four sides', 'All rectangles are squares', 'Some rectangles are not squares', 'Squares do not have four sides', 'All squares have four sides'),
(21, 'Simplify: (3^2 * 4^2) / (3^3 * 4)', '4/3', '2/3', '3/4', '1/3', '4/3'),
(22, 'Which word is an anagram of \"ELEVEN\"?', 'ELEVEN', 'VENEEL', 'NEVELE', 'LENEVE', 'NEVELE'),
(23, 'If 6 men can complete a task in 8 days, how many men are needed to complete the same task in 4 days?', '12', '18', '24', '36', '12'),
(24, 'What is the next number in the sequence: 1, 4, 9, 16, ___?', '24', '25', '30', '36', '25'),
(25, 'Which of the following sorting algorithms has the worst-case time complexity of O(n^2)?', 'Merge Sort', 'Quick Sort', 'Heap Sort', 'Bubble Sort', 'Bubble Sort'),
(26, 'What will be the output of the following C code? \n\n int main() { \n int i = 0; \n while (++i < 5) \n printf(\"%d\", i); \n return 0; \n }', '1234', '12345', '123456', '1234567', '1234'),
(27, 'What is the chemical formula for table salt?', 'NaCl', 'H2O', 'CO2', 'C6H12O6', 'NaCl'),
(28, 'Who is known as the \"Father of Computers\"?', 'Alan Turing', 'Charles Babbage', 'Steve Jobs', 'Bill Gates', 'Charles Babbage'),
(29, 'What is the binary representation of the hexadecimal number \"3F\"?', '00111111', '10111111', '11111100', '11111111', '111111'),
(30, 'What is the output of the following SQL query? \n\n SELECT AVG(salary) FROM Employees WHERE department = \"IT\";', 'Average salary of all employees', 'Average salary of employees in the IT department', 'Average salary of employees with the highest salary', 'Average salary of employees with the lowest salary', 'Average salary of employees in the IT department'),
(31, 'Find the value of 3 * (5 + 8) - 2^2 + 4 * 2.', '47', '51', '55', '59', '51'),
(32, 'Which of the following is a valid IPv6 address?', '192.168.1.1', 'fe80::c001:1a2b:3c4d:5e6f', '256.0.0.1', 'localhost', 'fe80::c001:1a2b:3c4d:5e6f'),
(33, 'Who wrote the famous novel \"War and Peace\"?', 'Fyodor Dostoevsky', 'Leo Tolstoy', 'Charles Dickens', 'Jane Austen', 'Leo Tolstoy'),
(34, 'What is the value of √(121) + √(169)?', '30', '31', '32', '33', '30'),
(35, 'Which of the following is NOT a programming language?', 'Java', 'Python', 'HTML', 'Linux', 'Linux'),
(36, 'What is the largest organ in the human body?', 'Heart', 'Liver', 'Brain', 'Skin', 'Skin'),
(37, 'What is the value of 5! (factorial of 5)?', '120', '60', '240', '720', '120'),
(38, 'Which of the following is NOT a relational database management system?', 'MySQL', 'Oracle', 'SQLite', 'MongoDB', 'MongoDB'),
(39, 'What is the chemical symbol for gold?', 'Au', 'Ag', 'Pb', 'Fe', 'Au'),
(40, 'Which of the following is the correct definition of \"polymorphism\" in programming?', 'Ability to perform different tasks based on the context', 'Storing data in multiple forms', 'Executing multiple threads simultaneously', 'None of the above', 'Ability to perform different tasks based on the context'),
(41, 'What is the boiling point of water in Celsius?', '0°C', '100°C', '-100°C', '50°C', '100°C'),
(42, 'Who discovered penicillin?', 'Alexander Fleming', 'Marie Curie', 'Isaac Newton', 'Albert Einstein', 'Alexander Fleming'),
(43, 'If log(base 2)8 = x, then what is the value of x?', '2', '3', '4', '5', '3'),
(44, 'Which of the following data structures uses LIFO (Last In, First Out) strategy?', 'Queue', 'Stack', 'Linked List', 'Tree', 'Stack'),
(45, 'What is the time complexity of binary search algorithm?', 'O(1)', 'O(log n)', 'O(n)', 'O(n^2)', 'O(log n)'),
(46, 'Who is credited with the invention of the World Wide Web (WWW)?', 'Bill Gates', 'Tim Berners-Lee', 'Mark Zuckerberg', 'Steve Jobs', 'Tim Berners-Lee'),
(47, 'What is the chemical formula for water?', 'H2O2', 'CO2', 'H2O', 'H2SO4', 'H2O'),
(48, 'What is the value of 2^4 * 3^2 * 5^3?', '3000', '6000', '7500', '15000', '3000'),
(49, 'Which of the following is NOT a valid SQL constraint?', 'PRIMARY KEY', 'FOREIGN KEY', 'INDEX', 'GROUP BY', 'GROUP BY'),
(50, 'What is the capital of Australia?', 'Canberra', 'Sydney', 'Melbourne', 'Perth', 'Canberra');

-- --------------------------------------------------------

--
-- Table structure for table `coding_questions`
--

DROP TABLE IF EXISTS `coding_questions`;
CREATE TABLE IF NOT EXISTS `coding_questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `example` text NOT NULL,
  `constraints` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coding_questions`
--

INSERT INTO `coding_questions` (`id`, `question`, `example`, `constraints`) VALUES
(1, 'Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.', 'Example: Input: nums = [2,7,11,15], target = 9; Output: [0,1]', '1. You may assume that each input would have exactly one solution, and you may not use the same element twice.'),
(2, 'Given a signed 32-bit integer x, return x with its digits reversed.', 'Example: Input: x = 123; Output: 321', '1. Assume the environment does not allow you to store 64-bit integers (signed or unsigned).'),
(3, 'Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.', 'Example: Input: x = 121; Output: true', '1. Could you solve it without converting the integer to a string?'),
(4, 'Given a roman numeral, convert it to an integer.', 'Example: Input: s = \"III\"; Output: 3', '1. The numeral must be a valid roman numeral.'),
(5, 'Write a function to find the longest common prefix string amongst an array of strings.', 'Example: Input: [\"flower\",\"flow\",\"flight\"]; Output: \"fl\"', '1. All given inputs are in lowercase letters a-z.'),
(6, 'Given a string s containing just the characters \"(\", \")\", \"{\", \"}\", \"[\" and \"]\", determine if the input string is valid.', 'Example: Input: s = \"()[]{}\"; Output: true', '1. An input string is valid if:\r\n   a. Open brackets must be closed by the same type of brackets.\r\n   b. Open brackets must be closed in the correct order.'),
(7, 'Merge two sorted linked lists and return it as a sorted list.', 'Example: Input: l1 = [1,2,4], l2 = [1,3,4]; Output: [1,1,2,3,4,4]', '1. The number of nodes in both lists is in the range [0, 50].\r\n2. -100 <= Node.val <= 100\r\n3. Both l1 and l2 are sorted in non-decreasing order.'),
(8, 'Given a sorted array nums, remove the duplicates in-place such that each element appears only once and returns the new length.', 'Example: Input: nums = [0,0,1,1,1,2,2,3,3,4]; Output: length = 5', '1. Do not allocate extra space for another array; you must do this by modifying the input array in-place with O(1) extra memory.'),
(9, 'Return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.', 'Example: Input: haystack = \"hello\", needle = \"ll\"; Output: 2', '1. You may assume both haystack and needle consist only of lowercase English characters.'),
(10, 'Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.', 'Example: Input: nums = [1,3,5,6], target = 5; Output: 2', '1. You must write an algorithm with O(log n) runtime complexity.'),
(11, 'Given an integer array nums, find the contiguous subarray (containing at least one number) which has the largest sum and return its sum.', 'Example: Input: nums = [-2,1,-3,4,-1,2,1,-5,4]; Output: 6 (Explanation: [4,-1,2,1] has the largest sum = 6.)', '1. You should solve it in linear time complexity O(n).'),
(12, 'Given a non-empty array of decimal digits representing a non-negative integer, increment one to the integer.', 'Example: Input: digits = [1,2,3]; Output: [1,2,4]', '1. The digits are stored such that the most significant digit is at the head of the list, and each element in the array contains a single digit.'),
(13, 'Given two sorted integer arrays nums1 and nums2, merge nums2 into nums1 as one sorted array.', 'Example: Input: nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3; Output: [1,2,2,3,5,6]', '1. You may assume that nums1 has a size equal to m + n such that it has enough space to hold additional elements from nums2.'),
(14, 'You are climbing a staircase. It takes n steps to reach the top. Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?', 'Example: Input: n = 2; Output: 2 (Explanation: There are two ways to climb to the top.)\r\n    1. 1 step + 1 step\r\n    2. 2 steps', '1. You must write an algorithm that runs in O(n) time complexity.'),
(15, 'Given a string s containing just the characters \"(\", \")\", \"{\", \"}\", \"[\" and \"]\", determine if the input string is valid.', 'Example: Input: s = \"()[]{}\"; Output: true', '1. An input string is valid if:\r\n   a. Open brackets must be closed by the same type of brackets.\r\n   b. Open brackets must be closed in the correct order.'),
(16, 'Given an array nums and a value val, remove all instances of that value in-place and return the new length.', 'Example: Input: nums = [3,2,2,3], val = 3; Output: length = 2 (Explanation: Your function should return length = 2, with the first two elements of nums being 2.)', '1. The order of elements can be changed. It doesn\'t matter what you leave beyond the new length.'),
(17, 'Return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.', 'Example: Input: haystack = \"hello\", needle = \"ll\"; Output: 2', '1. You may assume both haystack and needle consist only of lowercase English characters.'),
(18, 'Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.', 'Example: Input: nums = [1,3,5,6], target = 5; Output: 2', '1. You must write an algorithm with O(log n) runtime complexity.'),
(19, 'Given an integer array nums, find the contiguous subarray (containing at least one number) which has the largest sum and return its sum.', 'Example: Input: nums = [-2,1,-3,4,-1,2,1,-5,4]; Output: 6 (Explanation: [4,-1,2,1] has the largest sum = 6.)', '1. You should solve it in linear time complexity O(n).'),
(20, 'Given a non-empty array of decimal digits representing a non-negative integer, increment one to the integer.', 'Example: Input: digits = [1,2,3]; Output: [1,2,4]', '1. The digits are stored such that the most significant digit is at the head of the list, and each element in the array contains a single digit.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `speaker` varchar(100) DEFAULT NULL,
  `participants_count` int DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `about` text,
  `what_to_learn` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_interview`
--

DROP TABLE IF EXISTS `hr_interview`;
CREATE TABLE IF NOT EXISTS `hr_interview` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `speciality` varchar(50) DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL,
  `appointment` datetime DEFAULT NULL,
  `time_duration` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ide_data`
--

DROP TABLE IF EXISTS `ide_data`;
CREATE TABLE IF NOT EXISTS `ide_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code_file` text NOT NULL,
  `input` text NOT NULL,
  `output` text,
  `language` varchar(50) NOT NULL,
  `execution_time` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

DROP TABLE IF EXISTS `mcqs`;
CREATE TABLE IF NOT EXISTS `mcqs` (
  `id` int NOT NULL,
  `question_title` text,
  `answers` text,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `time_req` int DEFAULT NULL,
  `total_marks` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

DROP TABLE IF EXISTS `mentors`;
CREATE TABLE IF NOT EXISTS `mentors` (
  `m_id` int NOT NULL,
  `mentor_name` varchar(100) DEFAULT NULL,
  `mentor_contact` varchar(20) DEFAULT NULL,
  `speciality` varchar(50) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `user_id` int NOT NULL,
  `payment_amt` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL,
  `next_due` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL,
  `course_module` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `course_module`) VALUES
(1, 'What is the size of the char data type in C++?', '1 byte', '2 bytes', '4 bytes', '8 bytes', '1 byte', 'cpp_1'),
(2, 'Which operator is used for addition in C++?', '+', '-', '*', '/', '+', 'cpp_1'),
(3, 'What does the += operator do in C++?', 'Subtraction', 'Multiplication', 'Division', 'Addition and assignment', 'Addition and assignment', 'cpp_1'),
(4, 'What is the result of num1++ in C++?', 'Increment num1 by 1', 'Decrement num1 by 1', 'Increment num1 after the current value is used', 'Decrement num1 after the current value is used', 'Increment num1 after the current value is used', 'cpp_1'),
(5, 'Which logical operator in C++ returns true if both operands are true?', '&&', '||', '!', '==', '&&', 'cpp_1'),
(6, 'What is the relational operator for \"not equal to\" in C++?', '!=', '==', '>', '<', '!=', 'cpp_1'),
(7, 'What is the bitwise AND operator in C++?', '&', '|', '^', '~', '&', 'cpp_1'),
(8, 'What is the purpose of the ternary operator in C++?', 'Addition', 'Subtraction', 'Assignment', 'Conditional assignment', 'Conditional assignment', 'cpp_1'),
(9, 'Which operator returns the size of a variable or data type in C++?', '+', '-', ',', 'sizeof', 'sizeof', 'cpp_1'),
(10, 'According to the operator precedence in C++, which operator has the highest priority?', '&&', '*', '+', '||', '*', 'cpp_1'),
(11, 'What is the purpose of a function in C++?', 'To perform a specific task', 'To define a data type', 'To declare a variable', 'To include a library', 'To perform a specific task', 'cpp_2'),
(12, 'Which keyword is used to declare a function in C++?', 'method', 'func', 'function', 'int', 'int', 'cpp_2'),
(13, 'What is the syntax for defining a function in C++?', 'function_name return_type(parameter_list) { // C++ Statements }', 'return_type function_name(parameter_list) { // C++ Statements }', 'parameter_list function_name return_type { // C++ Statements }', 'parameter_list function_name { // C++ Statements }', 'return_type function_name(parameter_list) { // C++ Statements }', 'cpp_2'),
(14, 'What is the purpose of function declaration in C++?', 'To define the function', 'To declare the function before it is used', 'To call the function', 'To specify the return type', 'To declare the function before it is used', 'cpp_2'),
(15, 'Which type of function is pow(x, y) in C++?', 'Built-in function', 'User-defined function', 'Library function', 'Recursive function', 'Built-in function', 'cpp_2'),
(16, 'Which type of function is sum(int a, int b) in the given example?', 'Built-in function', 'User-defined function', 'Library function', 'Recursive function', 'User-defined function', 'cpp_2'),
(17, 'What is recursion in C++?', 'Calling a function indirectly', 'Calling a function directly', 'Function calling itself', 'Declaring a function multiple times', 'Function calling itself', 'cpp_2'),
(18, 'What is the base condition in recursion?', 'Condition for calling a function', 'Condition for exiting the recursive function', 'Condition for defining the recursive function', 'Condition for the starting point of recursion', 'Condition for exiting the recursive function', 'cpp_2'),
(19, 'Which type of recursion is shown in the given example: fa(int n) calls fb(int n-1) and fb(int n) calls fa(int n-1)?', 'Direct recursion', 'Indirect recursion', 'Nested recursion', 'Multiple recursion', 'Indirect recursion', 'cpp_2'),
(20, 'What happens if the base condition is not defined in a recursive function?', 'Compilation error', 'Runtime error', 'Stack overflow error', 'Memory overflow error', 'Stack overflow error', 'cpp_2'),
(21, 'What is an array in C++?', 'A collection of similar items stored in contiguous memory locations', 'A collection of different items stored in non-contiguous memory locations', 'A single variable that can hold multiple values', 'A type of loop in C++', 'A collection of similar items stored in contiguous memory locations', 'cpp_3'),
(22, 'How many ways are there to declare an array in C++?', '2', '3', '4', '5', '3', 'cpp_3'),
(23, 'What is the index of the first element in an array?', '0', '1', '-1', 'Depends on the size of the array', '0', 'cpp_3'),
(24, 'Which method is preferred for initializing an array?', 'Method 1', 'Method 2', 'Method 3', 'All methods are equally preferred', 'Method 2', 'cpp_3'),
(25, 'What is the syntax for accessing array elements?', 'array_name(index)', 'array_name{index}', 'index[array_name]', 'array_name[index]', 'array_name[index]', 'cpp_3'),
(26, 'What is a two-dimensional array also known as?', 'Array of arrays', 'Array of integers', 'Array of strings', 'Array of characters', 'Array of arrays', 'cpp_3'),
(27, 'How are elements stored in a two-dimensional array?', 'In a tabular form', 'In a linear form', 'In a random form', 'In a circular form', 'In a tabular form', 'cpp_3'),
(28, 'What is the preferred method of initializing a two-dimensional array?', 'Method 1', 'Method 2', 'Method 3', 'All methods are equally preferred', 'Method 2', 'cpp_3'),
(29, 'How do you pass a two-dimensional array to a function?', 'As two separate arrays', 'As a single array', 'By reference', 'By value', 'By reference', 'cpp_3'),
(30, 'What is the purpose of using string objects in C++?', 'To handle strings as character arrays', 'To handle strings efficiently', 'To limit the size of strings', 'To make strings immutable', 'To handle strings efficiently', 'cpp_3'),
(31, 'What is a pointer in C++?', 'A variable that holds the address of another variable', 'A variable that holds the value of another variable', 'A variable that holds the result of an arithmetic operation', 'A variable that holds the size of another variable', 'A variable that holds the address of another variable', 'cpp_4'),
(32, 'What is the syntax for declaring a pointer?', 'data_type *pointer_name;', 'pointer_name = &variable;', 'variable *pointer_name;', 'pointer_name = variable;', 'data_type *pointer_name;', 'cpp_4'),
(33, 'How do you assign the address of a variable to a pointer?', 'pointer_name = variable;', 'pointer_name = &variable;', 'variable = pointer_name;', 'variable = *pointer_name;', 'pointer_name = &variable;', 'cpp_4'),
(34, 'What does the this pointer hold?', 'The value of the current object', 'The address of the current object', 'The size of the current object', 'The data type of the current object', 'The address of the current object', 'cpp_4'),
(35, 'How do you access the value of a variable through a pointer?', '*pointer_name;', 'pointer_name;', 'pointer_name++;', 'pointer_name--;', '*pointer_name;', 'cpp_4'),
(36, 'What is the correct way to increment a pointer?', 'pointer_name++;', 'pointer_name = pointer_name + 1;', 'pointer_name = *pointer_name + 1;', 'pointer_name = pointer_name++;', 'pointer_name++;', 'cpp_4'),
(37, 'What does the array name alone represent?', 'The size of the array', 'The last element of the array', 'The base address of the array', 'The data type of the array', 'The base address of the array', 'cpp_4'),
(38, 'How do you traverse an array using pointers?', 'Using a for loop with array index', 'By directly accessing array elements', 'By incrementing the pointer to the next element', 'By decrementing the pointer to the previous element', 'By incrementing the pointer to the next element', 'cpp_4'),
(39, 'What is the purpose of using the this pointer?', 'To access the current object in a member function', 'To access the previous object in a member function', 'To access the next object in a member function', 'To access a specific object in a member function', 'To access the current object in a member function', 'cpp_4'),
(40, 'How do you return the reference of the current object in a member function?', 'Using the reference operator (&)', 'Using the dereference operator (*)', 'Using the this pointer', 'Using the scope resolution operator (::)', 'Using the this pointer', 'cpp_4'),
(41, 'What is the main feature of Object Oriented Programming (OOP)?', 'Abstraction', 'Encapsulation', 'Inheritance', 'Polymorphism', 'Encapsulation', 'cpp_5'),
(42, 'Which of the following is NOT a fundamental principle of OOP?', 'Abstraction', 'Encapsulation', 'Inheritance', 'Compilation', 'Compilation', 'cpp_5'),
(43, 'What is a class in C++?', 'A function', 'A blueprint for an object', 'A loop', 'A conditional statement', 'A blueprint for an object', 'cpp_5'),
(44, 'What is the purpose of encapsulation in OOP?', 'To hide irrelevant details', 'To combine data and functions into a single unit', 'To acquire properties of parent class', 'To allow objects to behave differently', 'To hide irrelevant details', 'cpp_5'),
(45, 'Which inheritance type allows a class to inherit more than one class?', 'Single inheritance', 'Multilevel inheritance', 'Multiple inheritance', 'Hierarchical inheritance', 'Multiple inheritance', 'cpp_5'),
(46, 'What is the syntax for function overriding in C++?', 'void function() { }', 'override void function() { }', 'virtual void function() { }', 'void function() override { }', 'void function() override { }', 'cpp_5'),
(47, 'What does a destructor do in C++?', 'Initializes an object', 'Deletes an object', 'Displays an object', 'Modifies an object', 'Deletes an object', 'cpp_5'),
(48, 'Which of the following is an example of compile-time polymorphism?', 'Function overriding', 'Function overloading', 'Constructor', 'Destructor', 'Function overloading', 'cpp_5'),
(49, 'What is the purpose of abstraction in OOP?', 'To combine data and functions into a single unit', 'To acquire properties of parent class', 'To hide irrelevant details', 'To allow objects to behave differently', 'To hide irrelevant details', 'cpp_5'),
(50, 'Which type of constructor in C++ allows passing arguments during object creation?', 'Default constructor', 'Parameterized constructor', 'Copy constructor', 'Virtual constructor', 'Parameterized constructor', 'cpp_5');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

DROP TABLE IF EXISTS `schedule_list`;
CREATE TABLE IF NOT EXISTS `schedule_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `student_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `meeting_link` varchar(255) NOT NULL,
  `updated` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`, `student_name`, `email`, `meeting_link`, `updated`, `user_id`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00', '', 'sanika@gmail.com', '', 0, 0),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00', 'ams', 'ams@gmail.com', '', 0, 0),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00', '', '', '', 0, 0),
(5, 'Cyber Security', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'asmasano4@gmail.com', '', 0, 0),
(7, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', 0, 0),
(8, 'Advanced Java', 'By Bageshree Deo ', '2024-04-02 11:00:00', '2024-03-02 12:00:00', 'Aditi Gounder', 'heyyaditi@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 0),
(9, 'HR round ', 'Shilpi ', '2024-04-02 13:00:00', '2024-04-02 15:00:00', 'om', 'a@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 0, 0),
(10, 'HR round ', 'Manjusha Wadekar', '2024-03-31 14:00:00', '2024-03-31 16:00:00', 'nmae', 'prepbroszz@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 34),
(11, 'Python', 'Amruta jog', '2024-04-17 19:00:00', '2024-04-17 21:31:00', 'Anuja Dev', 'ndfjm@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 16),
(12, 'Mentoring', 'Shilpi Khadilkar', '2024-04-12 11:00:00', '2024-04-12 12:30:00', '', '', '', 0, 0),
(17, 'c++', 'By Amruta Jog', '2024-04-05 14:00:00', '2024-04-05 15:00:00', 'Avinash Bdgu', 'avi458@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 16),
(18, 'java', 'Manjusha Wadekar', '2024-04-25 08:30:00', '2024-04-25 10:00:00', 'Rafi', '1424.asma@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 0),
(20, 'HR round ', 'Bageshree Deo', '2024-04-28 15:15:00', '2024-04-28 16:00:00', 'jsjsj', 'hjhah@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 32),
(21, 'HR round ', 'Amruta Jog', '2024-04-19 13:30:00', '2024-04-19 13:30:00', '', '', '', 0, 0),
(23, 'Mentoring', 'Manjusha Wadekar', '2024-05-09 16:00:00', '2024-05-09 16:30:00', 'khushi', 'kush@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 16),
(24, 'Mentoring', 'Manjusha ', '2024-04-26 10:00:00', '2024-04-26 11:00:00', 'Avinash Bdgu', 'avi458@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 16),
(25, 'cyber security', 'security from threat', '2024-05-02 16:35:00', '2024-05-02 17:35:00', 'om', 'ggg@gmail.com', 'https://meet.google.com/wdn-twmw-nqo', 1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `comment` text,
  `date` date DEFAULT NULL,
  `ratings` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `code` text NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_pic` longblob,
  `user_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `code`, `user_type`, `phone_number`, `created_at`, `profile_pic`, `user_status`) VALUES
(2, 'Asma Anwar Shaikh', NULL, '202cb962ac59075b964b07152d234b70', '31a89c48fbf4419dc1eb677f9f742cbb', '', NULL, '2024-02-03 13:49:28', NULL, NULL),
(7, 'Harshad', '', '$2y$12$Tloub6kixlx/q6VKoqeELuxQVhU3BbbkbnYm742VaWJWjftQuGzeu', '25ce1cbf800df6163350fd3d04945ecd', NULL, NULL, '2024-02-04 10:11:20', NULL, NULL),
(12, 'Malhar', 'h@gmail.com', '$2y$12$BfTBsncgrlpa7ybXDQHVx.GZj101S/5NIgUV0uIzEegOuYyl.xdgq', '65bf92bc47856', NULL, NULL, '2024-02-04 12:26:58', NULL, NULL),
(16, 'om', 'omjadhav25@gmail.com', '$2y$12$w5ymm8tDa1QuP2ich55ODONi7/YGN8Qa3w3WmjUmZ.G8kpmC4yTTi', 'e4c08a3ef8be7361c317d1099102e9d7', 'user', NULL, '2024-02-08 04:55:55', NULL, 'Active'),
(17, 'om', 'omjadhs715@gmail.com', '$2y$12$L1Yzx8Ag5cb0XHUh1Faf4OnxznGa7W5.9swp/NNAugccpyONnRAsG', '0bd0530a5bcf6522c48f7a3daeedd5f3', 'instructor', NULL, '2024-02-08 04:56:37', NULL, 'Active'),
(33, 'asma', 'asmasano4@gmail.com', 'ass123', '0bd0530a5bcf6522c48f7a3daeedd5f3', 'instructor', '9762286715', '2024-04-02 06:10:32', NULL, NULL),
(37, 'Harshad M', 'prepbroszz@gmail.com', '$2y$12$iNVDhhMmG1eBQp.ZnSP/Bugf6djIlV4TSPOnEBmS9FhhzD8m5O0lu', '', 'premium', NULL, '2024-04-07 09:54:00', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_progress`
--

DROP TABLE IF EXISTS `user_progress`;
CREATE TABLE IF NOT EXISTS `user_progress` (
  `progress_id` int NOT NULL,
  `time_spent` int DEFAULT NULL,
  `score` int DEFAULT NULL,
  `incorrect_answers` int DEFAULT NULL,
  `marks` int DEFAULT NULL,
  `bookmarked_question_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`progress_id`),
  KEY `bookmarked_question_id` (`bookmarked_question_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_progress`
--

INSERT INTO `user_progress` (`progress_id`, `time_spent`, `score`, `incorrect_answers`, `marks`, `bookmarked_question_id`, `user_id`) VALUES
(0, NULL, 5, 15, NULL, NULL, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
