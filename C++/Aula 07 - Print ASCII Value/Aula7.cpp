#include <iostream>
using namespace std;

int main(){
    // When we explicity print the integer value of a char type, it's corresponding ASCII Value is printed.
    char c;
    cout << "Enter a character : ";
    cin >> c;
    cout << "Enter value of " << c << " is " << int(c); 
    return 0;
}