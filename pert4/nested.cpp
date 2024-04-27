#include <iostream>

using namespace std;

void postfixinc() {
    int a = 1;
    cout << a << " ini nilai awal i" << endl;
    cout << ++a << " ini nilai prefix" << endl;
    cout << a++ << " ini nilai postfix" << endl;
}

void nestedfor(){
    int i =2;
    int j =0;
    for (i; i<=2; ++i){ //postfix increment ?
        for (j; j<=i;++j){ //prefix increment ?
            cout << j << endl;
        }
    }
    cout << endl;
}

void nestedif(){
    int a = 10;
    if (a <= 5) {
        cout << "nilai awal" << endl;
        if (a <= 5) {
            cout << "nilai lebih kecil" << endl;

            if (a >= 5) {
                cout << "nilai lebih besar" << endl;
            }
        } else {
            cout << "invalid" << endl;
        }
    } 
}

int main(){
    nestedfor();
    postfixinc();
    nestedif();
    return 0;
}