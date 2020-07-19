import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        Scanner in = new Scanner(System.in);
        int TT = in.nextInt();
        in.nextLine();
        for(int t=0; t<TT; t++) {
            char[] chs = in.nextLine().toCharArray();
            for(int i=0; i<chs.length; i+=2) {
                System.out.print(chs[i]);
            }
            System.out.print(" ");
            for(int i=1; i<chs.length; i+=2) {
                System.out.print(chs[i]);
            }
            System.out.println();
        }
    }
}