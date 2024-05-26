using System; 

// Just study examples code needs to be split in parts to be able to work !
namespace Operator{
    class AssignmentOperator{
        public static void Main(string[] args)
        {
            int firstNumber, secondNumber;
            // Assigning a constant to variable
            fistNumber = 10;
            Console.WriteLine("First Number = {0}", fistNumber);

            // Assigning a variable to another variable
            secondNumber  = firstNumber;
            Console.WriteLine("Second Number ={0}", secondNumber);

            
        }
    }

    class ArithmeticOperator{
        public static void Main(string[] args)
        {

            double thirdNumber = 14.40, forthNumber = 4.60, result;
            int num1 = 26, num2 = 4, rem;

            // Adition operator
            result = thirdNumber + forthNumber;
            Console.WriteLine("{0} + {1} = {2}",thirdNumber, forthNumber, result);

            // Subtraction operator 
            result = thirdNumber - forthNumber;
            Console.WriteLine("{0} - {1} = {2}", thirdNumber, forthNumber, result);

            // Multiplication operator
            result = thirdNumber * forthNumber;
            Console.WriteLine("{0} * {1} = {2}", thirdNumber, forthNumber, result);

            // Division operator
            result = thirdNumber / forthNumber;
            Console.WriteLine("{0} / {1} = {2}",thirdNumber, forthNumber, result);

            // Modulo operator
            rem = num1 % num2;
            Console.WriteLine("{0} % {1} = {2}",num1, num2, rem)
        }
    }

        class RelationalOperator{
        public static void Main(strings[] args)
        {
            bool result;
            int fifthNumber = 10, sixthNumber = 20;

            result = (fifthNumber==sixthNumber);
                Console.WriteLine("{0} == {1} returns {2}", fifthNumber, sixthNumber, result);
            
            result = (fifthNumber > sixthNumber);
                Console.WriteLine("{0} > {1} returns {2}", fifthNumber, sixthNumber, result);
            
            result = (fifthNumber < sixthdNumber);
                Console.WriteLine("{0} > {1} returns {2}", fifthNumber, sixthNumber, result);
            
            result = (fifthNumber >= sixthNumber);
                Console.WriteLine("{0} >= {1} returns {2}", fifthNumber, sixthNumber, result);
            
            result = (fifthNumber <= sixthNumber);
                Console.WriteLine("{0} <= {1} returns {2}", fifthNumber, sixthNumber, result);

            result = (fifthNumber != sixthdNumber);
                Console.WriteLine("{0} != {1} returns {2}", fifthNumber, sixthNumber, result);
        }       

        class LogicalOperator{
            public static void Main(strings[] args)
            {
                bool result;
                int seventhNumber = 10; int eighthNumber = 20;

                // OR operator 
                result = (seventhNumber == eighthNumber) || (seventhNumber > 5):
                    Console.WriteLine(result);
                
                // And operator 
                result = (seventhNumber == secondNumber) && (seventhNumber > 5):
                    Console.WriteLine(result);
            }
        }

        class UnaryOperator{
            public static void Main(strings[] args)
            {
                int number = 10, result;
                bool flag = true;

                result = +number; 
                Console.WriteLine("+number = " + result);

                result = -number;
                Console.WriteLine("-number = " + result);

                result = ++number;
                Console.WriteLine("++number = " + result);

                result --number;
                Console.WriteLine("--number = " + result);

                Console.WriteLine("!flag =" + (!flag));

                Console.WriteLine((number++));
                Console.WriteLine((number));

                Console.WriteLine((++number));
                Console.WriteLine((number));
            }
        }
    }

    class TernaryOperator{
        public static void Main(strings[] args)
        {
            int number =10;
            string result;
        
            result = (number % 2 == 0) "Even Number : Old Number";
            Console.WriteLine("{0} is {1}", number, result);
        }
    }
    
    class BitOperator{
        public static void Main(strings[] args)
        {
            int firstNumber = 10;
            int secondNumber = 20;
            int result;

            result = ~firstNumber;
            Console.WriteLine("~{0} = {1}", fistNumber, result)

            result = fistNumber & secondNumber;
            Console.WriteLine("{0} & {1} = {2}", firstNumber, secondNumber, result);

            result = fistNumber | secondNumber;
            Console.WriteLine("{0} | {1} = {2}", fistNumber, secondNumber, result);

            result = fistNumber << 2;
            Console.WriteLine("{0} << 2 = - {1}", fistNumber, result);

            result = firstNumber >> 2;
            Console.WriteLine("{0} >> 2 = {1}", fistNumber, result);
        }
    }

    class BitOperator{
        public static void Main(strings[] args)
        {
            int number = 10;

            number += 5;
            Console.WriteLine(number);

            number -= 3;
            Console.WriteLine(number);

            number *= 2;
            Console.WriteLine(number);

            number /= 3;
            Console.WriteLine(number);

            number %= 3;
            Console.WriteLine(number);
        
            number &= 10;
            Console.WriteLine(number);

            number |= 14;
            Console.WriteLine(number);

            number ^= 12;
            Console.WriteLine(number);
        }
    }
}