function Calcular() {
  window.alert("Deu Certo")
    var MeAlmofada = document.getElementById("Mealmofada")
    var MedAlmofada = MeAlmofada.value.replace(",", ".") 
    var vatecido = document.getElementById("Vtecido")
    var Vtecido = vatecido.options[vatecido.selectedIndex].value;
    var ValorT = parseFloat(Vtecido)
    var p = document.getElementById("p")

    var re = ((((MedAlmofada / 100) + 0.05) * ValorT)) + 72
    p.innerHTML = "R$" + " " + re.toLocaleString("pt-br", { MaximunFractionDigits: 2 });
    
    //Enchimento Fibra :50
    //Mao de obra :22
    //A soma dos de cima
}