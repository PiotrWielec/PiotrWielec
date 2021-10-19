#include <iostream>
#include <fstream>
using namespace std;


main()
{
	fstream plik;
	plik.open("dane.txt");
	int zm1;

//6.1
	

	int min = 256;
	int max = 0;

	for (int i = 0; i < 200; i++)
	{
		for (int j = 0; j < 320; j++)
		{
			plik >> zm1;
			if (zm1 > max)
				max = zm1;
			if (zm1 < min)
				min = zm1;
		}
	}
	cout << "6.1 Min: " << min << " ,max:  " << max << endl;
	
	//6.2
	fstream plik2;
	plik.open("dane.txt");
	int zm2;
	int tab [200][320];
	
	for(int i=0; i<200; i++)
	{
		for(int j=0; j<320; j++){
			plik2 >> zm2;
			tab[i][j] = zm2;
			
		}
	}
	
	int k;
	int symetria = 1;
	int ile_symetria = 0;
	for(int i=0; i<200; i++){
		symetria = 1;
		for(int j=0; j<160; j++)
		{
			k = 320 - 1 -j;
			if(tab[i][k] != tab[i][k])
			{
				symetria = 0;
			}
		}
		if(symetria == 0) ile_symetria++;
		
	}
	cout << "6.2 nalezy usunac "<< ile_symetria << " wierszy. " << endl;

// 6.3
 int ile_kontrastujacych = 0;
 int kontrastujacy;
 int roznica;
 
 for(int i=0; i<200; i++ )
 {
 	for(int j=0; j<320; j++)
 	{
 		
 		kontrastujacy = 0;
 		
 		// czy lewy
 		if(j>0)
 		{
 			roznica = tab[i][j] - tab[i][j-1];
 			if(roznica<0) roznica = roznica*(-1);
 			if(roznica > 128) kontrastujacy = 1;
 			
		 }
		 // czy prawy
		 if(j<319)
		
 		{
 			roznica = tab[i][j] - tab[i][j+1];
 			if(roznica<0) roznica = roznica*(-1);
 			if(roznica > 128) kontrastujacy = 1;
 			
		 }
		 	 // czy gora
		 if(i<0)
		
 		{
 			roznica = tab[i][j] - tab[i + 1][j];
 			if(roznica<0) roznica = roznica*(-1);
 			if(roznica > 128) kontrastujacy = 1;
 			
		 }
		 	 // czy dol
		 if(i<199)
		
 		{
 			roznica = tab[i][j] - tab[i - 1][j];
 			if(roznica<0) roznica = roznica*(-1);
 			if(roznica > 128) kontrastujacy = 1;
 			
		 }
		 
		 if(kontrastujacy == 1) ile_kontrastujacych++;
	 }
 }


cout << "6.3 Ilosc pikseli kontrastujacych: "<<ile_kontrastujacych << endl;

//6.4
int najdluzszy = 1;
int najdluzszy_tmp = 1;
int poprzedni;

for (int j=0; j<320; j++)
{
	for(int i = 0; i<200; i++)
	{
		if(i==0)
		{
			poprzedni = tab[i][j];
			najdluzszy_tmp = 1;
			
		}
		else if(tab[i][j] == poprzedni)	
		{
			najdluzszy_tmp++;
			
		}
		else if(najdluzszy_tmp > najdluzszy)
		{
		
		najdluzszy = najdluzszy_tmp;
		najdluzszy_tmp = 2;
	}
		}
	}



cout << "6.4 Najdluzszy ciag: " << najdluzszy << endl;

	system("pause");
	return 0;

}
