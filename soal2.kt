fun main(){
    gabungKata("Lesley", "karrie")
}

fun gabungKata (kataPertama : String, kataKedua: String){
    if(kataPertama.length != kataKedua.length){
        println("panjang kata tidak sama")
    }else{
        val ukuran = kataPertama.length - 1
        var concat = ""
        for (i in 0..ukuran){
            concat += kataPertama[i]
            concat +=kataKedua[i]
        }
        println(concat)
    }
}