using System;

// Just study examples code needs to be split in parts to be able to work !
namespace Conditional{
    class IfStatement
    {
        public static void Main(string[]args)
        {
            int number = 12;
            if( number < 5 )
            {
                Console.WriteLine("{0} is less than 5", number);
            }
            else if (number > 5)
            {
                Console.WriteLine("{0} is greater than or equal to 5", number);
            }
            else
            {
                Console.WriteLine("{0} is equal to 5", number);
            }
                Console.WriteLine("This statment is always executed.");
        }
    }

    class Nested
    {
        public static void Main(string[]args)
        {
            int first = 7, second = -23, third = 13;
            if (first > second)
            {
                if(first  > third)
                {
                    Console.WriteLine("{0} is the largest", fist);
                }
                else
                {
                    Console.WriteLine("{0} is the largest", third);
                }
                else
                {
                    if(second > third)
                    {
                        Console.WriteLine("{0} is the largest", second);
                    }
                    else
                    {
                        Console.WriteLine("{0} is the largest", third);
                    }
                }
            }
        }
    }
}