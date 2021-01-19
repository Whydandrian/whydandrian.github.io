public class pensil extends test {
    String harga;

    String harga(String hrg) {
        harga = hrg;

        return harga;

    }

    public static void main(String[] args) {

        pensil pl = new pensil();

        pl.nama = "Pensil";

        pl.merek = "Standart";

        pl.harga = "5000";

        System.out.println("Nama " + pl.nama);

        System.out.println("Merek " + pl.merek);

        System.out.println("Harga " + pl.harga);

    }

}