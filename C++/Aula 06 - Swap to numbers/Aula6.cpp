#include <iostream>
using namespace std;
int main(){

    // To perform swapping, three variables are used.
    int a = 5, b = 10, temp;
    cout << "Before swapping." << endl;
    cout << "a= " << a << ", b = " << b << endl;

    //The contents of the first variable is copied into the temp variable.Then, the contents of second variable is copied to the first variable.
    // Finally, the content of the temp variable is copied back to the second variable, which completes the swapping process.
    temp = a; 
    a = b;
    b = temp;

    cout << "\nAfter swapping." << endl;
    cout << "a = " << a << ", b = " << b << endl;

    return 0;
}