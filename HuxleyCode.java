import java.util.*;

public class HuxleyCode {
  public static void main(String args[]) {
    Scanner input = new Scanner(System.in);
    int numEntrada = input.nextInt();
    double[][] matriz = new double[numEntrada][numEntrada];
    double numeroAtual;

    for(int linha = 0; linha < numEntrada; linha++){
      for (int coluna = 0; coluna < numEntrada; coluna++){
        numeroAtual = input.nextDouble();
        if (numeroAtual < 0) numeroAtual *= -1;
        matriz[linha][coluna] = numeroAtual;
      }
    }
    input.close();

    boolean converge = true;
    double somaResto, numPrincipal;
    
    for (int coluna = 0; coluna < numEntrada; coluna++){
      somaResto = 0;
      numPrincipal = 0;
      for(int linha = 0; linha < numEntrada; linha++){  
        if (coluna == linha){
          numPrincipal = matriz[linha][coluna];
        }
        else{
          somaResto += matriz[linha][coluna];;
        }
      }
      if (numPrincipal == 0) numPrincipal = 1;


      if (!(somaResto/numPrincipal < 1)){
        converge = false;
      }
    }
    if(converge){
      System.out.println("SIM");
    }else{
      System.out.println("NAO");
    }
  }
}
/*
6
-3  -1 -1    3  4    7
-1  -3 -1   55  2    1
-1  -1 -3    3  4 -100
 1   1 21    2  3    9 
 8   9  0 2007  4   -1 
-2  -1 -9   -9 -7    0

SIM
*/
