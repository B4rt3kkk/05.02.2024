#include "Dodawanie.h"
#include <iostream>
using namespace std;

Dodawanie::Dodawanie(float l1, float l2)
{
	this->liczba1 = l1;
	this->liczba2 = l2;

}
float Dodawanie::oblicz()
{
	return this->liczba1 + this->liczba2;                                 
}
