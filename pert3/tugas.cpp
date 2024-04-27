#include <iostream>
#include <string>

using namespace std;

void buku(){
    cout << "TUGAS BUKU" << endl;
    string judul_buku;
    string pengarang;
    string tahun_terbit;
    string jumlah_halaman;

    cout<<"input judul buku :";
    cin >> judul_buku;

}

void film(){
    cout << "TUGAS FILM" << endl;
    string judul_film;
    string sutradara;
    string rating_film;

}

void barang(){
    cout << "TUGAS BARANG" << endl;

}

void biodata(){
    cout << "TUGAS BIODATA" <<endl;
}

int main(){
    int pilih;
    char kembali;
    do {
        cout<<"0. exit"<<endl;
        cout<<"1. tugas 1"<<endl;
        cout<<"2. tugas 2"<<endl;
        cout<<"3. tugas 3"<<endl;
        cout<<"4. tugas 4"<<endl;
        cout<<"pilihan : ";
        cin>>pilih;
        switch(pilih){
            case 0:
                cout<<"terima kasih"<<endl;
                return 0;
            case 1:
                buku();
                break;
            case 2:
                film();
                break;
            case 3:
                barang();
                break;
            case 4:
                biodata();
                return 0;
            default:
                cout<<"pilihan salah"<<endl;
                break;
        }
        cout<<"pilih kembali?"<<endl;
        cin>>kembali;
    }
    while (kembali !='t');
    cout<<"terima kasih"<<endl;
    return 0;
}