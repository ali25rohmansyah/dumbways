fun main(){
    concatWord("Lesley", "karrie")
}

fun concatWord (kataPertama : String, kataKedua: String){
    if(kataPertama.length != kataKedua.length){
        println("panjang kata tidak sama")
    }else{
        val size = kataPertama.length - 1
        var concat = ""
        for (i in 0..size){
            concat += kataPertama[i]
            concat +=kataKedua[i]
        }
        println(concat)
    }
}