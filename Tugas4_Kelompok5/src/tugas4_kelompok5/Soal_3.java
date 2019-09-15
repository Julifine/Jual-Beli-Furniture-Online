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
public class Soal_3 {
    
    private String account_number;
    private int amount_of_sale;

    public Soal_3(String account_number, int amount_of_sale) {
        this.account_number = account_number;
        this.amount_of_sale = amount_of_sale;
    }
    
    public void addNumber(Soal_3 c){
        this.account_number = c.account_number;
        this.amount_of_sale = c.getAmount_of_sale();
    }

    public String getAccount_number() {
        return account_number;
    }

    public void setAccount_number(String account_number) {
        this.account_number = account_number;
    }

    public int getAmount_of_sale() {
        return amount_of_sale;
    }

    public void setAmount_of_sale(int amount_of_sale) {
        this.amount_of_sale = amount_of_sale;
    }
    
    public static void main(String args[]){
        Scanner ipt = new Scanner (System.in);
        System.out.println("SOAL - 3");
        System.out.println("");
        
        Soal_3[] ACCOUNTS;
        String id;
        
        Soal_3 account1 = new Soal_3("1301174007", 1000000000);
        Soal_3 account2 = new Soal_3("1301174126", 200000000);
        Soal_3 account3 = new Soal_3("1301174009", 50000000);
        Soal_3 account4 = new Soal_3("1301174457", 10000000);
        Soal_3 account5 = new Soal_3("1301174218", 1220000000);
        
        ACCOUNTS = new Soal_3[5];
        
        ACCOUNTS[0] = account1;
        ACCOUNTS[1] = account2;
        ACCOUNTS[2] = account3;
        ACCOUNTS[3] = account4;
        ACCOUNTS[4] = account5;
        
        System.out.print("Nomor Akun: ");
        id = ipt.next();
                
        boolean status;
        
        for (int i = 0; i < ACCOUNTS.length; i++) {
            if (id.equals(ACCOUNTS[i].account_number)) {
                System.out.println("Status: Valid");
                System.out.println("Amount of sale dari "+id+" sebesar "+ACCOUNTS[i].getAmount_of_sale());
                break;
            }
            
            else if (i==ACCOUNTS.length-1 && !id.equals(ACCOUNTS[i].account_number)) {
                System.out.println("Status: Tidak Valid");
                System.out.println("Nomor akun tidak ditemukan!");
            }
        }
        
    }
}
