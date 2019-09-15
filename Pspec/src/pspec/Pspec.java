/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pspec;
import java.util.Scanner;
/**
 *
 * @author Aldi Pranadia
 */
public class Pspec {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int id_barang;
        String nama_barang;
        long harga_barang;
        int stock_barang;
        String desc_barang;
        int berat_barang;
        boolean running = true;
        String jawab;
        int ans;
        Scanner scan = new Scanner(System.in);
        
        id_barang = 007;
        nama_barang = "Kursi";
        harga_barang = 400000;
        stock_barang = 5;
        desc_barang ="Mudah dipasang hanya dengan klik dan tanpa peralatan."
                + "Nyaman untuk diduduki berkat dudukan berbentuk mangkuk dan sandaran punggung berbentuk bulat."
                + "Terbuat dari kayu yang terbarukan dan plastik daur ulang. Perkenalan yang menyenangkan dalam segala cara!";
        berat_barang = 6;
        
        System.out.println("===== DATA BARANG =====");
        System.out.println("ID Barang : "+id_barang);
        System.out.println("Nama Barang :"+nama_barang);
        System.out.println("Harga : RP "+harga_barang);
        System.out.println("Stok : "+stock_barang+" Unit");
        System.out.println("Deskripsi : "+desc_barang);
        System.out.println("Berat : "+berat_barang+" KG");
        System.out.println("");
        
        while(running){
            System.out.println("Apakah Anda ingin Mengedit Data ?");
            System.out.print("[Y/T] > ");
            jawab = scan.next();
            System.out.println("");
            
            if( jawab.equalsIgnoreCase("T") || jawab.equalsIgnoreCase("t") ){
                running = false;
            }else{
                System.out.println("===== DATA BARANG =====");
                System.out.println("1. ID Barang");
                System.out.println("2. Nama Barang");
                System.out.println("3. Harga");
                System.out.println("4. Stok");
                System.out.println("5. Deskripsi");
                System.out.println("6. Berat");
                System.out.print("Pilih Data Barang : ");
                ans = scan.nextInt();
                
                switch(ans){
                    case 1 :
                        System.out.print("Masukan ID Barang : ");
                        id_barang = scan.nextInt();
                        break;
                    case 2 :
                        System.out.print("Masukan Nama Barang : ");
                        nama_barang = scan.next();
                        break;
                    case 3 :
                        System.out.print("Masukan Harga Barang : ");
                        harga_barang = scan.nextInt();
                        break;
                    case 4 :
                        System.out.print("Masukan Stok Barang : ");
                        stock_barang = scan.nextInt();
                        break;
                    case 5 :
                        System.out.print("Masukan Deskripsi Barang : ");
                        desc_barang = scan.next();
                        break;
                    case 6 :
                        System.out.print("Masukan Berat Barang : ");
                        berat_barang = scan.nextInt();
                        break;
                }
                System.out.println("Data Terupdate!");
                System.out.println("");
            }
            
        }
        System.out.println("===== DATA BARANG =====");
        System.out.println("ID Barang : "+id_barang);
        System.out.println("Nama Barang :"+nama_barang);
        System.out.println("Harga : RP "+harga_barang);
        System.out.println("Stok : "+stock_barang+" Unit");
        System.out.println("Deskripsi : "+desc_barang);
        System.out.println("Berat : "+berat_barang+" KG");
    }
    
}
