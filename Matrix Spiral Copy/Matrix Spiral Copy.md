## Matrix Spiral Copy

Given a 2D array (matrix)  `inputMatrix`  of integers, create a function  `spiralCopy`  that copies  `inputMatrix`’s values into a 1D array in a spiral order, clockwise. Your function then should return that array. Analyze the time and space complexities of your solution.

**Example:**

```pramp
input:  inputMatrix  = [ [1,    2,   3,  4,    5],
                         [6,    7,   8,  9,   10],
                         [11,  12,  13,  14,  15],
                         [16,  17,  18,  19,  20] ]

output: [1, 2, 3, 4, 5, 10, 15, 20, 19, 18, 17, 16, 11, 6, 7, 8, 9, 14, 13, 12]

```

See the illustration below to understand better what a clockwise spiral order looks like.

![alt](https://www.pramp.com/img/content/img06.png "Clockwise spiral order")Clockwise spiral order

**Constraints:**

-   **[time limit] 5000ms**
    
-   **[input] array.array.integer**  `inputMatrix`
    
    -   1 ≤ inputMatrix[0].length ≤ 100
    -   1 ≤ inputMatrix.length ≤ 100
-   **[output] array.integer**


