#include "Odejmowanie.h"
#include <iostream>
using namespace std;
Odejmowanie::Odejmowanie(float l1, float l2)
{
    this->liczba1 = l1;
    this->liczba2 = l2;
}

float Odejmowanie::oblicz()
{
    return this->liczba1 - this->liczba2;
}
