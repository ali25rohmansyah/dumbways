fun main(){
    cetak_gambar(5)
}

fun cetak_gambar( value: Int) {
    when{
        value % 2 == 1 -> {
            for (baris in 1..value){
                for (kolom in 1..value){
                    if (baris % 2 == 1 ){
                        val tengah = value / 2
                        if (kolom != tengah + 1) {
                            print("* ")
                        }else{
                            print("= ")
                        }
                    }else {
                        if (kolom % 2 == 1  ){
                            print("* ")
                        }else{
                            print("= ")
                        }
                    }
                }
                print("\n")
            }
        }
        else -> {
            println("Parameter harus merupakan bilangan ganjil")
        }
    }
}