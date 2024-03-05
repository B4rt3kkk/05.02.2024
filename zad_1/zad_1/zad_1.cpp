#include <iostream>
using namespace std;

class samochody {

	private:
		string name;
		float pojemnosc;

public:
	samochody() {
		cout << "To jest default konstruktor chopie" << endl;
	}
	samochody(string mojanazwa) {
		this->name = mojanazwa;
		cout << "To jest default konstruktor chopie" << this->name << endl;
	}
	samochody(string mojanazwa, float poj) {
		this->name = mojanazwa;
		this->pojemnosc = poj;
		cout << "To jest default konstruktor chopie" << this->name << endl;
		cout << "Pojemność" << this->pojemnosc << endl;;

	}
};

int main()
{

	samochody fiat;

	return EXIT_SUCCESS;
}
