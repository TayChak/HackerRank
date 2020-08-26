import java.io.*;
import java.math.*;
import java.security.*;
import java.text.*;
import java.util.*;
import java.util.concurrent.*;
import java.util.regex.*;
class Row {
    public String firstName;
    public String emailID;
    public Row(String firstName, String emailID) {
        this.firstName = firstName;
        this.emailID = emailID;
    }
}
public class Solution {
    private static final Scanner scanner = new Scanner(System.in);
    public static void main(String[] args) {
        int N = scanner.nextInt();
        scanner.skip("(\r\n|[\n\r\u2028\u2029\u0085])?");
        List<Row> rows = new ArrayList<Row>();
        for (int NItr = 0; NItr < N; NItr++) {
            String[] firstNameEmailID = scanner.nextLine().split(" ");
            String firstName = firstNameEmailID[0];
            String emailID = firstNameEmailID[1];
            if( !firstName.matches("^[a-z]{1,20}$") ) continue;
            if( !emailID.matches("^[a-z\\.]{1,40}@gmail.com$") ) continue;
            rows.add(new Row(firstName,emailID));
        }
        scanner.close();
        rows.sort(new Comparator<Row>() {
            public int compare(Row r1, Row r2)  {
                return r1.firstName.compareTo(r2.firstName);
            }
        });
        for(Row row: rows) {
            System.out.println(row.firstName);
        }
    }
}