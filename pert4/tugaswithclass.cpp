#include <iostream>

using namespace std;

class Angka{
    private:
        int a, b;
    
    public:
        void input(){
            cout << "Masukkan Angka 1 : ";
            cin >> a;
            cout << "Masukkan Angka 2 :";
            cin >> b;
        }

        int tambah(){
            return a+b;
        }
};

int main(){
    Angka ang;
    int pilih;
    do{
        cout << "MENU" << endl;
        cout << "1. Tambah" << endl;
        cout << "Pilihan : ";
        cin >> pilih;

        switch (pilih){
            case 1:
                ang.input();
                cout << "Hasil : " << ang.tambah() <<endl;
                break;
            case '5':
                cout << "EXIT" << endl;
                break;
            default:
                cout << "Pilihan Salah!" << endl;
        }
    }while(pilih != '5');
    return 0;
}