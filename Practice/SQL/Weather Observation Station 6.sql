SELECT DISTINCT CITY FROM STATION WHERE CITY RLIKE '^[aeiouAEIOU]' //Query the list of CITY names starting with vowels (a, e, i, o, u) from STATION
SELECT DISTINCT CITY FROM STATION WHERE CITY RLIKE  "[aeiouAEIOU]$"; // Query the list of CITY names ending with vowels (a, e, i, o, u) from STATION
