using System;

// Just study examples code needs to be split in parts to be able to work !
namespace CsharpString {
    class Test {
        public static void Main(string[] args)
        {
            // Create String
            string str1 = "C# Progamming";
            string str2 = "Progamiz";
            // Print String

            Console.WriteLine(str1);
            Console.WriteLine(str2);
            
             // create string
            string str = "C# Programming";
            Console.WriteLine("string: " + str);
            // Get the length of str 
            int length = str.Length;
            Console.WriteLine("Length:" + length);

            Console.ReadLine();

            // Create String 1
            string str1 = "C#";
            Console.WriteLine("String str1 : " + str1);

            // Create String 2
            string str2 = "Progamming";
            Console.WriteLine("String str2 : " + str2); 

            // Join Strings 
            string joinedString = string.Concat(str1, str2);
            Console.WriteLine("Joined String : " + joinedString);

            Console.ReadLine();

            // Create String 3
            string str3 = "C#";
            
            // Compare str1 and str2 
            Boolean result1 = str1.Equals(str2);
            Console.WriteLine("String str1 and str2 are equal : " + result1);

            // Compare str1 and str3
            Boolean result2 = str1.Equals(str3);
            Console.WriteLine("String str1 and str3 are equal :" + result2);

            Console.ReadLine();

            // Create string " Hello "

            string str = "Hello";

            /* Add another string " World "
            to the previous string example
            */
            str = string.Concat(str, "World"); 

            // Create String 
            string name = "Programiz";

            // String interpolation
            string message = $"Welcome to {name}";
            Console.WriteLine(message);

            Console.ReadLine();
        }
    }
}