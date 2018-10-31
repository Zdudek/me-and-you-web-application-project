package meandyou;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;


public class MeAndYou {
    private static final int matchThreshold = 80;
    
    public static void main(String[] args) {
    	//sores all of the people that are pulled, including the searches of these people
    	Person[] people;
        //necessary for database connecting and querying
    	Connection con = null;
        PreparedStatement pst = null;
        ResultSet rs = null;
        String url = "jdbc:mariadb://localhost:3306/meandyou";
        String user = "root";
        String password = null;
        
        try {
            con = DriverManager.getConnection(url, user, password);
            /*pst = con.prepareStatement("select person.userName, searches.firstName, searches.lastName "
                                     + "from searches inner join person "
                                     + "on searches.userName=person.userName;");*/
            
            //Init array of people
            pst = con.prepareStatement("SELECT COUNT(*) FROM searches"); //set up query
            rs = pst.executeQuery();
            rs.next();//get to active row
			
            people = new Person[rs.getInt(1)];// get result of query
            System.out.println("Number of entries: " + people.length);
            
            //reset PreparedStatement and ResultSet
            pst.close();
            rs.close();
            
            //query for data in entire Person table
            pst = con.prepareStatement("select person.userName, person.firstName, person.lastName, searches.firstName, searches.lastName, searches.userName "
                                     + "from searches inner join person "
                                     + "on searches.userName=person.userName;");
            rs = pst.executeQuery();
            
            //load data into person array
            int i;
            while (rs.next()) {
            	i = rs.getRow() - 1;//array index and current row of ResultSet(-1 to fit into array index)
            	people[i] = new Person();
            	//add data to person object
            	people[i].setUsername(rs.getString(1));
            	people[i].setFirstName(rs.getString(2));
            	people[i].setLastName(rs.getString(3));
                people[i].setSearchedFirstName(rs.getString(4));
                people[i].setSearchedLastName(rs.getString(5));
                people[i].setSearchedUserName(rs.getString(6));
            	System.out.println(people[i]);//invokes the toString method in the person class
            }

            for (int row = 0; row < people.length; row++){
                String lastName = people[row].getLastName();
                String searchedLastName = people[row].getSearchedLastName();
                String firstName = people[row].getFirstName();
                String searchedFirstName = people[row].getSearchedFirstName();
                int matchPercentage = 0;
                

                for (int rowAgain = row + 1; rowAgain < people.length; rowAgain++) {
                    float result = compareStraightValue(lastName, searchedLastName, people[rowAgain].getLastName(), people[rowAgain].getSearchedLastName());
                    
                    System.out.println(rowAgain);
                    System.out.println(firstName + ", " + searchedFirstName);
                    System.out.println(people[rowAgain].getLastName() + ", " + people[rowAgain].getSearchedLastName());
                    float matchPercent = compareStraightValue(firstName, searchedFirstName, people[rowAgain].getFirstName(), people[rowAgain].getSearchedFirstName());
                    
                    result = Utility.average(result, matchPercent);
                    
                    result = Math.round(result * 100);
                    
                    if (result > matchThreshold) {
                        addMatch(people[row].getUsername(), people[rowAgain].getSearchedUserName(), url, user, password, (int)result);
                    }
                }
            }
//                for (int rowAgain = row + 1; rowAgain < people.length; rowAgain++) {
//                    if (people[rowAgain].getSearchedLastName().compareToIgnoreCase(lastName) == 0) {
//                        if (people[row].getSearchedLastName().compareToIgnoreCase(people[rowAgain].getLastName()) == 0) {
//                            //line below needs to pass the actual matchPercentage instead of 95
//                            addMatch(people[row].getUsername(), people[rowAgain].getSearchedUserName(), url, user, password, 95);
//                        }
//                    }
//                }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } finally {
            try {
                if (rs != null) {
                    rs.close();
                }
                if (pst != null) {
                    pst.close();
                }
                if (con != null) {
                    con.close();
                }
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
        }
    }
    
    public static float compareStraightValue(String string1, String searchedString1, String string2, String searchedString2) {
        float result = Utility.pairComparison(string1, searchedString2);
        result = (result + Utility.pairComparison(searchedString1, string2)) / 2;
        
        return result;
    }
    
    public static void addMatch(String userName1, String userName2, String url, String user, String password, int matchPercent) throws SQLException {
        Connection con = DriverManager.getConnection(url, user, password);
        PreparedStatement pst = con.prepareStatement("insert into matches (userName1, userName2, matchCriteria, matchPercent) "
                                                   + "values ('" + userName1 + "', '" + userName2 + "',  '???', " + matchPercent  + ");");
        pst.executeUpdate();
        pst.close();
        con.close();
    }
}