#include "Dzielenie.h"
#include <iostream>
using namespace std;
Dzielenie::Dzielenie(float l1, float l2)
{
    this->liczba1 = l1;
    this->liczba2 = l2;
}

float Dzielenie::oblicz()
{
    float wynik;
    try{
        wynik = this->liczba1 / this->liczba2;

    }
    catch (const exception){
        wynik = 0;
    }
    return 0;
}
