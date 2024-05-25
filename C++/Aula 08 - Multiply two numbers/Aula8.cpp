#include <iostream>
using namespace std;

int main(){
    //In this program, the user is asked to enter two numbers. These two numbers entered by the user are stored in variable num1 and num2 respectively.

    //Then, the product of num1 and num2 is evaluated and the result is stored in variable product.

    // Stores two floating point numbers in num1 and num2 respectively.
    double num1, num2, product;
    cout << "Enter two numbers: ";
    cin >> num1 >> num2;
    // Performs multiplication and stores the result in product variable.    
    product = num1 * num2;

    //Finally, the product is displayed on the screen.
    cout << "Produt = " << product;

    return 0;
}