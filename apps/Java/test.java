public class test {

    // pendevinisian variable dengan memberika akses modifier protected agar
    // data nama dan merek hanya dapat diakses oleh class turunan saja
    protected String nama;
    protected String merek;

    String nama(String nm) {

        nama = nm;

        return nama;

    }

    String merek(String mrk) {

        merek = mrk;

        return merek;

    }

}
