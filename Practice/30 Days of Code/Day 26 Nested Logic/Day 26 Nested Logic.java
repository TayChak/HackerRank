import java.io.*;
import java.util.*;

public class Solution {
    static int getFine(int actualDay, int actualMonth, int actualYear, int expectedDay,      int expectedMonth, int expectedYear) {
        if(actualYear > expectedYear) return 10000;
        if(actualYear < expectedYear) return 0;
        if(actualMonth > expectedMonth) {
            return 500 * (actualMonth-expectedMonth);
        }
        if(actualMonth < expectedMonth) return 0;
        if(actualDay > expectedDay) {
            return 15 * (actualDay-expectedDay);
        }
        return 0;
    }

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        Scanner sc = new Scanner(System.in);
        int actualDay = sc.nextInt();
        int actualMonth = sc.nextInt();
        int actualYear = sc.nextInt();
        int expectedDay = sc.nextInt();
        int expectedMonth = sc.nextInt();
        int expectedYear = sc.nextInt();
        int fine = getFine(actualDay, actualMonth, actualYear, 
            expectedDay, expectedMonth, expectedYear);
        System.out.println(fine);
    }
}