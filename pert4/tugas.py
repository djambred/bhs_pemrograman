def get_int(prompt):
    while True:
        try:
            return int(input(prompt))
        except ValueError:
            print("Masukkan Angka")

def tambah(a,b):
    print("tambah:",a + b)

def kurang(a,b):
    print("kurang:",a - b)

def kali(a,b):
    print("kali:",a * b)

def bagi(a,b):
    print("bagi:",a / b)


def main():
    while True:
        print("MENU")
        print("1. Tambah")
        print("2. Kurang")
        print("3. Kali")
        print("4. Bagi")
        print("5. Exit")

        pilih = input("Pilihan : ")

        if pilih == '5':
            print ("Exit")
            break
        if pilih in ('1','2','3','4'):
            a = get_int("Masukkan Angka 1 : ")
            b = get_int("Masukkan Angka 2 : ")

            if pilih == '1':
                tambah(a,b)
            elif pilih == '2':
                kurang(a,b)
            elif pilih == '3':
                kali(a,b)
            elif pilih == '4':
                bagi(a,b)
            else:
                print("Pilihan Salah")

if __name__ == "__main__":
     main()
            