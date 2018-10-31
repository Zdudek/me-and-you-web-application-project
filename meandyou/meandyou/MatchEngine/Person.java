package meandyou;

import java.util.Arrays;

public class Person {
	
    private Person[] searches; //Contains the list of people this person is searching for
    //Information about Person
    private String username;
    private String firstName;
    private String lastName;
    private String searchedFirstName;
    private String searchedLastName;
    private String searchedUserName;
    private String birthDate;

    //default constructor (used when loading data using setter functions only)
    public Person() {
            searches = new Person[3];
    }

    public Person(String username, String firstName, String lastName, String searchedFirstName, String searchedLastName, String searchedUserName){
            this.username = username;
            this.firstName = firstName;
            this.lastName = lastName;
            this.searchedFirstName = searchedFirstName;
            this.searchedLastName = searchedLastName;
            this.searchedUserName = searchedUserName;
    }

    //Compute overall match likeness (stub)
    public double getMatchScores(Person p){
            return 0;
    }

    /*//just experimenting doesn't do much
    public double[][] compareNames(Person[] people){
            double[][] scores = new double[searches.length][people.length];
            for(int i=0; i<searches.length; i++)
                    for(int j=0; j<people.length; j++){
                            scores[i][j] = Utility.pairComparison(searches[i].getLastName(), people[i].getLastName());
                    }
            return scores;
    }*/

    @Override
    public String toString() {
            return "Person [ username=" + username + ", firstName=" + firstName + ", lastName=" + lastName + ", searchedLastName=" + searchedLastName + ", searchedFirstName="
                            + searchedFirstName + ", searchedUserName" + searchedUserName + "]";
    }

    //adds a new search to the search array ("searches" are stored as a person object, but it may not have all attribues of a person)
    public void addSearch(Person p)
    {
            searches[0] = p;
            //stub
    }

    public String getFirstName() {
            return firstName;
    }

    public void setFirstName(String firstName) {
            this.firstName = firstName;
    }

    public String getLastName() {
            return lastName;
    }

    public void setLastName(String lastName) {
            this.lastName = lastName;
    }

    public String getSearchedFirstName() {
            return searchedFirstName;
    }

    public void setSearchedFirstName(String searchedFirstName) {
            this.searchedFirstName = searchedFirstName;
    }

    public String getSearchedLastName() {
            return searchedLastName;
    }

    public void setSearchedLastName(String searchedLastName) {
            this.searchedLastName = searchedLastName;
    }

    public String getUsername() {
            return username;
    }

    public void setUsername(String userName) {
            this.username = userName;
    }

    public String getSearchedUserName() {
            return searchedUserName;
    }

    public void setSearchedUserName(String searchedUserName) {
            this.searchedUserName = searchedUserName;
    }

    public String getBirthDate() {
            return birthDate;
    }

    public void setBirthDate(String birthDate) {
            this.birthDate = birthDate;
    }
}