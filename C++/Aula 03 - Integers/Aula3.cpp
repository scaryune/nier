#include <iostream>
using namespace std;

int main() {
    int first_number, second_number, sum;

    cout << "Enter two integers : ";
    cin >> first_number >> second_number;

    // sum of the two numbers in stored in variable sum of two numbers 
    sum = first_number + second_number;

    // print sum 
    cout << first_number << " + " << second_number << " = " << sum;

    return 0;
}