#include <iostream>
#include "Dodawanie.h"
#include "Odejmowanie.h"
#include "Dzielenie.h"

//Projekt kalkulatora w rozbiciu na pliki nagłówkowe
//w plikach naglowkowych deklarujemy class, metody, własciwosci
using namespace std;
int main()
{
    setlocale(LC_ALL, "");
    float l1, l2;
    cout << "Podaj liczbe 1 = "; cin >> l1;
    cout << "Podaj liczbe 2 = "; cin >> l2;

    Dodawanie dodawanie = Dodawanie(l1, l2);
    cout << "Wynik Dodawania = " << dodawanie.oblicz() << endl;

    Odejmowanie odejmowanie = Odejmowanie(l1, l2);
    cout << "Wynik Odejmowania = " << odejmowanie.oblicz() << endl;

    Dzielenie dzielenie = Dzielenie(l1, l2);
    cout << "Wynik Dzielenia = " << dzielenie.oblicz() << endl;

    return EXIT_SUCCESS;
}


