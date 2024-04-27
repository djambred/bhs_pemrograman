#include <iostream>

using namespace std;


int main(){

    for(int i = 1; i <=10;++i){
        cout << i << endl;
        
        // kodingan kedua
        for(char z = 'A'; z <= 'J'; ++z){
            if(z == 'A' +i -1){
                cout << z << endl;
            }
        }
        // kodingan pertama
        // char z = 'A' + i - 1;
        // if (z<= 'J'){
        //     cout << z << endl;
        // }
    }

    return 0;
}