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
public class Soal_2 {
    public static void main (String args[]){
        Scanner ipt = new Scanner (System.in);
        System.out.println("SOAL - 2");
        System.out.println("");
        System.out.print("Banyak komputer: ");
        int comp_amount = ipt.nextInt();
        
        if (comp_amount < 1) {
            System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
        } else{
            int base, additional, total;
            String st,dp;
            System.out.print("Ingin menggunakan Drop-Off dan Pick-Up?[Y/N]: ");
            dp = ipt.next();

            if (comp_amount > 2) {
                System.out.print("Ingin dikerjakan di luar jam kerja?[Y/N]: ");
                st = ipt.next();
                System.out.println("");
                if (st.equals("Y") || st.equals("y")) {
                    if (dp.equals("Y") || dp.equals("y")) {
                        if (comp_amount >=3 && comp_amount <= 10) {
                            base = 200;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            base = 1000;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        }
                    } else if (dp.equals("N") || dp.equals("n")){
                        if (comp_amount >=3 && comp_amount <= 10) {
                            base = 200;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            base = 1000;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }
                    }else{
                        System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                    }
                } else if (st.equals("N") || st.equals("n")) {
                    if (dp.equals("Y") || dp.equals("y")) {
                        if (comp_amount >=3 && comp_amount <= 10) {
                            base = 100;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            base = 500;
                            additional = 10*comp_amount;
                            total = base + additional;
                            total = total / 2;
                            System.out.println("Total pembayaran: $"+total);
                        }
                    } else if (dp.equals("N") || dp.equals("n")){
                        if (comp_amount >=3 && comp_amount <= 10) {
                            base = 100;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }else{
                            base = 500;
                            additional = 10*comp_amount;
                            total = base + additional;
                            System.out.println("Total pembayaran: $"+total);
                        }
                    }else{
                        System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                    }
                }else{
                    System.out.println("Inputan Salah! Inputan hanya berupa Y atau N");
                }
            } else {
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
            }
        }
    }
}
