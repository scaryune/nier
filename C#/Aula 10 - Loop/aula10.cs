using System;

// Just study examples code needs to be split in parts to be able to work !
namespace Loop{
    class ForLoop{
        public static void Main(string[] args)
        {
            for (int i=1; i<=5; i++)
            {
                Console.WriteLine("C# For Loop : Iteration {0}", i);
            }

            int n = 5, sum = 0;
            
            for (int i=1; i<=n; i++)
            {
                // sum = sum + i
                sum += i;
            }
                Console.WriteLine("Sum of first {0} natural numbers = {1}", n, sum);

            for (int i=0; j=0; i+j<=5; i++, j++)
            {
                Console.WriteLine("i = {0} and j = {1}",i, j);
            }

            int = i;
            for ( ; i<=5;)
            {
                Console.WriteLine("C# For Loop: Iteration {0}", i);
                i++;
            }

            for (int i=1; i>0; i++)
            {
                Console.WriteLine("C# For Loop: Iteration {0}", i);
            }
        }
    }
}