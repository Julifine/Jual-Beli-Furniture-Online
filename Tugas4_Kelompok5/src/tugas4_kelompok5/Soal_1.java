/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tugas4_kelompok5;

import java.text.DecimalFormat;
import java.util.Scanner;

/**
 *
 * @author User
 */
public class Soal_1 {
    public static void main(String args[]){
        Scanner ipt = new Scanner(System.in);
        System.out.println("SOAL - 1 Menentukan Segitiga");
        System.out.println("");
        System.out.print("Nilai A: ");
        double a = ipt.nextDouble();
        System.out.print("Nilai B: ");
        double b = ipt.nextDouble();
        System.out.print("Nilai C: ");
        double c = ipt.nextDouble();
        
        DecimalFormat df = new DecimalFormat("#.##");
        String ab = df.format(a-b);
        String ac = df.format(a-c);
        String ba = df.format(b-a);
        String bc = df.format(b-c);
        String ca = df.format(c-a);
        String cb = df.format(c-b);
        double min1 = Double.valueOf(ab);
        double min2 = Double.valueOf(ac);
        double min3 = Double.valueOf(ba);
        double min4 = Double.valueOf(bc);
        double min5 = Double.valueOf(ca);
        double min6 = Double.valueOf(cb);
        
        //Syarat - 0
        if (min1 == 0.01) {
            b = a;
        } else if (min2 == 0.01){
            c = a;
        } else if (min3 == 0.01){
            a = b;
        } else if (min4 == 0.01){
            c = b;
        } else if (min5 == 0.01){
            a = c;
        } else if (min6 == 0.01){
            b = c;
        }
        
        System.out.println("");
        System.out.println("Sisi A = "+a);
        System.out.println("Sisi B = "+b);
        System.out.println("Sisi C = "+c);
        System.out.println("");
        
        //Syarat - 1
        boolean status1 = syarat1(a,b,c);
        //Syarat - 2
        boolean status2 = syarat2(a,b,c);
        
        if (status1 == false || status2 == false){
            System.out.println("Jenis Segitiga = Segitiga tidak dapat dibangun!");
        } else if (status1 || status2) {
            
            boolean status4 = syarat4(a,b,c);
            boolean status3 = syarat3(a,b,c);
            boolean status5 = syarat5(a,b,c);
            
            //Syarat - 4
            if (status4) {
                System.out.println("Jenis Segitiga = Segitiga Sama Sisi!");
            }
            //Syarat - 3
            else if (status3) {
                System.out.println("Jenis Segitiga = Segitiga Sama Kaki!");
            }
            //Syarat - 5
            else if (status5){
                System.out.println("Jenis Segitiga = Segitiga Siku - Siku");
            }else{
                System.out.println("Jenis Segitiga = Segitiga Sembarang!");
            }
        }
    }
    
    private static boolean syarat1(double a,double b,double c){
        if (a <= 0 || b <= 0 || c <= 0) {
            return false;
        }else{
            return true;
        }
    }
    
    private static boolean syarat2(double a,double b,double c){
        if (Double.max(a, b) == a){
            if (Double.max(a, c) == a) {
                if (a >= b+c) {
                    return false;
                }
            }
        } if(Double.max(b, a) == b){
            if (Double.max(b, c) == b) {
                if (b >= a+c) {
                    return false;
                }
            }
        } if(Double.max(c, a) == c){
            if (Double.max(c, b) == c) {
                if (c >= a+b) {
                    return false;
                }
            }
        }
        return true;
    }
    
    private static boolean syarat3(double a,double b,double c){
        if (a == b || b == c || a == c) {
            return true;
        }else{
            return false;
        }
    }
    
    private static boolean syarat4(double a,double b,double c){
        if (a == b && b == c) {
            return true;
        }else{
            return false;
        }
    }
    
    private static boolean syarat5(double a,double b,double c){
        if (Double.max(a, b) == a){
            if (Double.max(a, c) == a) {
                if (Math.pow(a, 2) == (Math.pow(b, 2) + Math.pow(c, 2))) {
                    return true;
                }
            }
        } if(Double.max(b, a) == b){
            if (Double.max(b, c) == b) {
                if (Math.pow(b, 2) == (Math.pow(a, 2) + Math.pow(c, 2))) {
                    return true;
                }
            }
        } if(Double.max(c, a) == c){
            if (Double.max(c, b) == c) {
                if (Math.pow(c, 2) == (Math.pow(a, 2) + Math.pow(b, 2))) {
                    return true;
                }
            }
        }
        return false;
    }
}
