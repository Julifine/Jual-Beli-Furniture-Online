/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tugas4_kelompok5;

import java.util.Scanner;

/**
 *
 * @author User
 */
public class Soal_2_Switch {
    public static void main (String args[]){
        
        int base, additional, total;
        String st,dp;
        Scanner ipt = new Scanner (System.in);
        
        System.out.println("SOAL - 2");
        System.out.println("");
        System.out.print("Banyak komputer: ");
        int comp_amount = ipt.nextInt();
        
        if (comp_amount < 1 ) {
            System.out.println("Inputan Salah!");
        } else{
            switch (comp_amount){
                case 1: case 2:
                    System.out.print("Ingin menggunakan Drop-Off dan Pick-Up?[Y/N]: ");
                    dp = ipt.next();
                    if (dp.equals("Y") || dp.equals("y")) {
                        base = 50;
                        additional = 0;
                        total = base + additional;
                        total = total / 2;
                        System.out.println("Total pembayaran: $"+total);
                    } else if (dp.equals("N") || dp.equals("n")) {
                        base = 50;
                        additional = 0;
                        total = base + additional;
                        System.out.println("Total pembayaran: $"+total);
                    } else{
                        System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                    }
                    break;
                case 3: case 4: case 5: case 6: case 7: case 8: case 9: case 10:
                    System.out.print("Ingin dikerjakan di luar jam kerja?[Y/N]: ");
                    st = ipt.next();
                    if (st.equals("Y") || st.equals("y")) {
                        System.out.print("Ingin menggunakan Drop-Off dan Pick-Up?[Y/N]: ");
                        dp = ipt.next();
                        if (dp.equals("Y") || dp.equals("y")) {
                            base = 200;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        } else if (dp.equals("N") || dp.equals("n")){
                            base = 200;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                        }
                    } else if (st.equals("N") || st.equals("n")) {
                        System.out.print("Ingin menggunakan Drop-Off dan Pick-Up?[Y/N]: ");
                        dp = ipt.next();
                        if (dp.equals("Y") || dp.equals("y")) {
                            base = 100;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        } else if (dp.equals("N") || dp.equals("n")){
                            base = 100;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                        }
                    } else {
                        System.out.println("Inputan Salah!");
                    }
                    break;
                default:
                    System.out.print("Ingin dikerjakan di luar jam kerja?[Y/N]: ");
                    st = ipt.next();
                    if (st.equals("Y") || st.equals("y")) {
                        System.out.print("Ingin menggunakan Drop-Off dan Pick-Up?[Y/N]: ");
                        dp = ipt.next();
                        if (dp.equals("Y") || dp.equals("y")) {
                            base = 1000;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        } else if (dp.equals("N") || dp.equals("n")){
                            base = 1000;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                        }
                    } else if (st.equals("N") || st.equals("n")) {
                        System.out.print("Ingin menggunakan Drop-Off dan Pick-Up?[Y/N]: ");
                        dp = ipt.next();
                        if (dp.equals("Y") || dp.equals("y")) {
                            base = 500;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        } else if (dp.equals("N") || dp.equals("n")){
                            base = 500;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                        }
                    } else {
                        System.out.println("Inputan Salah!");
                    }
                    break;
            }
        }
    }
}
