/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package monprojet;

/**
 *
 * @author alae2
 */
public class MonProjet {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        System.out.println("hello world");
        char lettre = '?';
        int chiffre = '1';
        long lchiffre =1000;
        float virgule = 3.14f;
        double lvirgule = 3.14159f;
        boolean yesorno = true;
        String tout = "oui";
        int age = 2026 - 2002;
        System.out.println(age);
        String nomComplet ="Dupon" +" " + "Pierre";
        System.out.println(nomComplet + " est nee en 2002 donc il a "+ age + " ans");
        char a ='1';
        char b ='2';
        if (a==b){
            System.out.println(a+" = "+b);
        }else{
           System.out.println(a+" et "+ b +" sont different");
        }
}
}