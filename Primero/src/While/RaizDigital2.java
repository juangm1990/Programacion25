package While;

import java.util.Scanner;

public class RaizDigital2 {
    
    public static void main(String[] args) throws Exception {
        
        Scanner input = new Scanner(System.in);

        int numero = 0;
        int cosciente = 0;
        int resto = 0;
        int sumaresto = 0;

        System.out.println("Introduce un número");
        numero = input.nextInt();


        while (numero >= 10) {

            sumaresto = 0; 


            while (numero > 0) {

                cosciente = numero / 10;   
                resto = numero % 10;  
                sumaresto = sumaresto + resto;     

                System.out.println(cosciente);
                System.out.println(resto);
              
                numero = cosciente;
            }

            System.out.println("La suma del resto es: " + sumaresto);   
            numero = sumaresto;
        }
                    

        System.out.println("La raíz digital es: " + numero);

        input.close();
    }
}