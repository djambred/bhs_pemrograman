#include <iostream>

using namespace std;
// maksudnya gimana???
void penggunaandowhile(){
    cout << "Penggunaan DO WHILE" << endl;
    int a = 1;
    int b = 2;

    do{
        cout << a << endl;
        a = a+1;
    }while(a<=b);
}

void penggunaanwhile(){
    cout << "Penggunaan WHILE" << endl;
    int a = 1;
    int b = 2;
    while(a<=b){
        cout << a << endl;
        a = a+1;
    }
}

void penggunaanwhilebreak(){
    cout << "Penggunaan WHILE BREAK" << endl;
    int a = 0;
    while(a<=1){
        //a = a+1;
        a++;
        if (a == 2)
        {
            cout << a << endl;
            break;
        }
        
        cout << "looping while berhenti" << endl;
    }
    cout << "looping di luar while berhenti" << endl;
}

int main(){
    penggunaandowhile();
    penggunaanwhile();
    penggunaanwhilebreak();
    return 0;
}