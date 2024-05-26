using System;

// Just study examples code needs to be split in parts to be able to work !
namespace Sample{
    class Test{
        public static void Main(string[] args)
        {
            // Print diferent lines
            Console.WriteLine("C# is cool");
            Console.WriteLine("New line");
            
            // Print same line
            Console.Write("Prints on");
            Console.Write("Same line"); 

            int value = 10;

            // Variable 
            Console.WriteLine(value);
            // Literal
            Console.WriteLine(50.05);

            int val = 55;
            Console.WriteLine("Hello " + "World");
            Console.WriteLine("Value = " + val);

            int fistNumber = 5, secondNumber = 10, result;
            result = firstNumber + secondNumber;
            Console.WriteLine("{0} + {1} = {2}", fistNumber, secondNumber, result);

            string testString;
            Console.Write("Enter a string : ");
            testString = Console.ReadLine();
            Console.WriteLine("You entered '{0}'",testString);

            int userInput;
            
            Console.WriteLine("Press any key continue...");
            Console.ReadKey();
            Console.WriteLine();

            Console.Write("Input using read() :");
            userInput = Console.ReadKey();
            Console.WriteLine("ASCII Value = {0}", userInput);
    
            int intVal;
            double doubleVal;

            Console.Write("Enter Integer Value: ");
            userInput = Console.ReadLine();
            /* Converts to interger type */
            intVal = Convert.ToInt32(userInput);
            Console.WriteLine("You entered {0}",intVal);

			Console.Write("Enter double value: ");
			userInput = Console.ReadLine();
			/* Converts to double type */
			doubleVal = Convert.ToDouble(userInput);
			Console.WriteLine("You entered {0}",doubleVal);
        }
    }
}