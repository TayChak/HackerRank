SELECT ROUND(S1.LAT_N, 4) FROM STATION AS S1  WHERE 
    (SELECT ROUND(COUNT(S1.ID)/2) - 1 FROM STATION) = (SELECT COUNT(S2.ID) FROM STATION AS S2 
       WHERE S2.LAT_N > S1.LAT_N); // Query the median of the Northern Latitudes (LAT_N) from STATION and round your answer to  decimal places.
