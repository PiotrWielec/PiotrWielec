using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw1
{
    class Program
    {
        
        static void Main(string[] args)
        {
            using System;

            {
                //zadanie 1
                string z = "s";
                Console.WriteLine(z);
                double x = 2, y = 9.7;
                Console.WriteLine(x * y);
                Console.ReadLine();
            }
           
//3
 double a = -2500000;
            double b = 0.03;
            double c = 2500000;
            double d;
            d = a + b + c;
          Console.WriteLine("d = a + b + c \t" + d);
            Console.WriteLine(d = a + c + b);
            Console.WriteLine("d = a + c + b \t" + d);
            Console.WriteLine(d = a + c);
            Console.WriteLine("d = a + c \t" + d);
            Console.WriteLine(d = d + b);
            Console.WriteLine("d = d + b \t" + d);
            Console.WriteLine(d = a + b);
            Console.WriteLine("d =  a + b \t" + d);
            Console.WriteLine(d = d + c);
            Console.WriteLine("d  = d + c \t" + d);

//4
 Console.WriteLine("podaj imie");
            string s = Console.ReadLine();
            Console.WriteLine("Witam Cie");
            Console.WriteLine(s );
            
            //5
               Console.WriteLine("Podaj liczbe a");
            double a = Convert.ToDouble( Console.ReadLine());
            Console.WriteLine("Podaj liczbe b");
            double b = Convert.ToDouble(Console.ReadLine());
            double c = (a + b) / 2;
            Console.WriteLine("c =" + c);
            Console.ReadKey();
            //6
             Console.WriteLine("Podaj Pole kola");
            double d = Convert.ToDouble(Console.ReadLine());

            // d = pi * r ^ 2 => r = Sqrt(d/ pi)
            double r;
            r = Math.Sqrt(d / Math.PI);

            Console.WriteLine("r =" + r);
            Console.ReadKey();
            //Math Pow(r, 2);


            Console.ReadKey();
        }
    }
}
