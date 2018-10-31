package meandyou;
import java.lang.management.ThreadMXBean;


public class Utility
{	
	
    public static void main(String args[])
    {
            String s1 = "john";
            String s2 = "johnny";
            ThreadMXBean timer = java.lang.management.ManagementFactory.getThreadMXBean();
            long startTime = timer.getCurrentThreadCpuTime();
            /*for(int i = 0; i < 500000000; i++)
            {
                    hamming_distance(s1, s2);
            }*/
            long endTime = timer.getCurrentThreadCpuTime();
            //System.out.println("That took: "+(endTime-startTime)/10000000+ " ms");

            startTime = timer.getCurrentThreadCpuTime();

            for(int i = 0; i < 5000000; i++)
            {
                    pairComparison(s1,s2);
            }
            System.out.println("Similarity: " + pairComparison(s1,s2));

            endTime = timer.getCurrentThreadCpuTime();
            System.out.println("That took: "+(endTime-startTime)/10000000+ " ms");
    }

    private static int hamming_distance(String x, String y)
    {
            if(x.length() != y.length())
                    return -1;

            int dif = 0;
            int i = 0;

            for(i = 0; i < x.length()-1; i++)
            {
                    dif += (x.charAt(i) == y.charAt(i)) ? 0 : 1;
            }

            return dif;
    }

    public static boolean exactMatch(String x, String y)
    {
            return (x.equalsIgnoreCase(y));
    }

    /*calculates the similarity of two strings by breaking them into
     * sets of pairs and checking for similar pairs
     * Score of 0 means no similarity
     * Score of 1 means strings match exactly
     */
    public static float pairComparison(String x, String y)
    {
            //create arrays containing pairs of characters of each string
            String[] px = new String[x.length()-1];
            String[] py = new String[y.length()-1];

            //populate both arrays with pairs
            for(int i = 0; i < px.length; i++)
            {
                    px[i] = x.substring(i, i+2);
            }
            for(int i = 0; i < py.length; i++)
            {
                    py[i] = y.substring(i, i+2);
            }

            /*System.out.println(Arrays.toString(px));
            System.out.println(Arrays.toString(py));*/

            int matches = 0;
        for (int i=0; i<px.length; i++)
        {
                for(int j=0; j<py.length; j++)
                {
                        if (px[i].equals(py[j]))
                        {
                            matches++;
                            break;
                        }
                }
        }
        return (float)(2.0*matches)/(px.length + py.length);
    }
    
    public static float average(float num1, float num2) {
        return (num1 + num2) / 2;
    }
}