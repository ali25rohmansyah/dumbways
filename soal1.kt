fun main(){
    println(convertToHexa(1011001101))
}

val convertToHexa: (Int) -> String = {
    val binner: String = it.toString()
    val hexa = binner.toInt(2).toString(16)
    hexa
}

