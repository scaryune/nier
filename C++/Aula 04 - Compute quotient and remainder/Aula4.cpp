#include <iostream>
using namespace std;

int main(){
    int divisor, dividend, quotient, remainder;

    cout << "Enter divident: ";
    cin >> dividend;

    cout << "Enter divisor: ";
    cin >> divisor;

    // The divisor operator / computes the quotient(either between floor or integer variables)
    quotient = dividend / divisor;
    // The modulus operator % computes the remainder when one integer is divided by another(modulus operator cannot be used for floating-tpye variables).
    remainder = dividend % divisor;

    cout <<"Quotient = " << quotient << endl;
    cout << "remainder = " << remainder;
    
    return 0;
}

