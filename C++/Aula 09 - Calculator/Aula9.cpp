#include <iostream>
using namespace std;

int main(){
    char op;
    int num1, num2;

    cout << "Enter the operator + , - , * - / : ";
    cin >> op;

    cout << "Enter two numbers : ";
    cin >> num1 >> num2;

    switch (op) {
        case '+':
        cout << num1 << " + " << num2 << " = " << num1 + num2; 
        break;
        case '-':
        cout << num1 << " - " << num2 << " = " << num1 - num2;
        break;
        case  '*':
        cout << num1 << " * " << num2 << " = "<< num1 * num2;
        break;
        case '/':
        cout << num1 << " / " << num2 <<  " =" << num1 / num2;
        
        default:
        // If the operator is other than +, -, *-  or /, error message is show
        cout << "Error ! Operator is not correct";
    }
    return 0;
}