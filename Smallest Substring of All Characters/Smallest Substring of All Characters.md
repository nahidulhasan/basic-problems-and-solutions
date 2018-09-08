## Smallest Substring of All Characters

Given an array of unique characters  `arr`  and a string  `str`, Implement a function  `getShortestUniqueSubstring`  that finds the smallest substring of  `str`  containing all the characters in  `arr`.

 Return  `""`  (empty string) if such a substring doesn’t exist.

Come up with an asymptotically optimal solution and analyze the time and space complexities.

**Example:**

```
input:  arr = ['x','y','z'], str = "xyyzyzyx"

output: "zyx"

```

**Constraints:**

-   **[time limit] 5000ms**
    
-   **[input] array.character**  `arr`
    
    -   1 ≤ arr.length ≤ 30
-   **[input] string**  `str`
    
    -   1 ≤ str.length ≤ 500
-   **[output] string**
