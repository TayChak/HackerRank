import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        while(n-- > 0) {
            int num = sc.nextInt();
            if( isPrime(num) ) System.out.println("Prime");
            else System.out.println("Not prime");
        }
    }
        private static boolean isPrime(int n) {
            if( n<2 ) return false;
            for( int i=2; i<=(int)Math.sqrt(n); i++)
                if( n%i == 0) return false;
            return true;
        }
}