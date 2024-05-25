# include <iostream>
// Allows to write cout, cin, endl, etc. Instead of std::cout, std::cin, std::endl
 
using namespace std;

int main() {
    int number;
    cout << "Enter an integer: ";
    cin >> number;

    cout << "You entered " << number;
    return 0;
}